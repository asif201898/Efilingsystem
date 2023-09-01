<?php
include('db_connect.php');
if(!empty($_POST["rid"])) 
{
$rid=$_POST["rid"];
$sql=$dbh->prepare("SELECT * FROM role WHERE role=:spid");
$sql->execute(array(':spid' => $spid));	
?>
<option value="">Select Doctor</option>
<?php
while($row =$sql->fetch())
{
?>
<option value="<?php echo $row["ID"]; ?>"><?php echo $row["FullName"]; ?></option>
<?php
}
}
?>