<html>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Judson:wght@700&family=Pridi&family=Salsa&family=Tai+Heritage+Pro&display=swap" rel="stylesheet">
  <title><?= $title; ?></title>
  <style>
    body {
      background-image: url ("..../assets/img/logo/background.jpg");
      background-repeat: no-repeat;
      background-size: auto;
      background-position: center center;
    }

    table tr td {
      font-size: 15;
      color: #001933;
      font-family: 'Salsa', cursive;
      font-style: italic;
    }

    table tr .text {
      text-align: justify;
    }

    table tr .bold {
      color: #895F0B;
      font-family: 'Pridi', serif;
      font-style: normal;
      font-size: 38;
    }

    table tr .judul {
      font-family: 'Judson', serif;
      font-style: normal;
      font-size: 32;
    }

    table tr .uu {
      margin-top: 0%;
      font-family: 'Times New Roman', Times, serif;
      font-style: normal;
      font-size: 17;
    }

    img.kiri {
      float: left;
      margin: 5px;
    }
  </style>
</head>

<body>
  <center>
    <br>
    <br>
    <table>
      <tr>
        <td>
          <center>
            <font class="judul"><b>GEREJA BETH-EL TABERNAKEL</b></font><br>
            <font size="" class="uu">( Keputusan Dirjen Bimas Kristen Kemenag RI No. 109/2019 )</font><br>
            <font size="" class="uu">Ditetapkan di Jakarta tanggal 8 Februari 2019</font><br>
          </center>
        </td><br>
      <tr>
        <td>
          <center>
            <img src="<?= base_url('assets/img/logo/logo-kuning.png') ?>" width="175px" alt=""><br>
            <font class="bold"><b>SURAT BAPTISAN</b></font><br>
          </center>
        </td>
      </tr>
    </table>
    <?php foreach ($baptis as $b) : ?>
      <table>
        <tr>
          <td>
            <center>
              <font class="uu">No. <?= $b['kode'] ?></font>
            </center>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td width="500">
            <hr>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td width="450">
            <p class="text"><i>Dengan demikian kita telah dikubur bersama-sama dengan Dia
                Oleh baptisan dalam kematian, supaya sama seperti Kristus telah
                dibangkitkan dari antara orang mati oleh kemuliaan Bapa,
                demikian juga kita akan hidup dalam hidup yang baru. Roma 6:4</i>
            </p>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td width="500">
            <hr>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td>
            <center>
              <font><b>Telah dibaptis dalam nama</b></font><br>
              <font><b>Allah Bapa, Anak dan Roh Kudus</b></font>
            </center>
          </td>
        </tr>
      </table><br>
      <table>
        <tr>
          <td>Nama</td>
          <td width="325">: <?= $b['nama'] ?> </td>
        </tr>
        <tr>
          <td>Kelamin</td>
          <td>: <?= $b['jenis_kelamin'] ?> </td>
        </tr>
        <tr>
          <td>Tempat & Tanggal lahir</td>
          <td>: <?= $b['tempattgl_lahir'] ?> </td>
        </tr>
        <tr>
          <td>Nama Ayah</td>
          <td>: <?= $b['nama_ayah'] ?> </td>
        </tr>
        <tr>
          <td>Nama Ibu</td>
          <td>: <?= $b['nama_ibuk'] ?> </td>
        </tr>
      </table><br>
      <table>
        <tr>
          <td width="150">Hari & Tanggal</td>
          <td width="400">: <?= $b['hari_tanggal'] ?> </td>
        </tr>
        <tr>
          <td width="">Tempat</td>
          <td width="">: <?= $b['tempat'] ?> </td>
        </tr>
        <tr>
          <td width="">Dilayani Oleh</td>
          <td width="">: <?= $b['dilayani'] ?> </td>
        </tr>
      </table><br>
      <table>
        <tr>
          <td>
            <img src="<?= base_url('assets/img/logo/pasfoto.png') ?>" width="75px" alt="">
          </td>
          <td width="180">
            <img src="kiri" alt="">
          </td>
          <td class="kanan"> <?= $b['tgl_ttd'] ?> <br>Gembala Sidang<br><br><br><br>( <?= $b['nama_gembala'] ?> )<br>NIK. <?= $b['nik'] ?></td>
        </tr>
      </table>
    <?php endforeach; ?>
  </center>
</body>

</html>

<script type="text/javascript">
  window.print();
</script>