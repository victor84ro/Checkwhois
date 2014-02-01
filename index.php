<?php
if (isset($_GET['domain']))
{
	include('whois2/whois.php');
	$respone = "ERROR";
	if(ValidateIP($_GET['domain'])) {
			$response = LookupIP($_GET['domain']);

	}
	elseif(ValidateDomain($_GET['domain'])) {

			$response = LookupDomain($_GET['domain']);	
		
	}
	
	echo $response;
}
else
{
	echo "SERVICE IS UP AND RUNNING. \nPROVIDE A DOMAIN TO BE CHECKED";
}
?>