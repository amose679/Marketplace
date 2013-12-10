<?php
include('Config.php');
session_start();
?>

<html>
<head>
	<title>
		Brown MarketPlace
	</title>
	<!-- Importing the CSS-->
	<link rel="stylesheet" type="text/css" href="indexPage.css">

	<!--Importing JQuery-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="jquery.colorbox-min.js"></script>


	
	$jQuery.noConflict();
	
	<script type='text/javascript' src='indexJQuery.js'></script>
	
	 <script>
            $(document).ready(function(){
                //Examples of how to assign the Colorbox event to elements
                $(".inline").colorbox({inline:true, width:"50%"});
                //alert("blabla");
                //Example of preserving a JavaScript event for inline calls.
                $("#click").click(function(){ 
                    $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                    return false;
                });
            });
        </script>
</head>



<body>


<!-- 
*
*
*
*			HEADER
*
*
*
*
 -->

<div class="header-cont">
	<div class = "header"> </div>
    <div></div>
</div>

<!-- Logo -->
<div id="titleCont">
	<a href = "index.php" id="title"> 
	<div id="totalTitle"> 
		<img src= "WhiteLogo.png" id="smallLogo"> 
		<span id="titleText"> arketplace </span> 
	</div>
</a> 
</div>


<!-- Upper right icons -->
<!-- <ul class="topBarList">
	<li class="topBarListItem"> 
		<div class="topBarButtons">
			<a href="notifications.html"> <img src ="images3/shopping cart.png" class="topBarButtons"></a> 
		</div>
	</li>
	<li class="topBarListItem"> 
		<div class="topBarButtons">
			<a href="login.php"> <img src ="images3/user.png" class="topBarButtons"></a>
		</div>
	</li>
</ul> -->


<!-- Deals with spacing, so the need/have buttons line up under the header -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="bar">
<div class="circle" > <div class="inner-circle">
<?php
//THIS JUST DISPLAYS THE SESSION ID AND THE USER NAME FOR DEBUGGING PURPOSES
//echo session_id()."<br>";
if($_SESSION['user']){
// echo " Hi, ";
// echo "<div id=name-label>". $_SESSION['user']. "!<br></div>";
echo "<a href=\"userinfo.php\"> <img id=bar-img src=images3/user.png> </href>";
}else{
	echo "<a href=\"login.php\"> <img id=bar-img src=images3/user.png> </href>";}
?>

<?php
// CHECKS IF A USER IS SIGNED IN AND DISPLAYS AN UGLY BUTTON FOR LOGOUT PURPOSES
// if($_SESSION['user']){
// echo "<a id=logout_button href=\"logout.php\">Logout</a>";
// }
?>
</div></div>

	<!-- <div class="circle" > <div class="inner-circle"><img id="bar-img" src="images3/user.png"></div></div> -->
	<div id="arrow-left" ></div>
	<div id="arrow-right"></div>
	<div class="to-appear" id="blue-bar"></div>

	<span id="close">x</span> 
     <span class="label"> My Cart </span>   
     <table id='bar-table' class='to-appear'>
     	<tr>
     		<td class="ti" ><img class="ii" src="images3/book.png"></td>
     		<td class="ti" > <div class="tc"> <img class="tp" src="images3/user.png"> </div></td>
     		
     	</tr>
     	<tr>
     	</tr>     	
     </table>

	<div class="to-appear" id="blue-bar"></div>  
	<span class="label"> Suggestions </span>    
     <table id='bar-table2' class='to-appear'>
     	<tr>
     		<td class="ti" ><img class="ii" src="images3/book.png"></td>
     		<td class="ti" > <div class="tc"> <img class="tp" src="images3/user.png"> </div></td>
     		
     	</tr>
     	<tr>
     	</tr>     	
     </table>

</div> 




<?php
//THIS JUST DISPLAYS THE SESSION ID AND THE USER NAME FOR DEBUGGING PURPOSES
//echo session_id()."<br>";
if($_SESSION['user']){
// echo " Hi, ";
echo "<div id=name-label>". $_SESSION['user']. "!<br></div>";
}
?>

<?php
//CHECKS IF A USER IS SIGNED IN AND DISPLAYS AN UGLY BUTTON FOR LOGOUT PURPOSES
if($_SESSION['user']){
echo "<a id=logout_button href=\"logout.php\">Logout</a>";
}
?>




<!-- 
*
*
*
*			NEED/HAVE SEARCH CATEGORIES
*
*
*
*
 -->
 <!-- need/have -->
<div id="list-cont">
	<ul class = "needHaveButtonsList">
		<li class = "needHaveButtonsListItem">
			<div class= "nhBorder" onclick="needEnable()" id="need">
				I Need
			</div>
		</li>  
		<li class="needHaveButtonsListItem">
				<a id="spacer" class="needHaveButtons"></a>
		</li>
		<li class = "needHaveButtonsListItem">
			<div class= "nhBorder" onclick="haveEnable()" id="have">
				I Have
			</div>
		</li>
	</ul>
</div>

<br>
<br>

<!-- search -->
<div id="searchBarCont">
	<form>
		<table class= "searchBarList">
			<tr >
				<td align="left"><input id="searchBar" type="searchBar" name="searchBar" placeholder="Search" disabled style="background-color:797A76;"></td> 
				<td align="left"><img id="searchBarIconID" src="images3/searchIcon.png"></td>
			</tr>
		</table>
	</form>
</div>

<!-- Need List -->
<ul class = "categoryNL">
	<li class = "categoryLI"> <a href="ineed.html"><img class = "category" src = "images3/ticket.png" ></a></li>
	<li class = "categoryLI"> <a href="ineed.html"><img class = "category" src = "images3/book.png" ></a></li>
	<li class = "categoryLI"> <a href="ineed.html"><img class = "category" src = "images3/shirt.png" ></a></li>
	<li class = "categoryLI"> <a href="ineed.html"><img class = "category" src = "images3/couch.png" ></a></li>
</ul>

<!-- Have List -->


<?php


//If user is logged in I have categories take him to forms, otherwise to the login page
if (isset($_SESSION['user'])){
echo "<ul class = \"categoryHL\">".
 "<li class = \"categoryLI\"><a href = '#have_ticket' class='inline' > <img class = \"category\" src = \"images3/ticket.png\"></a></li>".
 " <li class = \"categoryLI\"><a href = '#inline_content' class='inline'> <img class = \"category\" src = \"images3/book.png\"></a></li> ".
 " <li class = \"categoryLI\"><a href = '#have_clothes' class='inline'> <img class = \"category\" src = \"images3/shirt.png\"></a></li> ".
 " <li class = \"categoryLI\"><a href = '#have_furniture' class='inline'> <img class = \"category\" src = \"images3/couch.png\" ></a></li> ".
 "</ul>";
} else{
echo "<ul class = \"categoryHL\">".
 "<li class = \"categoryLI\"><a href = 'login.php'><img class = \"category\" src = \"images3/ticket.png\"></a></li>".
 "<li class = \"categoryLI\"><a href = 'login.php'><img class = \"category\" src = \"images3/book.png\"></a></li>".
 "<li class = \"categoryLI\"><a href = 'login.php'><img class = \"category\" src = \"images3/shirt.png\"></a></li>".
 "<li class = \"categoryLI\"><a href = 'login.php'><img class = \"category\" src = \"images3/couch.png\" ></a></li>".
 "</ul>";
}

/*echo "
<ul class = \"categoryHL\">
	<li class = \"categoryLI\"> <a href=\""."login.php"."\" class='inline'><img class = \"category\" src = \"images3/ticket.png\" ></a></li>
	<li class = \"categoryLI\"> <a href=\"".$bookLink."\" class='inline'><img class = \"category\" src = \"images3/book.png\" ></a></li>
	<li class = \"categoryLI\"> <a href=\"".$clothesLink."\" class='inline'><img class = \"category\" src = \"images3/shirt.png\" ></a></li>
	<li class = \"categoryLI\"> <a href=\"".$furnitureLink."\" class='inline'><img class = \"category\" src = \"images3/couch.png\" ></a></li>
</ul>";*/

?>
<!-- sigh, spacing strugs -->
<br>
<br>
<br>
<br>
<img id = "homeBanner" src = "images3/homeBanner.png">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- 
*
*
*
*			SECTION 2
*
*
*
*
 -->

<div class="arrow-down-grey"></div>

<div id = "section2">
	<br>
	<span id="s2Title"> <b>What we offer <b></span>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- 2nd set of icons -->
	<div id="wwoTableCont">
		<table id="wwo" align-"center">
			<tr>
				<td class="wwoIcons"><img src = "images3/ticket.png"> </td>
				<td class="wwoIcons"><img src = "images3/book.png"> </td>
				<td class="wwoIcons"><img src = "images3/shirt.png"> </td>
				<td class="wwoIcons"><img src = "images3/couch.png"> </td>	
				<td class="wwoIcons"> TODO IMG</td>	
			</tr>
			<tr>
				<td class="wwoLabels">Event Tickets</td>
				<td class="wwoLabels">Books</td>
				<td class="wwoLabels">Clothing</td>
				<td class="wwoLabels">Furniture</td>	
				<td class="wwoLabels">Other</td>	
			</tr>
		</table>
	</div>


</div>

<div class="arrow-down-teal"></div>
	<br>
	<span id="s3Title"> <b>Who's been using us <b></span>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

<div id = "section3">
	<table id="testemonials">
			<tr>
				<td class="testIcons"><img class="userImg" src = "images3/user.png" > </td>
				<td class="testText"> <div class="testText">Ambohimanga is a hill and traditional fortified royal settlement (rova) in Madagascar, located approximately 24 kilometers (15 mi) northeast of the capital city of Antananarivo.</div>
 				</td>
				<td class="testIcons"><img class="userImg" src = "images3/user.png"> </td>
				<td class="testText"> <div class="testText">Ambohimanga is a hill and traditional fortified royal settlement (rova) in Madagascar, located approximately 24 kilometers (15 mi) northeast of the capital city of Antananarivo.</div> </td>
				<td class="testIcons"><img class="userImg" src = "images3/user.png"> </td>
				<td class="testText"> <div class="testText">Ambohimanga is a hill and traditional fortified royal settlement (rova) in Madagascar, located approximately 24 kilometers (15 mi) northeast of the capital city of Antananarivo.</div> </td>	
			</tr>
		</table>
</div>

<div id = "section4"></div>


<!-- RE-IDS
	I did not changed both names and IDs.  On everyline where I changed an id/name I added a 'bla' comment.  The naming scheme is oldname+number, the number is usually the number of the form (book is 1, ticket is 2, etc), in a few cases, the same id was used twice in the same form (eg dateTime in ticket form), in that case the new id is oldname+formnumber+occurancenumber, so the first of the dateTime ids is dateTime21 and the second is dateTime22
 -->


<?

function bookSubmit(){       
    
    echo "entered";
    
    //if (validationsPass()) {
        // $('#form').submit();
    //}
}

?>

	<!-- FIRST FORM FOR BOOKS (THE NAME IS STILL CALLED inline_content-->
	
        <!-- This contains the hidden content for inline calls, this assumes logged in, I don't know how to check that...' -->
        <div style='display:none'>
        	<div id='inline_content'>
			<form name="myForm1" action="i_have_book.php" method="post" enctype="multipart/form-data" > <!-- bla -->
				<img class="formIcon" src="images3/book.png">
				<table>
					<tr class= "formItem">
						<td align="left" class="formTitle"> Book title: </td> 
						<td align="left"><input class="formInput" id="book-title1" type="text" name="book-title1" autofocus onchange="addKeyword(name, 1)"></td> <!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Author: </td> 
						<td align="left"><input class="formInput" id="author1" type="text" name="author1" onchange="addKeyword(name, 1)"></td> <!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> ISBN: </td> 
						<td align="left"><input class="formInput" id="isbn1" type="isbn" name="isbn1" onchange="addKeyword(name, 1)"></td> <!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Price range: </td> 
						<td align="left"><input class="formInput" id="price1" type="text" name="price1" onchange="addKeyword(name, 1)" ></td> <!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Image: </td> 
						<td align="left"> <input class="formInput" type="file" name = "file1" id="file1"></td> <!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Anything else? </td> 
						<td align="left"> <textarea name = "ta1" id="ta1" rows="4" cols="50"></textarea> </td> <!-- bla -->
					</tr>
					<tr class="formItem" id="keyword1" >
						<td align="left" class="formTitle">  <span title="These help us organize your posts, we'll add all the information above automatically, but feel free to add othe words like &#8220;new&#8221; yourself"> Keywords </span> </td> 
						<td align="left"> 
							<ul id='list1'> <!-- bla -->
               					<li class="i" id="special1" onclick="special(this, 1)">+</li> <!-- bla -->

            				</ul>             
						</td>
					</tr> 
					<input type="hidden" id = "keywords1" name="keywords1" value= "<html> <ul> <li> bla </li> <li> bla2 </li> </ul> </html>" /> <!-- bla -->
				</table>
				<div><input id="sButton1" type="submit" value="List It"></div> <!-- bla -->
			</form>
            
            </div> 
            
            
            
            
            <!-- SECOND FORM (TICKET) -->
            
            
            <div style='display:none'>
        	<div id='have_ticket'>
			<form name="myForm2" action="i_have_ticket.php" method="post"> <!-- bla -->
				<img class="formIcon"  src = "images3/ticket.png">
				<table>
					<tr class= "formItem">
						<td align="left" class="formTitle"> Event Name: </td> 
						<td align="left"><input class="formInput" id="eventName2" type="text" name="eventName" autofocus onchange="addKeyword(name, 2)"></td> <!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Date and Time: </td> 
						<td align="left"><input class="formInput" id="dateTime21" type="datetime-local" name="dateTime" onchange="addKeyword(name, 2)"></td> <!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Location: </td> 
						<td align="left"><input class="formInput" id="dateTime22" type="text" name="location" onchange="addKeyword(name, 2)"></td> <!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Price: </td> 
						<td align="left"><input class="formInput" id="price2" type="isbn" name="price" onchange="addKeyword(name, 2)"></td> <!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Anything else? </td> 
						<td align="left"> <textarea name = "ta" id="ta2" rows="4" cols="50"></textarea> </td> <!-- bla -->
					</tr>
					<tr class="formItem" id="keyword2" > <!-- bla -->
						<td align="left" class="formTitle">  <span title="These help us organize your posts, we'll add all the information above automatically, but feel free to add othe words like &#8220;new&#8221; yourself"> Keywords </span> </td> 
						<td align="left"> 
							<ul id='list2'> <!-- bla -->
               					<li class="i" id="special2" onclick="special(this, 2)">+</li> 

            				</ul>             
						</td>
					</tr> 
				</table>
				<div><input id="sButton2" type="submit" value="List It"></div>
			</form>
            
            </div> 
            <!-- END OF  TICKET FORM  -->
            
            <!-- CLOTH FORM     -->
            <div style='display:none'>
        	<div id='have_clothes'>
			<form name="myForm3" action="i_have_clothes.php" method="post"> <!-- bla -->
				<img class="formIcon" src="images3/shirt.png">
				<table>
					<tr class= "formItem">
						<td align="left" class="formTitle"> Type: (shirt,pants,jacket,etc.) </td> 
						<td align="left"><input class="formInput" id="type3" type="text" name="type3" autofocus onchange="addKeyword(name, 3)"></td>
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Color: </td> 
						<td align="left"><input class="formInput" id="color3" type="text" name="color3" onchange="addKeyword(name, 3)"></td><!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Size: </td> 
						<td align="left"><input class="formInput" id="size3" type="isbn" name="size3" onchange="addKeyword(name, 3)"></td><!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Material: </td> 
						<td align="left"><input class="formInput" id="material3" type="isbn" name="material3" onchange="addKeyword(name, 3)"></td><!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Price: </td> 
						<td align="left"><input class="formInput" id="price3" type="isbn" name="price3" onchange="addKeyword(name, 3)"></td><!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Condition: </td> 
						<td align="left"><input class="formInput" id="condition3" type="isbn" name="condition3" onchange="addKeyword(name, 3)"></td> <!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Anything else? </td> 
						<td align="left"> <textarea name = "ta3" id="ta3" rows="4" cols="50"></textarea> </td> <!-- bla -->
					</tr>
					<tr class="formItem" id="keyword3" > <!-- bla -->
						<td align="left" class="formTitle">  <span title="These help us organize your posts, we'll add all the information above automatically, but feel free to add othe words like &#8220;new&#8221; yourself"> Keywords </span> </td> 
						<td align="left"> 
							
							<ul id='list3'> <!-- bla -->
               					<li class="i" id="special3" onclick="special(this, 3)">+</li> <!-- bla -->

            				</ul>             
						</td>
					</tr> 
				</table>
				<div><input id="sButton3" type="submit" value="List It"></div> <!-- bla -->
			</form>
            
            </div>
            
            <!-- END OF CLOTH FORM -->
            
            <!-- FURNITURE FORM  -->
            
            <div style='display:none'>
        	<div id='have_furniture'>
			<form name="myForm4" action="i_have_furniture.php" method="post"> <!-- bla -->
				<img class="formIcon" src="images3/couch.png">
				<table>
					<tr class= "formItem">
						<td align="left" class="formTitle"> Type:(chair, couch, table, etc.)</td> 
						<td align="left"><input class="formInput" id="type4" type="text" name="type4" autofocus onchange="addKeyword(name,4)"></td><!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Condition: </td> 
						<td align="left"><input class="formInput" id="condition4" type="text" name="condition4" onchange="addKeyword(name,4)"></td><!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Price: </td> 
						<td align="left"><input class="formInput" id="price4" type="isbn" name="price4" onchange="addKeyword(name,4)"></td><!-- bla -->
					</tr>
					<tr class="formItem">
						<td align="left" class="formTitle"> Anything else? </td> 
						<td align="left"> <textarea name = "ta4" id="ta4" rows="4" cols="50"></textarea> </td><!-- bla -->
					</tr>
					<tr class="formItem" id="keyword4" ><!-- bla -->
						<td align="left" class="formTitle">  <span title="These help us organize your posts, we'll add all the information above automatically, but feel free to add othe words like &#8220;new&#8221; yourself"> Keywords </span> </td> 
						<td align="left"> 
							<ul id='list4'><!-- bla -->
               					<li class="i" id="special4" onclick="special(this,4)">+</li> <!-- bla -->

            				</ul>             
						</td>
					</tr> 
					<input type="hidden" id = "keywords4" name="keywords" value= "<html> <ul> <li> bla </li> <li> bla2 </li> </ul> </html>" /><!-- bla -->
				</table>
				<div><input id="sButton4" type="submit" value="List It"></div><!-- bla -->
			</form>
            
            </div>
            
             <!-- END OF FURNITURE FORM  -->
            
        </div>

</body>

</html>