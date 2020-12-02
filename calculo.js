var appForm = document.querySelector("#app form");

appForm.onsubmit = dolar2cent;

function dolar2cent(e){
	e.preventDefault();

	var input_dolar = document.getElementById("input_dolar").value;
	var result = document.getElementById("result");
	result.innerHTML = "";

	var result_moedas = document.getElementById("result-moedas");
	result_moedas.innerHTML = "";

	var valor_reais = parseFloat(input_dolar)*5.36;

	result.innerHTML = valor_reais;

	var moedas = conversao(valor_reais);

  } 