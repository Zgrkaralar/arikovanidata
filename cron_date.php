  <?php


$username = "root"; // Database için user adınız
$password = "root"; // user şifreniz 
$hostname = "localhost";  //localhost kısmı 
$databasename = "aricilik"; //database adubuz 

//database bağlantısı 
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
//select a database to work with
$selected = mysql_select_db($databasename,$dbhandle) 
  or die("Could not select examples");
$sondataal = mysql_query("SELECT date2 FROM data ORDER BY id DESC limit 1");
$a=mysql_fetch_array($sondataal);

$date = $a[0];
$newdate = strtotime ( '+15 minute' , strtotime ( $date ) ) ;
$newdate = date ( 'Y-m-d H:i:s' , $newdate );
$suan = date("Y-m-d H:i:s");

echo "$suan";
echo "<br>";
echo "$newdate";

if ($suan > $newdate) {
	echo " <br> 20dan dakikadan fazla süredir  data yok";
	#  api kodu
}


//mysql bağlantı kapatma
mysql_close($dbhandle);


?>