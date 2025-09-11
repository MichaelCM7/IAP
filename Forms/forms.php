<?php
class forms {
    public function signup() {
?>
<form id='signupForm' action='signupsubmit.php' method='post'>
    <label for='firstname'>First name</label><br>
    <input type='text' id='firstname' name='firstname' required><br><br>
    <label for='lastname'>Last name</label><br>
    <input type='text' id='lastname' name='lastname' required><br><br>
    <label for='email'>Email</label><br>
    <input type='email' id='email' name='email' required><br><br>
    <label for='password'>Password</label><br>
    <input type='password' id='password' name='password' required><br><br>
    <label for="confirmPassword">Confirm Password</label><br>
    <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
    <button type='submit'>Sign Up</button>
    <p>Already have an account? <a href='login.php'>Log in</a></p>
</form>
<script type="module">
import { confirmPassword } from '/IAP/js/confirmPassword.js';

document.getElementById('signupForm').addEventListener('submit', function(e) {
    if (!confirmPassword('password', 'confirmPassword')) {
        e.preventDefault();
    }
});
</script>
<?php
    }

    public function signin() {
?>
<form action='login.php' method='post'>
    <label for='username'>Username:</label><br>
    <input type='text' id='username' name='username' required><br><br>
    <label for='password'>Password:</label>
    <input type='password' id='password' name='password' required><br><br>
    <button type='submit'>Log In</button>
    <a href='./'>Don't have an account? Sign up</a>
</form>
<?php
    }
}
?>