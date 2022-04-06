// call Element
let dropbtn = document.querySelector('.dropbtn');
/*toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


let addBtn = document.querySelector('.masaqBtn1');
let newMasaq = document.querySelector('.newMasaq');
function addFunction() {
    newMasaq.style. display=" block";
  }
addBtn.onclick=addFunction;


