<?php
   include "auth.php" ;
   $cuser = new auth();

       // Administrator Login
   if(isset($_POST['login']))
   {
    
      $username = $cuser->test_input($_POST["username"]);
      $password = $cuser->test_input($_POST["password"]);

      if(empty($username) || empty($password)){
         
         header("location:../index.php?error=empty");
         exit(); 
      }elseif(strlen($password) > 12 || strlen($password) < 6){

         header("location:../index.php?error=pass");
         exit(); 
      }else{
         $cuser->adminLogin($username,$password);
      
            header("location:../dashboard.php?success=welcome");
            exit(); 
      }
   }

       // Administrator Register
   if(isset($_POST['register']))
   {
       $username = $cuser->test_input($_POST['username']);
       $email = $cuser->test_input($_POST['email']);
       $password = $cuser->test_input($_POST['password']);

      if(empty($username) || empty($email) || empty($password)){

         header("location:../auth_register.php?error=empty");
         exit();

      }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){

         header("location:../auth_register.php?error=verification");
         exit();

      }elseif(strlen($password) > 12 || strlen($password) < 6){

         header("location:../auth_register.php?error=pass");
         exit();

      }else{  
       $cuser->adminRegister($username, $email, $password);

         header("location:../index.php");
         exit(); 
      }
   }

   if (isset($_POST['save_profile'])) 
   {

      $fields = array(
         $adminId = $_SESSION['id'],
         $pImg = $_FILES['profile_img']['name'],
         $fName = $cuser->test_input($_POST['f_name']),
         $profession = $cuser->test_input($_POST['profession']),
         $location = $cuser->test_input($_POST['location']),
         $phone = $cuser->test_input($_POST['phone']),
         $website = $cuser->test_input($_POST['web_link']),
         $Ln = $cuser->test_input($_POST['linked_in']),
         $Tw = $cuser->test_input($_POST['twitter']),
         $Fb = $cuser->test_input($_POST['face_book']),
         $Git = $cuser->test_input($_POST['git_hub']),
      );

      $old_pImg = $_POST['old_profile_img'];
      $pImg_size = $_FILES['profile_img']['size'];
      $pImg_tmp = $_FILES['profile_img']['tmp_name'];

          // Get image file extension
      $file_extension = pathinfo($pImg, PATHINFO_EXTENSION);

          // Allowed extension
      $extensions = array("jpeg", "jpg", "png");

   if (empty($fields)) {
      header("location:../user_account_setting.php?error=empty");
      exit();
          // Allowed image size
   }elseif ($pImg_size > 5 * 1024 * 1024) {
         header("location:../user_account_setting.php?error=too_big_img");
         exit();

   }elseif (!in_array($file_extension, $extensions)) {
      header("location:../user_account_setting.php?error=invalid_extension");
      exit();
      
   }else {
      
      if (!empty($pImg)) {
         
         $name = uniqid("img_");
         $fileName = $name . "." . $file_extension;

      }else {
         $fileName = $old_pImg;
      }
      $hasFileUpload = move_uploaded_file($pImg_tmp, "../uploads/" . $fileName);

      $result = $cuser->update_Admin_profile($adminId, $fName, $location, $phone, $profession, $website, $Fb, $Tw, $Ln, $Git, $fileName);

      // if ($result) {

         if ($hasFileUpload)
            unlink("../uploads/" . $old_pImg);

         header("location:../user_profile.php?success=profile_updated");
         exit(); 
      // }
   }
}

?>

    