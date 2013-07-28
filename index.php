<!DOCTYPE html> <!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]--> 
<!--[if IE 7 ]> <html lang="en" class="no-js ie7"> <![endif]--> <!--[if IE 8 ]> 
<html lang="en" class="no-js ie8"> <![endif]--> <!--[if IE 9 ]> 
<html lang="en" class="no-js ie9"> <![endif]--> <!--[if (gt IE 9)|!(IE)]><!--> 
<html lang="en" class="no-js"> <!--<![endif]--> 
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Boris Intel Board</title>
<meta name="DC.title" content="Boris Intel Board"/>
<meta name="description" content="">
<meta name="author" content="">
<!-- Stylesheets -->
<link rel="stylesheet" href="baseframe-packed.css"/>
<body>
	<?php
	include("dbc.php");
	mysql_select_db('wrdp');
	?>
  <div id="container" class="container">
    <header>
      <div id="hg-bar" class="no-print">
      <div class="header-content">
        <ul id="hg-barlinks">
            
    		<li id="hg-networkbar-home" class="strong"><a href="">Boris-Info</a></li>
    		<li><a href="input.php">Insert Intel</a></li>
    		<li><a href="delete.php">Delete Intel</a></li>
    		<li><a href="weblog/weblog.php">Weblog</a></li>
    		<li><a href="dashboard.php">Dashboard</a></li>
        </ul>
      </div>
      </div>
  <div class="header-content">
      <div id="site-title"><a href="/"><span class="has">Boris's</span><span class="geek"> Intel</span> <span class="jobs">Management</span> <small class="has">.</small></a></div>      
          <p id="pitch"> Home Built Intel Management System for increased productivity and reconnaissance.
  	  </p>
      </div>
    </header>
  <div id="main">
      <ul id="stickie-area">
	<?php
		$result = mysql_query("SELECT * FROM intel");
		if (!$result) 
		{
    			$message  = 'Invalid query: ' . mysql_error() . "\n";
    			$message .= 'Whole query: ' . $query;
    			die($message);
		}
			while ($row = mysql_fetch_array($result, MYSQL_NUM)) {

	?>
  <li class="stickie">
  <span class="sticky">Sticky!</span>
  <span class="date"><?php echo $row[1];?></span>
  <span class="headline"><?php echo $row[3];?></span>
  <span class="location"><?php echo $row[2];?></span>
  </a>
  </li>
  	<? } ?>
  </ul>
  </div>
</body>
</html>

