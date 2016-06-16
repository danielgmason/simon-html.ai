<?php

// Create a Feed

	$service_url = "https://api.mention.net/api/accounts/689221_1pfmjrpk7oys0gg8480g40skwcwo8kc8s8cggkoo0woscggkwg/alerts";
	$curl = curl_init($service_url);

	$curl_post_data = array(
    'name' => 'Test Alert',
    'query' => {
    	'type' => 'agent@example.com',
    	'included_keywords' => 'Sabbatical' },
    'languages' => 'en',
    'sources' => 'web'
	);

	curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curlHandle, CURLOPT_POST, true);
	curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $curl_post_data);
	$curl_response = curl_exec($curl);
	if ($curl_response === false) {
		$info = curl_getinfo($curl);
		curl_close($curl);
		die('error occured during curl exec. Additioanl info: ' . var_export($info));
	}

	curl_close($curl);
	$decoded = json_decode($curl_response);
	if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
    die('error occured: ' . $decoded->response->errormessage);
	}
	echo 'response ok!';
	var_export($decoded->response);

    ?>

