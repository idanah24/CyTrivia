<?php
include('includes/header.php');
$msg='';
if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $fullName = mysqli_real_escape_string($con, $_POST['name']);
    if(mysqli_query($con, "INSERT INTO users(username,full_name,score) VALUES('".$username."','".$fullName."','-1')"))
    {
        $msg = 'Congratulation you have successfully registered.';
    }
    else{
        $msg = 'Error while registering you...';
    }
}

?>
<div class="container text-center">
    <h1 class="display-3">הרשמה לאתר</h1>
    <br><br>
    <div class="row justify-content-md-center">
        <!-- Right Column -->
        <div class="col col-lg-4"></div>
        <!-- Center Column -->
        <div class="col-md-auto">
            <form action="" method="post">
                <div class="form-group text-center">
                    <div class="input-group-md">
                        <label for="username" class="control-label">שם משתמש</label>
                        <input type="text" name="username" id="username" autocomplete="off" class="form-control" placeholder="שם משתמש" aria-describedby="userHelp">
                        <small id="userHelp" class="form-text text-muted">נא להכניס בין 2 ל20 תווים</small>
                    </div>
                    <!-- <div class="input-group-md">
                        <label for="password">סיסמא</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="סיסמא" aria-describedby="passHelp">
                        <small id="passHelp" class="form-text text-muted">נא להכניס לפחות 6 תווים</small>
                    </div>
                    <div class="input-group-md">
                        <label for="password_again">חזור על הסיסמא</label>
                        <input type="password" name="password_again" id="password_again" class="form-control" placeholder="חזור על הסיסמא">
                    </div> -->
                    <div class="input-group-md">
                    <label for="name">שם פרטי ושם משפחה</label>
                        <input type="text" name="name" id="name" autocomplete="off" class="form-control" placeholder="שם מלא" area-discribedby="nameHelp">
                        <small id="nameHelp" class="form-text text-muted">נא להכניס בין 5 ל50 תווים</small>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary" value="register" name="register">הרשם</button>
            </form>
        </div>
        <!-- Left Column -->
        <div class="col col-lg-4 text-right">
            <p>
                <?php echo $msg;?>
            </p>
        </div>
    </div>
</div>
<?php include('includes/footer.php');?>
