function validateEmail() {
    const emailField = document.getElementById("email");
    const emailError = document.getElementById("email-error");

    const email = emailField.value;
    const emailPattern = /^[a-zA-Z0-9._-]+\.[a-zA-Z]{2,}$/;

    if (emailPattern.test(email)) {
        emailError.textContent = "";
        return true;
    } else {
        emailError.textContent = "Pastikan Email Anda Sudah Benar";
    }
}

document.getElementById("email").addEventListener("input", function () {
    const emailError = Document.getElementById("email-error");
    emailError.textContent = "";
});
