<?php
$y = 22;

function myfunction() {
    echo $GLOBALS ['y'];
}

myfunction();

echo "<br>";
echo "<br>";

function myfunctions() {
    $y = 22;
    echo $y;  
}

myfunctions();
echo "<br>";
echo "<br>";

//superglobal to be considered
//$GLOBALS
//$_SERVER
//$_POST
//$_GET
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";

//single quotes and double qoutes difference
$z= "Mary";
echo "Hello $z";
echo "<br>";
echo 'Hello $z';



?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"
method="POST" >

<input type="text" placeholder="First Name" name="fname">
<br><br>

<input type="text" placeholder="Last Name" name="lname">
<br><br>
<button type="submit">submit</button>

</form>

<?php
$first_name = $last_name ="";
// initialise varibles to empty string 
if ($_SERVER['REQUEST_METHOD'] =='POST') {
    //$checking if form is submitted via POST method
    $first_name = htmlspecialchars ($_POST ['fname']);
    //$_POST['fname'] holds form data of form that used post method
    //htmlspecialchars helps to prevent malicious codes
    $last_name = $_POST['lname'];
    echo "<h2> Good Afternoon $first_name  $last_name </h2>";

    //<script>malicious code displayed as plain text</script>

}

?>