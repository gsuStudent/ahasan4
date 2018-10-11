<?php

$tcolor=$_POST['textcolor'];
$tsize=$_POST['textsize'];
$tstyle=$_POST['textstyle'];
$text=$_POST['area'];

$color="";
$t="";
$size="";
switch ($tcolor) {
    case "ojsimpson":
        $color="orange";
        break;
    case "bluejay":
        $color="blue";
        break;
    case "pussycat":
        $color="purple";
        break;

    case "yazid":
        $color="yellow";
        break;
    
}

switch ($tsize) {
    case "onefifty":
        $t="150%";
        break;
    case "twohundo":
        $t="200%";
        break;
    case "twofifty":
        $t="250%";
        break;
        case "threehundo":
        $t="300%";
        break;
    
}


switch ($tstyle) {
    case "south":
        $size="Georgia";
        break;
    case "grande":
        $size="Arial";
        break;
    case "postman":
        $size="Courier";
        break;

        case "mexico":
        $size="Palantino";
        break;
    
}
echo "<style>";
echo"p{
    font-size:$t;
    color:$color;
    font-family:$size;
}";
echo"</style>";
echo"<p style=white-space: pre-line>$text</p>";
?>