<?php
   
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
     // $file_type=$_FILES['image']['type'];
      //$text=$_POST['text'];
     // $file_name1="images/".$file_name;
     // $file_ext=strtolower(end(explode($str,$file_name)));
      
      //$sql="INSERT into image1 (image,text) values ('$file_name1','$text')";
      $l=strpos( $file_name,".");
      $file_ext=substr($file_name,strpos($file_name, ".")+1);
      $expensions= array("jpeg","jpg","png");
      $file_ext1=strtolower($file_ext);
      if(in_array($file_ext1,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"../images/".$file_name);
         $image_khalid="images/".$file_name;
         
        
         echo "Success";
         
      }else{
         
        // print_r($errors);
        ?>
        <a href="home1.php"><button class="btn btn-outline btn-success"> goBack</button></a>
        <?php
      }

   }
   

?>

