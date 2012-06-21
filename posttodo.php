
<?php
include("dbc.php");
mysql_select_db('wrdp');
if ($_POST[intelo] == intel) {
$query = sprintf("INSERT INTO intel (date, name, content) VALUES (CURDATE(),'%s','%s')",
            mysql_real_escape_string($_POST[input01]),mysql_real_escape_string($_POST[textarea]));
 }
else {

$query = sprintf("INSERT INTO todo (todo) VALUES ('%s')",
            mysql_real_escape_string($_POST[textarea]));
}
$result = mysql_query($query);

if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
} else { echo  "Posted Successfully !!"; }


?>


