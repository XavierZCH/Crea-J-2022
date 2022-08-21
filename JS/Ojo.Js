const passwordInput = document.querySelector(".password-input");
const eyeBtn = document.querySelector(".eye-btn");

eyeBtn.addEventListener("click", () => {
  if(passwordInput.type === "password"){
    passwordInput.type = "text";
    eyeBtn.innerHTML = "<i class='uil uil-eye'></i>";
  }
  else{
    passwordInput.type = "password";
    eyeBtn.innerHTML = "<i class='uil uil-eye-slash'></i>";
  }
});