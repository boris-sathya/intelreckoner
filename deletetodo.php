<?php
include("dbc.php");
mysql_select_db('wrdp');
$checkbox = $_POST['Checkbox'];
$del_id  = $checkbox[0];
if ($_POST[deleteo] == delete) 
{
    $sql = "DELETE FROM intel where id = $del_id";
}
else
{
    $sql = "DELETE FROM todo where id = $del_id";
}
$result = mysql_query($sql) or die(mysql_error());
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
