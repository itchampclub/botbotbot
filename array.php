else if($message['type']=='text')
{
	$incomingMsg = strtolower($message['text']);
	$n69 = mt_rand(100000,999999);
	if(strpos($incomingMsg,"999") !== false)
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
	else if(strpos($incomingMsg,"ขอหวย") !== false)
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
          ),	
          array(
            'type' =>  'box',
            'layout' =>  'baseline',
            'contents' => array(
              array(
                'type' =>  'text',
                'text' =>  'เลขหน้า 3 ตัว',
                'weight' =>  'bold',
                'margin' =>  'sm',
                'flex' => 0
              ),
              array(
                'type' =>  'text',
                'text' =>  '187 462',
                'size' =>  'sm',
                'weight' =>  'bold',
                'align' =>  'end',
                'color' =>  '#000000'
              )
            )
          ),	
          array(
            'type' =>  'box',
            'layout' =>  'baseline',
            'contents' => array(
              array(
                'type' =>  'text',
                'text' =>  'เลขท้าย 3 ตัว',
                'weight' =>  'bold',
                'margin' =>  'sm',
                'flex' => 0
              ),
              array(
                'type' =>  'text',
                'text' =>  '284 519',
                'size' =>  'sm',
                'weight' =>  'bold',
                'align' =>  'end',
                'color' =>  '#000000'
              )
            )
          ),
          array(
            'type' =>  'box',
            'layout' =>  'baseline',
            'contents' => array(
              array(
                'type' =>  'text',
                'text' =>  'เลขท้าย 2 ตัว',
                'weight' =>  'bold',
                'margin' =>  'sm',
                'flex' => 0
              ),
              array(
                'type' =>  'text',
                'text' =>  '52',
                'size' =>  'sm',
                'weight' =>  'bold',
                'align' =>  'end',
                'color' =>  '#000000'
              )
            )
          )
		
        )
      ),
      array(
        'type' =>  'text',
        'text' =>  'สำนักอาจารย์คง งงงวยโดนหวยแดก',
        'wrap' => true,
        'color' =>  '#aaaaaa',
        'size' =>  'xxs'
      )
	    
    )
  ),
	    
  'footer' => array(
    'type' =>  'box',
    'layout' =>  'vertical',
    'contents' => array(
      array(
        'type' =>  'spacer',
        'size' =>  'xxl'
      )
    )
  )
 