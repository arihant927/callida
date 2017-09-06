    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "callida";

if(!empty($_POST))
{

    $name = $_POST["name"];
    $email = $_POST["email"];
	$college = $_POST["college"];
    $branch = $_POST["branch"];
	$phone = $_POST["phone"];
	$year = $_POST["year"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "OOPS!, We have a problem with database server";
} 

$sql = "INSERT INTO registrations (name, email, college, branch,phone, year)
VALUES ('$name', '$email', '$college', '$branch','$phone','$year')";

if ($conn->query($sql) === TRUE) {
   header("Location:contact.html?name=$name#message");
}

$conn->close();
}
?>