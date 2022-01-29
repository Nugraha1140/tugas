<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sikusiku</title>
</head>
<body>
    <center>
<table>   
<form action="" method="post">
        <td>Input Angka</td>
        <td>:</td>
        <td><input type="Number" name="angka"></td>
       <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="simpan" value="KIRIM"></td>
        </tr>

    </form>
    </table> 
    </center>
</body>
</html>
<?php 
if(isset($_POST['simpan'])) {

$angka =$_POST['angka'];
 for($i=1; $i<=$angka; $i++) {
      for($j=1; $j<=$i; $j++) {  
        echo " $j &nbsp"; 
          }
           echo "<br>"; 
          } 
        }
?>
