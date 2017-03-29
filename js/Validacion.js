/*validacion de formularios con javascript 22-01-2017*/
//mensajes a mostrar
var mensajes = ["El formulario no puede estar vacio, ni caracteres especiales","El espacio no puede estar vacio","El espacio no puede estar vacio","El espacio no puede estar vacio"];
var objetos = null;
function crearAviso(msj, pos){
	objetos = document.createElement("DIV");
	var t = document.createTextNode(msj);
	objetos.appendChild(t);
	objetos.className = "errormsj";
	objetos.style.top = pos+"px";
	document.body.appendChild(objetos);
}
function destruirAviso(){
	document.body.removeChild(objetos);
	objetos = null;
}

function validar(event){
	var form = document.forms[0];
	var l = form.length-1;
	var n = 218;
	if(objetos != null){
		destruirAviso(objetos);
	}
	for(i=0; i<=l; i++){
		if(!form[i].validity.valid){
			crearAviso(mensajes[i], n);
			event.preventDefault();
			break;
		}
		n+=50;
	}
}



