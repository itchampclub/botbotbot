<?php
require_once('./LineBotTiny.php');
$channelAccessToken = '1B8pMUtZdLgdebgTuRrxV3YirCQv91mbXGnxvlTbX7Cxn471Fs0bBgwGVpedxnPKm7tZUWxnMrT2NqCBCLAG8L7r6vtYoZwb3iqRvYr3BZGrZX/mRNFG8lzNbLr5CHO4PWfTicerD5PVHYjC8mpQ4wdB04t89/1O/w1cDnyilFU=';
$channelSecret = '69b2d81ee6e8ff48d2cacdc8c7d8c337';
date_default_timezone_set('Asia/Jakarta');

$client 		= new LINEBotTiny($channelAccessToken, $channelSecret);
$reply 			= '';
$leave 			= false;

$event 			= $client->parseEvents()[0];
$type 			= $event['type']; 
$source     	= $event['source'];
$userId 		= $source['userId'];
$replyToken 	= $event['replyToken'];
$timestamp		= $event['timestamp'];
$message 		= $event['message'];
$messageid 		= $message['id'];





if($source['type'] == "group") {
			$userData = $client->getProfilFromGroup($userId, $source['groupId']);
		}
		else if($source['type'] == "room") {
			$userData = $client->getProfilFromRoom($userId, $source['roomId']);
		}
		else if($source['type'] == "user") {
			$userData = $client->profil($userId);
		}







if($type == 'memberJoined') 
{
	$replyText = "Hi";
	
	$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);

}
else if($type == 'join') 
{
	$replyText = 'Hello';
	
	$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);

}
else if($message['type']=='text')
{
	$incomingMsg = strtolower($message['text']);
	if(strpos($incomingMsg,"botleave") !== false)
        {
	        $replyText = '';
		$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $replyText
										)
								)
							);
		$leave = true;
        }
	else if(strpos($incomingMsg,"msg") !== false)
		{
		$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(



    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(

  'type' =>  'bubble',
  'hero' =>  array(

    'type' =>  'image',
    'url' =>  'https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_2_restaurant.png',
    'size' =>  'full',
    'aspectRatio' =>  '20 => 13',
    'aspectMode' =>  'cover',
    'action' =>  array(
      'type' =>  'uri',
      'uri' =>  'https://linecorp.com'
    )
  ),
  'body' =>  array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'action' =>  array(
      'type' =>  'uri',
      'uri' =>  'https://linecorp.com'
    ),
    'contents' =>  array(
      array(
        'type' =>  'text',
        'text' =>  'Brown's Burger',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'sm',
        'contents' =>  array(
          array(
            'type' =>  'box',
            'layout' =>  'baseline',
            'contents' =>  array(
              array(
                'type' =>  'icon',
                'url' =>  'https://scdn.line-apps.com/n/channel_devcenter/img/fx/restaurant_regular_32.png'
              ),
              array(
                'type' =>  'text',
                'text' =>  '$10.5',
                'weight' =>  'bold',
                'margin' =>  'sm',
                'flex' =>  0
              ),
              array(
                'type' =>  'text',
                'text' =>  '400kcl',
                'size' =>  'sm',
                'align' =>  'end',
                'color' =>  '#aaaaaa'
              )
            )
          ),
          array(
            'type' =>  'box',
            'layout' =>  'baseline',
            'contents' =>  array(
              array(
                'type' =>  'icon',
                'url' =>  'https://scdn.line-apps.com/n/channel_devcenter/img/fx/restaurant_large_32.png'
              ),
              array(
                'type' =>  'text',
                'text' =>  '$15.5',
                'weight' =>  'bold',
                'margin' =>  'sm',
                'flex' =>  0
              ),
              array(
                'type' =>  'text',
                'text' =>  '550kcl',
                'size' =>  'sm',
                'align' =>  'end',
                'color' =>  '#aaaaaa'
              )
            )
          )
        )
      ),
      array(
        'type' =>  'text',
        'text' =>  'Sauce, Onions, Pickles, Lettuce & Cheese',
        'wrap' =>  true,
        'color' =>  '#aaaaaa',
        'size' =>  'xxs'
      )
    )
  ),
  'footer' =>  array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'contents' =>  array(
      array(
        'type' =>  'spacer',
        'size' =>  'xxl'
      ),
      array(
        'type' =>  'button',
        'style' =>  'primary',
        'color' =>  '#905c44',
        'action' =>  array(
          'type' =>  'uri',
          'label' =>  'Add to Cart',
          'uri' =>  'https://linecorp.com'
        )
      )
    )
  )
)	
	             
							)
							)	
							);
	       }
	else if(strpos($incomingMsg,"groupid") !== false)
	{
		$userData = null;
		if($source['type'] == "group") {
			$userData = $client->getProfilFromGroup($userId, $source['groupId']);
		}
		else if($source['type'] == "room") {
			$userData = $client->getProfilFromRoom($userId, $source['roomId']);
		}
		else if($source['type'] == "user") {
			$userData = $client->profil($userId);
		}
		
		if($userData != null) {
			$replyText = "Hi ".$source['groupId'];
			$reply = array(
							'replyToken' => $replyToken,														
							'messages' => array(
								array(
										'type' => 'text',					
										'text' => $replyText
									)
							)
						);
		}
	}
}


if($reply != "") {
				
		$client->replyMessage($reply);
	 
	 	if($leave) {
	 		if($source['type'] == "group") {
				$client->leaveGroup($source['groupId']);
			}
			else if($source['type'] == "room") {
				$client->leaveRoom($source['roomId']);
			} 
	 	}	
}
?>
        
