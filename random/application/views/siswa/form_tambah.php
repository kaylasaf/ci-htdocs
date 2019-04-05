<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>Form Tambah - Data Siswa</title>
  </head>
  <body>
    <h1 class="alert alert-secondary text-center" role="alert">Form Tambah Data Mahasiswa</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("siswa/tambah"); ?>
      <table class="table table-bordered">
        <tr>
          <td>NISN</td>
          <td><input type="text" name="input_nisn" value="<?php echo set_value('input_nisn'); ?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki'); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan'); ?>> Perempuan
          </td>
        </tr>
        <tr>
          <td>Telepon</td>
          <td><input type="text" name="input_telp" value="<?php echo set_value('input_telp'); ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat"><?php echo set_value('input_alamat'); ?></textarea></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Simpan" class="btn btn-success">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal" class="btn btn-danger"></a>
    <?php echo form_close(); ?>
  </body>
</html>