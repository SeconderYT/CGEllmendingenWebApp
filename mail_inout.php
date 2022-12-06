<?php
if (isset($_POST)) {
    $data = json_decode(file_get_contents('php://input'), true);
    $to = $data["Mail"];
    $subject = 'Anmeldung "' .$data["Anmeldung"]. '"';
    $message = 'Hallo ' .$data["Vorname"]. "&nbsp;" .$data["Nachname"]. ',<br>sie haben sich erfolgreich zum In/Out Spielplatz angemeldet und wir haben alle nötigen Daten von ihnen erhalten.<br><br><b>Anmeldung</b>: ' .$data["Anmeldung"]. '<br><b>Mail</b>: ' .$data["Mail"]. '<br><b>Anzahl der Kinder</b>: ' .$data["Personenanzahl"]. '<br><br>Falls sie doch nicht kommen können, antworten sie einfach auf diese Mail.<br><br>Wir freuen uns auf ihren Besuch am Freitag.<br><br>Herzlichst ihr In/Out Spielplatzteam';
    $header = array(
        'From' => 'webmaster@cg-ellmendingen.de',
        'Reply-To' => 'spielplatz@cg-ellmendingen.de',
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