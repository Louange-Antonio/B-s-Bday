<?php
    require 'connection.php';
    // get info that is posted via the button
    if (isset($_POST['submit'])){
        // info from the textboxes
        $name = $_POST['name'];
        $well = $_POST['well'];
        $pic = $_POST['pic'];

        if (empty($name) || empty($well)|| empty($pic)){
            echo "Please fill in all the details";
            // header("refresh:3;user_register.php");
        }
        else
        {
            if ($name > 0)
            {
                $query = "INSERT INTO `tbl_birthday`(`birth_name`, `birth_mess`, `birth_pic`) VALUES ('$name','$well','$pic')";
                $result = mysqli_query($conn, $query);

                if($result){
                    echo "HAS BEEN SUBMITTED, THANK YOU";
                    header("refresh:1;index.php");
                }
                else
                {
                    echo "ERROR, NOT SUBMITTED";
                }
            }
            
        }
    }

?>