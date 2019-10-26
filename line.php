 <?php
  

function send_LINE($msg){
 $access_token = 'j1bOierLHanM2zjEDhxg2hSEdCe4jC3yLbJq0mV0aA3aTeN7d4aR5N4ZdjiL1/+imnWeX9FKEHCHn4G12IA99Vv4PeatTxjn2tAtabwWfvW9xLno/U53di7/xQ4jAWqlXqbuIdKHu9uBWhHvYW1IVAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ua0bc116486f6bc09113c2f239b9030c8',
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
