
                <?php

                if(isset($_POST['submit'])  &&  !empty ($_POST['submit'])){

                //  echo '<pre>';
                //  print_r($_POST);
                //  echo '</pre>';

                //  echo '<pre>';
                //  print_r($_FILES);
                //  echo '</pre>';

                $name = $_FILES['portfolio-image']['name'];
                $type = $_FILES['portfolio-image']['type'];
                $tmp_name = $_FILES['portfolio-image']['tmp_name'];
                $error = $_FILES['portfolio-image']['error'];
                $size = $_FILES['portfolio-image']['size'];

                
                if (file_error_check ()){
                $destination = 'upload/image/'.$name;

                move_uploaded_file($tmp_name , $destination);


                }else{
                         echo   "file upload error";
                         header("location:error.php");
                }


};

                function file_error_check(){

                    return true;            
                 }




                ?>




                