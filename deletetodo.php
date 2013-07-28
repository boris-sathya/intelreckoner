<?php
include("dbc.php");
mysql_select_db('wrdp');
$checkbox = $_POST['Checkbox'];
foreach ($checkbox as $item)
{ 
 $sql = "DELETE FROM intel where id = $item";
 $result = mysql_query($sql) or die(mysql_error());
}
if($result)
{
    echo "Sucess !!";
    header('Location: index.php');
}
else
{
    echo "Error: ".mysql_error();
}
?>
