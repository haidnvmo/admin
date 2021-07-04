<?php
    include("../layout/hearder.php");
    include("../database/dbhelper.php");

    $email = $password = "";
    $errorEmail = $errorPassword = "";
    if(isset($_POST['login'])){
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        } else {
            $errorEmail = "vui long nhap email";
        }
        if(isset($_POST['password'])){
            $email = $_POST['password'];
        } else {
            $errorEmail = "vui long nhap password";
        }
    }
?>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="">
            <span style="color:red;"><?php echo $errorEmail  ?></span>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="">
            <span style="color:red;"><?php echo $errorPassword ?></span>
        </div>
        <button type="submit" name="login">Login</button>
    </form>

<?php
    include("../layout/footer.php");
?>