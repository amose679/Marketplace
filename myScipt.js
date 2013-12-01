// document.write("<h1>This is a heading</h1>");
// document.write("<p>This is a paragraph</p>");
confirm("made it here");
$(document).ready(function()
{    

var parent = document.getElementById('listview');
var listItem = document.createElement('li');
listItem.setAttribute('id','listitem');
listItem.innerHTML = "<a href='#'>FIRST ITEM</a>";
parent.appendChild(listItem);

var listItem = document.createElement('li');
listItem.setAttribute('id','listitem');
listItem.innerHTML = "<a href='#'>SECOND ITEM</a>";

parent.appendChild(listItem);

var list = document.getElementById('listview');
$(list).listview("refresh");

});
