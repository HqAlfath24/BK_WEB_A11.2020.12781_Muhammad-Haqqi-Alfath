<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Product</span>
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
            <h5>Daftar Produk</h5>
            <br>
            <div class="col-lg-12">
                <a href="<?= base_url('barang/create') ?>"><button type="button" class="site-btn">Tambah Data</button></a>
            </div>

            <table>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($barang as $item) : ?>
                    <tr>
                        <td><?= $item->id ?></td>
                        <td><?= $item->nama ?></td>
                        <td><?= $item->harga ?></td>
                        <td><?= $item->stok ?></td>
                        <td><?= $item->id_kategori ?></td>
                        <td><?= $item->gambar ?></td>
                        <td class="a">
                            <a href="<?= base_url('barang/edit/' . $item->id) ?>" class="b">Edit</a>
                            |
                            <a href="<?= base_url('barang/delete/' . $item->id) ?>" class="b">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            </body>

            </html>

            <?= $this->endSection() ?>