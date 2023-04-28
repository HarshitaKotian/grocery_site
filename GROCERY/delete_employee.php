<?php


if(isset($_POST["submit"])){
        $cpid= $_POST['Aeid'];
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);
       // echo $cpid;
        $result1 = $db->query("delete FROM EMPLOYEE where eid=$cpid");
     //  $delete= $db->query($result1);
 header('Location: Admin_logged.php');
}
?>

