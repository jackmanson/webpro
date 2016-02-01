// Estas funciones osn para el botos desplegable
$(".submenu").click(function(){
	$(this).children("ul").slideToggle();
})

$("ul").click(function(p){
	p.stopPropagation();
}) 

// Funciones de registro de usuario -- desplegable
$("#menuregistro").click(function(){ 
	$(".caja-registro").slideDown();
})

$(".barra-gris").click(function(){ 
	$(".caja-registro").slideUp();
})

$(".bxslider").click(function(){ 
	$(".caja-registro").slideUp();
})

$("header").click(function(){ 
	$(".caja-registro").slideUp();
})

$("section").click(function(){ 
	$(".caja-registro").slideUp();
})

$("footer").click(function(){ 
	$(".caja-registro").slideUp();
})

$("#menuactividad").click(function(){
	$(".caja-registro").slideUp();
})



// Funciones de formulario de actividad de usuario
$("#menuactividad").click(function(){
	$(".caja-actividad").slideToggle();
})

$(".barra-gris").click(function(){ 
	$(".caja-actividad").slideUp();
})

$(".bxslider").click(function(){ 
	$(".caja-actividad").slideUp();
})

$("header").click(function(){ 
	$(".caja-actividad").slideUp();
})

$("section").click(function(){ 
	$(".caja-actividad").slideUp();
})

$("footer").click(function(){ 
	$(".caja-actividad").slideUp();
})

$("#menuregistro").click(function(){
	$(".caja-actividad").slideUp();
})


// Funciones del buscador artex$("#buscar").val()
/*
var bus = $("#buscar").val().length;

if( bus > 0) {
	$(".caja-busqueda").slideToggle();
}else{
	$(".caja-busqueda").slideUp();
};
*/

