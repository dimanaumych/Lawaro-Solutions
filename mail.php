<?php header('Content-Type: text/html; charset=utf-8');
if(isset($_POST['contact'])){
//  print_r($_POST);
    $data = json_decode($_POST['contact']);
    $objArr = (array($data));
    foreach ($objArr as $key => $value){
        $email = $value -> email;
        $feedback = $value -> feedback;
    }
    $to = $email; // ����� ����� �������� e-mail, ���� ����� ��������� ������
    $from = $_POST['contact']; // this is the sender's Email address
    $message = $feedback  . "\n";
    $me = 'New client';

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    function mail_utf8($to, $subject, $message, $from) {
        $header = 'MIME-Version: 1.0' . "\n" . 'Content-type: text/plain; charset=UTF-8'
            . "\n" . 'From: Client'.">\n";
        mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $header);
    }
    mail_utf8($email, "New Client", $message, $from);
//    mail($to, $me, $from);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - ���������!
//echo "��������� ����������. ������� ��� " . $from . ", �� ����� �������� � ����.";
//echo "<br /><br /><a href='http://www.falling-meteorite.space/'>��������� �� ����.</a>";

}
else{
    echo "Error";
    echo "<br /><br /><a href='http://air.good-landing.com.ua'>На сервере производятся технические работы</a>";
//  echo print_r($_POST);
}

?>