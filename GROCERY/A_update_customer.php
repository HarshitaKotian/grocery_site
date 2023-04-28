<?php
if(isset($_POST["submit"])){
        $cpid= $_POST['Acid'];
       
       // $value2 = $_POST['Cpassword'];
        $value3 = $_POST['C_phone_number'];
        $value4 = $_POST['C_Email'];
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);
        
        $result2 = $db->query("update customer set phone_no='$value3' where ID=$cpid");
        $result3 = $db->query("update customer set Email='$value4' where ID=$cpid");
        
        header('Location: Admin_logged.php');
        
}
?>

