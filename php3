<html>
<head>
<meta http-equiv="content-Type"content="text/html;charset=utf-8">
<title></title>
</head>
<body>
<?php
$t=date("h");
if($t<"20"){
echo"have a good day!";
}
$favcolor="red";
switch($favcolor){
case"red":
echo"your favourite color is red";
break;
case"blue":
echo"your favourite color is blue";
break;
default:
echo"your favourite color is neither red,nor blue";
}
?>
</body>
</html>
