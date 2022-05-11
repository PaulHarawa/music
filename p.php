<?php

    include "conn.php";

    session_start();
    $sid = $_SESSION['sid'];

    $sql = "SELECT * FROM songs WHERE id='$sid'";
    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_array($result);

    $sname = $row['file'];
    $downoads = $row['downloads'];
    $newd = $downoads + 1;
   
   if(!empty($sname)){
        $filepath = "uploads/".$sname;
            if(!empty($filepath)){
                    $sql1 = "UPDATE songs SET downloads='$newd' WHERE id='$sid'";
                    $result1 = mysqli_query($conn,$sql1);

                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename='.basename($filepath));
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma:public');
                    readfile($filepath);

                }
            else{
                    echo"file does not exists";

                }

                   



   }


   

    

?>