<?php
// include database connection file
include("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_transaksi'];
	
	$id_transaksi=$_POST['id_transaksi'];
	$id_pembeli=$_POST['id_pembeli'];
	$id_produk=$_POST['id_produk'];
	$jumlah_beli=$_POST['jumlah_beli'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $total_bayar=$_POST['total_bayar'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE transaksi_cost SET id_transaksi='$id_transaksi',id_pembeli='$id_pembeli',id_produk='$id_produk',jumlah_beli='$jumlah_beli',tgl_bayar='$tgl_bayar',total_bayar='$total_bayar' WHERE id_transaksi=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM transaksi_cost WHERE id_transaksi=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_transaksi = $user_data['id_transaksi'];
	$id_pembeli = $user_data['id_pembeli'];
	$id_produk = $user_data['id_produk'];
	$jumlah_beli = $user_data['jumlah_beli'];
    $tgl_bayar = $user_data['tgl_bayar'];
    $total_bayar = $user_data['total_bayar'];
}
?>
<?php include('header.php');?>
 
<body>

	<br/><br/>
	
	<form name="update_user" style="text-align:center;margin: 100px;" method="post" action="edit_transaksi.php">
		<table border="0">
				<label>ID Transaksi</label><br>
				<input type="text" class="input" name="id_transaksi" value=<?php echo $id_transaksi;?>><br>

				<label>ID Pembeli</label><br>
				<input type="text" class="input" name="id_pembeli" value=<?php echo $id_pembeli;?>><br>

				<label>ID Produk</label><br>
				<input type="text" class="input" name="id_produk" value=<?php echo $id_produk;?>><br>
	
				<label>Jumlah Beli</label><br>
				<input type="text" class="input" name="jumlah_beli" value=<?php echo $jumlah_beli;?>><br>
	
				<label>Tanggal Bayar</label><br>
				<input type="text" class="input" id="date" name="tgl_bayar" value=<?php echo $tgl_bayar;?>><br>
		
				<label>Total Harga</label><br>
				<input type="text" class="input" name="total_bayar" value=<?php echo $total_bayar;?>><br>
				<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
				<input type="submit" name="update" class="btn btn-warning" value="Update">

		</table>
	</form>
</body>
<?php include('footer.php');?>