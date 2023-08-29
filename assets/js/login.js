const mode = document.getElementById('mode_icon');


function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var toggleButton = document.getElementById("togglePassword");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleButton.classList.remove("fa-eye");
        toggleButton.classList.add("fa-eye-slash");
    } else {
        passwordInput.type = "password";
        toggleButton.classList.remove("fa-eye-slash");
        toggleButton.classList.add("fa-eye");
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var password = document.getElementById("password");
    var textoAlerta = document.getElementById("textoAlerta");

    password.addEventListener("keyup", function(event) {
        var key = event.key;
        var isUpperCase = key === key.toUpperCase() && key !== key.toLowerCase();
        
        if (isUpperCase) {
            textoAlerta.style.display = "block";
        } else {
            textoAlerta.style.display = "none";
        }
    });
});