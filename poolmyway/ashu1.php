<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test_db", $con);
if($_POST['submit']!='')
{
$name=$_POST['name'];
echo $str="INSERT INTO ashu1 (Name) VALUES ('$name')";
mysql_query($str);
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
  <div  style="color:#339">Content for New Div Tag Goes Here</div>
<div style="width:600px; margin:0 auto;">

  <form id="form1" name="form1" method="post" action="">
    <table width="400" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>&nbsp;</td>
        <td><label>Name
          <input name="name" type="text" id="name" size="20" maxlength="40" />
        </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input type="submit" name="submit" id="submit" value="Submit" />
        </label></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
