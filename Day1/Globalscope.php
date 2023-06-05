<?php 
$x=5;//Global Scope
function myTest(){
	//Global Scope means a variable declared outside a function
echo "<p>Variable x inside function is :$x</p>";
}
myTest();
echo "<p> variable x outside function is :$x<p>";
?>