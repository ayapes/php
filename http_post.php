<?php
require './vendor/autoload.php';

$cli = new GuzzleHttp\Client([
  'base_uri' => 'https://wings.msn.to/'
]);
$res = $cli->post('/tmp/post.php' , [
    'form_params' => [
        'name' => 'ささきしんのすけ'
    ]
]);
print $res->getBody();