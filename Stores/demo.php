<?php

require_once 'autoload.php';

$p1 = new Product("mlqko", 2, 2);
$p3 = new Product("hlqb",1,1);
$p2 = new BundleProduct("meso",1);

$p2->addProduct($p3);
$p2->addProduct($p1);

$cl = new Client("pencho", 500);
$cl->addProductBasket($p1);
$cl->addProductBasket($p2);
$cl->addProductBasket($p3);

$cl2 = new BigClient("iana", 450);
$casa1 = new Cases("1");
$casa2 = new Cases("2");
$casa3 = new Cases("3");
$v = Store::getInstance("pikadili");
$v->addCases($casa1);
$v->addCases($casa2);
$v->addCases($casa3);
$client2 = new Client("iancho",0);
$client2->addProductBasket($p1);
$client2->addProductBasket($p2);

$v->makeKesh($client2, 0);
$v->makeKesh($cl, 1).PHP_EOL;
$v->makeReviziq().PHP_EOL;
//$v->makeReviziq();