

const passwordInput = document.querySelectorAll('.passwordInput');
const eyeBtnNodes = document.querySelectorAll('#password_eye');

eyeBtnNodes.forEach((eyeBtn, index) => {
    eyeBtn.addEventListener('click', () => {
        const type = passwordInput[index].getAttribute("type") === "password" ? "text" : "password";
        passwordInput[index].setAttribute("type", type);
        // toggle the icon
        type === 'password' 
            ? eyeBtn.classList.replace("fa-eye-slash", "fa-eye") 
            : eyeBtn.classList.replace("fa-eye", "fa-eye-slash") 
    })
});

