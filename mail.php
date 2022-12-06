<?php
if (isset($_POST)) {
    $data = json_decode(file_get_contents('php://input'), true);
    $to = $data["Mail"];
    $subject = 'Anmeldung "' .$data["Anmeldung"]. '"';
    $message = 'Hallo ' .$data["Vorname"]. "&nbsp;" .$data["Nachname"]. ',<br>schön dass du dich zu unserer Veranstaltung angemeldet hast. Deine Anmeldedaten haben wir erhalten. <br><br><b>Anmeldung</b>: ' .$data["Anmeldung"]. '<br><b>Datum</b>: ' .$data["Datum"]. '<br><b>Zusätzlich angemeldete Personen</b>: ' .$data["Nachricht"]. '<br><b>Anzahl angemeldeter Personen</b>: ' .$data["Personenanzahl"]. '<br><br>Falls du dich wieder abmelden möchtest, antworte einfach auf diese Mail.<br>Wir freuen uns dich zu sehen.<br><br>Deine CG Ellmendingen';
    $header = array(
        'From' => 'webmaster@cg-ellmendingen.de',
        'Reply-To' => 'webmaster@cg-ellmendingen.de',
        'Content-Type' => 'text/html',
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