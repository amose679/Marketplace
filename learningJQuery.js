$( document ).ready(function() {
('button').disabled=true;
});

//<button class=listButton> X </button>

function test(){
	confirm('here');
	//var z = document.getElementById("special").remove();
	document.getElementById('woo').disabled=true;
	//(z).disabled=true;// = 'disabled';
	//(z).remove();
}

function addKeyword(n){
  var x=document.forms["myForm"][n].value;
  var y = '<li class=i onclick=rf(this)>'+x+' </li>';
  var z = document.getElementById("special");
  (z).remove();
  $('#list').append(y);
  y='<li class="i" id="special" onclick="special(this)">+</li>' ;
  $('#list').append(y); 

}
function specialAddKeyword(n, toDelete){
  //confirm('enting specialAddKeyword');
  var x= document.forms["myForm"][n].value;
  var y = '<li class=i onclick=rf(this)>'+x+' </li>';
  (toDelete).remove();  //SWITCH THIS ORDERING ON THE MAIN COPY
  $('#list').append(y);
  var z='<li class="i" id="special" onclick="special(this)">+</li>' ;
  $('#list').append(z);
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
	//confirm('ending special');

	//$('#list').append(y);
}

function rf(e){
	//alert(e.id);
	//alert('yo');
	(e).remove();
	return false;
}

