export function confirmPassword(passwordId, confirmPasswordId) {
    const password = document.getElementById(passwordId).value;
    const confirmPassword = document.getElementById(confirmPasswordId).value;

    if (password !== confirmPassword) {
        alert("Error! Passwords do not match.");
        return false; 
    } else {
        return true; 
    }
    
    //alert("Successfully signed up!");
    
}