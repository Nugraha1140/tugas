<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while 3</title>
</head>
<body>
<table>   
<form action="" method="post">
        <td>Ulangi</td>
        <td>:</td>
        <td><input type="Number" name="ulangi"></td>
       <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="simpan" value="KIRIM"></td>
        </tr>

    </form>
    </table> 
</body>
</html>
<?php 
if(isset($_POST['simpan'])) {

$ulangi =$_POST['ulangi'];
do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
} while ($ulangi <= 10);
}
?>