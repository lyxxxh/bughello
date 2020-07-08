<?php

namespace App\Service;

use Hyperf\Paginator\UrlWindow;

class Paginate
{

    public function elements($paginator): array
    {

        $window = UrlWindow::make($paginator);
        return array_filter([
            $window['first'],
            is_array($window['slider']) ? '...' : null,
            $window['slider'],
            is_array($window['last']) ? '...' : null,
            $window['last'],
        ]);
    }

}