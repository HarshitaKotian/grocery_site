<?php
   session_start();
   $db="grocery";
   $connect = mysqli_connect('localhost','root','',$db);
   $query = mysqli_query($connect,"SELECT * FROM cart");
   
 //while ($row = mysqli_fetch_array ($query)) {
  //    $var1=$row["cid"];
    //  $ppid = $row["pid"]; 
      //$pno_of_items = $row["no_of_items"];  
      //$total = $row["no_of_items"]*$row["cost_of_item"]; 
      //$today1 = date("Y-m-d H:i:s");

     //$var1=$_SESSION['cid12'];
      //$_SESSION['cid12'] = null;
      //echo $var1;
      //$q= mysqli_query($connect,"INSERT INTO purchase VALUES ('$var1','$ppid','$pno_of_items','$total','$today1')");
                                           
  //}
  $Cart_total=0;
  ?>
  <center><h1>GROCERY STORE MANAGEMENT SYSTEM</h1> <hr>
  <h2>bill script</h2>
</center><hr>

  <?php echo "<center>";
      ?><table cellpadding="5" cellspacing="10">
         <?php
      echo "<tr>";
      
      echo "<th>"; echo "Product ID"; echo "&nbsp";echo "&nbsp"; echo "</th>";
      echo "<th>"; echo "&nbsp";echo "&nbsp";echo "No of items"; echo "&nbsp";echo "&nbsp";echo "</th>";
      echo "<th>"; echo "&nbsp";echo "&nbsp";echo "cost of item";echo "&nbsp";echo "&nbsp"; echo "</th>";
      echo "<th>";echo "&nbsp";echo "&nbsp"; echo "Total cost"; echo "&nbsp";echo "&nbsp";echo "</th>";
     // echo "<th>"; echo "&nbsp";echo "&nbsp";echo "Add item";echo "&nbsp";echo "&nbsp"; echo "</th>";
      //echo "<th>"; echo "&nbsp";echo "&nbsp";echo "Remove item"; echo "&nbsp";echo "&nbsp";echo "</th>";
      //echo "<th>";echo "&nbsp";echo "&nbsp"; echo "Delete item"; echo "&nbsp";echo "&nbsp";echo "</th>";
      echo "</td>";
      
      echo "</tr>";
 while ($row = mysqli_fetch_array ($query)) {
      echo "<tr>";
      echo "<td>";echo "&nbsp";echo "&nbsp"; echo $row["pid"]; echo "</td>";
      echo "<td>"; echo "&nbsp";echo "&nbsp";echo $row["no_of_items"];echo "&nbsp";echo "&nbsp"; echo "</td>";
      echo "<td>"; echo "&nbsp";echo "&nbsp";echo $row["cost_of_item"]; echo "&nbsp";echo "&nbsp";echo "</td>";
      echo "<td>"; echo "&nbsp";echo "&nbsp";echo $row["no_of_items"]*$row["cost_of_item"]; echo "&nbsp";echo "&nbsp";echo "</td>";
      $Cart_total = $Cart_total + $row["no_of_items"]*$row["cost_of_item"];
     
      echo "<td>"; ?><!---<form action="remove_from_cart.php" method="post" enctype="multipart/form-data">
         <input type="hidden" name="cpid" value='<?php echo $row["pid"];?>'/>
        <input type="submit" name="submit" value="-"/>
    </form>
  -->
      <?php echo "</td>";
      
      echo "<td>"; ?><!--<form action="delete_from_cart.php" method="post" enctype="multipart/form-data">
         <input type="hidden" name="cpid" value='<?php echo $row["pid"];?>'/>
        <input type="submit" name="submit" value="DELETE"/>
    </form>-->
      <?php echo "</td>";
      
      echo "</tr>";
  }
  echo "<tr>";
  echo "<td>"; echo "<b>TOTAL COST OF ALL ITEMS : <br>"; echo "</td>";
  echo "<td>"; echo $Cart_total; echo"</td>";
  echo "</table>";
  ?>
      <?php 
  echo "</center>";

?>
  <center><i>****VISIT AGAIN****</i></center>
  <?php
  $qc = mysqli_query($connect,"DELETE from cart where pid>0");
//header('Location: index.php');
?>
