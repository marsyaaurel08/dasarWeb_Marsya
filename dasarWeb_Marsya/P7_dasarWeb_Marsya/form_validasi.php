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

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;"></span><br><br><br>

            <input type="submit" value="Submit">
        </form>
        <div id="hasil">

        </div>
            
            <script>
                $(document).ready(function() {
                    $("#myForm").submit(function(e) {
                        e.preventDefault();
                    var nama = $("#nama").val();
                    var email = $("email").val();
                    var password = $("password").val();
                    var valid = true;

                    if (nama === "" ) {
                        $("#nama-error").text("Nama harus diisi.");
                        valid = false;
                    } else {
                        $("#nama-error").text("");
                    }
                    if (email === "" ) {
                        $("#email-error").text("Email harus diisi.");
                        valid = false;
                    } else {
                        $("#email-error").text("");
                    }
                    if (password === "" ) {
                        $("#password-error").text("Password harus diisi.");
                        valid = false;
                    } else {
                        $("#password-error").text("");
                    }
                    //menggunakan ajax
                    if (valid) {
                        $.ajax({
                            url: "proses_validasi.php",
                            type: "POST",
                            data: formData,
                            success: function(response) {
                                $("#hasil").html(response);
                            },
                            error: function(response) {
                                $("#hasil").html("Terjadi Kesalahan");
                            }
                });
            }

            });
        });
            </script>     
    </body>
</html>