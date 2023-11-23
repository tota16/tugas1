<div class="container">
  <h2>Data DOSEN</h2>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>NIDN</th>
        <th>ALAMAT</th>
      </tr>
    </thead>
    <tbody>
      <?php

      require_once 'connect.php';

      $query = mysqli_query($connect, "SELECT * FROM `dosen`");
      $no = 0;
      while ($hasil = mysqli_fetch_array($query)) {
        $no++;
        ?>
        <tr>
          <td>
            <?php echo $no ?>
          </td>
          <td>
            <?php echo $hasil['nama'] ?>
          </td>
          <td>
            <?php echo $hasil['nidn'] ?>
          </td>
          <td>
            <?php echo $hasil['alamat'] ?>
          </td>
          <?php
      }
      ?>
      </tbody>
  </table>
</div>