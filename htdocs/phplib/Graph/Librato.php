<?php

class Graph_Librato {
    protected $time;
    protected $until_time;

    protected $metrics = array();

    public function __construct($time, $until=null) {
        $this->time = $time;
        $this->until_time = $until;
    }

    public function addMetric($graph_id) {
        $this->metrics[] = array(
            'graph_id' => $graph_id,
        );
    }

    public function getDashboardHTML($width = null, $height = null) {
        return '<div class="librato-metrics" data-instrument_id="' .
               intval($this->metrics[0]['graph_id']) .
               '"></div>';
    }

    public function timeToSeconds($time) {
        $units = array(
            'h' => 3600,
            'd' => 86400,
            'w' => 604800,
            'm' => 2592000,
            'y' => 31556926,
        );
        if(preg_match("/^(\d+)([a-z])/", strtolower($time), $m)) {
            $diff = ((int)$m[1]) * $units[$m[2]];
            return time() - $diff;
        } else if (preg_match("/^(\d){10}$/", $time)) {
            return $time;
        } else {
            return time();
        }
    }
}
