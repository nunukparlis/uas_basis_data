<?php include('header.php');?>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Table delete histori</h4>
                  <p class="card-category"> table trigger</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>ID Pembeli</th>
                <th>ID Produk</th>
                <th>Tanggal Bayar</th>
                <th>Total Bayar</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <?php
        include("config.php");
        $sql = 'SELECT * FROM log_delete_transaksi';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_transaksi']?></td>
                <td><?php echo $row['id_pembeli']?></td>
                <td><?php echo $row['id_produk']?></td>
                <td><?php echo $row['tgl_bayar']?></td>
                <td><?php echo $row['total_bayar']?></td>
                <td><?php echo $row['waktu']?></td>
                
            </tr>
        </tbody>
        <?php
        }
        ?>
        
    </table>
    </div>
                </div>
              </div>
            </div>
    <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Table Pembeli Baru</h4>
                  <p class="card-category"> table trigger</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
        <thead>
            <tr>
                <th>ID Log</th>
                <th>Nama Pembeli</th>
                <th>NO telp</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <?php
        include("config.php");
        $sql = 'SELECT * FROM log_insert_pembeli';
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query))
        {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row['id_log']?></td>
                <td><?php echo $row['nama_pembeli']?></td>
                <td><?php echo $row['no_telp']?></td>
                <td><?php echo $row['waktu']?></td>
                
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    </div>
                </div>
              </div>
            </div>
    <?php include('footer.php');?>