<?php

	$curlHandle = curl_init();
	$url = "https://api.mention.net/api/accounts/689221_1pfmjrpk7oys0gg8480g40skwcwo8kc8s8cggkoo0woscggkwg/alerts"; \

	curl_setopt($curlHandle, CURLOPT_URL, $url);

	$postValues = array( "name" => "Daniel Mason", "email" => "daniel@sabbatical.io", "password" => "midas!1434", "language_code" => "en", "client" => "");
	

	$curlHandle = curl_init();
	curl_setopt($curlHandle, CURLOPT_URL, $url);
	curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json'));
	curl_setopt($curlHandle, CURLOPT_POST, true);
	curl_setopt($curlHandle, CURLOPT_POSTFIELDS, json_encode($postValues));

	$headers = array();
	$headers[] = 'Accept: application/json';
	$headers[] = 'Accept-Language: en';
	$headers[] = 'Authorization: Bearer ZDQ5MTRlODNkNTUzOTc5OWU2N2E0OTVmODUzMTNjMTU4OTdkM2Y1MjA3M2EwZDViZDcxODVjMmU5OTM0ZjE4ZA';
	$headers[] = 'Accept-Version : 1.8';

	$curl_post_data = array(
        'name' => 'Test Alert',
        'query' => {
        	'type' => 'agent@example.com',
        	'included_keywords' => 'Sabbatical' 
        },
        'languages' => ['en'],
        'sources' => ['web']
	);

	curl_setopt($curlHandle, CURLOPT_HTTPHEADER, $headers);

	$server_output = curl_exec ($curlHandle);

	curl_close ($curlHandle);

	print  $server_output ;

    ?>

