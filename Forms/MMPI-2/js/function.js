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