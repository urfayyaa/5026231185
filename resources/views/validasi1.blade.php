<html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <script>
               function validasi()
            {
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nama").value;
            
            // cek nomor
            if(isNaN(nrp))
            {
                Swal.fire({
                title: "Kesalahan Input!",
                text: "NRP tidak boleh huruf atau karakter lain",
                icon: "error"
                });
                return false;
            }

             // cek minimal 10
             if(nrp.length !== 10 )
            {
                Swal.fire({
                title: "Kesalahan Input!",
                text: "NRP harus tepat 10 digit angka",
                icon: "error"
                });
                return false;
            }

            if(nama.length == 0)
            {
                Swal.fire({
                title: "Kesalahan Input!",
                text: "Nama tidak boleh kosong",
                icon: "error"
                });
                return false;
            }
            }
            </script>
    </head>
    <body>
        <div class="container">
            <form action="https://google.co.id" method="get" onsubmit="return validasi();"">
                <b3>Form Pendaftaran</b3>
                NRP :
                <input type="text" name="nrp" id="nrp" class="form-control" placeholder="Silahkan diisi 10 digit NRP, harus angka, harus diisi">
                <br>
                Nama :
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Isikan nama peserta yang valid">
                <input type="submit" class="btn btn-success" value="Daftar">
        </form>
        </div>
    </body>
    </html>