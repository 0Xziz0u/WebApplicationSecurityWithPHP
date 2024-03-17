<!---- NoT fixed code ---->
<?php
//Chack if the `name` premater is Existing or not to hide the errors
if( array_key_exists( "name", $_GET ) &&  !empty($_GET['name'])) 
{
//Welcome Message
echo '<em> Hello </em>' . $_GET[ 'name' ]  ;
}
?> 
<html>
<body>
<form method="get">
<input type="text" name="name"><br>
<input type="submit">
</form>
</body>
</html>