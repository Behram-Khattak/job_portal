<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php';?>
<body>
    
    <!--  BEGIN NAVBAR  -->
<?php include 'include/navbar.php';?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
<?php include 'include/sidebar.php';?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">                
                    
                <div class="account-settings-container layout-top-spacing">

                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <?php
                                        $cuser = new auth();
                                        if (isset($_GET['Uid'])) {

                                            $adminId = $_GET['Uid'];
                                            $fetch_profile = $cuser->fetch_Profile_data($adminId);
                
                                        }else {
                                            exit();
                                        }

                                        if (isset($_GET['error'])) {
                                            $error = $_GET['error'];
                                            
                                            if ($error == "empty") {
                                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Fields cannot be empty!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }
                                            elseif ($error == "invalid_extension") {
                                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Invalid image extension!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }
                                            if ($error == "too_big_img") {
                                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Image size is too big!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }
                                            if ($error == "file dose'nt exist's") {
                                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Image file dose not exits!</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>';
                                            }
                                        }

                                        foreach ($fetch_profile as $fetch) {

                                    ?>
                                    <form id="general-info" action="include/process.php"  enctype="multipart/form-data" method="POST" class="section general-info">
                                        <div class="info">
                                            <h6 class="">General Information</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-2 col-lg-12 col-md-4">
                                                            <div class="upload mt-4 pr-md-4">
                                                                <label for="avatar">
                                                                    <input type="hidden" name="old_profile_img" value="<?php echo $fetch['image'];?>">
                                                                    <input type="file" name="profile_img" id="input-file-max-fs" class="dropify">
                                                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Full Name</label>
                                                                            <input type="text" name="f_name" class="form-control mb-4" id="fullName" value="<?php echo $fetch['fname'];?>" placeholder="Full Name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="profession">Profession</label>
                                                                    <input type="text" name="profession" class="form-control mb-4" id="profession" value="<?php echo $fetch['profession'];?>" placeholder="Designer">
                                                                </div>
                                                                <div class="info">
                                            <h6 class="text-uppercase">Contact Information</h6>
                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="location">Location</label>
                                                                <input type="text" name="location" class="form-control mb-4" id="location" value="<?php echo $fetch['location'];?>" placeholder="Location">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="phone">Phone</label>
                                                                <input type="text" name="phone" class="form-control mb-4" id="phone" value="<?php echo $fetch['phone'];?>" placeholder="Write your phone number here">
                                                            </div>
                                                        </div>                                 
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="website1">Website</label>
                                                                <input type="text" name="web_link" class="form-control mb-4" id="website1" value="<?php echo $fetch['web_link'];?>" placeholder="Write your website here">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h6 class="text-uppercase">Social Links</h6>
                                            <div class="row">

                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group social-linkedin mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></span>
                                                                </div>
                                                                <input type="text" name="linked_in" class="form-control" value="<?php echo $fetch['linkedin'];?>" placeholder="linkedin Username" aria-label="Username" aria-describedby="linkedin">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group social-tweet mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="tweet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></span>
                                                                </div>
                                                                <input type="text" name="twitter" class="form-control" value="<?php echo $fetch['twitter'];?>" placeholder="Twitter Username" aria-label="Username" aria-describedby="tweet">
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-group social-fb mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                                                </div>
                                                                <input type="text" name="face_book" class="form-control" value="<?php echo $fetch['facebook'];?>" placeholder="Facebook Username" aria-label="Username" aria-describedby="fb">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group social-github mb-3">
                                                                <div class="input-group-prepend mr-3">
                                                                    <span class="input-group-text" id="github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></span>
                                                                </div>
                                                                <input type="text" name="git_hub" class="form-control" value="<?php echo $fetch['github'];?>" placeholder="Github Username" aria-label="Username" aria-describedby="github">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        
                        <div class="as-footer-container text-center">
                            <div class="blockui-growl-message">
                                <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                            </div>
                            <button id="multiple-messages" name="save_profile" class="btn btn-success">Save Changes</button>

                        </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                        <?php }?>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
<?php include 'include/footer.php';?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->

<?php include 'include/scripts.php';?>
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/user_account_setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 12:45:31 GMT -->
</html>