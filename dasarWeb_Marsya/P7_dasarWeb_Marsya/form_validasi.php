<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myform" method = "post" action = "proses_validasi.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <span id="email-error" style="color: red;"></span><br><br><br>

            <input type="submit" value="Submit">
        </form>
            
            <script>
                $(document).ready(function() {
                    $("#myForm").submit(function(event) {
                    var nama = $("#nama").val();
                    var email = $("email").val();
                    var valid = true;

                    if (nama === "" ) {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }
                    //menggunakan ajax
                    if (valid) {
                        $.ajax({
                            url: "proses_validasi.php",
                            type: "POST",
                            data: {
                                nama: nama,
                                email: email
                            },
                            success: function(response) {
                                alert("Data berhasil dikirim: " + response);
                            },
                            error: function(xhr, status, error) {
                                alert("Terjadi kesalahan: " + error);
                            }
                });
            }

            });
        });
            </script>     
    </body>
</html>