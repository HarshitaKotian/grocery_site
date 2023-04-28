<?php
if(isset($_POST["submit"])){
    $value= $_POST['cpid'];
    $database = "grocery";
    $db = mysqli_connect('localhost','root','',$database);
    // sql to delete a record
    $sql = "DELETE FROM PRODUCTS WHERE ID='$value' ";

    if ($conn->query($sql) === TRUE) {
       header("Location: Admin_logged.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

  //  $conn->close();
}
?>