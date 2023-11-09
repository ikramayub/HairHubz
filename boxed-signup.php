<?php
include 'header-main-auth.php';
require('config.php');

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $userEmail = $_POST["userEmail"];
    $phoneNum = $_POST["phoneNum"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $role= "customer";

    // Check if the password and confirm password match
    if ($password != $cpassword) {
        echo "<script>alert('Password and confirm password do not match');
              window.location='boxed-signup.php'</script>";
        exit;
    }

    // Check if the email already exists
    $checkEmailQuery = "SELECT * FROM user WHERE userEmail = '$userEmail'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);
    if (mysqli_num_rows($checkEmailResult) > 0) {
        echo "<script>alert('Email already exists. Please choose a different email');
              window.location='boxed-signup.php'</script>";
        exit;
    }

    // Insert user data into the database
    $insertQuery = "INSERT INTO user(username, userEmail, phoneNum , userRole, password) 
    VALUES ('$username', '$userEmail', '$phoneNum' ,'$role', '$password')";
    $result = mysqli_query($conn, $insertQuery);
    if ($result) {
        echo "<script>alert('Your account is sucessfully sign up');
              window.location='index.php'</script>";
        exit;
    } else {
        echo "<script>alert('Failed to sign up. Please try again');
              window.location='boxed-signup.php'</script>";
        exit;
    }
}
?>

<div class="flex justify-center items-center min-h-screen bg-[url('/assets/images/signup.png')] bg-cover bg-center">
    <div class="panel sm:w-[480px] m-6 max-w-lg w-full">
        <h2 class="font-bold text-2xl mb-3">Sign Up</h2>
        <p class="mb-7">Enter your email and password to register</p>
        <form class="space-y-5" method="POST" action="">
            <div>
                <label for="username">Name</label>
                <input id="username" name="username" type="text" class="form-input" placeholder="Name" required/>
            </div>
            <div>
                <label for="userEmail">Email Address</label>
                <input id="userEmail" name="userEmail" type="email" class="form-input" placeholder="Email Address" required/>
            </div>
            <div>
                <label for="phoneNum">Phone Number</label>
                <input id="phoneNum" name="phoneNum" type="number" class="form-input" placeholder="Phone Number" required/>
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" class="form-input" placeholder="Password" required/>
            </div>
            <div>
                <label for="password">Confirm Password</label>
                <input id="password" name="cpassword" type="password" class="form-input" placeholder="Confirm Password" required/>
            </div>
            <div>
                <label class="cursor-pointer">
                    <input type="checkbox" class="form-checkbox" />
                    <span for="custom_checkbox" class="text-white-dark">I agree the <a href="javascript:;" class="text-primary hover:underline">Terms and Conditions</a></span>
                </label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-full">SIGN UP</button>
        </form>
        <div class="relative my-7 h-5 text-center before:w-full before:h-[1px] before:absolute before:inset-0 before:m-auto before:bg-[#ebedf2] dark:before:bg-[#253b5c]">
            <div class="font-bold text-white-dark bg-white dark:bg-[#0e1726] px-2 relative z-[1] inline-block"><span>OR</span></div>
        </div>
        <p class="text-center">Already have an account ? <a href="boxed-signin.php" class="text-primary font-bold hover:underline">Sign In</a></p>
    </div>
</div>
<?php include 'footer-main-auth.php'; ?>