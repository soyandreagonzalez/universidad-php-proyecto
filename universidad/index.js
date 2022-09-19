var selectFacultad = document.getElementById('facultad');

var radioPrograma1 = document.getElementById('analisis_muestras');
var radioPrograma2 = document.getElementById('medio_ambiente');
var radioPrograma3 = document.getElementById('quimica_industria');
var radioPrograma4 = document.getElementById('diseño_grafico');
var radioPrograma5 = document.getElementById('diseño_industrial');
var radioPrograma6 = document.getElementById('diseño_vestuario');
var radioPrograma7 = document.getElementById('ingenieria_ambiental');
var radioPrograma8 = document.getElementById('ingenieria_quimica');
var radioPrograma9 = document.getElementById('ingenieria_sistemas');

var selectedOption = selectFacultad.options[select.selectedIndex];

if (selectedOption.value == "") {
    radioPrograma1.disabled = true;
    radioPrograma2.disabled = true;
    radioPrograma3.disabled = true;
    radioPrograma4.disabled = true;
    radioPrograma5.disabled = true;
    radioPrograma6.disabled = true;
    radioPrograma7.disabled = true;
    radioPrograma8.disabled = true;
    radioPrograma9.disabled = true;
}

function disabledRadios(){
    selectFacultad.addEventListener('change',
    function(){
      var selectedOption = this.options[select.selectedIndex];
      console.log(selectedOption.value);
      if (selectedOption.value == "") {
          radioPrograma1.disabled = true;
          radioPrograma2.disabled = true;
          radioPrograma3.disabled = true;
          radioPrograma4.disabled = true;
          radioPrograma5.disabled = true;
          radioPrograma6.disabled = true;
          radioPrograma7.disabled = true;
          radioPrograma8.disabled = true;
          radioPrograma9.disabled = true;
      }
      if (selectedOption.value == "ciencias") {
          radioPrograma1.disabled = false;
          radioPrograma2.disabled = false;
          radioPrograma3.disabled = false;
          radioPrograma4.disabled = true;
          radioPrograma5.disabled = true;
          radioPrograma6.disabled = true;
          radioPrograma7.disabled = true;
          radioPrograma8.disabled = true;
          radioPrograma9.disabled = true;
      }
      if (selectedOption.value == "diseño") {
          radioPrograma4.disabled = false;
          radioPrograma5.disabled = false;
          radioPrograma6.disabled = false;
          radioPrograma1.disabled = true;
          radioPrograma2.disabled = true;
          radioPrograma3.disabled = true;
          radioPrograma7.disabled = true;
          radioPrograma8.disabled = true;
          radioPrograma9.disabled = true;
      }
      if (selectedOption.value == "ingenieria") {
          radioPrograma7.disabled = false;
          radioPrograma8.disabled = false;
          radioPrograma9.disabled = false;
          radioPrograma1.disabled = true;
          radioPrograma2.disabled = true;
          radioPrograma3.disabled = true;
          radioPrograma4.disabled = true;
          radioPrograma5.disabled = true;
          radioPrograma6.disabled = true;
      }
    });
}
disabledRadios();


