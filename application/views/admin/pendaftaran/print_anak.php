<html>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Judson:wght@700&family=Pridi&family=Salsa&family=Tai+Heritage+Pro&display=swap" rel="stylesheet">
  <title><?= $title; ?></title>
  <style>
    table tr td {
      font-size: 15;
      color: #003333;
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
      font-size: 36;
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
    <br><br><br>
    <table>
      <tr>
        <td>
          <center>
            <font class="judul"><b>GEREJA BETH-EL TABERNAKEL</b></font><br>
            <font class="uu" size="">( Keputusan Dirjen Bimas Kristen Kemenag RI No. 109/2019 )</font><br>
            <font size="" class="uu">Ditetapkan di Jakarta tanggal 8 Februari 2019</font><br>
          </center>
        </td><br>
      <tr>
        <td>
          <center>
            <img src="<?= base_url('assets/img/logo/logo-kuning.png') ?>" width="175px" alt=""><br>
            <font class="bold"><b>SURAT PENYERAHAN ANAK</b></font><br>
          </center>
        </td>
      </tr>
    </table>
    <?php foreach ($anak as $a) : ?>
      <table>
        <tr>
          <td>
            <center>
              <font class="uu"><i>No. <?= $a['kode'] ?></i></font>
            </center>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td width="400">
            <hr>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td width="375">
            <p class="text"><i>Biarkan anak-anak itu datang kepada-Ku, jangan
                menghalang-halangi mereka, sebab orang-orang yang seperti itulah
                yang punya Kerajaan Allah. Markus 10:14b</i>
            </p>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td width="400">
            <hr>
          </td>
        </tr>
      </table>
      <br>
      <table>
        <tr>
          <td>Nama</td>
          <td width="350">: <?= $a['nama_anak'] ?></td>
        </tr>
        <tr>
          <td>Kelamin</td>
          <td>: <?= $a['jenis_kelamin'] ?></td>
        </tr>
        <tr>
          <td>Tempat & Tanggal lahir</td>
          <td>: <?= $a['tempattgl_lahir'] ?>, <?= $a['tgl_lahir'] ?></td>
        </tr>
        <tr>
          <td>Nama Ayah</td>
          <td>: <?= $a['nama_ayah'] ?></td>
        </tr>
        <tr>
          <td>Nama Ibu</td>
          <td>: <?= $a['nama_ibu'] ?></td>
        </tr>
      </table><br>
      <table>
        <tr>
          <td>
            <center>
              <font><b>Telah diserahkan kepada Tuhan</b></font>
            </center>
          </td>
        </tr>
      </table><br>
      <table>
        <tr>
          <td>Dalam Ibadah</td>
        </tr>
        <tr>
          <td width="150">Hari & Tanggal</td>
          <td width="400">: <?= $a['hari_penyerahan'] ?>, <?= $a['tgl_penyerahan'] ?></td>
        </tr>
        <tr>
          <td width="">Tempat</td>
          <td width="">: <?= $a['tempat'] ?></td>
        </tr>
        <tr>
          <td width="">Dilayani Oleh</td>
          <td width="">: <?= $a['dilayani'] ?></td>
        </tr>
      </table><br>
      <table>
        <tr>
          <td width="400">
            <img src="kiri" alt="">
          </td>
          <td class="kanan"><?= $a['tempattgl_ttd'] ?>, <?= $a['tgl_ttd'] ?> <br>Gembala Sidang<br><br><br>( <?= $a['nama_ttd'] ?> )<br>NIK. <?= $a['nik'] ?></td>
        </tr>
      </table>
    <?php endforeach; ?>
  </center>
</body>

</html>

<script type="text/javascript">
  window.print();
</script>