<!doctype html><html lang="de"><head><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Christliche Gemeinschaft Ellmendingen</title><link rel="icon" type="image/svg+xml" href="../assets/image/favicon.svg?v=b989e2e6a4966bee84f84b88aa97283e"><link href="../assets/css/style.css?v=e436b7ec2daeb0e18ed7be498ea2741a" rel="stylesheet" type="text/css"></head></head><body> <?php
    date_default_timezone_set('Europe/Berlin');
    $datum = date('Y-m-d');
    $heute = time();
  ?> <section class="form-style-5"><div class=""><p>Bei „Räume für Heilung und Hörendes Gebet“-ONLINE hast du die Möglichkeit, für dich betend dienen zu lassen. Die Beter werden ggf. für Dich um Heilung beten oder empfangene Bilder, Eindrücke, Bibelverse an Dich weitergeben (im Nachgang auch schriftlich per E-Mail) und Dich segnen. So oder so wirst Du anhand des Dienstes gesegnet.<br>Wir haben pro Abend zwischen 19.30 und 22.00 Uhr mehrere Gebetsslots von ca. 30 min.<br><strong>Wenn du dich angemeldet hast, wird dir neben einer Anmeldebestätigung auch noch bis Sonntag vor dem Termin, deine genaue Uhrzeit und ein Zoom-Link per Mail zugesendet, über den du dich dann einklinken kannst.</strong></p><p>So läuft der Anmeldevorgang zu Räume für Heilung und Hörendes Gebet - ONLINE</p><ol><li>Melde dich über die unten stehende Anmeldemaske an</li><li>Du erhältst eine automatische Anmeldebestätigung per Mail, dass wir deine Daten erhalten haben.</li><li>Du erhältst im Laufe der Zeit eine weitere Mail von uns mit der Uhrzeit deines Gebetsslots, dem Zoom-Link und ein paar Erklärungen zu unserem Angebot.</li><li>In Vorbereitung auf das Treffen beachte bitte folgendes: Wenn du per Smartphone an deinem Gebetsslot teilnehmen willst, musst du im Vorfeld die entsprechende App von Zoom runterladen. Wenn du an deinem PC/Laptop über den Browser an deinem Gebetsslot teilnehmen willst, brauchst du nix weiter bedenken. Nur rechtzeitig auf den Zoom-link drücken :) Sei so oder so, bitte ca. 5 min vor deinem Gebetsslot auf Zoom. Du wirst dann in einen Warteraum geleitet und zu deinem Zeitpunkt in deinen Online-Gebetsraum geleitet.</li></ol><p>Bei Fragen, wende dich an:<br><a href="mailto:heiko.volz@cg-ellmendingen.de">heiko.volz@cg-ellmendingen.de</a></p><p></p></div></section><section class="contact-form form-style-5"><h2>Anmeldung</h2><h3>Anmeldung Hörendes Gebet Online</h3><p><em>(*Eingaben sind erforderlich)</em></p><p class="results">Pro Termin sind die Teilnehmer auf 8 beschränkt.</p><form id="formular"><input name="Veranstaltung" type="hidden" value="Räume für Heilung und hörendes Gebet"><div class="input-group"><label for="name">Nachname*</label> <input id="name" name="Nachname" type="text" pattern="[A-Za-z0-9-_äëïöüÄËÏÖÜßàéèîôûÀÉÈÎÔÛ\s]*" required> <label for="vorname">Vorname*</label> <input id="vorname" name="Vorname" type="text" pattern="[A-Za-z0-9-_äëïöüÄËÏÖÜßàéèîôûÀÉÈÎÔÛ\s]*" required></div><div class="input-group"><label for="email">E-Mail*</label> <input id="email" name="Mail" type="email" placeholder="beispiel@mail.de" required></div> <?php 
        $date01 = "2022-09-26";
        $date02 = "2022-10-24";
        $date03 = "2022-11-14";
        $date04 = "2022-12-05";
        $date05 = "2023-01-16";
        $date06 = "2023-02-13";
        $date07 = "2023-03-13";
        $date08 = "2023-04-17";
        $jdate01 = strtotime($date01);
        $jdate02 = strtotime($date02);
        $jdate03 = strtotime($date03);
        $jdate04 = strtotime($date04);
        $jdate05 = strtotime($date05);
        $jdate06 = strtotime($date06);
        $jdate07 = strtotime($date07);
        $jdate08 = strtotime($date08);
        
    ?> <div class="input-group"><label for="termin">Termin</label> <select id="termin" name="Termin"><option id="t00" value="">&nbsp;</option><option value="<?php echo $date01; ?>" id="t01">26.09.</option><option value="<?php echo $date02; ?>" id="t02">24.10.</option><option value="<?php echo $date03; ?>" id="t03">14.11.</option><option value="<?php echo $date04; ?>" id="t04">05.12.</option><option value="<?php echo $date05; ?>" id="t05">16.01.</option><option value="<?php echo $date06; ?>" id="t06">13.02.</option><option value="<?php echo $date07; ?>" id="t07">13.03.</option><option value="<?php echo $date08; ?>" id="t08">17.04.</option></select></div><div class="input-group"><label for="datenschutz"><b>Datenschutz*</b></label><div class="ds_checkbox"><input id="datenschutz" name="Datenschutz" type="checkbox" value="eingewilligt" required></div><div class="ds_text"><span class="datenschutz">Hiermit willige ich nach Art. 7 MV-DSO ein, dass meine Daten in dem Kontext der Anmeldung zu unseren Veranstaltungen für gemeindeinterne Zwecke gespeichert und elektronisch verarbeitet werden. Unsere Datenschutzerklärung kann hier eingesehen werden: <a href="https://info.cg-ellmendingen.de/datenschutz">https://info.cg-ellmendingen.de/datenschutz</a></span></div></div><label>Alle Angaben richtig? Dann los!</label> <input id="senden" type="submit"></form></section> <?php 
    $file = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/hg?token=7410582333ed2e6cf13a18025da827");
    $result01 = substr_count ( $file, $date01);
    $result02 = substr_count ( $file, $date02);
    $result03 = substr_count ( $file, $date03);
    $result04 = substr_count ( $file, $date04);
    $result05 = substr_count ( $file, $date05);
    $result06 = substr_count ( $file, $date06);
    $result07 = substr_count ( $file, $date07);
    $result08 = substr_count ( $file, $date08);
    
  ?> <script>if (<?php echo json_encode($result01); ?> >=8) document.getElementById("t01").disabled = true;
    if (<?php echo json_encode($result02); ?> >=8) document.getElementById("t02").disabled = true;
    if (<?php echo json_encode($result03); ?> >=8) document.getElementById("t03").disabled = true;
    if (<?php echo json_encode($result04); ?> >=8) document.getElementById("t04").disabled = true;
    if (<?php echo json_encode($result05); ?> >=8) document.getElementById("t05").disabled = true;
    if (<?php echo json_encode($result06); ?> >=8) document.getElementById("t06").disabled = true;
    if (<?php echo json_encode($result07); ?> >=8) document.getElementById("t07").disabled = true;
    if (<?php echo json_encode($result08); ?> >=8) document.getElementById("t08").disabled = true;</script><script>if (<?php echo $jdate01; ?> < <?php echo $heute; ?>) document.getElementById("t01").disabled = true;
    if (<?php echo $jdate01; ?> < <?php echo $heute; ?>) document.getElementById("t01").disabled = true;
    if (<?php echo $jdate02; ?> < <?php echo $heute; ?>) document.getElementById("t02").disabled = true;
    if (<?php echo $jdate03; ?> < <?php echo $heute; ?>) document.getElementById("t03").disabled = true;
    if (<?php echo $jdate04; ?> < <?php echo $heute; ?>) document.getElementById("t04").disabled = true;
    if (<?php echo $jdate05; ?> < <?php echo $heute; ?>) document.getElementById("t05").disabled = true;
    if (<?php echo $jdate06; ?> < <?php echo $heute; ?>) document.getElementById("t06").disabled = true;
    if (<?php echo $jdate07; ?> < <?php echo $heute; ?>) document.getElementById("t07").disabled = true;
    if (<?php echo $jdate08; ?> < <?php echo $heute; ?>) document.getElementById("t08").disabled = true;</script><script src="../assets/js/hg.js?v=2a55d0c23cc890e051b3b621da62a9bc"></script></body></html>