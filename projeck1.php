<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body >
    <form action="" method="post">
        <table align=center>
            <th>No</th>
            <th></th>
            <th>Destinasi</th>
            <tr>
                <td>1</td>
                <td></td>
                <td>Bukit bintang</td>
            </tr>
            <tr>
                <td>2</td>
                <td></td>
                <td>pantai sadrana</td>
            </tr>
            <tr>
                <td>3</td>
                <td></td>
                <td>candi borobudur</td>
            </tr>
            <tr>
                <td>4</td>
                <td></td>
                <td>candi prambanan</td>
            </tr>
            <tr>
                <td>5</td>
                <td></td>
                <td>keraton yogyakarta</td>
            </tr>
            <tr>
                <td>6</td>
                <td></td>
                <td>marioboro</td>
            </tr>
            <tr>
                <td>7</td>
                <td></td>
                <td> Caffe pendopo lawas </td>
            </tr>
            <tr>
                <td>8</td>
                <td></td>
                <td>goa pindul</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><select name="destinasi" id="">
                    <option value="0">--Pilih Wisata--</option>
                    <option value="bukit bintang">Bukit Bintang</option>
                    <option value="pantai sadrana">Pantai Sadrana</option>
                    <option value="candi borobudur">Candi Borobudur</option>
                    <option value="candi prambanan">Candi Prambanan</option>
                    <option value="keraton yogyakarta">Keraton Yogyakarta</option>
                    <option value="marioboro">Marioboro</option>
                    <option value="pendopo lawas">Pendopo Lawas</option>
                    <option value="goa pindul">Goa Pindul</option>
                </select></td>
                <td><input type="submit" value="kirim" name="proses"></td>
            </tr>
        </table>
        <br>
        <br>
        <center>
        <?php
            if(isset($_POST['proses'])){
                $destinasi=$_POST['destinasi'];
                if($destinasi == "bukit bintang"){
                    echo "Bukit bintang <br>";
                    echo "Harga Pertiket:Rp10.000";
                    echo '<table>';
                    echo '<tr><td>jumlah Ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>Total Pembayaran:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="kirim" value="proses"></td></tr><br>';
                    echo '</table>';             
                }elseif($destinasi == "pantai sadrana"){
                    echo "<h2>pantai sadrana</h2>";
                    echo "Harga Pertiket:Rp10.000";
                    echo '<table>';
                    echo '<tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="kirim" value="proses"></td></tr><br>';
                    echo '</table>';
                    if(isset($_POST['kirim'])) {
                        $jumlah=$_POST['jumlah'];
                        $bayar=$_POST['bayar'];
                        $total=$jumlah*10000;
                        echo "<br>";
                        echo "total bayar: $total<br>";
                        echo "bayar : $bayar<br>";
                    }
                }elseif($destinasi == "candi borobudur"){
                    echo "<h2>candi borobudur</h2>";
                    echo "Harga Pertiket:Rp10.000";
                    echo '<table>';
                    echo '<tr><td>jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="kirim" value="proses"></td></tr><br>';
                    echo '</table>';
                    if(isset($_POST['kirim'])) {
                        $jumlah=$_POST['jumlah'];
                        $bayar=$_POST['bayar'];
                        $total=$jumlah*10000;
                        echo "<br>";
                        echo "total bayar: $total<br>";
                        echo "bayar : $bayar<br>";
                    }
                }
                elseif($destinasi == "candi prambanan"){
                    echo "<h2>Candi Prambanan</h2>";
                    echo "Harga Pertiket:Rp.10,000";
                    echo '<table>';
                    echo '<tr><td>Jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>Bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="kirim" value="proses"></td></tr><br>';
                    echo '</table>';
                    if(isset($_POST['kirim'])) {
                        $jumlah=$_POST['jumlah'];
                        $bayar=$_POST['bayar'];
                        $total=$jumlah*10000;
                        echo "<br>";
                        echo "total bayar: $total<br>";
                        echo "bayar : $bayar<br>";
                    }
                } 
                elseif($destinasi == "keraton yogyakarta"){
                    echo "<h2>Keraton Yogyakarta</h2>";
                    echo "Harga Pertiket:Rp.10,000";
                    echo '<table>';
                    echo '<tr><td>Jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>Bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="kirim" value="proses"></td></tr><br>';
                    echo '</table>';
                    if(isset($_POST['kirim'])) {
                        $jumlah=$_POST['jumlah'];
                        $bayar=$_POST['bayar'];
                        $total=$jumlah*10000;
                        echo "<br>";
                        echo "total bayar: $total<br>";
                        echo "bayar : $bayar<br>";
                    }
                }   
                elseif($destinasi == "marioboro"){
                    echo "<h2>Marioboro</h2>";
                    echo "Harga Pertiket:Rp.10,000";
                    echo '<table>';
                    echo '<tr><td>Jumlah ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>Bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="kirim" value="proses"></td></tr><br>';
                    echo '</table>';
                    if(isset($_POST['kirim'])) {
                        $jumlah=$_POST['jumlah'];
                        $bayar=$_POST['bayar'];
                        $total=$jumlah*10000;
                        echo "<br>";
                        echo "total bayar: $total<br>";
                        echo "bayar : $bayar<br>";
                    }
                }   
                elseif($destinasi == "pendopo lawas"){
                    echo "<h2>pendopo lawas</h2>";
                }   
                elseif($destinasi == "goa pindul"){
                    echo "<p>Goa Pindul</p>";
                    echo "Harga Pertiket:Rp.10,000";
                    echo '<table>';
                    echo '<tr><td>Jumlah Ticket:</td><td><input type="number" name="jumlah"></td></tr><br>';
                    echo '<tr><td>Bayar:</td><td><input type="number" name="bayar"></td></tr><br>';
                    echo '<tr><td><input type="submit" name="kirim" value="proses"></td></tr><br>';
                    echo '</table>';
                    if(isset($_POST['kirim'])) {
                        $jumlah=$_POST['jumlah'];
                        $bayar=$_POST['bayar'];
                        $total=$jumlah*10000;
                        echo "<br>";
                        echo "total bayar: $total<br>";
                        echo "bayar : $bayar<br>";
                    }
                }
            }
            if(isset($_POST['kirim'])) {
                $jumlah=$_POST['jumlah'];
                $bayar=$_POST['bayar'];
                $total=$jumlah*10000;
                echo "<br>";
                echo "total bayar: $total<br>";
                echo "bayar : $bayar<br>";
            }
        ?>
        </center>
    </form>    
</body>
</html>