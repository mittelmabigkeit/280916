<?
$f="c:\\OpenServer\\domains\\php280916\\text.txt";
$file="d:\\copy\\copytext.txt";
$open=fopen($f,"a+t") or die ("Error!");
$openfile=fopen($file,"a+t") or die ("Error!");
$st=" kak dela ?";
fwrite($open,$st);
fclose($open);
copy($f,$file);
rename("text.txt","newtext.txt");
unlink("newtext.txt");
$basename=basename($f);
echo $basename;
echo "<br>";
$dirname=dirname($f);
echo $dirname;
echo "<br>";
$vivod=fread($openfile, 200);
echo $vivod;
?>