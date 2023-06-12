<?php 
$id = isset($_GET['id'])?$_GET['id']:"";
$id = mysqli_real_escape_string($con,$id);
$sql = "SELECT * FROM admin WHERE id='$id' ";
$query = mysqli_query($con,$sql);
$data  = mysqli_fetch_array($query);
?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-primaryx";>Manajemen Data Admin</h1>
            
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary";>
                                Form Edit Data Admin
                            </h6>
                        </div>
                        <form action="admin_update.php" method="post">
                        <input type="hidden" name="id" value="<?=$data['id'];?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Masukan email " name="email" required value="<?=$data['email'];?>">
                            </div>
                            <div class="form-group">
                                <label>Nama:</label>
                                <input type="text" class="form-control" placeholder="Masukan nama" name="nama" required value="<?=$data['nama'];?>">
                            </div>
                            <div class="form-group">
                                <label>Password: <sup class="text-danger">Kosongkan jika tidak mengubah password</sup></label>
                                <input type="text" class="form-control" placeholder="Masukan password" name="password" >
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                            <a href="index.php?menu=admin" class="btn btn-warning">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        </form>
                    </div>

                </div>

