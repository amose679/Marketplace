$( document ).ready(function() {
//   $( "button" ).click(function() {
//   confirm('here');
//   $( this ).remove();
// });

});

//<button class=listButton> X </button>

function test(){
	confirm('here');
	var z = document.getElementById("special").remove();
	(z).remove();
}

function addKeyword(n){
  var x=document.forms["myForm"][n].value;
  var y = '<li class=i onclick=rf(this)>'+x+' </li>';
  var z = document.getElementById("special").remove();
  (z).remove();
  $('#list').append(y);
  y='<li class="i" id="special" onclick="special(this)">+</li>' ;
  $('#list').append(y); 

}
function specialAddKeyword(n, toDelete){
  var x=document.forms["myForm"][n].value;
  var y = '<li class=i onclick=rf(this)>'+x+' </li>';
  $('#list').append(y);
  (toDelete).remove();
  y='<li class="i" id="special" onclick="special(this)">+</li>' ;
  $('#list').append(y);
}


function deleteKeyword(e){
	(e).remove();
	return false;
}

function special(e){
	//prompt('yeah?');
	(e).remove();
	var y = '<input type="text" name="specialInputName" id="specialInput" autofocus onchange="specialAddKeyword(name, this)">' ;
	$('#list').append(y);

	//$('#list').append(y);
}

function rf(e){
	//alert(e.id);
	//alert('yo');
	(e).remove();
	return false;
}
