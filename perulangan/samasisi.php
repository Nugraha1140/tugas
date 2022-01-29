<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>samasisi</title>
</head>
<body>
    <center>
<table>   
<form action="" method="POST">
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
echo"<center>";
if (isset($_POST['simpan'])) {
    $angka = $_POST['angka'];


	for($a = $angka; $a >= 1; $a--){
        for($b=1;$b<=$a;$b++){
		echo "$b &nbsp";
	}
	echo "<br>";
	}

}
echo"</center>";
?>