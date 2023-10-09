<div class="container">
    <h3 class="mb-3">Daftar Pinjaman</h3>
    <div class="d-flex justify-content-between">
        <div>
            <a href="<?= BASE_URL; ?>/peminjam/tambah" class="btn btn-primary">Tambah Pinjaman</a>
        </div>
        <div class="d-flex">
            <form action="<?= BASE_URL; ?>/peminjam/cari" method="post" class="d-flex">
            <input type="text" class="form-control" name="search">
            <button type="submit" class="btn btn-outline-secondary">Cari</button>
            </form>
            <a href="<?= BASE_URL; ?>/peminjam/index" class="btn btn-outline-danger">Reset</a>
        </div>
    </div>    
    <br>
    <br>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Peminjam</th>
                <th scope="col">Jenis Barang</th>
                <th scope="col">Nomor Barang</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php foreach ($data['peminjam'] as $row) :?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['nama_peminjam']; ?></td>
                <td><?= $row['jenis_barang']; ?></td>
                <td><?= $row['no_barang']; ?></td>
                <td><?= $row['tgl_pinjam']; ?></td>
                <td><?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') {
                                $tglKembali = new DateTime($row['tgl_pinjam']);
                                $tglKembali->modify('+2 days');
                                echo $tglKembali->format('Y-m-d H:i:s');
                            } else {
                                echo $row['tgl_kembali'];
                            } ?></td>
                        <td>
                            <?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') {
                                echo "<div class='badge badge-error font-bold bg-danger'>Belum Kembali</div>";
                            } else {
                                echo "<div class='badge badge-success font-bold bg-success' id='sudahkembali'>Sudah Kembali</div>";
                            }
                            ?>
                        </td>
                        <td>
                            <?php if ($row['tgl_kembali'] == '0000-00-00 00:00:00') : ?>
                                <a href="<?= BASE_URL . '/peminjam/edit/' . $row['id'] ?>" class="btn btn-primary">Edit</a>
                            <?php endif  ?>
                            <a href="<?= BASE_URL . '/peminjam/hapus/' . $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus Data?')">Hapus</a>
                        </td>
            </tr>
            <?php $no++; endforeach; ?>
        </tbody>
    </table>
</div>
