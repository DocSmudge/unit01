function toggleMenu() {
  document.getElementById("primaryNav").classList.toggle("open");
  document.getElementById("hamburgerButton").classList.toggle("open");
}

const x = document.getElementById("hamburgerButton");

x.onclick = toggleMenu;

//-------------------------------------------------------------------------------

var menuItem = document.querySelectorAll("ul#primaryNav li a");
var myCurrentPage = location.href;
var menuLength = menuItem.length;
var i;
for (i = 0; i < menuLength; i++) {
  if (menuItem[i].href === myCurrentPage) {
    menuItem[i].parentNode.className = "active";
    menuItem[i].parentNode.parentNode.parentNode.className = "parent";
  }
}

