<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Tambah Data User</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data User</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idUser">ID User</label>
                        <input type="text" class="form-control mb3" name="idUser" placeholder="ID User">
                    </div>
                    <div class="form-group mt-3" >
                        <label for="nmUser">Nama User</label>
                        <input type="text" class="form-control mb3" name="nmUser" placeholder="Nama User">
                    </div>
                        <div class="form-group mt-3">
                            <label for="role">Role</label>
                            <input type="text" class="form-control mb3" name="role" placeholder="Role">
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpanuser" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>