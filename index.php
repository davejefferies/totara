<?php

function wrap ($string, $length = 20, $break = "\n") {
  if (!$string OR $length === 0) return $string;
  $search = '/(.{1,' . $length . '})(?:\s|$)|(.{' . $length . '})/';
  $replace = '$1$2' . $break;
  return preg_replace($search, $replace, $string);
}

$arguments = array_merge(getopt("", array("string:")), getopt("", array("length:")));

if (count($arguments) !== 2) {
  echo 'Error: Incorrect passing of arguments it should look like this index.php --string="Test String" --length=25' . PHP_EOL;
  return;
}
print_r(wrap($arguments["string"], $arguments["length"]))

?>
