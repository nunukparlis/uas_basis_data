<?php include("config.php");?>
<?php include("header.php");?>
<body>
<?php
include 'config.php';
$q = mysqli_query($conn, "SELECT max(id_produk) as idTerbesar FROM produk_cost");
	$data = mysqli_fetch_array($q);
	$kodeBarang = $data['idTerbesar'];
 
	
	$urutan = (int) substr($kodeBarang, 3, 3);
 
	
	$urutan++;
 
	
	$huruf = "TSR";
	$kodeBarang = $huruf . sprintf("%04s", $urutan);
	?>
<form action="simpan.php" method="post" style="text-align:center;margin: 100px;">
<label>
        ID Transaksi</label><br>
    <input type="text" class="input" name="id_transaksi" value="<?php echo $kodeBarang ?>" readonly><br>
    <label>Nama Pembeli</label><br>
    <select class="input" name="nama_pembeli">
        <?php
        $sql = mysqli_query($conn,"SELECT * FROM pembeli_cost");
        while ($data = mysqli_fetch_assoc($sql)) {
            echo '<option value="'.$data["id_pembeli"].'">'.$data["nama_pembeli"].'</option>';
        }
        ?>
    </select><br>
    <label>Nama Produk</label><br>
    <select class="input" name="nama_produk">
        <?php
        $sql = mysqli_query($conn,"SELECT * FROM produk_cost");
        while ($data = mysqli_fetch_assoc($sql)) {
            echo '<option value="'.$data["id_produk"].'">'.$data["nama_produk"].', Rp.'.$data["harga"].',- full'.'</option>';

        }
        ?>
    </select><br>
    <label>
        Jumlah Beli</label><br>
    <input type="text" class="input" name="jumlah_beli"><br>

    <label>
        Tanggal Bayar</label><br>
    <input type="text" class="input" id="date" name="tgl_bayar"><br>

    <label>
        Total Harga</label><br>
    <input type="text" class="input" name="total_harga"><br>

	<br>
    <input type="submit" class="btn btn-warning"  name="simpan" value="simpan">
</form>
	</body>
<?php include("footer.php");?>