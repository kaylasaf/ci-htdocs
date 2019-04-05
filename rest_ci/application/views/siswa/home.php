<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Data Siswa Online</title>
  <style>
  .alert {
    text-align: center;
  }
  </style>
  </head>
  <body>
    <div class="card">
      <div class="card-body">
        <div class="alert alert-info" role="alert">
          DAFTAR SISWA SMKN 2 BANDUNG
        </div>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">NISN</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">Jurusan</th>
              <th scope="col">Alamat</th>
              <th scope="col" colspan="2">Opsi</th>
            </tr>
          </thead>
          <tbody>
          <?php
          print_r ($data_siswa) 
      if( ! empty($data_siswa)){ // Jika data data_siswa tidak sama dengan kosong, artinya jika data data_siswa ada
        foreach($data_siswa as $smkn2){
          echo "<tr>
          <td>".$smkn2->id."</td>
          <td>".$smkn2->nama."</td>
          <td>".$smkn2->kelas."</td>
          <td>".$smkn2->jurusan."</td>
          <td>".$smkn2->alamat."</td>
          <td>Ubah</td>
          <td>Hapus</td>
          </tr>";
        }
      }else{ // Jika data data_siswa kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>