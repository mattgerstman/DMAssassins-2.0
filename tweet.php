<?php
	
function tweet($statusMessage)

{
	$consumerKey    = 'CONSUMER KEY';
	$consumerSecret = 'CONSUMER SECRET';
	$oAuthToken     = 'O AUTH TOKEN';
	$oAuthSecret    = 'O AUTH SECRET';

	require_once('twitteroauth.php');

// twitteroauth.php points to OAuth.php
// all files are in the same dir
// create a new instance

	$tweet = new TwitterOAuth($consumerKey, $consumerSecret, $oAuthToken, $oAuthSecret);
	$tweet->post('statuses/update', array('status' => $statusMessage));
}

?>