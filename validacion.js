function validarFormulario(){
    let nombre = document.getElementById("nombre").value;
    let correo = document.getElementById("correo").value;
    let mensaje = document.getElementById("mensaje").value;
    let validarCorreo= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
    let esValida = validarCorreo.test(correo)


    if(nombre === "" || correo === "" || mensaje === ""){
        alert("llene la wea po mi rey ")
        return false;
    }
    if(esValida==false ){
 		alert('mala tu wea');
		return false;
	}




}