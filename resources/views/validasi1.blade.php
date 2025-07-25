<html>
    <head>
        <tite>
            Pendaftaran ISE
        </tite>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        function validasi()
{
    var nrp = document.getElementById("nrp").value ;
    var nama = document.getElementById("nama").value ;

    //cek sudah diisi atau belum, gak boleh kosong
    if(nrp.length == 0)
    {
        Swal.fire({
            title: "Kesalahan Input",
            text: "NRP tidak boleh kosong",
            icon: "error"
        });
        return false;
    }

    if(nama.length == 0)
    {
        Swal.fire({
            title: "Kesalahan Input",
            text: "Nama tidak boleh kosong",
            icon: "error"
        });
        return false;
    }

    // Validasi nama minimal 2 huruf
    if(nama.length < 2)
    {
        Swal.fire({
            title: "Kesalahan Input",
            text: "Nama minimal harus terdiri dari 2 huruf",
            icon: "error"
        });
        return false;
    }

    // Validasi nama tidak mengandung angka
    if(/\d/.test(nama))
    {
        Swal.fire({
            title: "Kesalahan Input",
            text: "Nama tidak boleh mengandung angka",
            icon: "error"
        });
        return false;
    }

    // Semua validasi lolos
    return true;
}
    </script>
    </head>

    <body>
        <div class="container">
            <form action="https://google.co.id" method="get"
                onsubmit="return validasi();">
                <h3>
                    Form Pendaftaran
                </h3>
                NRP :
                <input type="text" name="nrp" id="nrp" class="form-control"
                    placeholder="Silakahkan diisi 10 digit NRP, Harus angka, harus diisi">
                <br>
                Nama :

                <input type="text" name="nama" id="nama" class="form-control"
                    placeholder="Isikan nama peserta yang valid">
                <input type="submit" class="btn btn-success" value="Daftar">
            </form>
        </div>

    </body>
</html>
