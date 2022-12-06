<?php
if (isset($_POST)) {
    $data = json_decode(file_get_contents('php://input'), true);
    $to = $data["Mail"];
    $subject = 'Anmeldung "' .$data["Anmeldung"]. '"';
    $message = 'Hallo ' .$data["Vorname"]. "&nbsp;" .$data["Nachname"]. ',<br>sie haben sich erfolgreich zum Café W18 angemeldet und wir haben alle nötigen Daten von ihnen erhalten.<br>Wir freuen uns auf ihren Besuch am Sonntag. <br><br><b>Anmeldung</b>: ' .$data["Anmeldung"]. '<br><b>Mail</b>: ' .$data["Mail"]. '<br><b>Tisch</b>: ' .$data["Tisch"]. '<br><b>Hochstuhl</b>: ' .$data["Hochstuhl"]. '<br><br>Wir freuen uns auf ihren Besuch am Sonntag.<br><br>Herzlichst ihr Café-Team';
    $header = array(
        'From' => 'webmaster@cg-ellmendingen.de',
        'Reply-To' => 'webmaster@cg-ellmendingen.de',
        'Content-Type' => 'text/html; charset=utf-8',
        'X-Mailer' => 'PHP/' . phpversion()
    );
    $success = mail($to, $subject, $message, $header);
    if ($success) {
        echo "Success!";
    }
    else {
        echo "Fail";
    }
}
?>