 <?php
  

function send_LINE($msg){
 $access_token = 'iIwb7oxLtURRC2WD+92cw0mc89H6rQM3nDqYDpPMAatDRxLN2SI2zRnTX6M2wVtmWbr0PIUrkUA9FIpHivxmBOB6iFcCmgFTJwyqASu+sicXXG9fZ9kty8HdEpHNlYZXhImeOakMPEpraHEaHUPoCwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '963b76303434feb3e6a5ba7e68bc8cfe',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
