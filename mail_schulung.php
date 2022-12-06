<?php
if (isset($_POST)) {
    $data = json_decode(file_get_contents('php://input'), true);
    $to = $data["Mail"];
    $subject = 'Anmeldung "' .$data["Anmeldung"]. '"';
    $message = 'Hallo ' .$data["Vorname"]. "&nbsp;" .$data["Nachname"]. ',<br>schön dass du dich zu unserer Veranstaltung angemeldet hast. Deine Anmeldedaten haben wir erhalten. <br><br><b>Schulung</b>: ' .$data["Anmeldung"]. '<br><b>Mail</b>: ' .$data["Mail"]. '<br><b>Termin</b>: ' .$data["Termin"]. '<br><br>Wir freuen uns dich zu sehen.<br><br>Deine CG Ellmendingen';
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