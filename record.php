<?php
  require_once "./connect.php";

  $sql = 'SELECT * FROM tb_siswa';
  $result = mysqli_query($connect, $sql);
  if ($result) {
    if (mysqli_num_rows($result)) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .kepala{
        color: #fff;
      }
      .isi{
        color: #3498db;
      }
    </style>
  </head>
  <body>
  <table border="1" cellspacing="1" cellpadding="5">
    <tr style="background-color: #3498db;" class="kepala">
      <td>No</td>
      <td width=100>NIS</td>
      <td width=100>Password</td>
      <td width=150>Nama</td>
      <td width=200>Alamat</td>
    </tr>
    <?php
      $i = 1;
      while ($row = mysqli_fetch_row($result)) {
    ?>
      <tr style="background-color: #fff;" class="isi">
        <td>
          <?php echo $i; ?>
        </td>
        <td>
          <?php echo $row[0]; ?>
        </td>
        <td>
          <?php echo $row[1]; ?>
        </td>
        <td>
          <?php echo $row[2]; ?>
        </td>
        <td>
          <?php echo $row[3]; ?>
        </td>
      </tr>
      <?php
        $i++;
      }
      ?>
  </table>
</body>
</html>
  <?php
}
else {
  echo 'Data Tidak Ditemukan';
}
mysqli_close($connect);
}
  ?>
