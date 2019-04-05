<html>
  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <title>Data Siswa Online</title>

    <style>
      table, th, td, tr {
        border: 2px solid black;
      }
      th {
        text-align: center;
      }
      td {
        text-align: center;
        font-style: italic;
      }
      img.zoom {
        width: 100%;
        height: 200px;
        border-radius:5px;
        object-fit:cover;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
      }
      .transition {
        -webkit-transform: scale(1.2); 
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
      }
      .modal-header {
   
        border-bottom: none;
      }
      .modal-title {
        color:#000;
      }
      .modal-footer{
        display:none;  
      }
      .zoom {
        padding: 50px;
        transition: transform .2s; 
        width: 200px;
        height: 200px;
        margin: 0 auto;
      }

      .zoom:hover {
        transform: scale(1.5);
      }
    </style>

  </head>
  <body>
    <div class="card">
      <div class="card-body">
    <h1 class="alert alert-success text-center" role="alert">Data Siswa Online</h1>

      <div class="text-center">
      <a href='<?php echo base_url("siswa/tambah"); ?>' class="btn btn-success" role="button">Tambah Data Siswa Online V.2</a><br><br>
      </div>

      <h4>Tools List :</h4>
      <a href='<?php echo base_url("siswa/galery"); ?>' class="btn btn-primary" role="button">Full Galerry Photo {Release}</a><br><br>

      <a href='<?php echo base_url("siswa/kalkulator"); ?>' class="btn btn-primary" role="button">Kalkulator Codeigniter {Coming Soon}</a><br><br>

    <table class="table table-bordered">
      <tr>
        <th>NISN</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th colspan="2">Tindakan</th>
      </tr>
      <?php
      if( ! empty($siswa)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
        foreach($siswa as $data){
          echo "<tr>
          <td>".$data->nisn."</td>
          <td>".$data->nama."</td>
          <td>".$data->jenis_kelamin."</td>
          <td>".$data->telp."</td>
          <td>".$data->alamat."</td>
          <td><a href='".base_url("siswa/ubah/".$data->nisn)."'>Ubah</a></td>
          <td><a href='".base_url("siswa/hapus/".$data->nisn)."'>Hapus</a></td>
          </tr>";
        }
      }else{ // Jika data siswa kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </div>
</div>
        <br>
        <div class="card">
        <div class="card text-center">
          <div class="card-header">
            <div class="card-body">

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a href="<?php echo base_url("siswa/widia"); ?>" class="fancybox" rel="ligthbox" target="_blank">
                    <img  src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/52556899_389399661622300_3102838319143190528_n.jpg?_nc_cat=105&_nc_ht=scontent-sin6-1.xx&oh=61c1c3bbbff46fb4b9d6ef051d470c0b&oe=5D4FE83E" class="zoom img-fluid "  alt="Widia Triyana">
                  </a>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a href="<?php echo base_url("siswa/atoriq"); ?>" class="fancybox" rel="ligthbox" target="_blank">
                    <img  src="https://scontent.fcgk6-1.fna.fbcdn.net/v/t1.0-9/36918934_1788605201232580_4848827780068016128_n.jpg?_nc_cat=100&_nc_ht=scontent.fcgk6-1.fna&oh=fc5e2dee6abcd1083e806238ef519916&oe=5D0AD1BC" class="zoom img-fluid "  alt="Atoriq">
                  </a>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a href="<?php echo base_url("siswa/antanu"); ?>" class="fancybox" rel="ligthbox" target="_blank">
                    <img  src="https://scontent.fcgk6-1.fna.fbcdn.net/v/t1.0-9/48367862_2221051311496577_7258097866671915008_n.jpg?_nc_cat=111&_nc_ht=scontent.fcgk6-1.fna&oh=2dea1add3f6b020cc78914daf519a472&oe=5D2038DA" class="zoom img-fluid "  alt="Antanu Sastra">
                  </a>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a href="https://scontent.fcgk6-1.fna.fbcdn.net/v/t1.0-9/49205044_1107306109442999_7696991465024520192_n.jpg?_nc_cat=109&_nc_ht=scontent.fcgk6-1.fna&oh=ee162f4bc0396eabd401429dd0bbca0e&oe=5D03352E" class="fancybox" rel="ligthbox" target="_blank">
                    <img  src="https://scontent.fcgk6-1.fna.fbcdn.net/v/t1.0-9/49205044_1107306109442999_7696991465024520192_n.jpg?_nc_cat=109&_nc_ht=scontent.fcgk6-1.fna&oh=ee162f4bc0396eabd401429dd0bbca0e&oe=5D03352E" class="zoom img-fluid "  alt="Ainun Nadhila">
                  </a>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a href="https://scontent.fcgk6-1.fna.fbcdn.net/v/t1.0-9/31713379_570181813352478_2545196636062089216_n.jpg?_nc_cat=107&_nc_ht=scontent.fcgk6-1.fna&oh=216e468780deba6bd5a431db1aa1d98a&oe=5D115EC2" class="fancybox" rel="ligthbox" target="_blank">
                    <img  src="https://scontent.fcgk6-1.fna.fbcdn.net/v/t1.0-9/31713379_570181813352478_2545196636062089216_n.jpg?_nc_cat=107&_nc_ht=scontent.fcgk6-1.fna&oh=216e468780deba6bd5a431db1aa1d98a&oe=5D115EC2" class="zoom img-fluid "  alt="Uulina">
                  </a>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a href="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/52895352_1117239535149711_1252136138202677248_n.jpg?_nc_cat=102&_nc_ht=scontent-sin6-1.xx&oh=e5c150ab0cdbb971f5713ed61f208f66&oe=5D4937F2" class="fancybox" rel="ligthbox" target="_blank">
                    <img  src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/52895352_1117239535149711_1252136138202677248_n.jpg?_nc_cat=102&_nc_ht=scontent-sin6-1.xx&oh=e5c150ab0cdbb971f5713ed61f208f66&oe=5D4937F2" class="zoom img-fluid "  alt="Farel">
                  </a>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a href="https://instagram.fcgk6-1.fna.fbcdn.net/vp/7500cc4f8cdc479b0a95c7b41563fc2b/5D1A609E/t51.2885-15/e35/43779527_196113461195358_1394420644113499429_n.jpg?_nc_ht=instagram.fcgk6-1.fna.fbcdn.net" class="fancybox" rel="ligthbox" target="_blank">
                    <img  src="https://instagram.fcgk6-1.fna.fbcdn.net/vp/7500cc4f8cdc479b0a95c7b41563fc2b/5D1A609E/t51.2885-15/e35/43779527_196113461195358_1394420644113499429_n.jpg?_nc_ht=instagram.fcgk6-1.fna.fbcdn.net" class="zoom img-fluid "  alt="Ibnu">
                  </a>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a href="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/50065255_2212771685709212_1185636575443156992_n.jpg?_nc_cat=100&_nc_ht=scontent-sin6-1.xx&oh=b446fff148d648ec8fbfd562b6e2b91a&oe=5D4B0182" class="fancybox" rel="ligthbox" target="_blank">
                    <img  src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/50065255_2212771685709212_1185636575443156992_n.jpg?_nc_cat=100&_nc_ht=scontent-sin6-1.xx&oh=b446fff148d648ec8fbfd562b6e2b91a&oe=5D4B0182" class="zoom img-fluid "  alt="Ibnu">
                  </a>
              </div>

              <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                  <a href="https://web.whatsapp.com/pp?e=https%3A%2F%2Fpps.whatsapp.net%2Fv%2Ft61.11540-24%2F53486482_325823554614770_6742404076903858176_n.jpg%3Foe%3D5C983F07%26oh%3Ddcf6479b9b2dc45c6c561c16bc475bd1&t=l&u=6282118671541%40c.us&i=1552791412" class="fancybox" rel="ligthbox" target="_blank">
                    <img  src="https://web.whatsapp.com/pp?e=https%3A%2F%2Fpps.whatsapp.net%2Fv%2Ft61.11540-24%2F53486482_325823554614770_6742404076903858176_n.jpg%3Foe%3D5C983F07%26oh%3Ddcf6479b9b2dc45c6c561c16bc475bd1&t=l&u=6282118671541%40c.us&i=1552791412" class="zoom img-fluid "  alt="Kim Kay Lee">
                  </a>
              </div>

            </div>
          </div>
        </div>
      </div>

  </body>
</html>