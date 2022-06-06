<html>

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Judson:wght@700&family=Niconne&family=Pridi&family=Salsa&family=Tai+Heritage+Pro&display=swap" rel="stylesheet">
  <title><?= $title; ?></title>
  <style>
	
    table tr td {
      font-size: 15;
      color: #330033;
      font-family: 'Salsa', cursive;
      font-style: italic;
    }

    table tr .text {

      font-family: 'Niconne', cursive;
      text-align: justify;
      font-size: 20;
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
    <br><br><br><br>
    <table>
      <tr>
        <td>
          <center>
            <font size="" class="judul"><b>GEREJA BETH-EL TABERNAKEL</b></font><br>
            <font size="" class="uu">( Keputusan Dirjen Bimas Kristen Kemenag RI No. 109/2019 )</font><br>
            <font size="" class="uu">Ditetapkan di Jakarta tanggal 8 Februari 2019</font><br>
          </center>
        </td><br>
      </tr>
      <tr>
        <td>
          <center>
            <img src="<?= base_url('assets/img/logo/logo-kuning.png') ?>" width="175px" alt=""><br>
            <font class="bold"><b>SURAT NIKAH GEREJAWI</b></font><br>
          </center>
        </td>
      </tr>
    </table>
    <table>
      <tr>
        <td>
          <center>
            <font class="uu">No. _________________</font>
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
          <p class="text"><i>Demikianlah mereka bukan lagi dua, melainkan satu.
              Karena itu, apa yang telah dipersatukan Allah, tidak boleh diceraikan manusia. Matius 19:6
            </i></p>
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
        <td>
          <center>
            <font><b>Telah diteguhkan dan diberkati pernikahannya</b></font><br>
          </center>
        </td>
      </tr>
    </table><br>
		<?php foreach($pernikahan as $a) : ?>
    <table>
      <tr>
        <td width="150">Nama</td>
        <td width="400">: <?= $a['name_male'] ?> </td>
      </tr>
      <tr>
        <td>Tempat & Tanggal lahir</td>
        <td>:..................................................................................................</td>
      </tr>
    </table>
    <table>
      <tr>
        <td>
          <center>
            <font><b>dengan</b></font>
          </center>
        </td>
      </tr>
    </table><br>
    <table>
      <tr>
        <td width="150">Nama</td>
        <td width="400">:..................................................................................................</td>
      </tr>
      <tr>
        <td>Tempat & Tanggal lahir</td>
        <td>:..................................................................................................</td>
      </tr>
    </table>

    <br>
    <table>
      <tr>
        <td>Dalam Ibadah</td>
      </tr>
      <tr>
        <td width="150">Hari & Tanggal</td>
        <td width="400">:..................................................................................................</td>
      </tr>
      <tr>
        <td width="">Tempat</td>
        <td width="">:..................................................................................................</td>
      </tr>
      <tr>
        <td width="">Dilayani Oleh</td>
        <td width="">:..................................................................................................</td>
      </tr>
    </table>
    <table>
      <tr>
        <td width="400">
          <img src="kiri" alt="">
        </td>
        <td class="kanan">..............................<br>Gembala Sidang<br><br><br>(.......................)<br>NIK </td>
      </tr>
    </table>
		<?php endforeach; ?>
  </center>
</body>

</html>

<script type="text/javascript">
  window.print();
</script>
