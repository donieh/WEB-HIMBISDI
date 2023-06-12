<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
if ($aksi == "tambah") {
    include "pengurus_tambah.php";
} else if ($aksi == "edit") {
    include "pengurus_edit.php";
} else {
?>
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Manajemen Data Pengurus</h1>
        <div class="mb-4 text-primary">
            Halaman ini digunakan untuk mengelola data-data pengurus. User dapat melakukan:
            <ul>
                <li type="1">Melihat data pengurus</li>
                <li type="1">Menambah, mengubah, dan menghapus data pengurus</li>
            </ul>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Data Pengurus
                </h6>
            </div>
            <div class="card-body">
                <a href="index.php?menu=pengurus&aksi=tambah" class="btn btn-primary btn-fixed-width">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="50">No</th>
                                <th>Jabatan</th>
                                <th>Deskripsi Jabatan</th>
                                <th width="150">Nama pengurus</th>
                                <th width="150">Linkedin</th>
                                <th width="150">Instagram</th>
                                <th>Periode</th>
                                <th width="75">Foto</th>
                                <th width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = "SELECT * FROM pengurus";
                            $query = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($query)) {
                                $link_hapus = "pengurus_delete.php?idpengurus=$row[idpengurus]";
                                $link_edit = "index.php?menu=pengurus&aksi=edit&idpengurus=$row[idpengurus]";
                                $foto = "default.jpg";
                                if (!empty($row['foto'])) {
                                    $foto = $row['foto'];
                                }
                                $link_foto = "./images/pengurus/$foto";

                                $jabatan = strlen($row['jabatan']) > 10 ? substr($row['jabatan'], 0, 10) . ".." : $row['jabatan'];
                                $jabatan2 = strlen($row['jabatan2']) > 10 ? substr($row['jabatan2'], 0, 10) . ".." : $row['jabatan2'];
                                $namapengurus = strlen($row['namapengurus']) > 8 ? substr($row['namapengurus'], 0, 8) . ".." : $row['namapengurus'];
                                $linkedin = strlen($row['linkedin']) > 3 ? substr($row['linkedin'], 0, 3) . ".." : $row['linkedin'];
                                $instagram = strlen($row['instagram']) > 3 ? substr($row['instagram'], 0, 3) . ".." : $row['instagram'];
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $jabatan; ?></td>
                                    <td><?= $jabatan2; ?></td>
                                    <td><?= $namapengurus; ?></td>
                                    <td><?= $linkedin; ?></td>
                                    <td><?= $instagram; ?></td>
                                    <td><?= $row['periode']; ?></td>
                                    <td>
                                        <img src="<?= $link_foto; ?>" width="75" height="75">
                                    </td>
                                    <td>
                                        <a href="<?= $link_edit; ?>" class="btn btn-success btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= $link_hapus; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah ingin menghapus data?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
