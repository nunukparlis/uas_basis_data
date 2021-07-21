<?php
// include database connection file
include("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_pembeli'];
	
	$id_pembeli=$_POST['id_pembeli'];
	$nama_pembeli=$_POST['nama_pembeli'];
	$no_telp=$_POST['no_telp'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE pembeli_cost SET id_pembeli='$id_pembeli',nama_pembeli='$nama_pembeli',no_telp='$no_telp' WHERE id_pembeli=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM pembeli_cost WHERE id_pembeli=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_pembeli = $user_data['id_pembeli'];
	$nama_pembeli = $user_data['nama_pembeli'];
	$no_telp = $user_data['no_telp'];
}
?>
<?php include('header.php');?>
 
<body>

	<br/><br/>
	
	<form name="update_user" style="text-align:center;margin: 100px;" method="post" action="edit_pembeli.php">
		<table border="0">
				<label>ID Pembeli</label><br>
				<input type="text" class="input" name="id_pembeli" value=<?php echo $id_pembeli;?> readonly><br>
				<br>
				<label>Nama Pembeli</label><br>
				<input type="text" class="input" name="nama_pembeli" value=<?php echo $nama_pembeli;?>><br>
				<br>
				<label>No Telp/day</label><br>
				<input type="text" class="input" name="no_telp" value=<?php echo $no_telp;?>><br>
				<br>
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				<input type="submit" name="update" class="btn btn-warning" value="Update">
		</table>
	</form>
</body>
<?php include('footer.php');?>