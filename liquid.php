<?php

function convert_to_Imperialgallons($value, $from_unit) {
  switch($from_unit) {
    case 'Bucket':
      return $value * 4;
      break;
    case 'Butt':
      return $value * 108;
      break;
    case 'Firkin':
      return $value * 9;
      break;
    case 'Hogshead':
      return $value * 54;
      break;
    case 'Imperialgallons':
      return $value * 1;
      break;
    case 'Pint':
      return $value * 0.125;
      break;
    default:
      return "Unsupported unit.";
  }
}
  
function convert_from_Imperialgallons($value, $to_unit) {
  switch($to_unit) {
    case 'Bucket':
      return $value / 4;
      break;
    case 'Butt':
      return $value / 108;
      break;
    case 'Firkin':
      return $value / 9;
      break;
    case 'Hogshead':
      return $value / 54;
      break;
    case 'Imperialgallons':
      return $value / 1;
      break;
    case 'Pint':
      return $value / 0.125;
      break;
    default:
      return "Unsupported unit.";
  }
}

function convert_Imperialgallons($value, $from_unit, $to_unit) {
  $liquid_value = convert_to_Imperialgallons($value, $from_unit);
  $new_value = convert_from_Imperialgallons($liquid_value, $to_unit);
  return $new_value;
}

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
  
  $to_value = convert_Imperialgallons($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Liquids</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>

    <div id="main-content">

      <h1>Volumizer</h1>
  
      <form action="liquid.php" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="Bucket"<?php if($from_unit == 'Bucket') { echo " selected"; } ?>>Bucket</option>
            <option value="Butt"<?php if($from_unit == 'Butt') { echo " selected"; } ?>>Butt</option>
            <option value="Firkin"<?php if($from_unit == 'Firkin') { echo " selected"; } ?>>Firkin</option>
            <option value="Hogshead"<?php if($from_unit == 'Hogshead') { echo " selected"; } ?>>Hogs Head</option>
            <option value="Imperialgallons"<?php if($from_unit == 'Imperialgallons') { echo " selected"; } ?>>Imperial Gallons</option>
            <option value="Pint"<?php if($from_unit == 'Pint') { echo " selected"; } ?>>Pint</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo $to_value; ?>" />&nbsp;
          <select name="to_unit">
            <option value="Bucket"<?php if($to_unit == 'Bucket') { echo " selected"; } ?>>Bucket</option>
            <option value="Butt"<?php if($to_unit == 'Butt') { echo " selected"; } ?>>Butt</option>
            <option value="Firkin"<?php if($to_unit == 'Firkin') { echo " selected"; } ?>>Firkin</option>
            <option value="Hogshead"<?php if($to_unit == 'Hogshead') { echo " selected"; } ?>>Hogs Head</option>
            <option value="Imperialgallons"<?php if($to_unit == 'Imperialgallons') { echo " selected"; } ?>>Imperial Gallons</option>
            <option value="Pint"<?php if($to_unit == 'Pint') { echo " selected"; } ?>>Pint</option>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Return to menu</a>
      
    </div>
  </body>
</html>
