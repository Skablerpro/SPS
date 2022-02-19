<?PHP

define('DB_NAME','SPS');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link){
    die('could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $LINK);

if (!$db_selected){
    die('can\'t use' . DB_NAME . ':' . mysql_error());
}

$value = $_POST['input1'];

$sql = "INSERT INTO ADMIN (input1) VALUES ('$value')";

if(!)

mysql_close();
?>