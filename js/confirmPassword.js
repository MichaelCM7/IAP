export function confirmPassword(password,confirm_password){
  let initialPass = value(password);
  let repPass = value(confirm_password);

  if(initialPass !== repPass) {
    alert("Error! Repeat your password");
  }
};