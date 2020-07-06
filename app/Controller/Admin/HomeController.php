<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller\Admin;

use App\Controller\AbstractController;
use App\Model\Post;
use App\Service\BaiduAnalysisBusiness;
use Hyperf\HttpServer\Contract\RequestInterface;
use Xxh\FileStore\Service\FileStoreAbstract;
use Hyperf\Di\Annotation\Inject;

class HomeController extends AbstractController
{

    /**
     * @Inject
     * @var BaiduAnalysisBusiness
     */
    private $baiduAnalysis;


    /**
     * @Inject
     * @var FileStoreAbstract
     */
    private $file;

    public function getAnalysisCount()
    {
        $start = $date = date('Ymd', strtotime('-7 days'));
        $end = date('Ymd',strtotime('now'));

        $this->baiduAnalysis->setAuth();
        $res = $this->baiduAnalysis->setSiteId('15092117')
            ->setGran('day')
            ->setStartDate($start)->setEndDate($end)
            ->setMethod('trend/time/a')->setMetrics('ip_count,visit_count,pv_count')->send();
        $res =  json_decode($res);
        $data = $res->body->data[0];
        $sum = $this->getSumArr($data);

        return $this->ok([
             'ip' => $this->formatData(
                $sum['ip']
             ),
             'uv' => $this->formatData(
                 $sum['uv']
             ),
             'pv' => $this->formatData(
                $sum['pv']
             )
        ]);
    }

    protected function getSumArr($data)
    {

        $sum = [];
         foreach ($data->result->items[1] as $s) {
            if(! is_numeric($s[0]))
             break;
             $sum['pv'][] = $s[0];
             $sum['uv'][] = $s[1];
             $sum['ip'][] = $s[2];
        }

        return $sum;
    }


    protected function formatData(array $sum)
    {
        if( count($sum) >= 7)
        return array_reverse($sum);

        return array_reverse(
            array_merge(
                $sum,
                array_fill(count($sum), 7 - count($sum),0)
            )
        );
    }


    public function getPostSum()
    {
        return $this->ok([
          'post_count' => Post::count(),
          'good_post' => Post::WhereNotNull('min_img')->count(),
          'bad_post' => Post::WhereNull('min_img')->count(),
          'upload_post' => Post::Where('source_url','')->count()
        ]);
    }



    public function uploadFile()
    {
        return $this->ok(
            public_upload_url(
                $this->file->store(
                    $this->request->file('file')
                )
            )
        );
    }

}
