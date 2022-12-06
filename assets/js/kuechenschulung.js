function handleFormSubmit(event) {
    "use strict";
    event.preventDefault();
    const elem = document.getElementById("senden");
    elem.classList.add("mitty");
    elem.value = "Es wird gesendet ...";
    const data = new FormData(event.target);
    const formJSON = Object.fromEntries(data.entries());
    const tophp = JSON.stringify(formJSON);
    //formJSON.Arzneimittel = data.getAll("Arzneimittel");
    const daten = `{ "form":` + JSON.stringify(formJSON, null, 2) + `}`;

    fetch("https://w18web2.uber.space/cockpit-master/api/forms/submit/kuechenschulung?token=dc448dd075e647370bf5467160dd01", {
        method: "post",
        headers: {"Content-Type": "application/json"},
        body: daten
    }).then(function (response) {
        if (response.ok) {
            fetch("../mail_alpha.php", {
                method: "POST",
                body: tophp
            }).then(function (response) {
                if (response.ok) {
                    location.href = "../erfolg";
                } else {
                    window.alert("Hoppla, scheinbar können gerade keine Bestätigungs-Mails versendet werden. Macht nichts deine Daten sind bei uns angekommen. Schließ einfach diesen Warnhinweis und du wirst gleich weitergeleitet");
                    setTimeout(() => { location.href = "../erfolg"; }, 1000);
                    }
            }
            );
        } else {
            window.alert("Hups da ist was schiefgelaufen. Check bitte nochmal deine Einträge und korrigiere sie gegebenenfalls. Falls es trotzdem nicht funktionieren sollte, dann melde dich bei webmaster@cg-ellmendingen.de");
        }
    });
}
const form = document.querySelector(".contact-form");
form.addEventListener("submit", handleFormSubmit);