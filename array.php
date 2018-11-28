else if($message['type']=='text')
{
	$incomingMsg = strtolower($message['text']);
	$n69 = mt_rand(100000,999999);
	if(strpos($incomingMsg,"6digi") !== false)
        {
	        $replyText = '';
		$reply = array(
								'replyToken' => $replyToken,														
								'messages' => array(
									array(
											'type' => 'text',					
											'text' => $n69
										)
								)
							);
		$leave = true;
        }
	else if(strpos($incomingMsg,"test6") !== false)
		{
$reply = array(
'replyToken' => $replyToken,														
'messages' => array(
array(
    'type' => 'flex',
    'altText' => 'Flex',
    'contents' => array(
 
	    
  'type' =>  'bubble',
  'hero' => array(
    'type' =>  'image',
    'url' =>  'https://i.ytimg.com/vi/taNCBWzkgWs/maxresdefault.jpg',
    'size' =>  'full',
    'aspectRatio' =>  '20:13',
    'aspectMode' =>  'cover'
  ),
	
	    
	    
  'body' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'spacing' =>  'md',
    'contents' => array(
	    
	    
	    
      array(
        'type' =>  'text',
        'text' =>  'เลขเด็ดงวด 1 ธันวาคม 61',
        'size' =>  'xl',
        'weight' =>  'bold'
      ),
	    
      array(
        'type' =>  'box',
        'layout' =>  'vertical',
        'spacing' =>  'sm',
        'contents' => array(
		
		
          array(
            'type' =>  'box',
            'layout' =>  'baseline',
            'contents' => array(
              array(
                'type' =>  'text',
                'text' =>  'รางวัลที่ 1',
                'weight' =>  'bold',
                'margin' =>  'sm',
                'flex' => 0
              ),
              array(
                'type' =>  'text',
                'text' =>  '146587',
                'size' =>  'sm',
                'weight' =>  'bold',
                'align' =>  'end',
                'color' =>  '#000000'
              )
            )
          )
          )
		
        )
      )
    )
  )
    )
  )
)
 