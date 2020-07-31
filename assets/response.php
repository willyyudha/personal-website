<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['message'];

        $to = 'putubaguswillie@gmail.com';
        $subject = 'Form Submission';
        $message = "Name : ". $name. "\n". "Wrote the following: " . "\n\n".$msg;
        $headers = "From ". $email;

        if (mail($to, $subject, $message, $headers)){
            echo "<script>
                       alert('Sent succesfully! Thanks you'.''.$name)
                  </script>";
        }
        else{
            echo "<script>
                        alert('Opps! something went wrong')
                  </script>";
        }
    }
?>
