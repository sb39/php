<! DOCTYPE html>
<meta charset ="utf-8">
<?php
//require 'dbconnect.php';
$con = mysqli_connect("localhost", "root", "", "srij");
if ($con){
    echo "connected !";
}
?>
<html lang="en">
<meta charset="utf-8">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >
</head>
<body style="background:#2196F3;">
        <!--form-->
        <div class="container" style="background:#eee;margin-top:180px;">
        <center>
         <form style="padding:30px 30px 30px 30px;" method="POST" action="index1.php" autocomplete="off">
          <div class="form-group">
            <div class="row">
                    <div class="col-md-4">
                        <label for="member_id" >member_id</label>
                        <input type="text" id="member_id" name="member_id" placeholder="enter id number" required/>
                    </div>
                    <div class="col-md-4">
                        <label for="first_name" >first_name</label>
                        <input type="text" id="first_name" name="first_name" placeholder="first name here" required/>
                  </div>
                    <div class="col-md-4">
                        <label for="last_name" >last_name</label>
                        <input type="text" id="last_name" name="last_name" placeholder="last name here" required/>
                    </div>
              </div>
          </div>
          <div class="form-group">
           <div class="row">
                <div class="col-md-4">
                   <label for="email" >email</label>
                    <input type="email" id="email" name="email" placeholder="email add. here" required/>
               </div>
               <div class="col-md-4">
                   <label for="contact" >contact</label>
                    <input type="text" id="contact" name="contact" placeholder="contact here" required/>
               </div>
               <div class="col-md-4">
                   <label for="state" >state</label>
                    <input type="text" id="state" name="state" placeholder="state loc. here" required/>
               </div>
            </div>
          </div>
          <div class="form-group">
           <div class="row">
                <div class="col-md-4">
                   <label for="address" >address</label>
                    <input type="text" id="address" name="address" placeholder="add. here" required/>
               </div>
               <div class="col-md-4">
                   <label for="fb_id" >fb_id</label>
                    <input type="text" id="fb_id" name="fb_id" placeholder="fb id here" required/>
               </div>
               <div class="col-md-4">
                   <label for="linkedin_id" >linkedin_id</label>
                    <input type="text" id="linkedin_id" name="linkedin_id" placeholder="linkedin id here" required/>
               </div>
            </div>
          </div>
          <div class="form-group">
           <div class="row">
                <div class="col-md-6">
                   <label for="git_id" >git_id</label>
                    <input type="text" id="git_id" name="git_id" placeholder="git id here" required/>
               </div>
               <div class="col-md-6">
                   <label for="twitter_id" >twitter_id</label>
                    <input type="text" id="twitter_id" name="twitter_id" placeholder="twitter id here" required/>
               </div>
               
            </div>
            <div class="form-group">
           <div class="row">
                <div class="col-md-4">
                   <label for="sex" >sex</label>
                    <input type="text" id="sex" name="sex" placeholder="enter your sex" required/>
               </div>
               <div class="col-md-4">
                   <label for="profile_pic" >profile_pic</label>
                    <input type="text" id="profile_pic" name="profile_pic" placeholder="leave out blank" required/>
               </div>
               <div class="col-md-4">
                   <label for="position" >position</label>
                    <input type="text" id="position" name="position" placeholder="enter your position" required/>
               </div>
            </div>
          </div>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input">
                Agree to <a href="#">Terms &amp; conditions</a>
            </label>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
            </center>
    </div>
        <!--/bs form/-->
        <!-- php insert code-->
        <?php
        if(isset($_POST['submit'])){
            $member_id = $_POST['member_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $contact = $_POST['contact'];
            $state = $_POST['state'];
            $address = $_POST['address'];
            $fb_id = $_POST['fb_id'];
            $linkedin_id = $_POST['linkedin_id'];
            $git_id = $_POST['git_id'];
            $twitter_id = $_POST['twitter_id'];
            $sex  = $_POST['sex'];
            $profile_pic = $_POST['profile_pic'];
            $position = $_POST['position'];
            
            $insert = "insert into srijtab(member_id, first_name, last_name, email, contact, state, address, fb_id, linkedin_id, git_id, twitter_id, sex, profile_pic, position) values('$member_id', '$first_name', '$last_name', '$email', '$contact', '$state', '$address', '$fb_id', '$linkedin_id', '$git_id', '$twitter_id', '$sex', '$profile_pic', '$position')";
            
            $execute = mysqli_query($con, $insert);
            if($execute){
                echo "insert corect";
            }
        }
        ?>
        <!--/ php insert code/-->
   <!--bs js-->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script> 
</body>
</html>