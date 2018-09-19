<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
<?php
        // put your code here
         $cars = array("Volvo","BMW","Toyota");
var_dump($cars);
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
        $x = 1; 

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
} 
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 
        function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function

        ?>
</body>
</html>
