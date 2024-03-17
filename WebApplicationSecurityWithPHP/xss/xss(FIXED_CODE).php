<!-- fixed code  -->

<?php
//Chack if the name premater is Existing or not to hide the errors
if( array_key_exists( "name", $_GET ) &&  !empty($_GET['name'])) {
    
/*
ways to protect the code from xss::
1.htmlspecialchars() - it will convert special ( just remove the comment `//`)
2.strip_tags
3.htmlentities
4.use CSP HEADER in php code as option by adding this line : -->add this header to your server's conf
or use in apache configuration  file .

*/ 

$name = htmlentities( $_GET[ 'name' ] );
//$name = htmlspecialchars( $_GET[ 'name' ] );
//$name = strip_tags( $_GET[ 'name' ] );

//Welcome Message
echo "<pre>Hello ${name}</pre>";
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