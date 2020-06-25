<?php
/*
copyright @ medantechno.com
2017

*/

require_once('./line_class.php');

$channelAccessToken = 'nyP95qnzOH+QlC3ySFUUUOCNNsTO1Vz5Wv6A2NTLX7S/jopiGQev8HwgHv5F4z+qdiqfzyZg4O6W7lUfRBRlILRsiWKD771dIoT55cVLIY038KT0BOzqKbhlTNSwuJU7N8jJJSRnzExh4VLlzdQp6QdB04t89/1O/w1cDnyilFU='; //sesuaikan 
$channelSecret = '6f227f3d0d4fffec9f0a89b9b2848f1b';//sesuaikan

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

	if($pesan_datang=='menu'){
		
		
		$balas = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array (
									'type' => 'flex',
									'altText' => 'Flex Message',
									'contents' => 
									array (
									  'type' => 'carousel',
									  'contents' => 
									  array (
										0 => 
										array (
										  'type' => 'bubble',
										  'hero' => 
										  array (
											'type' => 'image',
											'url' => 'https://i.ibb.co/D5nN3d2/OH.jpg',
											'size' => 'full',
											'aspectRatio' => '1:1',
											'aspectMode' => 'cover',
											'action' => 
											array (
											  'type' => 'uri',
											  'label' => 'Action',
											  'uri' => 'https://linecorp.com/',
											),
										  ),
										  'body' => 
										  array (
											'type' => 'box',
											'layout' => 'vertical',
											'spacing' => 'md',
											'contents' => 
											array (
											  0 => 
											  array (
												'type' => 'text',
												'text' => 'OPEN HOUSE',
												'size' => 'xxl',
												'align' => 'center',
												'gravity' => 'center',
												'weight' => 'bold',
												'wrap' => true,
											  ),
											  1 => 
											  array (
												'type' => 'box',
												'layout' => 'baseline',
												'margin' => 'md',
												'contents' => 
												array (
												  0 => 
												  array (
													'type' => 'icon',
													'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png',
													'size' => 'sm',
												  ),
												  1 => 
												  array (
													'type' => 'icon',
													'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png',
													'size' => 'sm',
												  ),
												  2 => 
												  array (
													'type' => 'icon',
													'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png',
													'size' => 'sm',
												  ),
												  3 => 
												  array (
													'type' => 'text',
													'text' => 'rangkaian 3/3',
													'flex' => 0,
													'margin' => 'md',
													'size' => 'sm',
													'color' => '#999999',
												  ),
												),
											  ),
											  2 => 
											  array (
												'type' => 'box',
												'layout' => 'vertical',
												'spacing' => 'sm',
												'margin' => 'lg',
												'contents' => 
												array (
												  0 => 
												  array (
													'type' => 'box',
													'layout' => 'baseline',
													'spacing' => 'sm',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'text',
														'text' => 'Date',
														'flex' => 1,
														'size' => 'sm',
														'color' => '#AAAAAA',
													  ),
													  1 => 
													  array (
														'type' => 'text',
														'text' => 'Monday 25, 9:00PM',
														'flex' => 4,
														'size' => 'sm',
														'color' => '#666666',
														'wrap' => true,
													  ),
													),
												  ),
												  1 => 
												  array (
													'type' => 'box',
													'layout' => 'baseline',
													'spacing' => 'sm',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'text',
														'text' => 'Place',
														'flex' => 1,
														'size' => 'sm',
														'color' => '#AAAAAA',
													  ),
													  1 => 
													  array (
														'type' => 'text',
														'text' => 'GEDUNG x',
														'flex' => 4,
														'size' => 'sm',
														'color' => '#666666',
														'wrap' => true,
													  ),
													),
												  ),
												  2 => 
												  array (
													'type' => 'box',
													'layout' => 'baseline',
													'spacing' => 'sm',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'text',
														'text' => 'absen',
														'flex' => 1,
														'size' => 'sm',
														'color' => '#AAAAAA',
													  ),
													  1 => 
													  array (
														'type' => 'text',
														'text' => 'Cluster 1-2',
														'flex' => 4,
														'size' => 'sm',
														'color' => '#666666',
														'wrap' => true,
													  ),
													),
												  ),
												  3 => 
												  array (
													'type' => 'box',
													'layout' => 'vertical',
													'margin' => 'xxl',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'spacer',
													  ),
													  1 => 
													  array (
														'type' => 'image',
														'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/linecorp_code_withborder.png',
														'size' => 'md',
														'aspectMode' => 'cover',
													  ),
													  2 => 
													  array (
														'type' => 'text',
														'text' => 'scan untuk absen',
														'margin' => 'xs',
														'size' => 'xs',
														'align' => 'center',
														'color' => '#AAAAAA',
														'wrap' => true,
													  ),
													),
												  ),
												),
											  ),
											),
										  ),
										),
										1 => 
										array (
										  'type' => 'bubble',
										  'hero' => 
										  array (
											'type' => 'image',
											'url' => 'https://i.ibb.co/kMLyzkv/PBBK.jpg',
											'size' => 'full',
											'aspectRatio' => '1:1',
											'aspectMode' => 'cover',
											'action' => 
											array (
											  'type' => 'uri',
											  'label' => 'Action',
											  'uri' => 'https://linecorp.com/',
											),
										  ),
										  'body' => 
										  array (
											'type' => 'box',
											'layout' => 'vertical',
											'spacing' => 'md',
											'contents' => 
											array (
											  0 => 
											  array (
												'type' => 'text',
												'text' => 'PEMBINAAN BUDI PEKERTI DAN KEPEMIMPINAN',
												'size' => 'md',
												'align' => 'center',
												'gravity' => 'center',
												'weight' => 'bold',
												'wrap' => true,
											  ),
											  1 => 
											  array (
												'type' => 'box',
												'layout' => 'baseline',
												'margin' => 'md',
												'contents' => 
												array (
												  0 => 
												  array (
													'type' => 'icon',
													'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png',
													'size' => 'sm',
												  ),
												  1 => 
												  array (
													'type' => 'icon',
													'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png',
													'size' => 'sm',
												  ),
												  2 => 
												  array (
													'type' => 'icon',
													'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png',
													'size' => 'sm',
												  ),
												  3 => 
												  array (
													'type' => 'text',
													'text' => 'Rangkaian 2/3',
													'flex' => 0,
													'margin' => 'md',
													'size' => 'sm',
													'color' => '#999999',
												  ),
												),
											  ),
											  2 => 
											  array (
												'type' => 'box',
												'layout' => 'vertical',
												'spacing' => 'sm',
												'margin' => 'lg',
												'contents' => 
												array (
												  0 => 
												  array (
													'type' => 'box',
													'layout' => 'baseline',
													'spacing' => 'sm',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'text',
														'text' => 'Date',
														'flex' => 1,
														'size' => 'sm',
														'color' => '#AAAAAA',
													  ),
													  1 => 
													  array (
														'type' => 'text',
														'text' => 'Monday 25, 9:00PM',
														'flex' => 4,
														'size' => 'sm',
														'color' => '#666666',
														'wrap' => true,
													  ),
													),
												  ),
												  1 => 
												  array (
													'type' => 'box',
													'layout' => 'baseline',
													'spacing' => 'sm',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'text',
														'text' => 'Place',
														'flex' => 1,
														'size' => 'sm',
														'color' => '#AAAAAA',
													  ),
													  1 => 
													  array (
														'type' => 'text',
														'text' => 'Gedung Y',
														'flex' => 4,
														'size' => 'sm',
														'color' => '#666666',
														'wrap' => true,
													  ),
													),
												  ),
												  2 => 
												  array (
													'type' => 'box',
													'layout' => 'baseline',
													'spacing' => 'sm',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'text',
														'text' => 'Absen',
														'flex' => 1,
														'size' => 'sm',
														'color' => '#AAAAAA',
													  ),
													  1 => 
													  array (
														'type' => 'text',
														'text' => 'Cluster 1-2',
														'flex' => 4,
														'size' => 'sm',
														'color' => '#666666',
														'wrap' => true,
													  ),
													),
												  ),
												  3 => 
												  array (
													'type' => 'box',
													'layout' => 'vertical',
													'margin' => 'xxl',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'spacer',
													  ),
													  1 => 
													  array (
														'type' => 'image',
														'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/linecorp_code_withborder.png',
														'size' => 'md',
														'aspectMode' => 'cover',
													  ),
													  2 => 
													  array (
														'type' => 'text',
														'text' => 'Scan untuk absen',
														'margin' => 'xs',
														'size' => 'xs',
														'align' => 'center',
														'color' => '#AAAAAA',
														'wrap' => true,
													  ),
													),
												  ),
												),
											  ),
											),
										  ),
										),
										2 => 
										array (
										  'type' => 'bubble',
										  'hero' => 
										  array (
											'type' => 'image',
											'url' => 'https://i.ibb.co/mNnBRD4/PKKMU.jpg',
											'size' => 'full',
											'aspectRatio' => '1:1',
											'aspectMode' => 'cover',
											'action' => 
											array (
											  'type' => 'uri',
											  'label' => 'Action',
											  'uri' => 'https://linecorp.com/',
											),
										  ),
										  'body' => 
										  array (
											'type' => 'box',
											'layout' => 'vertical',
											'spacing' => 'md',
											'contents' => 
											array (
											  0 => 
											  array (
												'type' => 'text',
												'text' => 'Raja Brawijaya',
												'size' => 'xxl',
												'align' => 'center',
												'gravity' => 'center',
												'weight' => 'bold',
												'wrap' => true,
											  ),
											  1 => 
											  array (
												'type' => 'box',
												'layout' => 'baseline',
												'margin' => 'md',
												'contents' => 
												array (
												  0 => 
												  array (
													'type' => 'icon',
													'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png',
													'size' => 'sm',
												  ),
												  1 => 
												  array (
													'type' => 'icon',
													'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png',
													'size' => 'sm',
												  ),
												  2 => 
												  array (
													'type' => 'icon',
													'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png',
													'size' => 'sm',
												  ),
												  3 => 
												  array (
													'type' => 'text',
													'text' => 'Rangkaian 1/3',
													'flex' => 0,
													'margin' => 'md',
													'size' => 'sm',
													'color' => '#999999',
												  ),
												),
											  ),
											  2 => 
											  array (
												'type' => 'box',
												'layout' => 'vertical',
												'spacing' => 'sm',
												'margin' => 'lg',
												'contents' => 
												array (
												  0 => 
												  array (
													'type' => 'box',
													'layout' => 'baseline',
													'spacing' => 'sm',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'text',
														'text' => 'Date',
														'flex' => 1,
														'size' => 'sm',
														'color' => '#AAAAAA',
													  ),
													  1 => 
													  array (
														'type' => 'text',
														'text' => 'Monday 25, 9:00PM',
														'flex' => 4,
														'size' => 'sm',
														'color' => '#666666',
														'wrap' => true,
													  ),
													),
												  ),
												  1 => 
												  array (
													'type' => 'box',
													'layout' => 'baseline',
													'spacing' => 'sm',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'text',
														'text' => 'Place',
														'flex' => 1,
														'size' => 'sm',
														'color' => '#AAAAAA',
													  ),
													  1 => 
													  array (
														'type' => 'text',
														'text' => 'Gedung Z',
														'flex' => 4,
														'size' => 'sm',
														'color' => '#666666',
														'wrap' => true,
													  ),
													),
												  ),
												  2 => 
												  array (
													'type' => 'box',
													'layout' => 'baseline',
													'spacing' => 'sm',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'text',
														'text' => 'Absen',
														'flex' => 1,
														'size' => 'sm',
														'color' => '#AAAAAA',
													  ),
													  1 => 
													  array (
														'type' => 'text',
														'text' => 'Cluster 1-2',
														'flex' => 4,
														'margin' => 'none',
														'size' => 'sm',
														'color' => '#666666',
														'wrap' => true,
													  ),
													),
												  ),
												  3 => 
												  array (
													'type' => 'box',
													'layout' => 'vertical',
													'margin' => 'xxl',
													'contents' => 
													array (
													  0 => 
													  array (
														'type' => 'spacer',
													  ),
													  1 => 
													  array (
														'type' => 'image',
														'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/linecorp_code_withborder.png',
														'margin' => 'none',
														'size' => 'md',
														'aspectMode' => 'cover',
													  ),
													  2 => 
													  array (
														'type' => 'text',
														'text' => 'Scan untuk absen',
														'margin' => 'xs',
														'size' => 'xs',
														'align' => 'center',
														'color' => '#AAAAAA',
														'wrap' => true,
													  ),
													),
												  ),
												),
											  ),
											),
										  ),
										),
										3 => 
										array (
										  'type' => 'bubble',
										  'hero' => 
										  array (
											'type' => 'image',
											'url' => 'https://i.ibb.co/YB1R7qZ/Snapshot-2020-6-25-10-10-42.jpg',
											'align' => 'center',
											'size' => 'full',
											'aspectRatio' => '1:1',
											'aspectMode' => 'cover',
											'action' => 
											array (
											  'type' => 'uri',
											  'label' => 'Action',
											  'uri' => 'https://www.instagram.com/raja_brawijaya/?hl=id',
											),
										  ),
										  'body' => 
										  array (
											'type' => 'box',
											'layout' => 'vertical',
											'spacing' => 'md',
											'action' => 
											array (
											  'type' => 'uri',
											  'label' => 'Action',
											  'uri' => 'https://linecorp.com',
											),
											'contents' => 
											array (
											  0 => 
											  array (
												'type' => 'text',
												'text' => 'OFFICIAL INSTAGRAM',
												'size' => 'lg',
												'align' => 'center',
												'weight' => 'bold',
											  ),
											  1 => 
											  array (
												'type' => 'text',
												'text' => 'Info resmi terbaru tentang raja brawijaya',
												'size' => 'md',
												'align' => 'center',
												'color' => '#AAAAAA',
												'wrap' => true,
											  ),
											),
										  ),
										  'footer' => 
										  array (
											'type' => 'box',
											'layout' => 'vertical',
											'contents' => 
											array (
											  0 => 
											  array (
												'type' => 'spacer',
												'size' => 'xxl',
											  ),
											  1 => 
											  array (
												'type' => 'button',
												'action' => 
												array (
												  'type' => 'uri',
												  'label' => 'Kunjungi !',
												  'uri' => 'https://www.instagram.com/raja_brawijaya/?hl=id',
												),
												'color' => '#905C44',
												'margin' => 'none',
												'style' => 'primary',
											  ),
											),
										  ),
										),
										4 => 
										array (
										  'type' => 'bubble',
										  'hero' => 
										  array (
											'type' => 'image',
											'url' => 'https://i.ibb.co/YB1R7qZ/Snapshot-2020-6-25-10-10-42.jpg',
											'align' => 'center',
											'size' => 'full',
											'aspectRatio' => '1:1',
											'aspectMode' => 'cover',
											'action' => 
											array (
											  'type' => 'uri',
											  'label' => 'aaa',
											  'uri' => 'https://twitter.com/raja_brawijaya',
											),
										  ),
										  'body' => 
										  array (
											'type' => 'box',
											'layout' => 'vertical',
											'spacing' => 'md',
											'action' => 
											array (
											  'type' => 'uri',
											  'label' => 'Action',
											  'uri' => 'https://linecorp.com',
											),
											'contents' => 
											array (
											  0 => 
											  array (
												'type' => 'text',
												'text' => 'OFFICIAL TWITTER',
												'size' => 'lg',
												'align' => 'center',
												'weight' => 'bold',
											  ),
											  1 => 
											  array (
												'type' => 'text',
												'text' => 'Info resmi terbaru tentang raja brawijaya',
												'size' => 'md',
												'align' => 'center',
												'color' => '#AAAAAA',
												'wrap' => true,
											  ),
											),
										  ),
										  'footer' => 
										  array (
											'type' => 'box',
											'layout' => 'vertical',
											'contents' => 
											array (
											  0 => 
											  array (
												'type' => 'spacer',
												'size' => 'xxl',
											  ),
											  1 => 
											  array (
												'type' => 'button',
												'action' => 
												array (
												  'type' => 'uri',
												  'label' => 'Kunjungi !',
												  'uri' => 'https://twitter.com/raja_brawijaya',
												),
												'color' => '#5C85B6',
												'style' => 'primary',
											  ),
											),
										  ),
										),
										5 => 
										array (
										  'type' => 'bubble',
										  'hero' => 
										  array (
											'type' => 'image',
											'url' => 'https://i.ibb.co/YB1R7qZ/Snapshot-2020-6-25-10-10-42.jpg',
											'size' => 'full',
											'aspectRatio' => '1:1',
											'aspectMode' => 'cover',
											'action' => 
											array (
											  'type' => 'uri',
											  'label' => 'Action',
											  'uri' => 'https://www.facebook.com/rajabrawijayaub/',
											),
										  ),
										  'body' => 
										  array (
											'type' => 'box',
											'layout' => 'vertical',
											'spacing' => 'md',
											'action' => 
											array (
											  'type' => 'uri',
											  'label' => 'Action',
											  'uri' => 'https://linecorp.com',
											),
											'contents' => 
											array (
											  0 => 
											  array (
												'type' => 'text',
												'text' => 'OFFICIAL FACEBOOK',
												'size' => 'lg',
												'align' => 'center',
												'weight' => 'bold',
											  ),
											  1 => 
											  array (
												'type' => 'text',
												'text' => 'Info resmi terbaru tentang raja brawijaya',
												'size' => 'md',
												'align' => 'center',
												'color' => '#AAAAAA',
												'wrap' => true,
											  ),
											),
										  ),
										  'footer' => 
										  array (
											'type' => 'box',
											'layout' => 'vertical',
											'contents' => 
											array (
											  0 => 
											  array (
												'type' => 'spacer',
												'size' => 'xxl',
											  ),
											  1 => 
											  array (
												'type' => 'button',
												'action' => 
												array (
												  'type' => 'uri',
												  'label' => 'Kunjungi !',
												  'uri' => 'https://www.facebook.com/rajabrawijayaub/',
												),
												'color' => '#446090',
												'style' => 'primary',
											  ),
											),
										  ),
										),
									  ),
									),
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
