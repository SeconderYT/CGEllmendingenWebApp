<!doctype html><html lang="de"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Christliche Gemeinschaft Ellmendingen</title><link rel="icon" type="image/svg+xml" href="../assets/image/favicon.svg?v=b989e2e6a4966bee84f84b88aa97283e"><link href="../assets/css/style.css?v=e436b7ec2daeb0e18ed7be498ea2741a" rel="stylesheet" type="text/css"></head><body> <?php
    date_default_timezone_set('Europe/Berlin');
    $datum = date('Y-m-d H:i');
  ?> <section class="contact-form form-style-5"><h2>Anmeldung</h2><h3>In/Out-Spielplatz Nachmittag</h3><p class="results">Momentan sind noch <span></span> Plätze frei.<br><span id="voll"></span></p><form id="formular" onsubmit="myButton.disabled = true; return true;"><input name="Anmeldung" type="hidden" value="In/Out-Spielplatz Nachmittag"><div class="input-group"><label class="font-bold">Kontakt</label> <label for="name">Nachname</label> <input id="name" name="Nachname" type="text" pattern="[A-Za-z0-9-_äëïöüÄËÏÖÜßàéèîôûÀÉÈÎÔÛ\s]*" required> <label for="vorname">Vorname</label> <input id="vorname" name="Vorname" type="text" pattern="[A-Za-z0-9-_äëïöüÄËÏÖÜßàéèîôûÀÉÈÎÔÛ\s]*" required></div><div class="input-group"><label for="email">E-Mail</label> <input id="email" name="Mail" type="email" placeholder="beispiel@mail.de" required></div><div class="input-group"><label for="personenanzahl">Anzahl der Kinder</label> <select id="personenanzahl" name="Personenanzahl"><option>0</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select></div><hr><div class="input-group"><label for="datenschutz"><b>Datenschutz</b></label><div class="ds_checkbox"><input id="datenschutz" name="Datenschutz" type="checkbox" value="eingewilligt" required></div><div class="ds_text"><span class="datenschutz">Hiermit willige ich nach Art. 7 MV-DSO ein, dass meine Daten in dem Kontext der Anmeldung zu Veranstaltungen der Christlichen Gemeinschaft Ellmendingen für gemeindeinterne Zwecke gespeichert und elektronisch verarbeitet werden. Unsere Datenschutzerklärung kann hier eingesehen werden: <a href="https://info.cg-ellmendingen.de/datenschutz">https://info.cg-ellmendingen.de/datenschutz</a></span></div></div><input name="Anmeldedatum" type="hidden" value="<?php echo $datum; ?>"> <input class="confirm" name="Confirm" type="checkbox" tabindex="-1" autocomplete="do-not-autofill"> <label>Alle Angaben richtig? Dann los!</label> <input id="senden" type="submit" name="myButton"></form></section> <?php 
  $eintrag = "data";
  $json = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/inoutpm?token=7410582333ed2e6cf13a18025da827");
  $json_data = json_decode($json,true);
  $datensaetze = substr_count($json, $eintrag);
  for ($zaehler = 0; $zaehler <= $datensaetze; $zaehler++) {
    $gesamtanzahl += $json_data[$zaehler]["data"]["Personenanzahl"];
  }
  $frei = 40 - $gesamtanzahl;
?> <script>const meldung = document.querySelector(".results span");
    if (<?php echo json_encode($frei); ?> <= 0 ) {
      meldung.innerText = 0;
    } else { 
      meldung.innerText = <?php echo json_encode($frei); ?>;
    }

    if ((<?php echo json_encode($gesamtanzahl); ?> >=40)) {
      document.getElementById("formular").style.display = "none";
      document.getElementById("voll").innerText = "Leider ist die maximale Besucheranzahl für diese Veranstaltung schon erreicht!";
      }</script><script src="../assets/js/inout_pm.js?v=f73f49f23e332fb5fdc48136c521af5d"></script></body></html>