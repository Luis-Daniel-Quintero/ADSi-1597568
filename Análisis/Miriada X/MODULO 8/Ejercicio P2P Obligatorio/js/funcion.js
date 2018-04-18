  var t, actual;
  localStorage.galeriaLoc = localStorage.galeriaLoc || '[]';  
  var galeriaLoc     = JSON.parse(localStorage.galeriaLoc);    
           
function select(i){
   actual = i;

  $("nav a")
    .removeClass("on off")
    .addClass(function(j){return(j===i)?"on":"off";});

  $("#persona").html(galeria[i].persona);
  $("#frase").html(galeria[i].frase);
  $("#foto").attr("src", galeria[i].foto);

  clearTimeout(t);
  t = setTimeout( function(){select((i + 1) % galeria.length);}, 2000);
}

function generar_selector(){ // regenera la botonera
  var selector = $("#selector");

  selector.html("");
  
  galeria.forEach(function(elem,i) {
    selector.append("<li><a onClick='select("+i+")'></a></li>");
  });

}


$(function (){
  var visitas = $("#visitas");
  localStorage.visitas = localStorage.visitas || 0;              
  localStorage.setItem("visitas", parseInt(localStorage.getItem("visitas") || 0 ) + 1);
  visitas.html(localStorage.visitas);
  
  if (galeriaLoc.length > 0)   // En caso de que existan en variables Locales se reemplaza la galeria
     { 
      galeria = galeriaLoc;
     }
    generar_selector();
      
  $("#editar").on("click", function(){
    clearTimeout(t);
    if (galeria.length > 0) 
      {
        $("#persona_d").html(galeria[actual].persona);
        $("#frase_d").html(galeria[actual].frase);
        $("#foto_d").html(galeria[actual].foto);
      }
    $("#datos").css("display", "block");
  })

//Función para Nuevos Elementos
  $("#nuevo").on("click", function(){
    $("#datos").css("display", "none");

    actual = galeria.push({
       persona:$("#persona_d").html(),
       frase:$("#frase_d").html(),
       foto:$("#foto_d").html()
    }) - 1;
    generar_selector();
    select(actual);
  })

// Funcion para Eliminar elementos
  $("#borrar").on("click", function(){
    $("#datos").css("display", "none");

    galeria.splice(actual, 1);
    generar_selector();
    if (galeria.length > 0) {select(0);
                             $("#borrar").attr("title","Eliminar Cita Actual ");
                            }
    else if (galeria.length === 0) 
            {
               $("#persona").html("");
               $("#frase").html("");
               $("#foto").attr("src","");
               $("#borrar").attr("title","No Hay Citas Para Eliminar");            }
  })

// Funcion Para Actualizar Datos de Citas
  $("#guardar").on("click", function(){
    $("#datos").css("display", "none");

      galeria[actual].persona = $("#persona_d").html();
      galeria[actual].frase = $("#frase_d").html();
      galeria[actual].foto = $("#foto_d").html();      
      generar_selector();
      select(0);
      })

// Funcion Para Guardar la BD Serializada con JSON
  $("#BaseDat").on("click", function(){
    $("#datos").css("display", "none");

    var respuesta = confirm("¿Quiere Guardar los datos de las Citas en la BD Local ? ")
    if (respuesta===true) 
       {
         localStorage.removeItem("galeriaLoc");
         localStorage.galeriaLoc = localStorage.galeriaLoc || '[]'; 
         galeriaLoc   = JSON.parse(localStorage.galeriaLoc);     

         for (j=0; j < galeria.length;  j++)
         {
             galeriaLoc.push (galeria[j]);
         }
         localStorage.galeriaLoc = JSON.stringify(galeriaLoc);
         alert("Datos de Citas Guardados en BD Local, estarán disponibles la proxima vez que abra el navegador");
         select(0);
       }
})


// Funcion Para Regenerar las Citas Originales
  $("#RegCitas").on("click", function(){
    $("#datos").css("display", "none");
        var respuesta = confirm("¿Quiere Borrar la BD Local y  Regenerar Citas con Valores Iniciales ? ")
        if (respuesta===true) 
          {
           localStorage.removeItem("galeriaLoc");
           galeria = fnClone(galeriaInicial);
           generar_selector();
           select(0);
           alert("Las citas Originales estan disponibles, se borro BD local de Citas...");
         }
})



// Para cuando le click sobre el selector
  $("#selector").on("click", function(){
     $("#datos").css("display", "none");
  })

  select(0);
    
});