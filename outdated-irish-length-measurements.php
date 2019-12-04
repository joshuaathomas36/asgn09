<?php
include("includes/functions.php");

  $from_value = '';
  $from_unit = '';
  $to_unit = '';
  $to_value = '';

  if(!isset($_POST['submit'])) {
    $_POST['submit'] = '';
  }

  if($_POST['submit']) {
    $from_value = $_POST['from_value'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];

    $to_value = convert_Centimeter($from_value, $from_unit, $to_unit);
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Outdated Irish Length Measurements</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>outdated-irish-length-measurements</h1>
  
      <form action="outdated-irish-length-measurements.php" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="Grain"<?php if($from_unit == 'Grain') { echo " selected"; } ?>>Grain</option>
            <option value="Thumb-length"<?php if($from_unit == 'Thumb-length') { echo " selected"; } ?>>Thumb-length</option>
            <option value="Palm"<?php if($from_unit == 'Palm') { echo " selected"; } ?>>Palm</option>
            <option value="Fist"<?php if($from_unit == 'Fist') { echo " selected"; } ?>>Fist</option>
            <option value="Foot"<?php if($from_unit == 'Foot') { echo " selected"; } ?>>Foot</option>
            <option value="Step"<?php if($from_unit == 'Step') { echo " selected"; } ?>>Step</option>
            <option value="Double-step"<?php if($from_unit == 'Double-step') { echo " selected"; } ?>>Double-step</option>
            <option value="Rod"<?php if($from_unit == 'Rod') { echo " selected"; } ?>>Rod</option>
            <option value="Centimeter"<?php if($from_unit == 'Centimeter') { echo " selected"; } ?>>Centimeter</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
          <select name="to_unit">
            <option value="Grain"<?php if($to_unit == 'Grain') { echo " selected"; } ?>>Grain</option>
            <option value="Thumb-length"<?php if($to_unit == 'Thumb-length') { echo " selected"; } ?>>Thumb-length</option>
            <option value="Palm"<?php if($to_unit == 'Palm') { echo " selected"; } ?>>Palm</option>
            <option value="Fist"<?php if($to_unit == 'Fist') { echo " selected"; } ?>>Fist</option>
            <option value="Foot"<?php if($to_unit == 'Foot') { echo " selected"; } ?>>Foot</option>
            <option value="Step"<?php if($to_unit == 'Step') { echo " selected"; } ?>>Step</option>
            <option value="Double-step"<?php if($to_unit == 'Double-step') { echo " selected"; } ?>>Double-step</option>
            <option value="Rod"<?php if($to_unit == 'Rod') { echo " selected"; } ?>>Rod</option>
            <option value="Centimeter"<?php if($to_unit == 'Centimeter') { echo " selected"; } ?>>Centimeter</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
