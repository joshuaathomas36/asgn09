<?php
const LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS = array(
  "Bucket" => 4,
  "Butt" => 108,
  "Firkin" => 9,
  "Hogshead" => 54,
  "Imperialgallons" => 1,
  "Pint" => 0.125
);



function convert_to_Imperialgallons($value, $from_unit) {
  if(array_key_exists($from_unit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) {
    return $value * LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$from_unit];
  } else {
    return "Unsupported unit.";
  }
}
  
function convert_from_Imperialgallons($value, $to_unit) {
  if(array_key_exists($to_unit, LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS)) {
    return $value / LIQUID_MEASUREMENT_TO_IMPERIAL_GALLONS[$to_unit];
  } else {
    return "Unsupported unit.";
  }
}

function convert_Imperialgallons($value, $from_unit, $to_unit) {
  $meter_value = convert_to_Imperialgallons($value, $from_unit);
  $new_value = convert_from_Imperialgallons($meter_value, $to_unit);
  return $new_value;
}

?>