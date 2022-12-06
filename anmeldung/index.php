<!DOCTYPE html><html lang="de"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Christliche Gemeinschaft Ellmendingen</title><link rel="icon" type="image/svg+xml" href="../assets/image/favicon.svg?v=b989e2e6a4966bee84f84b88aa97283e"><link href="../assets/css/style.css?v=e436b7ec2daeb0e18ed7be498ea2741a" rel="stylesheet" type="text/css"></head><body id="openNav" class="site"><div class="logo"><a href="../"><img src="../assets/image/Icon_CG_100K.svg"></a></div><div class="menu"><nav><ul class="menu_close"><li><a href="../#aktuelles">Aktuelles</a></li><li><a class="link">Gemeinde</a><ul><li><a href="../ueberuns">Über uns</a></li><li><a href="../#step">Nächster Schritt</a></li><li><a href="../lebensfelder">Lebensfelder</a></li><li><a href="../termine">Kalender</a></li></ul></li><li><a class="link">Gottesdienst</a><ul><li><a href="../gottesdienst">Vor Ort</a></li><li><a href="../media">Media</a></li></ul></li><li><a href="../#modal_gebet">Gebet</a></li><li><a href="../kontakt">Kontakt</a></li><li class="mobile_toggle"><a href="../impressum">Impressum</a></li><li class="mobile_toggle"><a href="../datenschutz">Datenschutz</a></li></ul></nav></div><div class="menu__toggler"><span></span></div><div id="main"><div class="main_site"><div class="main_site-title"><h1 class="font-bold">Anmeldung</h1></div><div class="main_site-beschreibung"><p>Hier kannst du dich zu unseren Veranstaltungen anmelden.</p></div></div><div class="submenu_site anmeldung"><div class="anmeldung_container"><h2>Gottesdienste</h2><p class="text-center">Es sind für unsere Gottesdienste <span class="font-bold">keine</span> Anmeldungen mehr nötig</p></div><div class="anmeldung_container"><h2>Kindergottesdienste</h2><a id="caldesktop" href="https://w18.church.tools/?q=churchcal&amp;category_id=81#/CalView/" target="_blank" rel="nofollow noopener">Hier kannst du dich informieren, wann Schatzinsel (Kinderprogramm) oder Familiengottesdienste stattfinden.</a> <a id="calmobil" href="https://w18.church.tools/?q=churchcal&amp;category_id=81&amp;minical=true&amp;viewname=eventView#/CalView/" target="_blank" rel="nofollow noopener">Hier kannst du dich informieren, wann Schatzinsel (Kinderprogramm), Familiengottesdienste oder Hauskindergottesdienste stattfinden.</a><p>Um dich generell über unsere Kindergottesdienst-Angebote zu informieren, klick einfach auf folgenden <a href="../#modal_kigo">Link</a>.</p><p class="text-center">Es sind für unsere Kindergottesdienste/Familiengottesdienste <span class="font-bold">keine</span> Anmeldungen mehr nötig</p></div><div class="anmeldung_container"><h2>Sonstige Veranstaltungen</h2><div class="container grid"><a href="../cafeanmeldung" rel="nofollow noopener" target="_blank" class="show-on-scroll" id=""><div class="submenu_site-item anmeldung_cafeanmeldung anmeldung"><p class="rm font-bold"><mark>Anmeldung Café W18</mark></p><p class="rm"><mark>Sonntag | 14.30 Uhr</mark></p></div></a><a href="../hg" rel="nofollow noopener" target="_blank" class="show-on-scroll" id=""><div class="submenu_site-item anmeldung_hg anmeldung"><p class="rm font-bold"><mark>Anmeldung Hörendes Gebet Online</mark></p><p class="rm"><mark>Bei „Räume für Heilung und Hörendes Gebet“-ONLINE hast du die Möglichkeit, für dich betend dienen zu lassen. Die Beter werden ggf. für Dich um Heilung beten oder empfangene Bilder, Eindrücke, Bibelverse an Dich weitergeben (im Nachgang auch schriftlich per E-Mail) und Dich segnen. So oder so wirst Du anhand des Dienstes gesegnet. Wir haben pro Abend zwischen 19.30 und 22.00 Uhr mehrere Gebetsslots von ca. 30 min. Wenn du dich angemeldet hast, wird dir neben einer Anmeldebestätigung auch noch bis</mark></p></div></a></div></div></div><div class="clear"></div><footer><div class="footer_left"><div class="copyright"><p>©&nbsp;Christliche Gemeinschaft Ellmendingen e.V.</p></div><div class="footer_menu"><p><a href="../impressum">Impressum</a></p><p><a href="../datenschutz">Datenschutz</a></p></div></div><div class="footer_right"><div class="sponsoren"><img src="../assets/image/IMG_20200714_192141.jpg"> <a href="https://www.ninobility.com/Sponsor/1_77961" target="_blank" rel="noopener nofollow"><p class="font-small font-bold text-center">Diese Sponsoren haben<br>unser Fahrzeug ermöglicht!</p></a></div></div></footer></div> <?php
    $eintrag = "data";
    $json = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/gd?token=7410582333ed2e6cf13a18025da827");
    $json_data = json_decode($json,true);
    $datensaetze = substr_count ( $json, $eintrag);
    for ($zaehler = 0; $zaehler <= $datensaetze; $zaehler++) {
      $gesamtanzahl += $json_data[$zaehler]["data"]["Personenanzahl"];
    }
    $frei = 300 - $gesamtanzahl;
  ?> <?php
    $eintrag2 = "data";
    $json2 = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/gd2?token=7410582333ed2e6cf13a18025da827");
    $json_data2 = json_decode($json2,true);
    $datensaetze2 = substr_count ( $json2, $eintrag2);
    for ($zaehler2 = 0; $zaehler2 <= $datensaetze2; $zaehler2++) {
      $gesamtanzahl2 += $json_data2[$zaehler2]["data"]["Personenanzahl"];
    }
    $frei2 = 300 - $gesamtanzahl2;
  ?> <?php
    $eintrag7 = "data";
    $json7 = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/gd3?token=7410582333ed2e6cf13a18025da827");
    $json_data7 = json_decode($json7,true);
    $datensaetze7 = substr_count ( $json7, $eintrag7);
    for ($zaehler7 = 0; $zaehler7 <= $datensaetze7; $zaehler7++) {
      $gesamtanzahl7 += $json_data7[$zaehler7]["data"]["Personenanzahl"];
    }
    $frei7 = 300 - $gesamtanzahl7;
  ?> <?php
    $eintrag3 = "data";
    $json3 = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/famgodi?token=7410582333ed2e6cf13a18025da827");
    $json_data3 = json_decode($json3,true);
    $datensaetze3 = substr_count ( $json3, $eintrag3);
    for ($zaehler3 = 0; $zaehler3 <= $datensaetze3; $zaehler3++) {
      $gesamtanzahl3 += $json_data3[$zaehler3]["data"]["Personenanzahl"];
    }
    $frei3 = 120 - $gesamtanzahl3;
  ?> <?php
    $eintrag4 = "data";
    $json4 = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/kp1?token=7410582333ed2e6cf13a18025da827");
    $json_data4 = json_decode($json4,true);
    $datensaetze4 = substr_count ( $json4, $eintrag4);
    for ($zaehler4 = 0; $zaehler4 <= $datensaetze4; $zaehler4++) {
      $gesamtanzahl4 += $json_data4[$zaehler4]["data"]["Personenanzahl"];
    }
    $frei4 = 30 - $gesamtanzahl4;
  ?> <?php
    $eintrag5 = "data";
    $json5 = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/kp2?token=7410582333ed2e6cf13a18025da827");
    $json_data5 = json_decode($json5,true);
    $datensaetze5 = substr_count ( $json5, $eintrag5);
    for ($zaehler5 = 0; $zaehler5 <= $datensaetze5; $zaehler5++) {
      $gesamtanzahl5 += $json_data5[$zaehler5]["data"]["Personenanzahl"];
    }
    $frei5 = 30 - $gesamtanzahl5;
  ?> <?php
    $eintrag6 = "data";
    $json6 = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/kp3?token=7410582333ed2e6cf13a18025da827");
    $json_data6 = json_decode($json6,true);
    $datensaetze6 = substr_count ( $json6, $eintrag6);
    for ($zaehler6 = 0; $zaehler6 <= $datensaetze6; $zaehler6++) {
      $gesamtanzahl6 += $json_data6[$zaehler6]["data"]["Personenanzahl"];
    }
    $frei6 = 30 - $gesamtanzahl6;
  ?> <?php
    $eintrag8 = "data";
    $json8 = file_get_contents("https://w18web2.uber.space/cockpit-master/api/forms/export/kp4?token=7410582333ed2e6cf13a18025da827");
    $json_data8 = json_decode($json8,true);
    $datensaetze8 = substr_count ( $json8, $eintrag8);
    for ($zaehler8 = 0; $zaehler8 <= $datensaetze8; $zaehler8++) {
      $gesamtanzahl8 += $json_data8[$zaehler8]["data"]["Personenanzahl"];
    }
    $frei8 = 30 - $gesamtanzahl8;
  ?> <script></script><script src="../assets/js/script.js?v=83e364af9efc2aedac9aee04e2f2b09c"></script></body></html>