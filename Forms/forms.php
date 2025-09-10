<?php
class forms {
    public function signup() {
 ?>
 <form action='submit.php' method='post'>
    <label for='firstname'>First name</label><br>
    <input type='text' id='firstname' name='firstname' required><br><br>
    <label for='lastname'>Last name</label><br>
    <input type='text' id='lastname' name='lastname' required><br><br>
    <label for='email'>Email</label><br>
    <input type='email' id='email' name='email' required><br><br>
    <label for='password'>Password</label><br>
    <input type='password' id='password' name='password' required><br><br>
    <label for="confirmPassword">Confirm Password</label><br>
    <input type="text" id="confrimPassword" name="confirmPassword" required><br><br>
    <?php echo $this->submit_button('Sign Up'); ?> 
    <p>Already have an account? <a href='login.php'>Log in</a></p>
</form>
<?php
    }
    private function submit_button($text) {
        return "<button type='submit'>$text</button>";
    }

    public function signin() {
?>
<form action='login.php' method='post'>
    <label for='username'>Username:</label>
    <input type='text' id='username' name='username' required><br><br>
    <label for='password'>Password:</label>
    <input type='password' id='password' name='password' required><br><br>
    <?php echo $this->submit_button('Sign In'); ?> <a href='./'>Don't have an account? Sign up</a>
</form>
<?php
    }
}   
