<?php
$input = "";
$email = "";
$inputError = "";
$emailError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['input'])) {
            $inputError = "Isi Nama Terlebih Dulu!";
        } else {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
            $inputError = "<br>Data berhasil disimpan!";
            
        }

}
?>
<html>
<head>
    <title> Form Input PHP</title>
</head>
<body>
    <h2>Form HTML Aman</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="input">Nama:</label>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>">
        <span class="error"><?php echo $inputError; ?></span><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>