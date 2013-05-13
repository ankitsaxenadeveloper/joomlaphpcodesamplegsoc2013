
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Oclock</title>
<script type="text/javascript">
var x,x1,x2,x3,x4,x5,x6,x7;
function inch1(){

x=oc.h.value;
if(!(x>11))
oc.h.value=++x;x=oc.h.value;
disp.c.value="Time  : "+oc.h.value+" : "+oc.m.value+" : "+oc.s.value+" : "+oc.ampm.value;

}
function incm1(){
 x1=oc.m.value;if(!(x1>58))
oc.m.value=++x1; x1=oc.m.value;disp.c.value="Time  : "+oc.h.value+" : "+oc.m.value+" : "+oc.s.value+" : "+oc.ampm.value;

}

function incs1(){
x2=oc.s.value;if(!(x2>58))
oc.s.value=++x2;x2=oc.s.value;disp.c.value="Time  : "+oc.h.value+" : "+oc.m.value+" : "+oc.s.value+" : "+oc.ampm.value;

}

function inch2(){
 x3=oc.h.value;if(!(x3<1))
oc.h.value=--x3; x3=oc.h.value;disp.c.value="Time  : "+oc.h.value+" : "+oc.m.value+" : "+oc.s.value+" : "+oc.ampm.value;

}

function incm2(){
x4=oc.m.value;if(!(x4<1))
oc.m.value=--x4;x4=oc.m.value;disp.c.value="Time  : "+oc.h.value+" : "+oc.m.value+" : "+oc.s.value+" : "+oc.ampm.value;

}

function incs2(){
x5=oc.s.value;if(!(x5<1))
oc.s.value=--x5;x5=oc.s.value;disp.c.value="Time  : "+oc.h.value+" : "+oc.m.value+" : "+oc.s.value+" : "+oc.ampm.value;

}

function ampm1(){
 x6=oc.ampm.value;
oc.ampm.value='pm'; x6=oc.ampm.value;disp.c.value="Time  : "+oc.h.value+" : "+oc.m.value+" : "+oc.s.value+" : "+oc.ampm.value;

}

function ampm2(){

 x7=oc.ampm.value;
oc.ampm.value='am'; x7=oc.ampm.value;disp.c.value="Time  : "+oc.h.value+" : "+oc.m.value+" : "+oc.s.value+" : "+oc.ampm.value;
}


function clock()
{

document.getElementById('oclock1').innerHTML='<form name="oc"><table><tr><th><input type="button" value="+" onclick="inch1()"/></th><th><input type="button" value="+" onclick="incm1()"/></th><th><input type="button" value="+" onclick="incs1()"/></th><th><input type="button" value="^" onclick="ampm1()"/></th></tr>     <tr><th><input type="text" value="0" name="h" readonly /></th><th><input type="text" value="0" name="m" readonly /></th><th><input type="text" value="0" name="s" readonly /><th><input type="text" value="am" name="ampm" readonly /></th><tr><th><input type="button" value="-" onclick="inch2()"/></th><th><input type="button" value="-" onclick="incm2()"/></th><th><input type="button" value="-" onclick="incs2()"/></th><th><input type="button" value="v" onclick="ampm2()"/></th></tr></form>';
}
</script>
</head>

<?php 
$starttime = '00:00:00';
$time = new DateTime($starttime);
$interval = new DateInterval('PT01M');
$temptime = $time->format('H:i:s');
?>


<body>
<center><br /><br /><br /><br /><br /><br />
 &nbsp;<form name="disp">clock:<input type="text" name="c" id="c" width="60" /><input type="button" value="show clock"  onclick="clock()"/></form>

<div id="oclock" style="color:green ; background-color:pink; width:10%">

</div>&nbsp;
<div id="oclock1" style="background-color:#00FF00; width:60% " >

</div>
</center>
</body>
</html>
