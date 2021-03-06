<?php

// consumer

function fetchConsumer($consumer_key)
{
	$row = array(
		'id' => 1,
		'key' => 'testconsumer',
		'secret' => 'testpass',
		'publickey' => '-----BEGIN CERTIFICATE-----
MIIDijCCAvOgAwIBAgIJAOXBQLEpMB4rMA0GCSqGSIb3DQEBBQUAMIGLMQswCQYD
VQQGEwJKUDEOMAwGA1UECBMFVG9reW8xETAPBgNVBAcTCFNoaW5qdWt1MRAwDgYD
VQQKEwdleGFtcGxlMRAwDgYDVQQLEwdleGFtcGxlMRQwEgYDVQQDEwtleGFtcGxl
LmNvbTEfMB0GCSqGSIb3DQEJARYQcm9vdEBleGFtcGxlLmNvbTAeFw0wOTEwMTUw
ODMyNDdaFw0xOTEwMTMwODMyNDdaMIGLMQswCQYDVQQGEwJKUDEOMAwGA1UECBMF
VG9reW8xETAPBgNVBAcTCFNoaW5qdWt1MRAwDgYDVQQKEwdleGFtcGxlMRAwDgYD
VQQLEwdleGFtcGxlMRQwEgYDVQQDEwtleGFtcGxlLmNvbTEfMB0GCSqGSIb3DQEJ
ARYQcm9vdEBleGFtcGxlLmNvbTCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEA
orhSQotOymjP+lnDqRvrlYWKzd3M8vE82U7emeS9KQPtCBoy+fXP/kMEMxG/YU+c
NAS/2BLFGN48EPM0ZAQap384nx+TNZ6sGuCJa60go8yIWff72DZjSZI6otfPjC9S
NlxOnNLNAfGWAiaCcuBP1uJVhyrs1pu7SaEXBOP4pQ0CAwEAAaOB8zCB8DAdBgNV
HQ4EFgQU3mEIdWrvKu+yuwIJD2WczQLI3j4wgcAGA1UdIwSBuDCBtYAU3mEIdWrv
Ku+yuwIJD2WczQLI3j6hgZGkgY4wgYsxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIEwVU
b2t5bzERMA8GA1UEBxMIU2hpbmp1a3UxEDAOBgNVBAoTB2V4YW1wbGUxEDAOBgNV
BAsTB2V4YW1wbGUxFDASBgNVBAMTC2V4YW1wbGUuY29tMR8wHQYJKoZIhvcNAQkB
FhByb290QGV4YW1wbGUuY29tggkA5cFAsSkwHiswDAYDVR0TBAUwAwEB/zANBgkq
hkiG9w0BAQUFAAOBgQAO2ZKL0/tPhpVfbOoSXl+tlmTyyb8w7mCnjYYWwcwUAf1N
ylgYxKPrKfamjZKpeRY487VbTee1jfud709oIK5l9ghjz64kPRn/AYHTRwRkBKbb
wuBWH4L6Rw3ml0ODXW64bdTx/QsAv5M1SyCp/nl8R27dz3MX2D1Ov2o4ipTlZw==
-----END CERTIFICATE-----'
	);
	if ($consumer_key==$row['key']) {
		$consumer = new HTTP_OAuthProvider_Consumer($row);
		return $consumer;
	}
}


// store

$mem_options = array(
	'host' => '127.0.0.1',
	'port' => 11211
);
try {
	$store = HTTP_OAuthProvider_Store::factory('CacheLite');
//	$store = HTTP_OAuthProvider_Store::factory('Memcached', $mem_options);
//	$store = HTTP_OAuthProvider_Store::factory('Memcache', $mem_options);
} catch(HTTP_OAuthProvider_Store_Exception $e) {
	echo "StoreException<br />\n";
	echo $e->getMessage();
	exit();
}


// user

$user_id = 12345;
