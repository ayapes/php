<?php
require './vendor/autoload.php';

$cli = new GuzzleHttp\Client([
  'base_uri' => 'https://www.jma.go.jp'
]);
$res = $cli->get('/bosai/forecast/data/overview_forecast/130000.json');
$obj = json_decode($res->getBody());
print_r($obj);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $obj->targetArea;?>の天気予報</title>
</head>
<body>
    <div>
        <p><?php print $obj->publishingOffice; ?>発表</p>
        <p><?php print $obj->targetArea; ?>の天気予報</p>
        <p>報告日時：<?php print $obj->reportDatetime; ?></p>
        <p><?php print $obj->text; ?></p>
        <p><?php print $obj->{'headlineText'}; ?></p>
    </div>
</body>
</html>