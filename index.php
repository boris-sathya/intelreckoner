<head>
<meta charset="utf-8">
<title>Boris's Intel Management System</title>
<meta name="description" content="Intel.">
<link href="bootstrap.css" rel="stylesheet">
<style>
.span12 h1{color:#FE6E4C; font-weight: bold; padding: 5px;}
h3 {margin: 10px 0 10px 0;}
</style>
</head>
<?php
include("dbc.php");
mysql_select_db('wrdp');
?>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
	<ul class="nav">
  <li class="active">
    <a class="brand" href="http://boris.in">Boris's Intel Management System</a>
  </li>
  <li><a href="input.html">Insert Intel/Todo</a></li>
  <li><a href="delete.php">Delete Intel/Todo</a></li>
  <li><a href="#">Links Repository</a></li>
</ul>

    </div>
  </div>
</div> 
<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
<legend><h1>Boris's Intel Management System</h1></legend>
</div>
</div>
<div class="row-fluid">
<div class="span3">
<a class="btn btn-success" href="#"><i class="icon-shopping-cart icon-white"></i> Knowledge is Power !!</a>  
</div>
<div class="span9">
<p><i>Home Built Intel Management System for increased productivity and reconnaissance.</i></p>
</div>
</div>
 
<div class="row-fluid">
  <div class="span3">

          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">To Do</li>
<?php            
       $todo_result = mysql_query("SELECT * FROM todo");
     if (!$todo_result) {
          $message  = 'Invalid query: ' . mysql_error() . "\n";
          $message .= 'Whole query: ' . $query;
             die($message); 
                  }
while ($todo_row = mysql_fetch_array($todo_result, MYSQL_NUM)) {

?>
            <li><?php echo $todo_row[1]; ?></li><br/>
              <?
                    }
             ?>

            </ul>

          </div><!--/.well -->
        </div><!--/span-->

<?php
$result = mysql_query("SELECT * FROM intel");
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

?>
<div class="span4">
<h3><?php echo $row[2]; ?>:</h3>
<p><?php echo $row[3]; ?></p>
</div>
<?
  }
  ?>
</div>
</div>
</body>
</html>

