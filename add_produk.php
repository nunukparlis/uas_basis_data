<?php include('header.php');?>
 
<body>
<?php

	include 'config.php';
 

	$q = mysqli_query($conn, "SELECT max(id_produk) as idTerbesar FROM produk_cost");
	$data = mysqli_fetch_array($q);
	$kodeBarang = $data['idTerbesar'];
 
	
	$urutan = (int) substr($kodeBarang, 3, 3);
 
	
	$urutan++;
 
	
	$huruf = "PR";
	$kodeBarang = $huruf . sprintf("%04s", $urutan);
	?>
 
	<form action="add_produk.php" method="post" name="form1" style="text-align:center;margin: 100px;">
				<label>ID Produk</label><br>
				<input type="text" name="id_produk" class="input" required="required" value="<?php echo $kodeBarang ?>" readonly>
				<br>
				<label>Nama Produk</label><br>
				<input type="text" name="nama_produk" class="input" required="required">
				<br>
				<label>Kategori</label><br>
				<input type="text" name="kategori" class="input" required="required">
				<br>
				<label>Harga</label><br>
				<input type="text" name="harga" class="input" required="required">
				<br>
				<label>stock</label><br>
				<input type="text" name="stok" class="input" required="required">
				<br>
				<br>
				<input type="submit" class="btn info" name="Submit" value="Tambah produk">
</from>

<?php
 
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['Submit'])) {
     $id_produk = $_POST['id_produk'];
     $nama_produk = $_POST['nama_produk'];
     $kategori = $_POST['kategori'];
     $harga = $_POST['harga'];
     $stok = $_POST['stok'];
     
     // include database connection file
     include("config.php");
             
     // Insert user data into table
     $result = mysqli_query($conn, "INSERT INTO produk_cost(id_produk,nama_produk,kategori,harga,stok) 
     VALUES('$id_produk','$nama_produk','$kategori','$harga','$stok')");
     
     // Show message when user added
     echo "User added successfully. <a href='index.php'>View Users</a>";
 }
 ?>
	
</body><br>
<?php include('footer.php');?>