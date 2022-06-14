<?php declare( strict_types = 1 );

require_once 'common.php';

$data = (object) [
	'method' => $_SERVER['REQUEST_METHOD'],
	'post' => $_POST,
	'get' => $_GET,
	'request' => $_REQUEST,
	'files' => $_FILES,
	'cookie' => $_COOKIE,
	'input' => file_get_contents('php://input'),
	'headers' => getallheaders()
];

$date = date('Y-m-d_H-i-s.') . explode('.', strval(microtime(true)))[1];

$filename = $date . '_' . substr(hash('sha512', serialize($data) . $date), 0, 7) . '.log';

$path = $dir . $filename;

if(!is_dir($dir)) mkdir($dir);

file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));

echo 'OK';