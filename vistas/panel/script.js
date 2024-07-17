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

<<<<<<< HEAD
function confirmarEnvio() {
  if (confirm("¿Está seguro de que desea guardar los cambios?")) {
      document.getElementById('editForm').submit();
  }
}
=======


>>>>>>> f82e5ae3989d88c2aae4f2c5919c3158910e4459
