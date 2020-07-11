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

namespace HyperfTest\Cases;

use App\Jobs\ImgDownloadJob;
use App\Jobs\KunYunCollectionJob;
use App\Jobs\VideoPicDownloadJob;
use HyperfTest\HttpTestCase;


class KunYunTest extends HttpTestCase
{
    public function testExample()
    {

        $url = 'http://www.kuyunzy1.com/detail/?42892.html';
        $j = new KunYunCollectionJob($url);
 //       $j->handle();
    }

    public function testDownImg()
    {
        $j = new VideoPicDownloadJob(1);
        $j->handle();
    }
}
