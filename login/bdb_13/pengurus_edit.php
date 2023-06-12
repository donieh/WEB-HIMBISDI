<?php
$idpengurus = isset($_GET['idpengurus']) ? $_GET['idpengurus'] : "";
$idpengurus = mysqli_real_escape_string($con, $idpengurus);
$sql = "SELECT * FROM pengurus WHERE idpengurus='$idpengurus'";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_array($query);

?>

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen Data Pengurus</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Edit Data Pengurus
            </h6>
        </div>
        <form action="pengurus_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idpengurus" value="<?=$data['idpengurus'];?>">
            <div class="card-body">
                <div class="form-group">
                    <label>Jabatan:</label>
                    <input type="text" class="form-control" placeholder="Masukkan jabatan" name="jabatan" required
                        value="<?= $data['jabatan']; ?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi Jabatan:</label>
                    <textarea class="form-control" placeholder="Masukkan deskripsi jabatan jika diperlukan" name="jabatan2"
                        rows="2"><?= $data['jabatan2']; ?> </textarea>
                </div>
                <div class="form-group">
                    <label>Nama pengurus:</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama pengurus" name="namapengurus"
                        required value="<?= $data['namapengurus']; ?>">
                </div>
                <div class="form-group">
                    <label>Instagram:</label>
                    <input type="text" class="form-control" placeholder="Masukkan instagram" name="instagram" required
                        value="<?= $data['instagram']; ?>">
                </div>
                <div class="form-group">
                    <label>Linkedin:</label>
                    <input type="text" class="form-control" placeholder="Masukkan linkedin" name="linkedin" required
                        value="<?= $data['linkedin']; ?>">
                </div>
                <div class="form-group">
                    <label>Periode: YYYY/YYYY</label>
                    <input type="text" class="form-control" placeholder="Masukkan periode" name="periode" pattern="[0-9]{4}/[0-9]{4}"  required
                        value="<?= $data['periode']; ?>">
                    <small>Contoh: 2023/2024</small>
                </div>
                <div class="form-group">
                    <label>Foto:</label>
                    <input type="file" class="form-control" placeholder="Masukkan foto" name="foto">
                    <input type="hidden" name="old_foto" value="<?= $data['foto']; ?>">
                </div>
                <div>
                        <br>
                        <label> foto sebelumnya </label> <br>
                        <?php
                        $foto = "default.jpg";
                        if (!empty($data['foto'])) {
                            $foto = $data['foto'];
                        }
                        $link_foto = "./images/pengurus/$foto";
                        ?>
                        <img src="<?= $link_foto; ?>" class="col-sm-3" style="border:1px solid #ccc">
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="index.php?menu=pengurus" class="btn btn-warning">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
            </div>
        </form>
    </div>
</div>
