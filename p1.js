function Comprobacion(){

 var comptlf = /^([0-9]+){9}$/;
 var compmail = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;


//comrobacion del email
if(document.getElementById("Email").value !=0){
  if (document.getElementById("Email").value.trim().search(compmail) != 0 ){
    alert("El correo electrónico es incorrecto ");
    return false;
  }
}

//comprobacion de las contraseñas
    if(document.getElementById("Pass").value.trim() != document.getElementById("Pass1").value.trim()){
      alert("Las contraseñas no coinciden")
      return false;
    }


//comprobacion del telefono
if(document.getElementById("tlf").value !=0){
  if(document.getElementById("tlf").value.trim().length != 9 || document.getElementById("tlf").value.trim().search(comptlf) != 0){
    alert("El telefono es incorrecto");
    return false;
  }
 }


//Servidor
 if(document.getElementById("phpinfo").checked){
   document.getElementById("formulario").action = "phpinfo.php";

 }else if(document.getElementById("php").checked){
    document.getElementById("formulario").action = "p1.php";

 }

//comprobacion de aceptar los terminos de la pagina
  if(!(document.getElementById("term").checked)){
    alert("Lee y acepta los terminos y condiciones de la pagina");
    return false;
  }

//Metodo

if(document.getElementById("metodoGet").checked){

  document.getElementById("formulario").method="GET";

  if(document.getElementById("multipart").checked){
      alert("Esta codificacion no esta disponible para este metodo de envio")
      return false;
  }else{
      document.getElementById("formulario").enctype = "application/x-www-form-urlencoded";
    }


}else {

	document.getElementById("formulario").method="POST";

    if(document.getElementById("multipart").checked){
        document.getElementById("formulario").enctype = "multipart/form-data";

    }else if(document.getElementById("urlencoded").checked){
        document.getElementById("formulario").enctype = "application/x-www-form-urlencoded";
      }

 }


  var date = new Date();
  //hora
  document.getElementById("hora").value = date.getHours()+":"+date.getMinutes()+":"+date.getSeconds();

  //version navegador
 document.getElementById("navegador").value=navigator.userAgent;


 return true;
}


//onclick
function selectAll(fuente){
	var items=document.getElementsByName('genero[]');

  for(var i=0; i<items.length; i++){

    if(document.getElementById("todo").checked){

      items[i].checked=fuente.checked;
    }else {
						items[i].checked=fuente.unchecked;
          }

		}

	}
