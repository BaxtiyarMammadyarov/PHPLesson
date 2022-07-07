<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="">
    <label class="a">input a= </label>
    <input class="a" name="a"><br/>
    <label class="b">input b= </label>
    <input class="b" name="b"><br/>
    <label class="c">input c= </label>
    <input class="c" name="c" ><br/>
    <input type="submit">
</form>
<?php
function calculate($a,$b,$c){
    $d=$b*$b-4*$a*$c;
    if($d>0){
        $x1=(-$b+sqrt($d))/(2*$a);
        $x2=(-$b-sqrt($d))/(2*$a);
        echo "x1 = ".$x1."<br/> x2 = ".$x2;
    }
    elseif ($d==0){
        $x1=(-$b)/(2*$a);
        echo "x1 = x2 = ".$x1;
    }
    else{
        echo "helli yodur";
    }

}
if($_POST){
    if(!is_null($_POST['a'])&& !is_null($_POST['b']) && !is_null($_POST['c'])){
        $a= floatval($_POST['a']);
        $b= floatval($_POST['b']);
        $c= floatval($_POST['c']);
        calculate($a,$b,$c);
    }

}

?>
</body>
</html>
