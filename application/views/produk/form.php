<form action="<?php echo site_url("Produk/submit"); ?>" method="POST">
    <div class="form-group">
      <label >Nama Produk</label>
      <input type="text" name="produk_nama" class="form-control"  placeholder="Nama Produk">
    </div>

    <div class="form-group">
      <label >Harga</label>
      <input type="text" name="produk_harga" class="form-control"  placeholder="harga">
    </div>

    <div class="form-group">
      <label >Satuan</label>
      <input type="text" name="produk_satuan" class="form-control"  placeholder="satuan">
    </div>

    <div class="form-group">
      <label >Qty</label>
      <input type="number" name="produk_qty" class="form-control"  placeholder="Qty">
    </div>

    <div class="form-group">
      <label >IMG</label>
      <input type="text" name="produk_img" class="form-control"  placeholder="IMG">
    </div>

    <div class="form-group">
      <label>DISKRIPSI</label>
      <input type="text" name="produk_desc" class="form-control"  placeholder="diskipsi">
    </div>
    

    <button type="submit" class="btn btn-primary">Proses data</button>
</form>