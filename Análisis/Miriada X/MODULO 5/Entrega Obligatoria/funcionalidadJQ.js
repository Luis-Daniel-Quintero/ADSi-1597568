
//saludo
var fecha = new Date();
  var msj;
  if      (fecha.getHours() < 7)  { msj = "Buenas noches";}
  else if (fecha.getHours() < 12) { msj = "Buenos días";}
  else if (fecha.getHours() < 20) { msj = "Buenas tardes";}
  else                            { msj = "Buenas noches";}
 document.getElementById("h1").innerHTML    = msj;


//Capturar Datos 
$(function inic() { num = document.getElementById ("n1");});

//Elevar al Cuadrado
$(function () {
	$("#n1").on("click", function(){$("#n1"),val("");});
	$("#bot1").on("click", function() {
									var num = $("#n1");
									num.val(num.val()*num.val());
									});
});

//Calcular inverso
$(function () {
	$("#n1").on("click", function(){$("#n1"),val("");});
	$("#bot2").on("click", function() {
									var num = $("#n1");
									num.val(1/num.val());
									});
});

//Raíz Cuadrada
$(function () {
	$("#n1").on("click", function(){$("#n1"),val("");});
	$("#bot3").on("click", function() {
									var num = $("#n1");
									num.val(Math.sqrt(num.val(),2));
									});
});

//Parte Entera
$(function (){
	$("#n1").on("click", function(){$("#n1"),val("");});
	$("#bot4").on("click", function() {
									var num = $("#n1");
									if ($(num >= 0)) {num.val(Math.floor(num.val()));}
									else {num.val(-Math.ceil(num.val()));}
									});
});

// Potencia N del Número 2 
$(function () {
	$("#bot5").on("click",function() {
	      	var num = $("#n1");
	      	var acc = num.val();
            num.val(Math.pow(2,+acc));
            });
});

// Factorial de N
$(function () {
	$("#bot6").on("click",function() {
	      	var num = $("#n1");
	      	var resultado = 1;
	      	var acc = num.val();
            for(var i=1; i<= +acc; i++) { resultado *= i; }
            num.val(resultado);
            });
});

// Suma
$(function () {
	$("#bot7").on("click",function() {
	        var num = $("#n1");
	        acc = num.val();
	        op = "+";
	        num.val("");
	      	});
});

// Resta
$(function () {
	$("#bot8").on("click",function() {
	        var num = $("#n1");
	        acc = num.val();
	        op = "-";
	        num.val("");
	    	});
});

// Multiplicar
$(function () {
	$("#bot9").on("click",function() {
	        var num = $("#n1");
	        acc = num.val();
	        op = "*";
	        num.val("");
	      	});
});

// Dividir
$(function () {
	$("#bot10").on("click",function() {
	        var num = $("#n1");
	        acc = num.val();
	        op = "/";
	        num.val("");
	      	});
});

// Potencia
$(function () {
	$("#bot11").on("click",function() {
	        var num = $("#n1");
	        acc = num.val();
	        op = "^";
	        num.val("");
	      	});
});

//Sumatoria
$(function () {
	$("#bot12").on("click",function() {
			var num = $("#n1");
			var lista1 = num.val();
			var lista2 = lista1.split(',');
		var i = 0, acc = 0;
		num.val("");
		while (i < lista2.length)
			{acc += +lista2[i];i++;}
		num.val(acc);
		});
});

// Productoria
$(function () {
	$("#bot13").on("click",function() {
			var num = $("#n1");
			var lista1 = num.val();
			var lista2 = lista1.split(',');
		var i = 0, acc = 1;
		num.val("");
		while (i < lista2.length)
			{acc *= +lista2[i];i++;}
		num.val(acc);
		});
});

// Limpiar Cajetin
$(function () {
	$("#bot14").on("click", function() {
									var num = $("#n1");
									num.val("")});
									});

// Operador y Operaciones
$(function () {
	$("#bot15").on("click",
	      function() {
	            var num = $("#n1");
	            if (op === "+") {num.val(+acc + +num.val()); acc = ("");}
	            if (op === "-") {num.val(+acc - +num.val()); acc = ("");}
	            if (op === "*") {num.val(+acc * +num.val()); acc = ("");}
	            if (op === "/") {num.val(+acc / +num.val()); acc = ("");}
	            if (op === "^") {num.val(Math.pow(acc,num.val()));}
	      		}); 
});