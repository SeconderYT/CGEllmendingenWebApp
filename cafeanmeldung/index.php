<!doctype html><html lang="de"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Christliche Gemeinschaft Ellmendingen</title><link rel="icon" type="image/svg+xml" href="../assets/image/favicon.svg?v=b989e2e6a4966bee84f84b88aa97283e"><link href="../assets/css/style.css?v=e436b7ec2daeb0e18ed7be498ea2741a" rel="stylesheet" type="text/css"></head><body> <?php
    date_default_timezone_set('Europe/Berlin');
    $datum = date('Y-m-d H:i');
  ?> <section class="contact-form form-style-5"><h2>Anmeldung</h2><h3>Café W18 | <?php 
  $wochentag=date("w",mktime(0,0,0,date("m"),date("d"),date("Y")));
  $sunday = 7;
  $calc = $sunday - $wochentag; 
  echo date("d.m.Y",mktime(0,0,0,date("m"),date("d")+$calc,date("Y")));
  ?> </h3><p>Kinder unter 3 Jahren müssen nicht für die Sitzplatzanzahl mitgerechnet werden.</p><p><em>(*Eingaben sind erforderlich)</em></p><p class="results"><span id="voll"></span></p><form id="formular"><input name="Anmeldung" type="hidden" value="Café W18"><div class="input-group"><label for="name">Nachname*</label> <input id="name" name="Nachname" type="text" pattern="[A-Za-z0-9-_äëïöüÄËÏÖÜßàéèîôûÀÉÈÎÔÛ\s]*" required> <label for="vorname">Vorname*</label> <input id="vorname" name="Vorname" type="text" pattern="[A-Za-z0-9-_äëïöüÄËÏÖÜßàéèîôûÀÉÈÎÔÛ\s]*" required></div><div class="input-group"><label for="email">E-Mail*</label> <input id="email" name="Mail" type="email" placeholder="beispiel@mail.de" required></div><div class="input-group"><label for="tisch_radio">Tische</label> <select id="tisch_radio" name="Tisch"><optgroup label="Innensitzplätze"><option id="2er-Tisch" value="2er-Tisch">2er Tisch</option><option id="3er-Tisch" value="3er-Tisch">3er Tisch</option><option id="4er-Tisch" value="4er-Tisch">4er Tisch</option><option id="5er-Tisch" value="5er-Tisch">5er Tisch</option><option id="6er-Tisch" value="6er-Tisch">6er Tisch</option><option id="8er-Tisch" value="8er-Tisch">8er Tisch</option></optgroup><optgroup label="Aussensitzplätze"><option id="4er-Aussen" value="4er-Aussen">2-4er Tisch</option><option id="6er-Aussen" value="6er-Aussen">6er Tisch</option></optgroup></select></div><div class="input-group"><div class="ds_checkbox"><input id="hochstuhl" name="Hochstuhl" type="checkbox" value="Ja"></div><div class=""><span class="">Wir hätten gerne einen Hochstuhl</span></div></div><hr><div class="input-group"><label for="datenschutz"><b>Datenschutz*</b></label><div class="ds_checkbox"><input id="datenschutz" name="Datenschutz" type="checkbox" value="eingewilligt" required></div><div class="ds_text"><span class="datenschutz">Hiermit willige ich nach Art. 7 MV-DSO ein, dass meine Daten in dem Kontext der Anmeldung zum CaféW18 für gemeindeinterne Zwecke gespeichert und elektronisch verarbeitet werden. Unsere Datenschutzerklärung kann hier eingesehen werden: <a href="https://info.cg-ellmendingen.de/datenschutz">https://info.cg-ellmendingen.de/datenschutz</a></span></div></div><input name="Anmeldedatum" type="hidden" value="<?php echo $datum; ?>"> <label>Alle Angaben richtig? Dann los!</label> <input id="senden" type="submit"></form></section> <?php 
    $date1 = "2er-Tisch";
    $date2 = "3er-Tisch";
    $date3 = "4er-Tisch";
    $date4 = "5er-Tisch";
    $date5 = "6er-Tisch";
    $date6 = "8er-Tisch";
    $date7 = "4er-Aussen";
    $date8 = "6er-Aussen";
    $file = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/cafeanmeldung?token=7410582333ed2e6cf13a18025da827");
    $result1 = substr_count ( $file, $date1);  
    $result2 = substr_count ( $file, $date2);
    $result3 = substr_count ( $file, $date3);
    $result4 = substr_count ( $file, $date4);
    $result5 = substr_count ( $file, $date5);
    $result6 = substr_count ( $file, $date6);
    $result7 = substr_count ( $file, $date7);
    $result8 = substr_count ( $file, $date8);
  ?> <script>if (<?php echo json_encode($result1); ?> >=3) document.getElementById(<?php echo json_encode($date1); ?>).disabled = true;
    if (<?php echo json_encode($result2); ?> >=1) document.getElementById(<?php echo json_encode($date2); ?>).disabled = true;
    if (<?php echo json_encode($result3); ?> >=2) document.getElementById(<?php echo json_encode($date3); ?>).disabled = true;
    if (<?php echo json_encode($result4); ?> >=2) document.getElementById(<?php echo json_encode($date4); ?>).disabled = true;
    if (<?php echo json_encode($result5); ?> >=1) document.getElementById(<?php echo json_encode($date5); ?>).disabled = true;
    if (<?php echo json_encode($result6); ?> >=1) document.getElementById(<?php echo json_encode($date6); ?>).disabled = true;
    if (<?php echo json_encode($result7); ?> >=5) document.getElementById(<?php echo json_encode($date7); ?>).disabled = true;
    if (<?php echo json_encode($result8); ?> >=3) document.getElementById(<?php echo json_encode($date8); ?>).disabled = true;

    if (<?php echo json_encode($result1); ?> + <?php echo json_encode($result2); ?> + <?php echo json_encode($result3); ?> + <?php echo json_encode($result4); ?> + <?php echo json_encode($result5); ?> + <?php echo json_encode($result6); ?> + <?php echo json_encode($result7); ?> + <?php echo json_encode($result8); ?> >=18) {
            document.getElementById('formular').style.display = "none";
            document.getElementById('voll').innerText = "Leider ist keine Reservierung mehr möglich, da alle verfügbaren Tische schon reserviert sind!";
    };</script><script src="../assets/js/smtp.js?v=3834e1b9e65ca954b7479464ea1e5118"></script><script src="../assets/js/cafeanmeldung.js?v=221168e2746f918124119ee4ea1e9b87"></script></body></html>