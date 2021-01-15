<?php
require_once "check.php";

function getChecks() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL,"https://healthchecks.io/api/v1/checks/");
    $headers = [
        'X-Api-Key: API_KEY'
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $result=curl_exec($ch);
    curl_close($ch);
    $output = json_decode($result, true);

    $checks = array();

    for ($i=0; $i < count($output['checks']); $i++) {
        $up = trim($output['checks'][$i]['status']) == "up";
        $checks[] = new check($output['checks'][$i]['name'], $up, $output['checks'][$i]['last_ping']);
    }

    return $checks;
}
