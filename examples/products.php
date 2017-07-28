<?php

require_once(__DIR__.'/../vendor/autoload.php');

use Bling\BlingSDK;

$apiBling = new BlingSDK( " API KEY AQUI " );

$products = [];

for($p=1;$p<=20;$p++){
    $data = json_decode($apiBling->getProducts($p,'json'));
    foreach($data->retorno->produtos as $item){
        $products[] = $item->produto;
    }
}

$index = 0;
foreach($products as $product){
    $index++;
    echo $index.' - '.$product->descricao."\n";
}
