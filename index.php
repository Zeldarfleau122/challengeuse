<html>
<head>
<title>PHP Traps #2</title>
</head>
<body>
<h1>#2 Still possible</h1>
<?php
$nice = 1;
if (!isset ($_POST['u'])) $nice = 0;
if (preg_match('/\./', $_POST['u'])) $nice = 0;
if (preg_match('/%/', $_POST['u'])) $nice = 0;
if (preg_match('/[0-9]/', $_POST['u'])) $nice = 0;
if (preg_match('/http/', $_POST['u']) ) $nice = 0;
if (preg_match('/https/', $_POST['u']) ) $nice = 0;
if (preg_match('/ftp/', $_POST['u'])) $nice = 0;
if (preg_match('/telnet/', $_POST['u'])) $nice = 0;
print("After preg math : ".$nice) ;
if ($nice) {
 if (@file_exists ($_POST['u'])) $nice = 0;
 }
print("after file exist : ".$nice) ;
if ($nice) {
 $nice = @file_get_contents ($_POST['u']);
 if ($nice === 'Good Work!') nextpart ();
 }
print("end : ".$nice) ;
?>
<form method="post">
u: <input type="text" name="u" /><br />
<input type="submit" value="Trap!" />
</form>
</body>
</html>
