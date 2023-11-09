<?php
include 'header-main-auth.php';
?>

<div class="flex justify-center items-center min-h-screen bg-[url('/assets/images/map.svg')] dark:bg-[url('/assets/images/map-dark.svg')] bg-cover bg-center">
    <div class="panel sm:w-[480px] m-6 max-w-lg w-full">
        <div class="flex justify-center">
            <!-- Add an image here -->
            <img src="signup.png" alt="Image" class="w-32 h-32 mr-4">
            <div>
                <h2 class="font-bold text-2xl mb-3">Shop Owner Sign In</h2>
                <p class="mb-7">Enter your email and password to login</p>
                <form class="space-y-5" @submit.prevent="window.location='/'">
                    <div>
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-input" placeholder="Enter Email" />
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-input" placeholder="Enter Password" />
                    </div>
                    <div>
                        <label class="cursor-pointer">
                            <input type="checkbox" class="form-checkbox" />
                            <span class="text-white-dark">Subscribe to weekly newsletter</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary w-full">SIGN IN</button>
                </form>
                <div class="relative my-7 h-5 text-center before:w-full before:h-[1px] before:absolute before:inset-0 before:m-auto before:bg-[#ebedf2] dark:before:bg-[#253b5c]">
                    <div class="font-bold text-white-dark bg-white dark:bg-[#0e1726] px-2 relative z-[1] inline-block"><span>OR</span></div>
                </div>
                <p class="text-center">Don't have an account? <a href="boxed-signup.php" class="text-primary font-bold hover:underline">Sign Up</a></p>
                <p class="text-center">List your business <a href="boxed-signupShopOwner.php" class="text-primary font-bold hover:underline">Register Shop Owner</a></p>
            </div>
        </div>
    </div>
</div>
<?php include 'footer-main-auth.php'; ?>
