<?php
require_once '../model/dbquery.php';
   require_once '../model/dbquery.php';
    if(isset($_POST['srcSubmit']))
    {
        $src = $_POST['search'];
       if($src == "")
       {
           header('location: ../view/userfeed.php');
       }
       else
       {
            $result = search_user($src);
            $row=$result->fetch_assoc();
            $id=$row['id'];
            if($result->num_rows > 0)
            {
                header('Location: ../view/searchusers.php?result='.$id);
            }
            else
            {
                header('location: ../view/userfeed.php?msg=No user found');
            }
       }
    }
   