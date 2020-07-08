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

use App\Jobs\KunYunCollectionJob;
use HyperfTest\HttpTestCase;


class KunYunTest extends HttpTestCase
{
    public function testExample()
    {

        $url = 'http://www.kuyunzy1.com/detail/?42892.html';
        $j = new KunYunCollectionJob($url);
        $j->handle();
    }
}
