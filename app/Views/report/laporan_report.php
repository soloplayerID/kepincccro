<!doctype html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    table th {
          background: #0c1c60 !important;
          color: #fff !important;
          border: 1px solid #ddd !important;
          line-height:15px!important;
          text-align:center!important;
          vertical-align:middle!important;
 
      }
      table td{line-height:15px!important; text-align:center!important; border: 1px solid;}
  </style>
</head>
 
<body>
  <div class="container">
    <center><h2>Warung Makan Melani</h2></center>
    <center><p>Jalan Tambakboyo No. 54A, DERO, Telepon (0857) 26205712</p></center>
    <center><p>Kode Pos (55283)</p></center>
    <center><p style="bold">YOGYAKARTA</p></center>
     <hr style="height:1px;border:none;color:#333;background-color:#333;" />
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>TANGGAL</th>
          <th>NAMA</th>
          <th>HARGA</th>
          <th>JUMLAH</th>
          <th>KARYAWAN</th>
          <th>TOTAL</th>
        </tr>
      </thead>
      <tbody>
        <?php
            if(count($reports) > 0){
              $totals = 0;
                $index=0; foreach($reports as $key => $row) {
                  $totals += $row['harga'] * $row['jumlah'];
                    ?>
                    <tr>
                      <td><?= $index+1 ?></td>
                      <td><?= $row['tanggal'] ?></td>
                      <td><?= $row['namaMenu'] ?></td>
                      <td><?= $row['harga'] ?></td>
                      <td><?= $row['jumlah'] ?></td>
                      <td><?= $row['namaUser'] ?></td>
                      <td><?= $row['harga'] * $row['jumlah'] ?></td>
                    </tr>
                    <?php
                }
              }
              ?>
              <tr>
                <td colspan='6'>total</td>
                <td><?= $totals ?></td>
              </tr>
      </tbody>
    </table>
  </div>
</body>
</html>