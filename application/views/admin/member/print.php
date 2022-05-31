<style>
  .box {
    position: relative;
    width: 100px;
    height: 100px;
  }

  .barcode img {
    height: 1247px;
    width: 793px;
    text-align: center;
    margin: 5px;
  }

  .barcode {
    text-align: center;
    position: absolute;
    top: 50px;
    left: 50px;
  }
</style>

<?php foreach ($img as $key => $value) { ?>
  <div class="box">
    <div class="barcode">
      <img src="<?= base_url('assets/img/profile/member/' . $value->image1) ?>" alt="">
    </div>
  </div>
<?php } ?>

<script type="text/javascript">
  window.print();
</script>