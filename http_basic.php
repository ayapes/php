<?php
require './vendor/autoload.php';

$cli = new GuzzleHttp\Client([
  'base_url' => 'https://wings.msn.to/',
]);
$res = $cli->request('get', '/tmp/sample.txt');
print $res->getBody();