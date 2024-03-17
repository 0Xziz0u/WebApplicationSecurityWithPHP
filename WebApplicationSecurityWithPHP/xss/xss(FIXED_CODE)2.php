<!-- fixed code  -->

<?php
$fname = $lname = ""; // Initialize variables

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['fname'])) {
        echo "First name is required" . "<br>" . "<br>";
    } else {
        $fname = check($_POST['fname']);
    }
    
    if (empty($_POST['lname'])) {
        echo "Last name is required";
    } else {
        $lname = check($_POST['lname']);
    }

    echo $fname . " " . $lname; // Output both first name and last name
}

//func  to sanitize and filter data.
function check($data) {
    $data = htmlspecialchars($data);
    $data=trim($data);
    $data=trim($data);
    $data=stripslashes($data);
    return $data;
}
?>
<html>
    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">  
        <table>
            <tr>
                <th>First Name</th>
                <th><input type="text" name="fname"></th>
            </tr>
            <tr>
                <th>Last Name</th> 
                <th><input type="text" name="lname"></th>
            </tr>
            <tr>
                <th><input type="submit" value="Submit"></th>
            </tr>
        </table>
    </form>
    </body>
</html>




