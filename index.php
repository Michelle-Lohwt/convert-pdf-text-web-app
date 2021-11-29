<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PDF to Text Converter</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel='stylesheet' type='text/css' href='css/style.php' />
</head>

<body>
  <?php include('html/sidenav.html'); ?>

  <div class="wrapper">
    <div class="title">
      Upload File
    </div>
    <div class="upload_pdf">
      <form action="php/upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload_file">
        <button type="submit" name="submit">UPLOAD</button>
      </form>
    </div>
  </div>

  <?php
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  if (strpos($url, "empty")) {
    echo "<p class='error'>You did not upload any file!</p>";
  } elseif (strpos($url, "invalidsize")) {
    echo "<p class='error'>The file is too big! Maximum size is 1 GB.</p>";
  } elseif (strpos($url, "uploaderror")) {
    echo "<p class='error'>There was an error uploading your file!</p>";
  } elseif (strpos($url, "invalidtype")) {
    echo "<p class='error'>Wrong file type! Please upload pdf.</p>";
  } elseif (strpos($url, "uploadsuccess")) {
    echo "<p class='success'>PDF Upload successful!</p>";
  }
  ?>

  <!-- <?php
        echo shell_exec("cd /var/www/cat-assign/java/ && javac convert_text.java && java convert_text");
        ?> -->
</body>

</html>