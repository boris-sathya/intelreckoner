<?php

include("dbc.php");
mysql_select_db('wrdp');

$intel_result = mysql_query("SELECT * FROM intel");
$todo_result = mysql_query("SELECT * FROM todo");
?>
    <!DOCTYPE html>   
    <html lang="en">   
    <head>   
    <meta charset="utf-8">   
    <title>Boris's Intel</title>   
    <meta name="description" content="Twitter Bootstrap Version2.0 horizontal form layout example from w3resource.com.">   
    <link href="bootstrap.css" rel="stylesheet">  
    </head>  
    <body>
  <div class="row-fluid">
 <div class="span6">  
    <form class="form-horizontal" action="deletetodo.php" method="post">  
            <fieldset>  
              <legend>Delete Intel</legend>  
              <div class="control-group">  
                 <label class="control-label" for="optionsCheckbox">Checkbox</label>  
             <div class="controls">  
               <label class="checkbox">  
            <?php            
    
     if (!$intel_result) {
          $message  = 'Invalid query: ' . mysql_error() . "\n";
          $message .= 'Whole query: ' . $query;
             die($message); 
                  }
while ($intel_row = mysql_fetch_array($intel_result, MYSQL_NUM)) {

?>
                 <input type="checkbox" id="Checkbox[]" name="Checkbox[]" value="<?php echo $intel_row[0]; ?>">  
                 <?php echo $intel_row[2]; ?>  
               </label>  
      <?php
  }
?>
             </div>    
              </div>        
       <div class="form-actions">  
                <button type="submit" name="delete" class="btn btn-primary">Delete</button>  
                <button class="btn">Cancel</button>
                <input type="hidden" name="deleteo" value="delete">
              </div>
         </fieldset>  
    </form>  
   </div> 
<div class="span6">  
    <form class="form-horizontal" action="deletetodo.php" method="post">  
            <fieldset>  
                      <legend>Add New To Do</legend> 
              <div class="control-group">  
                <label class="control-label" for="optionsCheckbox">Checkbox</label>  
             <div class="controls">  
               <label class="checkbox">  
            <?php            
    
     if (!$todo_result) {
          $message  = 'Invalid query: ' . mysql_error() . "\n";
          $message .= 'Whole query: ' . $query;
             die($message); 
                  }
while ($todo_row = mysql_fetch_array($todo_result, MYSQL_NUM)) {

?>
                 <input type="checkbox" id="Checkbox[]" name="Checkbox[]" value="<?php echo $todo_row[0]; ?>">  
                 <?php echo $todo_row[1]; ?>  
               </label>  
      <?php
  }
?> 
                </div>  
              </div>  
              <br />
               
              <div class="form-actions">  
                <button type="submit" name = "delete"  class="btn btn-primary">Delete</button>  
                <button class="btn">Cancel</button>  
              </div>  
            </fieldset>  
    </form>  
   </div> 
    </body>  
    </html>  
