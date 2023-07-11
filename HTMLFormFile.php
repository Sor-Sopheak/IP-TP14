<html>
    <body>
        <?php
            if(isset($_POST["SubmitBtn"])) {
                $fileName = $_FILES["resume"]["name"];
                $fileSize = $_FILES["resume"]["size"] / 1024;
                $fileType = $_FILES["resume"]["type"];
                $fileTmpName = $_FILES["resume"]["tmp_name"];
                
                if($fileType == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $fileType == "application/msword") {
                    if($fileSize <= 200) {
                        $random = rand(1111, 9999);
                        $newFileName = $random . $fileName;

                        $uploadPath = "testUpload/" . $newFileName;

                        if(move_uploaded_file($fileTmpName, $uploadPath)) {
                            echo "Successful"."<br>";
                            echo "File Name :" . $newFileName . "<br>";
                            echo "File Size :" . $fileSize . "kb" . "<br>";
                            echo "File Type :" . $fileType . "<br>";
                        }
                    } elseif($fileSize > 200){
                        echo "Maximum upload file size limit is 200 kb";
                    }else{
                        echo "Error: File upload failed. Please check the destination directory and file permissions.";
                    }
                }else {
                    echo "You can only upload a Word doc file.";
                }
            }
        ?>
    </body>
</html>