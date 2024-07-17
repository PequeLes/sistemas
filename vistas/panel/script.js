const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});
function Showhiden() {
  var clas = document.getElementsByClassName('nav-tap');
  if (clas.style.visibility == hidden) {
    clas.style.visibility = "visible";
  } else {
    clas.style.visibility = "hidden";
  }
}

function confirmarEnvio() {
  if (confirm("¿Está seguro de que desea guardar los cambios?")) {
      document.getElementById('editForm').submit();
  }
}
