<?php

// the title used for the page
$title = 'Librato Example';
$namespace = 'librato_test';

require_once 'phplib/Dashboard.php';

$librato_graphs = array(
    'name 01' => array(
            'type' => 'librato',
            'metric' => 909,
    ),
    'name 02' => array(
            'type' => 'librato',
            'metric' => 2771,
    ),
);

$librato_graphs2 = array(
    'name 03' => array(
            'type' => 'librato',
            'metric' => 897,
    ),
    'name 04' => array(
            'type' => 'librato',
            'metric' => 896,
    ),
    'name 05' => array(
            'type' => 'librato',
            'metric' => 1383,
    ),
);

$graphs = array(
    'Graphs 1' => $librato_graphs,
    'Graphs 2' => $librato_graphs2,
);

include 'phplib/template.php';
