<?php
$msg='';
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("test_db", $con);


if($_POST['submit']!='')
{
	//echo 'asas';
	$name=$_POST['name'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$time=time();
	echo $str="INSERT INTO ashu (name, sex, age,feed_time) VALUES ('$name','$sex','$age','$time')";
	echo 'jgj';
 mysql_query($str);


}
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pool test</title>
</head>

<body>
<div style="width:600px; margin:0 auto;">
  <form id="form1" name="form1" method="post" action="">
  <table width="600" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>&nbsp;</td>
      <td><?php echo $msg;?></td>
    </tr>
    <tr>
      <td height="30">name</td>
      <td height="30"><label>
        <input type="text" name="name" id="name" />
      </label></td>
    </tr>
    <tr>
      <td height="30">age</td>
      <td height="30"><label>
        <input type="text" name="age" id="age" />
      </label></td>
    </tr>
    <tr>
      <td height="30">gender</td>
      <td height="30"><p>
        <label>
          <input type="radio" name="sex" value="1" id="sex_0" />
          Male</label>
        
        <label>
          <input type="radio" name="sex" value="0" id="sex_1" />
          Female</label>
        <br />
      </p></td>
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