<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '5G');
error_reporting(E_ALL);
 
use \Magento\Framework\App\Bootstrap;
require realpath(__DIR__).'/../app/bootstrap.php';
$bootstrap = Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();
 
$sku='Pink watch';
$product = $objectManager->create('\Magento\Catalog\Model\ProductRepository')->get($sku);

$product_data=[
    'id'=>$product->getId(),
    'sku'=>$product->getSku(),
    'name'=>$product->getName(),
    'description'=>$product->getDescription()
];
$cfile = fopen('product_details.csv', 'w');
fputcsv($cfile,$product_data);
fclose($cfile);
echo "Your customscript created successfully!!";
 ?>

