<?php
if($_GET['id'])
{
try{
	echo $_GET['id'];
	// Call set_include_path() as needed to point to your client library.
	require_once 'google-api-php-client/src/Google_Client.php';
	require_once 'google-api-php-client/src/contrib/Google_YoutubeService.php';
	
	$DEVELOPER_KEY = 'AIzaSyAhkr8hbq6J0_4HD8ANO4DQqPoHmQFiFDY';
	
	$client = new Google_Client();
	$client->setDeveloperKey($DEVELOPER_KEY);
	
	$youtube = new Google_YoutubeService($client);
	
	$searchResponse = $youtube->videos->listVideos('id,part,',array('id' => 'iEDkQesGAsw','part' => 'snippet',));
	foreach($searchResponse['items'] as $result)
	{
		echo $result['snippet']['title'];
	}
	echo $searchResponse;
  } catch (Google_ServiceException $e) {
   echo htmlspecialchars($e->getMessage());
  } catch (Google_Exception $e) {
   echo htmlspecialchars($e->getMessage());
  }
}

?>