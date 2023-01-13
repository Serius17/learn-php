<?php
echo "hello word saya adalah saya";
echo "<br>";
echo "<br>";

//variable 2

$nim = 2019130024;
$nama = "djnfiue";
echo "NIM : " . $nim . "<br>";
echo "Nama : " . $nama;
echo "<br>";
echo "<br>";


//program 2.3 tipe.php
$nim = "0411500400";
$nama = 'Chotimatul Musyarofah';
$umur = 23;
$nilai = 82.25;
$status = TRUE;
echo "<br>";
echo "<br>";

echo "NIM	: " . $nim . "<br>";
echo "Nama : $nama<br>";
print "Umur : " . $umur;
print "<br>";
printf("Nilai : %.3f<br>", $nilai);
if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";
echo "<br>";
echo "<br>";

// konstanta.php
define("Nama", "Ahmad Sloihin");
define("NIlai", 90);
echo "Nama : " . Nama;
echo "<br>Nilai : " . NIlai;
echo "<br>";
echo "<br>";

//operator.php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak);

echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
echo "<br>";
echo "<br>";

//operator2.php
$a = 5;
$b = 4;

echo "$a == $b : " . ($a == $b);
echo "<br> A tidak sama dgn B " . ($a != $b); //tidak ngerti
echo "<br>Hasil A besar = B : " . ($a > $b); //tidak ngerti
echo "<br> Hasil A kecil = B : " . ($a < $b);
echo "<br> a=b dan a>=b : " . (($a != $b) && ($a > $b));
echo "<br> a=b atau a>=b : " . (($a != $b) || ($a > $b));
echo "<br>";
echo "<br>";


//komentar.php
/* Ini komentar tidak akan tercetak di layar yang ini juga komentar
*/

// Nah kalo ini komentar satu baris

# Terus kalo ini juga komentar echo "Ini akan tercetak di layar";
echo "Komentar Muncul di Layar";
echo "<br>";

//if.php
$nilai = 0;
if ($nilai >= 60) {
    echo "Nilai Anda $nilai, Anda LULUS";
} else {
    echo "Nilai Anda $nilai, Anda GAGAL";
}
echo "<br>";

//ifelse.php
$user = "achmatim";
$pass = "123";
if ($user == "achmatim" && $pass == "123") {
    echo "Login Berhasil";
} else {
    echo "Login Gagal";
}
echo "<br>";
echo "<br>";

//if_var.php
//kurang ngerti
$user = "";
if (!isset($user)) {
    echo "Variabel tidak ada/belum terbentuk";
} else {
    echo "Variabel ada";
}
echo "<br>";
echo "<br>";

//switch.php
$day = date("D");
switch ($day) {
    case 'Sun':
        $hari    =    "Minggu";
        break;
    case 'Mon':
        $hari    =    "Senin";
        break;
    case 'Tue':
        $hari    =    "Selasa";
        break;
    case 'Wed':
        $hari    =    "Rabu";
        break;
    case 'Thu':
        $hari    =    "Kamis";
        break;
    case 'Fri':
        $hari    =    "Jum'at";
        break;
    case 'Sat':
        $hari    =    "Sabtu";
        break;
    default:
        $hari    =    "Kiamat";
}
echo "Hari ini hari <b>$hari</b>";
echo "<br>";
echo "<br>";

//if_khusus
$tahun = date("Y");
$kabisat = ($tahun % 4 == 0) ? "KABISAT" : "BUKAN KABISAT";
echo "Tahun <b>$tahun</b> $kabisat";
echo "<br><br>";

//for
/* contoh 1 */
for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}
echo "<br><br>";

/* contoh 2 */
for ($i = 1;; $i++) {
    if ($i > 10) {
        break;
    }
    echo "$i ";
}
echo "<br><br>";

/* contoh 3 */
$i = 1;
for (;;) {
    if ($i > 10) {
        break;
    }
    echo "$i ";
    $i++;
}
echo "<br><br>";

/* contoh 4 */
for ($i = 1; $i <= 10; print "$i ", $i++);
echo "<br><br>";

//while.php
/* contoh 1 */
$i = 1;
while ($i <= 10) {
    echo $i++;
}
echo "<br><br>";

/* contoh 2 */
$i = 1;
while ($i <= 10) : echo "$i";
    $i++;
endwhile;
echo "<br><br>";

/* contoh 3 */
$i = 1;
while ($i <= 6) {
    echo "<h$i>Cokkkk $i</h$i>";
    $i++;
}
echo "<br><br>";
//dowhile.php
$i = 1;
do {
    echo "$i ";
    $i += 2;
} while ($i <= 20);
echo "<br><br>";

//break.php
for ($i = 1; $i < 10; $i++) {
    if ($i == 5)
        continue;
    if ($i == 8)
        break;
    echo "$i ";
}
echo "<br><br>";

//input1.php
echo "<html>";
echo "<head><title>Pengolahan Form</title></head>";
echo "<body>";
echo "<FORM ACTION='' METHOD='POST' NAME='input'>";
echo  "Nama Anda : <input type='text' name='nama'><br>";
echo "<input type='submit' name='Input' value='Input'>";
echo "</FORM>";
echo "</body>";
echo "</html>";
if (isset($_POST['Input'])) {
    $nama = $_POST['nama'];
    echo "Nama Anda : <b>$nama</b>";
}
echo "<br><br>";
//input 3
echo "<html>";
echo "<head><title>Pengolahan Form</title></head>";
echo "<body>";
echo "<FORM ACTION='' METHOD='GET' NAME='input'>";
echo "Nama Anda : <input type='text' name='nama'><br>";
echo "<input type='submit' name='Input' value='Input'>";
echo "</FORM>";
echo "</body>";
echo "</html>";
if (isset($_GET['Input'])) {
    $nama = $_GET['nama'];
    echo "Nama Anda : <b>$nama</b>";
}
echo "<br><br>";

//input04.php
echo "<html>";
echo "<head><title>Pengolahan Form ~ Text</title></head>";
echo "<body>";
echo "<FORM ACTION='' METHOD='POST' NAME='input'>";
echo "Sahabat-sahabat Dekatku<br>";
echo "<input type='text' name='nama1'><br>";
echo "<input type='text' name='nama2'><br>";
echo "<input type='text' name='nama3'><br>";
echo "<input type='text' name='nama4'><br>";
echo "<input type='submit' name='Input' value='Input'>";
echo "</FORM>";
echo "</body>";
echo "</html>";
if (isset($_POST['Input'])) {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];
    $nama4 = $_POST['nama4'];
    echo "<b>Nama Sahabat-sahabat Dekatku :</b> <br>";
    echo $nama1 . "<br>";
    echo $nama2 . "<br>";
    echo $nama3 . "<br>";
    echo $nama4 . "<br>";
}
echo "<br><br>";

//proses 4.9
echo "<html>";
echo "<head><title>Login Here</title></head>";
echo "<body>";
echo "<FORM ACTION='' METHOD='POST' NAME='input'>";
echo "<h2>Login Here...</h2>";
echo "Username : <input type='text' name='username'><br> Password : <input type='password' name='password'><br>";
echo "<input type='submit' name='Login' value='Login'>";
echo "<input type='reset' name='reset' value='Reset'>";
echo "</FORM>";
echo "</body>";
echo "</html>";
if (isset($_POST['Login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "achmatim" && $pass == "123") {
        echo "<h2>Login Berhasil</h2>";
    } else {
        echo "<h2>Login Gagal</h2>";
    }
}
echo "<br><br>";
// proses06
echo "<html>";
echo "<head><title>Pilih Jurusan</title></head>";
echo "<body>";
echo "<FORM ACTION='' METHOD='POST' NAME='input'>";
echo "<h2>Pilih Jurusan Anda :</h2>";
echo "<input type='radio' name='jurusan' value='TI' checked> Teknik Informatika<br>";
echo "<input type='radio' name='jurusan' value='SI'> Sistem Informasi<br>";
echo "<input type='radio' name='jurusan' value='SK'> Sistem Komputer<br>";
echo "<input type='radio' name='jurusan' value='KA'> Komputerisasi Akuntansi<br>";
echo "<input type='submit' name='Pilih' value='Pilih'>";
echo "</FORM>";
echo "</body>";
echo "</html>";
if (isset($_POST['Pilih'])) {
    $jurusan = $_POST['jurusan'];
    echo "Jurusan Anda adalah
    <b><font color='red'>$jurusan</font></b>";
}
echo "<br><br>";
//input07
echo "<html>";
echo "<head><title>Band Favorit ~ Inputan Checkbox</title></head>";
echo "<body>";
echo "<FORM ACTION='' METHOD='POST' NAME='input'>";
echo "<h2>Pilih Band Favorit Anda :</h2>";
echo "<input type='checkbox' name='band01' value='Padi' checked> Padi<br>";
echo "<input type='checkbox' name='band02' value='Sheila On 7'> Sheila On 7<br>";
echo "<input type='checkbox' name='band03' value='Dewa 19'> Dewa 19<br>";
echo "<input type='checkbox' name='band04' value='Ungu'>";
echo "Ungu<br>";
echo "<input type='submit' name='Pilih' value='Pilih'>";
echo "</FORM>";
echo "</body>";
echo "</html>";

if (isset($_POST['Pilih'])) {
    echo "Band Favorit Anda adalah :<br>";
    if (isset($_POST['band01'])) {
        echo "+ " . $_POST['band01'] . "<br>";
    }
    if (isset($_POST['band02'])) {
        echo "+ " . $_POST['band02'] . "<br>";
    }
    if (isset($_POST['band03'])) {
        echo "+ " . $_POST['band03'] . "<br>";
    }
    if (isset($_POST['band04'])) {
        echo "+ " . $_POST['band04'] . "<br>";
    }
}
echo "<br><br>";
//input 8
echo "<html>";
echo "<head><title>Film Kartun Favorit ~ Inputan Combo box</title></head>";
echo "<body>";
echo "<FORM ACTION='' METHOD='POST' NAME='input'>";
echo "<h2>Pilih Film Kartun Favorit Anda :</h2>";
echo "<select name='kartun'>";
echo "<option value='Sponge Bob'>Sponge Bob</option>";
echo "<option value='Sinchan'>Sinchan</option>";
echo "<option value='Conan'>Conan</option>";
echo "<option value='Doraemon'>Doraemon</option>";
echo "<option value='Dragon Ball'>Dragon Ball</option>";
echo "<option value='Naruto'>Naruto</option>";
echo "</select>";
echo "<input type='submit' name='Pilih' value='Pilih'>";
echo "</FORM>";
echo "</body>";
echo "</html>";
if (isset($_POST['Pilih'])) {
    $film = $_POST['kartun'];
    echo "Film Kartun Favorit Anda adalah :
    <font color=blue><b>$film</b></font>";
}
echo "<br><br>";
//input 9
echo "<html>";
echo "<head><title>Kritik dan Saran ~ Inputan Textarea</title></head>";
echo "<body>";
echo "<FORM ACTION='' METHOD='POST' NAME='input'>";
echo "<h2>Input Kritik / Saran :</h2>";
echo "<textarea name='saran' cols='40' rows='5'></textarea><br>";
echo "<br>";
echo "<input type='submit' name='Proses' value='InputSaran'>";
echo "</FORM>";
echo "</body>";
echo "</html>";
if (isset($_POST['Proses'])) {
    $saran = nl2br($_POST['saran']);
    echo "Kritik / Saran Anda adalah : <br>";
    echo "<font color=red><b>$saran</b></font>";
}
echo "<br><br>";

//Array 1
$arrBuah = array("Mangga", "Apel", "Pisang", "Jeruk");
echo $arrBuah[0]; //Mangga
echo "<br>";
echo $arrBuah[3]; //Jeruk
echo "<br>";
$arrWarna = array();
$arrWarna[] = "Merah";
$arrWarna[] = "Biru";
$arrWarna[] = "Hijau";
$arrWarna[] = "Putih";
echo $arrWarna[0]; //Merah 
echo "<br>";
echo $arrWarna[2]; //Hijau
echo "<br><br>";
//array2
$arrNilai = array("Ani"    =>    80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo $arrNilai['Ani'];        //80
echo "<br>";
echo $arrNilai['Otim'];        //90
echo "<br>";
$arrNilai = array();
$arrNilai['Ami'] = 80;
$arrNilai['Asma'] = 95;
$arrNilai['Sri'] = 77;
echo $arrNilai['Asma'];        //95
echo "<br>";
echo $arrNilai['Ami'];        //80
echo "<br><br>";
//array3
$arrWarna = array("Blue", "Black", "Red", "Yellow", "Green");

echo "Menampilkan isi array dengan for : <br>";
for ($i = 0; $i < count($arrWarna); $i++) { //kurang ngerti < count
    echo "Do you like <font color=$arrWarna[$i]>" . $arrWarna[$i]
        . "</font> ?<br>";
}

echo "<br>Menampilkan isi array dengan foreach : <br>";
foreach ($arrWarna as $warna) {
    echo "Do you like <font color=$warna>" . $warna . "</font>?<br>";
}
echo "<br><br>";
//array 4
$arrNilai = array("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai<br>";
}
// reset($arrNilai);
// echo "<br>Menampilkan isi array dengan while dan list : <br>";
// while (list($nama, $nilai) = each($arrNilai)) {
//     echo "Nilai $nama = $nilai<br>";
// }

// $arrNilai = array("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
// echo "Menampilkan isi array dengan foreach : <br>";
// foreach ($arrNilai as $nama => $nilai) {
//     echo "Nilai $nama = $nilai<br>";
// }
$arrNilai = array("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
$nama = array_keys($arrNilai);
$nilai = array_values($arrNilai);
$count = count($arrNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
for ($i = 0; $i < $count; $i++) {
    echo "Nilai $nama[$i] = $nilai[$i]<br>";
}
echo "<br><br>";
//array 5
$arrWarna = array("Blue", "Black", "Red", "Yellow", "Green");
$arrNilai = array("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi" => 85);
echo "<pre>";
print_r($arrWarna);
echo "<br>";
print_r($arrNilai);
echo "</pre>";
echo "<br><br>";

//array 6
$arrNilai = array("Ani" => 80, "Otim" => 90, "Sri" => 75, "Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

sort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

rsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan rsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

shuffle($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan shuffle()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
echo "<br><br>";

//array 7
$arrNilai = array("Ani" => 80, "Otim" => 90, "Sri" => 75, "Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
echo "<br><br>";

//array 8
$arrNilai = array("Ani" => 80, "Otim" => 90, "Sri" => 75, "Budi" => 85);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan krsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
echo "<br><br>";

//array 9
$transport = array('foot', 'bike', 'car', 'plane');
echo "<pre>";
print_r($transport);
echo "</pre>";

$mode = current($transport);
echo $mode . "<br>"; // $mode = 'foot';
$mode = next($transport);
echo $mode . "<br>"; // $mode = 'bike';
$mode = current($transport);
echo $mode . "<br>"; // $mode = 'bike';
$mode = prev($transport);
echo $mode . "<br>"; // $mode = 'foot';
$mode = end($transport);
echo $mode . "<br>"; // $mode = 'plane';
$mode = current($transport);
echo $mode . "<br>"; // $mode = 'plane';
echo "<br><br>";

//array 10
$arrBuah = array("Mangga", "Apel", "Pisang", "Kedondong", "Jeruk");
if (in_array("Kedondong", $arrBuah)) {
    echo "Ada buah Kedondong di sini";
} else {
    echo "Tidak ada buah Kedondong di sini";
}
echo "<br><br>";

//Fungsi 01
function cetak_ganjil()
{
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 == 1) {
            echo "$i ";
        }
    }
}
//pemanggilan fungsi cetak_ganjil();

//Fungsi 02
function cetak_ganjil2($awal, $akhir)
{
    for ($i = $awal; $i < $akhir; $i++) {
        if ($i % 2 == 1) {
            echo "$i ";
        }
    }
}
//pemanggilan fungsi
$a = 10;
$b = 50;
echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
cetak_ganjil2($a, $b);
echo "<br><br>";

//Fungsi 03
function luas_lingkaran($jari)
{
    return 3.14 * $jari * $jari;
}
//pemanggilan fungsi
$r = 20;
echo "Luas lingkaran dengan jari-jari $r = ";
echo luas_lingkaran($r);
echo "<br><br>";

//Fungsi 04
function tambah_string($str)
{
    $str = $str . ", Jakarta";
    return $str;
}

//
echo $str = "Universitas Budi Luhur";
echo "\$str = $str<br>";
echo tambah_string($str) . "<br>";
echo "\$str = $str<br>";
echo "<br><br>";

// FUngsi 05
echo "<br><br>";
function tambah_string5(&$str)
{
    $str = $str . ", Jakarta";
    return $str;
}
//
$str = "Universitas Budi Luhur";
echo "\$str = $str<br>";
echo tambah_string5($str) . "<br>";
echo "\$str = $str<br>";
echo "<br><br>";

// Fungsi 06
// function luas_lingkaran1($jari)
// {
//     return 3.14 * $jari * $jari;
// }

// $arr = get_defined_functions();
// echo "<pre>";
// print_r($arr);
// echo "</pre>";
echo "<br><br>";

//Fungsi 7
if (function_exists('exif_read_data')) {
    echo "Fungsi exif_read_data() ada di PHP.<br />\n";
} else {
    echo "Fungsi exif_read_data() tidak ada di PHP.<br />\n";
}
echo "<br><br>";

//String 1
echo 'this is a simple string';
echo 'You can also have embedded newlines in strings this way as it is
okay to do';
// Outputs: Arnold once said: "I'll be back" 
echo 'Arnold once said: "I\'ll be back"';
// Outputs: You deleted C:\*.*? 
echo 'You deleted C:\\*.*?';
// Outputs: You deleted C:\*.*? 
echo 'You deleted C:\*.*?';
// Outputs: This will not expand: \n a newline 
echo 'This will not expand: \n a newline';
// Outputs: Variables do not $expand $either 
echo 'Variables do not $expand $either';
echo "<br><br>";

//String 2
// $str1 = <<<EOD 
// Example of string spanning multiple lines 
// using heredoc syntax. 
// EOD;

// /* More complex example, with variables. */ 
// class foo{
// var $foo;
// var $bar;

// function foo()
// {
// $this->foo = 'Foo';
// $this->bar = array('Bar1', 'Bar2', 'Bar3');
// }
// }

// $foo = new foo();
// $name = 'Achmatim';

// echo <<<EOT
// <u>$str1</u><br>
// My name is "<b>$name</b>". I am printing some <b>$foo->foo</b>. Now, I am printing some <b>{$foo->bar[1]}</b>.
// This should print a capital 'A': \x41 EOT;

// String 3
$str = "Everything i do, i do it for YOU";

echo "<b>String asli</b> : $str";
echo "<br><b>strtolower()</b> : " . strtolower($str);
echo "<br><b>strtoupper()</b> : " . strtoupper($str);
echo "<br><b>ucfirst() :</b> " . ucfirst($str);
echo "<br><b>ucwords() :</b> " . ucwords($str);
echo "<br><b>strrev() :</b> " . strrev($str);
echo "<br><b>Jumlah karakter</b> : " . strlen($str);
echo "<br><br>";

//String04
$str = "Is your name O'Reilly ?";
$str2 = addslashes($str);
$str3 = stripslashes($str2);

echo "<b>String asli</b> : $str";
echo "<br><b>addslashes()</b> : $str2";
echo "<br><b>stripslashes()</b> : $str3";
echo "<br><br>";

//String 5
echo "Menampilkan bilangan ASCII";
for ($i = 1; $i <= 256; $i++) {
    echo "<br>$i.\t" . chr($i);
}
echo "<br><br>";

//String 6
$str = "<b><u>Everything I do, I do it for you</u></b>";

echo $str . "<br>";
//no tag html
echo strip_tags($str) . "<br>";
//allow tag <u>
echo strip_tags($str, "<u>") . "<br>";
//tampil apa adanya
echo htmlspecialchars($str) . "<br>";
//tampil apa adanya
echo htmlentities($str) . "<br><br>";

// String 7
$number = 1234.56;

// english notation (default)
$english_format_number = number_format($number);
echo "<br>" . $english_format_number; // 1,235

// French notation
$nombre_format_francais = number_format($number, 2, ',', ' ');
echo "<br>" . $nombre_format_francais; // 1 234,56

//indonesian notation
$format_indonesia = number_format($number, 2, ',', '.');
echo "<br>" . $format_indonesia; //1.234,56

$number = 1234.5678;
// english notation without thousands seperator
$english_format_number = number_format($number, 2, '.', '');
echo "<br>" . $english_format_number; // 1234.57
echo "<br><br>";

// String 8
$buah    = "mangga pisang rambutan apel jeruk kedondong";
$buahan = explode(" ", $buah);
echo $buahan[0] . "<br>"; // mangga echo $buahan[3]."<br>"; // apel

// Contoh 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh"; //tidak ngerti
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user . "<br>"; // foo echo $pass; 
echo "<br><br>";
//String 9
$buahan = array('mangga', 'jeruk', 'rambutan', 'apel', 'nanas');
$buah = implode(",", $buahan);

echo "Saya suka buah " . $buah; // mangga,jeruk,rambutan,apel,nanas
echo "<br><br>";

//String 10

$file = "test.this.txt";
$ext1 = strstr($file, ".");
$ext2 = strchr($file, ".");
$ext3 = strrchr($file, ".");
echo $ext1 . "<br>";
echo $ext2 . "<br>";
echo $ext3;
echo "<br><br>";

//Strinng 11
$text = "The quick brown fox jumped over the lazy dog.";
$newtext = wordwrap($text, 15, "<br>");

echo $text . "<br><br>";
echo $newtext;
echo "<br><br>";

//String 12
echo "<form action='' method='post'> Input teks di sini :<br>";
echo "<textarea name='input' cols='40' rows='4'></textarea><br>";
echo "<input type='submit' name='Submit' value='Proses'>";
echo "</form>";

if (isset($_POST['Submit'])) {
    $txt = $_POST['input'];
    echo "<u>Tanpa nl2br() :</u> <br>$txt<br><br>";
    echo "<u>Dengan nl2br :</u> <br>" . nl2br($txt);
}
echo "<br><br>";

//STring 13
echo "<form action='' method='post'> NIM Anda :";
echo "<input type='text' name='txtnim'><br>";
echo "<input type='submit' name='Submit1' value='Proses' >";
echo "</form>";
if (isset($_POST['Submit1'])) {
    $nim = $_POST['txtnim'];
    $a = substr($nim, 2, 2);
    switch ($a) {
        case '11':
            $jurusan = "Teknik Informatika";
            break;
        case '22':
            $jurusan = "Sistem Informasi";
            break;
        case '33':
            $jurusan = "Sistem Komputer";
            break;
        case '44':
            $jurusan = "Komputerisasi Akuntansi";
            break;
        default:
            $jurusan = "Salah jurusan";
    }
    echo "Nim Anda : $nim<br>";
    echo "Jurusan Anda : $jurusan";
}
echo "<br><br>";

//Date 1
echo "<br>" . date("d/m/Y H:i:s");    // 13/04/2006 09:43:03	
echo "<br>" . date("F j, Y, g:i a");    // April 13, 2006, 9:43	am
echo "<br>" . date("d.m.y");    // 13.04.06	
echo "<br>" . date("Ymd");    // 20060413	
// 13-04-06, 4330 4349 4 Thuam06 102	
echo "<br>" . date('j-m-y, it is w Day z ');
// it is the 13th day.	
echo "<br>" . date('\i\t \i\s \t\h\e jS \d\a\y.');
// Thu Apr 13 9:43:49 KRAST 2006	
echo "<br>" . date("D M j G:i:s T Y");
echo "<br>" . date("H:i:s");    // 17:16:17	
echo "<br><br>";

// //Date 2
// Sekarang tanggal 13 April 2006 09:43:49
$arrDay = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
$day = date("w");    //0 - 6 of day

echo "Hari ini hari : <b>" . $arrDay[$day] . "</b>";
echo "<br><br>";

// File 1
$namafile = "data.txt";
$handle = fopen($namafile, "r");
if (!$handle) {
    echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
    echo "<b>File berhasil dibuka</b>";
}
fclose($handle);
echo "<br><br>";

// //File 2
$namafile = "data.txt";
$handle = fopen($namafile, "w");
if (!$handle) {
    echo "<b>File tidak dapat dibuka atau belum	ada</b>";
} else {
    echo "<b>File berhasil dibuka</b>";
}
fclose($handle);
echo "<br><br>";

//File 3
$namafile1 = "data.txt";
$handle1 = fopen($namafile1, "w");
if (!$handle1) {
    echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
    fwrite($handle1, "Fakultas Teknik Sipil\n");
    fputs($handle1, "Universitas Budi Luhur\n");
    //file_put_contents ($namafile, "Jakarta"); echo "<b>File berhasil ditulis</b>";
}
fclose($handle1);
echo "<br><br>";

//File 4
$namafile = "data.txt";
$handle = fopen($namafile, "r");
if (!$handle) {
    echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
    $isi = fgets($handle, 2048);
    //$isi2 = fread ($handle, 20); echo "Isi 1 : $isi<br>";
    //echo "Isi 2 : $isi2<br>";
}
fclose($handle);
echo "<br><br>";

//file 5
$namafile = "data.txt";
$handle = fopen($namafile, "r");
if (!$handle) {
    echo "<b>File tidak dapat dibuka atau belum ada</b>";
} else {
    echo "<b>Isi file : </b><br>";
    while ($isi = fgets($handle, 2048)) {
        echo "$isi<br>";
    }
}
fclose($handle);
echo "<br><br>";

//File 6
$namafile = "data.txt";
$handle = @fopen($namafile, "r");
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer . "<br>";
    }
    fclose($handle);
}
echo "<br><br>";

//File 7
$counter_file = "counter.txt";
if (!file_exists($counter_file)) {
    fopen($counter_file, "w");
}
$file = fopen($counter_file, "r");

$counter = fread($file, 10);
fclose($file);

$counter++;

echo "<h2>Anda adalah pengunjung ke - $counter</h2>";
$file = fopen($counter_file, "w");
fwrite($file, $counter);
fclose($file);
echo "<br><br>";

//File 8
$dir = "images";    //nama direktori
$cek = mkdir($dir);
if ($cek) {
    echo "Direktori <b>$dir</b> berhasil dibuat";
} else {
    echo "Direktori <b>$dir</b> gagal dibuat";
}
echo "<br><br>";

//file 9
//buat direktori
$dir = "include";
$cek = mkdir($dir);
if ($cek) {

    echo "Direktori <b>$dir</b> berhasil dibuat";
} else {
    echo "Direktori <b>$dir</b> gagal dibuat";
}
//hapus direktori
$del = rmdir($dir);
if ($del) {
    echo "<br>Direktori <b>$dir</b> berhasil dihapus";
} else {
    echo "<br>Direktori <b>$dir</b> gagal dihapus";
}
echo "<br><br>";

//file 10
$dir = "images";
if ($handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            echo "$file<br>";
        }
    }
    closedir($handle);
}
echo "<br><br>";

//Manipulasi FIle
//File 11
$filename = "data.txt";

if (file_exists($filename)) {
    echo "File $filename ADA";
} else {
    echo "File $filename TIDAK ADA";
}

//File 12
$file = "data.txt";

if (is_file($file)) {
    echo "File <b>$file</b> adalah FILE<br>";
    //	
    if (is_executable($file)) {
        echo "File <b>$file</b> bisa dijalankan secara langsung (executable)<br>";
    } else {
        echo "File <b>$file</b>	TIDAK executable<br>";
    }
    //	
    if (is_writable($file)) {
        echo "File <b>$file</b>	bisa ditulis / diedit<br>";
    } else {
        echo "File <b>$file</b> TIDAK bisa ditulis /  diedit<br>";
    }

    //TIDAK bisa ditulis /
    //
    if (is_readable($file)) {
        echo "File <b>$file</b> bisa dibaca<br>";
    } else {
        echo "File <b>$file</b> TIDAK bisa dibaca<br>";
    }
    //
    echo "Akses terakhir file <b>$file</b> = " . date("d-m-Y H:i:s.", fileatime($file)) . "<br>";
    echo "File <b>$file</b> dibuat = " . date("d-m-Y H:i:s.", filectime($file)) . "<br>";
    echo "Modifikasi terakhir file <b>$file</b> = " . date("d- m-Y H:i:s.", filemtime($file)) . "<br>";
    echo "Ukuran file <b>$file</b> = " . filesize($file) . " bytes<br>";
    echo "Jenis file <b>$file</b> = " . filetype($file) . "<br>";
} else if (is_dir($file)) {
    echo "File <b>$file</b> adalah DIREKTORI<br>";
} else {
    echo "File <b>$file</b> tidak dikenal<br>";
}
echo "<br><br>";

//File 13
$file = "data.txt";
$filebaru = "databaru.txt";
$filebaru2 = "databaru2.txt";
if (copy($file, $filebaru)) {
    echo "File <b>$file</b> berhasil dicopy menjadi
<b>$filebaru</b>. <br>";
}
if (rename($filebaru, $filebaru2)) {
    echo "File <b>$filebaru</b> berhasil direname menjadi
<b>$filebaru2</b>. <br>";
}
if (unlink($filebaru2)) {
    echo "File <b>$filebaru2</b> berhasil dihapus. <br>";
}
echo "<br><br>";

//upload file
//file 14
echo "<html>";
echo "<head><title>Upload File</title></head>";
echo "<body>";
echo "<FORM ACTION='' METHOD='POST'";
echo "ENCTYPE='multipart/form-data'>";
echo "Upload File : <input type='file' name='file'><br>";
echo "<input type='submit' name='Upload' value='Upload'>";
echo "</FORM>";
echo "</html>";
echo "</body>";
if (isset($_POST['Upload'])) {
    $dir_upload = "images/";
    $nama_file    = $_FILES['file']['name'];
    //
    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
        $cek = move_uploaded_file(
            $_FILES['file']['tmp_name'],
            $dir_upload . $nama_file
        );
        if ($cek) {
            echo "File berhasil diupload";
        } else {
            echo "File gagal diupload";
        }
    }
}
echo "<br><br>";
//Session 1
/**************************************************** Nama file : session01.php
Halaman ini merupakan halaman contoh penciptaan session. Perintah session_start() harus ditaruh di perintah pertama tanpa spasi di depannya. Perintah session_start() harus ada pada setiap halaman yang berhubungan dengan session
 *****************************************************/ session_start();
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //periksa login
    if ($user == "achmatim" && $pass = "123") {
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju ke halaman pemeriksaan session echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href=''>di sini ('')</a>
untuk menuju ke halaman pemeriksaan session";
    }
} else {

    echo "<html>";
    echo "<head>";
    echo "<title>Login here...</title>";
    echo "</head>";

    echo "<body>";
    echo "<form action='' method='post'>";
    echo "<h2>Login Here...</h2>";
    echo "Username : <input type='text' name='user'><br> Password : <input type='password' name='pass'><br>";
    echo "<input type='submit' name='Login' value='Log In'>";
    echo "</form>";
    echo "</body>";
    echo "</html>";
}

//Session 2
/************************************************************* Halaman ini merupakan contoh halaman pemeriksaan session. Peme- riksaan session biasanya dilakukan jika suatu halaman memiliki akses terbatas. Misalnya harus login terlebih dahulu.
 **************************************************************/

//pemeriksaan session
if (isset($_SESSION['login'])) { //jika sudah login
    //menampilkan isi session
    echo "<h1>Selamat Datang " . $_SESSION['login'] . "</h1>";
    echo "<h2>Halaman ini hanya bisa diakses jika Anda sudah
    login</h2>";
    echo "<h2>Klik <a href='session03.php'>di sini (session03.php)</a> untuk LOGOUT</h2>";
} else {
    //session belum ada artinya belum login
    die("Anda belum login! Anda tidak berhak masuk ke halaman ini.Silahkan login <a href='session01.php'>di sini</a>");
}

// Session 3
if (isset($_SESSION['login'])) {
    unset($_SESSION);
    session_destroy();
    //
    echo "<h1>Anda sudah berhasil LOGOUT</h1>";
    echo "<h2>Klik <a href='session01.php'>di sini</a> untuk LOGIN kembali</h2>";
    echo "<h2>Anda sekarang tidak bisa masuk ke halaman
    <a href='session02.php'>session02.php</a> lagi</h2>";
}
echo "<br><br>";

//Cookies 1
$value = 'achmatim';
$value2 = 'Achmad Solichin';

setcookie("username", $value);
setcookie("namalengkap", $value2, time() + 3600);    /* expire in 1 hour */

echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";
echo "<br><br>";

//cookies 2
if (isset($_COOKIE['username'])) {
    echo "<h1>Cookie 'username' ada. Isinya : " .
        $_COOKIE['username'];
} else {
    echo "<h1>Cookie 'username' TIDAK ada.</h1>";
}
if (isset($_COOKIE['namalengkap'])) {
    echo "<h1>Cookie 'namalengkap' ada. Isinya : " .
        $_COOKIE['namalengkap'];
} else {
    echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
}
echo "<h2>Klik <a href='cookie01.php'>di sini</a> untuk penciptaan cookies</h2>";
echo "<h2>Klik <a href='cookie03.php'>di sini</a> untuk penghapusan cookies</h2>";

//cookies 3
// set the expiration date to one hour ago setcookie ("username", "", time() - 3600); setcookie ("namalengkap", "", time() - 3600); echo "<h1>Cookie Berhasil dihapus.</h1>";
echo "<h2>Klik <a href='cookie01.php'>di sini</a> untuk penciptaan cookies</h2>";
echo "<h2>Klik <a href='cookie02.php'>di sini</a> untuk pemeriksaan cookies</h2>";

class Mobil
{
    var $warna;
    var $merk;
    var $harga;

    function construct()
    {
        $this->warna = "Biru";
        $this->merk    = "BMW";
        $this->harga = "10000000";
    }
    function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    function tampilWarna()
    {
        echo "Warna mobilnya : " . $this->warna;
    }
}

echo "<br><br>";

//OOP1
$a = new Mobil();
$b = new Mobil();
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");
$a->tampilWarna();
//
echo "<br><b>Mobil kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();
echo "<br><br>";

//OOP2
class Form
{
    var $fields = array();
    var $action;
    var $submit = "Submit Form";
    var $jumField = 0;

    function construct($action, $submit)
    {
        $this->action = $action;
        $this->submit = $submit;
    }
    function displayForm()
    {
        echo "<form action='" . $this->action . "' method='POST'>";
        echo "<table width='100%'>";
        for ($j = 0; $j < count($this->fields); $j++) {
            echo "<tr><td align='right'>" . $this->fields[$j]['label'] . "</td>";
            echo "<td><input type='text' name='" . $this->fields[$j]['name'] . "'></td></tr>";
        }
        echo "<tr><td colspan='2'>";
        echo "<input type='submit' value='" . $this->submit .
            "'></td></tr>";
        echo "</table>";
    }
    function addField($name, $label)
    {
        $this->fields[$this->jumField]['name'] = $name;
        $this->fields[$this->jumField]['label'] = $label;
        $this->jumField++;
    }
}

echo "<br><br>";

//OOP3
echo "<html><head><title>Mahasiswa</title></head><body>";
$form = new Form("", "Input Form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");
echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();
echo "</body></html>";
