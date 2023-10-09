<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $many = 2.2888800;
$many_2 = 2.2111200;
$few = $many + $many_2;
echo "$many + $many_2 = $few";


if (TRUE)
 print("<br>yes");
else
 print("<br>no");

 $true_num = 3 + 0.14159;
 $true_str = "Tried and true";
 $true_array[49] = "An array element";
 $false_array = array();
 $false_null = NULL;
 $false_num = 999 - 999;
 $false_str = "";


 $channel =<<<_XML_
<channel>
<title>What's For Dinner<title>
<link>http://menu.example.com/<link>
<description>Choose what to eat tonight.</description>
</channel>
_XML_;
echo <<<END
<br>This uses the "here document" syntax to output
multiple lines with variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon. no extra whitespace!
<br />
END;
print $channel
?>




</body>
</html>