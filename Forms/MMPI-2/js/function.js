if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href)

}
function enable(){
document.getElementById("boton").disabled=false;
}

function exit_Form()
{
	if(confirm("¿Estás seguro que deseas salir?"))
	{
		return true;
	}
	return false;
}

userForm.addEventListener('input',()=>{
    if(nombres1.value.length>0 && apellido1.value.length>0 && apellido2.value.length>0 &&
        sexo1.value.length>0 && inputAddress.value.length>0 && interior.value.length>0 &&
        city.value.length>0 &&inputState.value.length>0 &&postal.value.length>0 &&
        bday.value.length>0){
        button_submit.removeAttribute('disabled');
    }
    else{
        button_submit.setAttribute('disabled','disabled');
    }
});