var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});


var btnAbrirPopup2 = document.querySelectorAll('.btn-abrir-popup2'),
	overlay2 = document.getElementById('overlay2'),
	popup2 = document.getElementById('popup2'),
	btnCerrarPopup2 = document.getElementById('btn-cerrar-popup2');

	for (var i = 0; i < btnAbrirPopup2.length; i++){

btnAbrirPopup2[i].addEventListener('click', function(){
	overlay2.classList.add('active');
	popup2.classList.add('active');
});

btnCerrarPopup2.addEventListener('click', function(e2){
	e2.preventDefault();
	overlay2.classList.remove('active');
	popup2.classList.remove('active');
});
	}

	function cierra() {
		document.getElementById("btnabrir").addEventListener("click", function () {
		  document.getElementsByClassName("fondo_transparente")[0].style.display = "block";
		  return false;
		});
	  }
	  
	  function NO() {
		document.getElementById("btn-no").addEventListener("click", function () {
		  document.getElementsByClassName("fondo_transparente")[0].style.display = "none";
		});
	  }

