<?php
    include("../layout/hearder.php");
    include("../database/db.php");

    
    $name = $email = $password = "";
    $errorName = $errorEmail = $errorPassword = $errorConfirm = "";

    if(isset($_POST['register'])){
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        } else {
            $errorEmail = "vui long nhap email";
        }
        if(isset($_POST['name'])){
            $name = $_POST['name'];
        } else {
            $errorName = "vui long nhap name";
        }
        if(isset($_POST['password']) == isset($_POST['confirmpassword'])){
            $password = md5($_POST['password']);
        } else {
            $errorPassword = "vui long nhap password";
        }
        
        if($email && $name && $password){

            $sql = 'INSERT INTO register (email, name, password) values("'.$email.'", "'.$name.'", "'.$password.'")';
            execute($sql);
        }
    }

?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="">
            <span style="color:red;"><?php echo $errorEmail  ?></span>
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="">
            <span style="color:red;"><?php echo $errorName ?></span>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="">
        
        </div>
        <div class="form-group">
            <label for="">ConfirmPassword</label>
            <input type="password" class="form-control" name="confirmpassword" id="" aria-describedby="emailHelpId" placeholder="">
          
        </div>
        <button type="submit" name="register">Register</button>
    </form>
<?php
    include("../layout/footer.php");
?>