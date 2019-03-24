<html>
<head>
<title>PHP Traps #3</title>
</head>
<body>
<h1>#3 Paradox</h1>
<?php
if (isset ($_POST['o']))
{
 $image = @ImageCreateFromGIF ('data://text/plain;base64,'.$_POST['o']);
 print("IMAGE HERE : ", $image);
 if ($image == NULL) {
  print("IMAGE NULL");
  $image = getimagesize ('data://text/plain;base64,'.$_POST['o']);
  if (($image['mime'] == 'image/gif') && (($image[0] * $image[1]) ^ 0xabcdef) == 0xbc59e4)
  nextpart ();
 }
 else ImageDestroy ($image);
}

?>
<form method="post">
o: <input type="text" name="o" /><br />
<input type="submit" value="Trap!" />
</form>
</body>
</html>
