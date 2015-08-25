<?php
include 'header.php';
?>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 mysql_select_db("poll", $con);
$sql="INSERT INTO profile (firestname, adress, phone, zip, userid, password, passwordtwo, website, nationalid, updatetime)VALUES ('$_POST[firestname]','$_POST[adress]','$_POST[phone]','$_POST[zip]','$_POST[userid]','$_POST[password]','$_POST[passwordtwo]','$_POST[website]','$_POST[nationalid]','$_POST[updatetime]')";
if (!mysql_query($sql,$con))  {
  die('Error: ' . mysql_error());  }
  echo $form_submition_success;
mysql_close($con)
    ?>
</body>
</html>