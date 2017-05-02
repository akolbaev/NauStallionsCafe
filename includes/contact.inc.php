<?php
include_once "init.php";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
                $Name=$_POST['name'];
                $Email=$_POST['email'];
                $Phone=$_POST['phone'];
                $Subject=$_POST['subject'];
                $Message=$_POST['message'];
                $dt=$_POST['dt'];
                
                $errors = [];


                if (!empty($errors)) {
                foreach ($errors as $error) {
                        validation_errors($error);
                }
        }
        else{
                $sql = "INSERT INTO tbl_contact_us (Name, Email, Phone, Subject, Message, Date_and_Time) VALUES ('$Name','$Email','$Phone','$Subject','$Message',now())";
                if ($conn->query($sql) === TRUE){
                        echo '<script language="javascript">';
                        echo 'alert("Thanks for getting in touch with us! We will get back to you shortly."); location.href="../index.php?page=contact_us"';
                        echo '</script>';
                        exit();
                } else {
                        set_message("<p>Error: " . $sql . "<br>" . $conn->error . "</p>");
                }

                $conn->close();
        }

}
?>
