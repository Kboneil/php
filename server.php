<?php

// $db = new PDO('pgsql:dbname=slogans;host=localhost;user=kboneil');
//
// $res = $db->query(  "SELECT * FROM comments" )->fetchAll(PDO::FETCH_ASSOC);
//
// if (!$res) {
//
//     die("Error in query: " . pg_last_error());
//
// }
//
// echo $res;

//form post

$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Form:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;

require 'library/PHPMailerAutoload.php';

//send email from form
$mail = new PHPMailer;

$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'kelly.br.oneil@gmail.com';          // SMTP username
$mail->Password = '*******';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($email, $name);
$mail->addAddress('kelly.br.oneil@gmail.com', 'Kelly');     // Add a recipient

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Email Form Input';
$mail->Body    = $comment;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


//connect to DB
$db = pg_connect("host=localhost dbname=slogans user=kboneil");
if (!$db) {

    die("Error in connection: " . pg_last_error());

}

$sql = "SELECT * FROM slogans";

$res = pg_query($db, $sql);

if (!$res) {

    die("Error in query: " . pg_last_error());

}

while ($row = pg_fetch_array($res)) {

    echo "Slogan: " . $row[0] . "<p />";

    echo $row[1] . "<p />";

    echo $row[2] . "<p />";

}

?>
