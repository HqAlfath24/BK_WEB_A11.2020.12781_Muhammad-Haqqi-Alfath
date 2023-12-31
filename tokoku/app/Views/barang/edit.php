<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
        <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                                <div class="breadcrumb-text">
                                        <a href="#"><i class="fa fa-home"></i> Home</a>
                                        <a href="#">Product</a>
                                        <span>Edit Product</span>
                                </div>
                        </div>
                </div>
        </div>
</div>
<!-- Breadcrumb Section Begin -->
<!-- Product Add Section Begin -->
<section class="producr spad">
        <div class="container">
                <div class="cart-table">
                        <h5>Edit Product</h5>
                        <br>

                        <form action="<?= base_url('barang/update/' . $barang->id) ?>" method="post">
                                <div>
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama" value="<?= $barang->nama ?>">
                                </div>
                                <div>
                                        <label for="harga">Harga</label>
                                        <input type="text" name="harga" id="harga" value="<?= $barang->harga ?>">
                                </div>
                                <div>
                                        <label for="stok">Stok</label>
                                        <input type="text" name="stok" id="stok" value="<?= $barang->stok ?>">
                                </div>
                                <div>
                                        <label for="gambar">Gambar</label>
                                        <input type="text" name="gambar" id="gambar" value="<?= $barang->gambar ?>">
                                </div>
                                <div>
                                        <label for="id_kategori">ID Kategori</label>
                                        <input type="text" name="id_kategori" id="id_kategori" value="<?= $barang->id_kategori ?>">
                                </div>

                                <input type="submit" value="Simpan" class="site-btn">
                        </form>
                        <br>
                </div>
                <?= $this->endSection() ?>