<?php

namespace App\Service;

/**
** 功能详细见: https://tongji.baidu.com/api/manual/Chapter1/getData.html
*/
trait BaiduAnalysisGetData
{


    protected $options = [];
    public function setSiteId($site_id)
    {
        $this->options['site_id'] = $site_id;
        return $this;
    }

    public function setMethod($method)
    {
        $this->options['method'] = $method;
        return $this;
    }

    public function setGran($gran)
    {
        $this->options['gran'] = $gran;
        return $this;
    }

    public function setStartDate($start_date)
    {
        $this->options['start_date'] = $start_date;
        return $this;
    }

    public function setEndDate($end_date)
    {
        $this->options['end_date'] = $end_date;
        return $this;
    }


    public function setStartDate2($start_date2)
    {
        $this->options['start_date2'] = $start_date2;
        return $this;
    }


    public function setEndDate2($end_date2)
    {
        $this->options['end_date2'] = $end_date2;
        return $this;
    }

    public function setMetrics(string $metrics)
    {
        $this->options['metrics'] = $metrics;
        return $this;
    }

    //order
    public function setOrder($order)
    {
        $this->options['order'] = $order;
        return $this;
    }


    public function setStartIndex($start_index)
    {
        $this->options['start_index'] = $start_index;
        return $this;
    }


    public function setmaxResults($max_results)
    {
        $this->options['max_results'] = $max_results;
        return $this;
    }


}