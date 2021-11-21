<?php
# Check if there is anything submitted through the form
if (isset($_POST['submit'])){

    # Get the information of the uploaded file
    $fileName = $_FILES['upload_file']['name'];
    $fileTmpName = $_FILES['upload_file']['tmp_name'];
    $fileSize = $_FILES['upload_file']['size'];
    $fileError = $_FILES['upload_file']['error'];
    $fileType = $_FILES['upload_file']['type'];

    # Get the name and extension of the file
    $fileExt = explode(".", $fileName);

    # Turn the extension to lower case
    $fileActualExt = end($fileExt);

    if($fileActualExt == 'pdf'){
        if($fileError == 0){
            if ($fileSize < 1000000){
//                # 1000000kb = 1000mb
//                $fileNameNew = uniqid('', true)."."."$fileActualExt";  # create an unique id for the file to prevent overwritten by the same file name
//                $fileDestination = 'uploads/'.$fileNameNew;
//                move_uploaded_file($fileTmpName, $fileDestination);
//                header("Location: index.php?uploadsuccess");
                echo"upload success";
            }
            else{
                echo "The file is too big!";
            }
        }
        else{
            echo "There was an error uploading your file!";
        }
    }
    else {
        echo "Wrong file type! Please upload pdf.";
    }
}
?>