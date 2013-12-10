var counter=1;

$( document ).ready(function() {
	$( "#bar" ).click(function() {
		var e = event.target.id;
		//open the bar
		if(counter % 2 === 1){
				counter=counter+1;
				$('#bar').animate({
				    'width' : "+=140px"
				});
				$('#arrow-right').delay(200).toggle(0);
				$('#arrow-left').delay(200).toggle(0);
				$('.to-appear').delay(200).toggle(0);
				$('#close').delay(200).toggle(0);
				$('.label').delay(200).toggle(0);
				// $('.arrow-down-teal-bar').delay(200).toggle(0);
				$("#bar").css('cursor', 'auto');		
		
			}
			//close the bar
			else{
		}
	});
	$( "#close" ).click(function() {
		counter = counter +1;
		// var d = document.getElementById("bar");
		$("#bar").css('cursor', 'pointer');				
		$('#bar').animate({
			'width' : "-=140px"
		});
		$('#arrow-left').delay(200).toggle(0);	
		$('#arrow-right').delay(200).toggle(0);
		$('.to-appear').delay(200).toggle(0);
		$('#close').delay(100).toggle(0);
		$('.label').delay(200).toggle(0);
		// $('.arrow-down-teal-bar').delay(200).toggle(0);
		return false;
		// e.stopPropogation();
	});
	// $( "#blue-bar" ).click(function() {
	// 	$('.bar-table').delay(200).toggle(0);
	// 	return false;
	// });
	$('.ii').click(function(){
		// alert('here');
	});

});

//<button class=listButton> X </button>

function test(){
	// confirm('here');
	var z = document.getElementById("special").remove();
	(z).remove();
}


function needEnable(){
	document.getElementById('searchBar').disabled=false;
	document.getElementById('searchBar').setAttribute('style', 'backrgound-color:white;');
	$('#searchBarCont').hide();
	$('.categoryHL').hide();
	$('#searchBarCont').show(); //fadeIn('slow');
	$('.categoryNL').show() //fadeIn('slow');
	document.getElementById('need').setAttribute('style', 'border:1px solid #59D0D0;color: #59D0D0;');
	document.getElementById('have').setAttribute('style', 'border:1px solid #939597;color: #939597;');
}

function haveEnable(){
	document.getElementById('searchBar').disabled=false;
	document.getElementById('searchBar').setAttribute('style', 'backrgound-color:white;');
	$('#searchBarCont').hide();
	$('.categoryNL').hide();
	$('#searchBarCont').show(); //fadeIn('slow');
	$('.categoryHL').show() //fadeIn('slow');
	document.getElementById('have').setAttribute('style', 'border:1px solid #59D0D0;color: #59D0D0;');
	document.getElementById('need').setAttribute('style', 'border:1px solid #939597;color: #939597;');
}


//FORM JQUERY

function addKeyword(n,i){
  var x=document.forms["myForm"+i][n].value;
  // var x="hi";
  var y = '<li class=i onclick=rf(this)>'+x+' </li>';
  var z = document.getElementById("special"+i);
  (z).remove();
  $('#list'+i).append(y);
  var newid = 'special'+i;
  y='<li class="i" id='+newid+' onclick="special(this, '+i+')">+</li>' ;
  // alert(document.getElementById('special'+i));
  $('#list'+i).append(y);
}

function specialAddKeyword(n, toDelete, i){
  var x= document.forms["myForm"+i][n].value;
  var y = '<li class=i onclick=rf(this)>'+x+' </li>';
  (toDelete).remove(); 
  $('#list'+i).append(y);
  var newid = 'special'+i;
  var z='<li class="i" id='+newid+' onclick="special(this,'+i+')">+</li>' ;
  $('#list'+i).append(z);
}

function special(e,i){
	(e).remove();
	var newid="specialInput"+i;
	var newname="specialInputName"+i;
	var y = '<input type="text" name='+newname+' id='+newid+' autofocus onchange="specialAddKeyword(name, this, '+i+')">' ; 
	$('#list'+i).append(y);
}


function deleteKeyword(e){
	(e).remove();
	return false;
}


function rf(e){
	(e).remove();
	return false;
}


