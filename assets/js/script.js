const toggler   = document.querySelector('.menu__toggler');
const menu      = document.querySelector('.menu');
const menuclose = document.querySelector('.menu_close');

/*
* Toggles on and off the 'active' class on the menu
* and the toggler button.
*/
menuclose.addEventListener('click', () => {
    toggler.classList.remove('active');
    menu.classList.remove('active');
})

toggler.addEventListener('click', () => {
    toggler.classList.toggle('active');
    menu.classList.toggle('active');
})

document.addEventListener('keyup', function(e) {
    if(e.key === "Escape") {
        const modals = document.querySelectorAll('.close-btn');
        for (const modal of modals) {
            modal.click();
        }
    }
});

/*
* transformanimation
*/
const callback = function(entries) {
    entries.forEach(entry => {
      entry.target.classList.toggle("is-visible");
    });
  };
  
const observer = new IntersectionObserver(callback);
const targets = document.querySelectorAll(".show-on-scroll");

targets.forEach(function(target) {
    observer.observe(target);
  });


  const dialog = document.getElementById("popup");

  window.onload = function () {
    dialog.showModal();
  };


  document.getElementById("close-dialog").addEventListener("click", () => {
      dialog.close();
  });