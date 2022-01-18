<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECK2</title>
</head>
<body>
    <center>
        <form method="post">
    <table>
        <h1>--PILIHLAH PROGRAM YANG ANDA INGINKAN--</h1>
        <tr>
            <td></td>
            <td>1</td>
            <td>Program Pengulangan Kelipatan 2</td>
        </tr>
        <tr>
            <td></td>
            <td>2</td>
            <td>Program Pengulangan Kelipatan 5 X 5</td>
        </tr>
        <tr>
            <td></td>
            <td>3</td>
            <td>Program Ganjil Genap</td>
        </tr>
        <tr>
            <td></td>
            <td>4</td>
            <td>Program Pengulangan Kuadrat</td>
        </tr>
        <tr>
                <td>Masukan pilihan Anda </td>
                <td>:</td>
                <td><input type="number" name="pilih"></td>
        </tr>
            <tr>
                <td>Masukan input Angka</td>
                <td>:</td>
                <td><input type="number" name="angka"></td>
            </tr>
        </tr>
        <tr>
            <td><input type="submit" name="klik" value="Send"></td>
        </tr>
    </table>
</form>
    </center>
    <?php
    if(isset($_POST['klik'])){
        $pilih= $_POST['pilih'];
        $input= $_POST['angka'];
    if($pilih == 1){
        echo"<center>";
        echo "<b>Program Pengulangan Kelipatan 2</b>";
        for($x=2 ; $x <= $input; $x+=2){
            echo"$x";
        }
    }
    }
    ?>
</body>
</html>