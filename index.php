<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = 'nyP95qnzOH+QlC3ySFUUUOCNNsTO1Vz5Wv6A2NTLX7S/jopiGQev8HwgHv5F4z+qdiqfzyZg4O6W7lUfRBRlILRsiWKD771dIoT55cVLIY038KT0BOzqKbhlTNSwuJU7N8jJJSRnzExh4VLlzdQp6QdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = '547a47f8e0b34ac2c66b0bdb4554dcb3';//sesuaikan

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
$userId 	= $client->parseEvents()[0]['source']['userId'];
$replyToken = $client->parseEvents()[0]['replyToken'];
$timestamp	= $client->parseEvents()[0]['timestamp'];
$message 	= $client->parseEvents()[0]['message'];
$messageid 	= $client->parseEvents()[0]['message']['id'];
$profil = $client->profil($userId);
$pesan_datang = $message['text'];

//pesan bergambar
if($message['type']=='text')
{
	if($pesan_datang=='Hi'){
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Halo [raja brawijaya apa?] [rangkaian apa saja?] [menu]'
									)
							)
						);
				
	}

	if($pesan_datang=='raja brawijaya apa?'){
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Raja Brawijaya adalah singkatan dari Rangkaian Acara Jelajah Almamater Universitas Brawijaya yang bertujuan memfalitasi mahasiswa baru Universitas Brawijaya untuk mengetahui lebih dalam tentang kehidupan kempus'
									)
							)
						);
				
	}

	if($pesan_datang=='rangkaian apa saja?'){
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => 'Raja Brawijaya meliputi rangkaian PKKMU, PBPK dan OH'
									)
							)
						);
				
	}

	
	


}


 
$result =  json_encode($balas);
//$result = ob_get_clean();

file_put_contents('./balasan.json',$result);


$client->replyMessage($balas);

?>
