<?php

$statusMessage = '';

if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'upload') {

    if (
        isset($_FILES['uploadedFile']) &&
        $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK
    ) {

        $fileTMPName = $_FILES['uploadedFile']['tmp_name'];
        $fileName = $_FILES['uploadedFile']['name'];
        $fileSize = $_FILES['uploadedFile']['size'];
        $fileType = $_FILES['uploadedFile']['type'];

        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
        $filePathName = pathinfo($fileName, PATHINFO_FILENAME);

        // SANITIZE INFO
        $newFileName = md5(time() . " - " . $filePathName) . '.' . $fileExt;

        $allowedFileTypes = array('png');

        if (in_array($fileExt, $allowedFileTypes)) {
            $uploadDir = "./uploadedFiles/";
            $destinationPath =  $uploadDir . $newFileName;

            if (move_uploaded_file($fileTMPName, $destinationPath)) {
                $statusMessage = "YabadabaDooo";
                echo $statusMessage;
            } else {
                $statusMessage = "Nqq kak da stane brat";
                echo $statusMessage;
            }
        } else {
            echo "Greshen file tupak";
        }

    } else {
        echo "nqma nikoy tuka!";
    }
}


?>

<html>

<head>
    <title>Uploading Files</title>
</head>

<body>
    <?php echo $statusMessage ?>
    <form method="POST" enctype="multipart/form-data">
        <div>
            <span>Upload a File</span>
            <input type="file" name="uploadedFile">
        </div>

        <button type="submit" name="uploadBtn" value="upload">upload</button>
    </form>

</body>

</html>