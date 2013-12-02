// $( document ).ready(function() {
//   $( "button" ).click(function() {
//   confirm('here');
//   $( this ).remove();
// });
// });

//<button class=listButton> X </button>

function addKeyword(){
  var x=document.forms["myForm"]["fname"].value;
  //confirm('here');
  var y = '<li class=i>'+x+' </li>';
  //var y = '<li>'+x+'</li>';
  $('#list').append(y);
}
function deleteKeyword(){
  // var x=document.forms["myForm"]["fname"].value;
  // //confirm('here');
  // var y = '<li class=i>'+x+' <img src=closeButton.jpg id=im> onclick=deleteKeyword()</li>';
  // //var y = '<li>'+x+'</li>';
  this.getElementID;
  //confirm("workin?");
}
function rf(){
	confirm('here');
	//confirm(z);
	$('li', this).remove();
	//$(a).remove();
}

//confirm('here');


