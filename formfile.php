
<?php

include "registration.php";
include "header.php"


?>
 
<h1>file, upload!</h1>

<form action="formfile.php" method="post" enctype="multipart/form-data"> 
<div class="mb-3">

<h6 class="text-danger">Name</h6>             
<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


<label for="exampleInputEmail1" class="form-label">file upload  </label>
<input type="file" name="portfolio-image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                
                
<input type="submit"  name="submit"  class="btn btn-primary" value="submit">
</form>


 






 