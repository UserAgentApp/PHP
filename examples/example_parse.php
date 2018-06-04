<?php

require "autoload.php";

use UserAgentApp\API\Parse;

# set key for demo
define('UAAPP_PRIV_KEY', 'YOUR_KEY_HERE');

# set to true to ignore TLS errors (use only for testing)
define('UAAPP_IGNORE_CA', true);

# UA for which to make a parse request
$ua = 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36';

# Create a new instance of the binding
# This is not required with each call, only the first
$Parse = new Parse(UAAPP_PRIV_KEY);

# set the domain for the query
$Parse->setPayload($ua);

# Perform the query and store the resulting object 
$Result = $Parse->run();

# check for successful execution
if (!$Result->isSuccessful()) {
	# query failed, print the reason
	echo 'Lookup failed (' . $Result->getStatusCode() . '): ' . $Result->getStatusMessage();
} else {
	# get the result of the successful query as an array (default) 
	$dataArray = $Result->getDataArray();
	
	var_dump($dataArray);
}