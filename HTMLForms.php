<html lang="en">
<body>
<?php
    if(isset($_POST)) {
        $emp_name = trim($_POST["emp_name"]);
        $emp_number = trim($_POST["emp_number"]);
        $emp_email = trim($_POST["emp_email"]);

        if($emp_name == "") {
            $errorMsg = "error : You did not enter a name.";
            $code = "1";
            echo $errorMsg . $code;
        } elseif($emp_number == "") {
            $errorMsg = "error : Please enter number.";
            $code = "2";
            echo $errorMsg . $code;
        }

        //check if the number field is numeric
        elseif (is_numeric(trim($emp_number)) == false) {
            $errorMsg = "error : Please enter numberic value.";
            $code = "2";
            echo $errorMsg . $code;
        }elseif (strlen($emp_number) < 10 ){
            $errorMsg = "error : The number should be ten digit.";
            $code = "2";
            echo $errorMsg . $code;
        }

        //check if email field is empty
        elseif($emp_email == "") {
            $errorMsg = "error: You did not enter an email.";
            $code = "3";
            echo $errorMsg . $code;
        }

        //check for valid email
        elseif(!preg_match("/^[_\.0-9a-zA-Z-]+(\.[_\.0-9a-zA-Z-]+)*@[a-zA-Z-]+(\.[a-zA-Z-]+)*\.[a-zA-Z]{2,6}$/", $emp_email)) {
            $errorMsg = "error: You did not enter a valid email.";
            $code = "3";
            echo $errorMsg . $code;
        }else{
            echo "Success";
        }
    }
?>
</body>
</html>
