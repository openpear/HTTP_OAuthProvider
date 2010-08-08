<?php
require_once('HTTP/OAuthProvider.php');
require_once('config.php');

$o = new HTTP_OAuthProvider();
try {
	$o->setGetConsumerHandler('getConsumer');
	$o->authenticate();
	echo "Auth OK!!!";
} catch(Exception $e) {
	header(sprintf('HTTP/1.0 %d', $e->getCode()));
	echo $e->getMessage();
}
echo "\n";
