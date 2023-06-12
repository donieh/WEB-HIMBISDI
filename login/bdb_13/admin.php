<?php
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
if ($aksi == "tambah") {
    include "admin_tambah.php";
} else if ($aksi == "edit") {
    include "admin_edit.php";
} else {
?>
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Manajemen Data Admin</h1>
        <div class="mb-4 text-primary">
            Halaman ini digunakan untuk mengelola data-data admin. User dapat melakukan:
            <ul>
                <li type="1">Melihat data admin</li>
                <li type="1">Menambah, mengubah, dan menghapus data admin</li>
            </ul>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Data Admin
                </h6>
            </div>
            <div class="card-body">
                <a href="index.php?menu=admin&aksi=tambah" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="25">No</th>
                                <th>E-mail</th>
                                <th>Nama Admin</th>
                                <th width="75">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = "SELECT * FROM admin";
                            $query = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_array($query)) {
                                $link_hapus = "admin_delete.php?id=$row[id]";
                                $link_edit = "index.php?menu=admin&aksi=edit&id=$row[id]";
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['nama']; ?></td>
                                    
                                    <td>
                                        <a href="<?= $link_edit; ?>" class="btn btn-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= $link_hapus; ?>" class="btn btn-danger" onclick="return confirm('Apakah ingin menghapus data?')">
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
