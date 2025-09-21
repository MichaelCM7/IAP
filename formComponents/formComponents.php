<?php
class formComponents {
    public function signup() {
?>
    <main class="container">
        <div class="form-container">
            <h1 class="text-center mb-4">Join Project Impossible</h1>
            <p class="text-center mb-4">Start your journey to achieve the impossible</p>
            <form id='signupForm' action='signUpSubmit.php' method='post'>  
                <div class="form-group">
                    <label for='firstname'>First name</label>
                    <input type='text' id='firstname' name='firstname' required maxlength="50">
                </div>
                <div class="form-group">
                    <label for='lastname'>Last name</label>
                    <input type='text' id='lastname' name='lastname' required maxlength="50">
                </div>
                <div class="form-group">
                    <label for='email'>Email</label>
                    <input type='email' id='email' name='email' required maxlength="100">
                </div>
                <div class="form-group">
                    <label for='password'>Password</label>
                    <input type='password' id='password' name='password' required minlength="8" maxlength="50">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required minlength="8" maxlength="50">
                </div>
                <button type='submit' class="btn btn-primary" style="width: 100%;">Sign Up</button>
            </form>       
            <p class="text-center" style="margin-top: 1.5rem;">
                Already have an account? <a href="login.php" style="color: var(--primary);">Log in here</a>
            </p>
        </div>
    </main>
<script type="module">
import { confirmPassword } from '/IAP/scipts/confirmPassword.js';

document.getElementById('signupForm').addEventListener('submit', function(e) {
    if (!confirmPassword('password', 'confirmPassword')) {
        e.preventDefault();
    }
});
</script>
<?php
    }

    public function login() {
?>
    <main class="container">
        <div class="form-container">
            <h1 class="text-center mb-4">Join Project Impossible</h1>
            <p class="text-center mb-4">Start your journey to achieve the impossible</p>
            <form id='signupForm' action='loginSubmit.php' method='post'>  
                <div class="form-group">
                    <label for='email'>Email</label>
                    <input type='email' id='email' name='email' required maxlength="100">
                </div>
                <div class="form-group">
                    <label for='password'>Password:</label>
                    <input type='password' id='password' name='password' required maxlength="50">
                </div>
                <button type='submit' class="btn btn-primary" style="width: 100%;">Sign Up</button>
            </form>       
            <p class="text-center" style="margin-top: 1.5rem;">
                Don't have an account <a href="signup.php" style="color: var(--primary);">Sign up here</a>
            </p>
        </div>
    </main>
<?php
    }
}
?>