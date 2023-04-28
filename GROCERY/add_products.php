<?php
if(isset($_POST["submit"])){
      // 	$value1 = $_POST['p_ID'];
        $value1 = $_POST['p_catogery'];
        $value2 = $_POST['p_Item_name'];
        $value3 = $_POST['p_cost'];
        $value4 = $_POST['p_items'];
        //echo $value1;
        //echo $value2;
        //echo $value3;
        $database = "grocery";
        $db = mysqli_connect('localhost','root','',$database);
        
        $q = "INSERT INTO products VALUES('','$value1','$value2','$value3','$value4')";
        $insert = $db->query($q);
        
        header('Location: Admin_logged.php');
        
}
?>