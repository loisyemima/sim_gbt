<style>
  .box {
    position: relative;
    width: 100px;
    height: 100px;
  }

  .barcode img {
    height: 1175px;
    width: 820px;
    text-align: center;
    margin: 5px;
  }

  .barcode {
    text-align: center;
    position: absolute;
  }
</style>

<?php foreach ($img as $key => $value) { ?>
  <div class="box">
    <div class="barcode">
      <img src="<?= base_url('assets/img/profile/member/' . $value->image2) ?>" alt="">
    </div>
  </div>
<?php } ?>

<script type="text/javascript">
  window.print();
</script>