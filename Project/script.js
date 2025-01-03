// التحقق من صحة البريد الإلكتروني
function validateEmail(email) {
    const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return regex.test(email);
}

// التحقق من صحة رقم الهاتف
function validatePhoneNumber(phoneNumber) {
    const regex = /^(73|77|78)\d{7}$/;
    return regex.test(phoneNumber);
}

// التحقق من صحة كلمة المرور
function validatePassword(password, confirmPassword) {
    if (password !== confirmPassword) {
        return false;  // كلمات المرور غير متطابقة
    }
    return true;
}

// إضافة التحقق من المدخلات في نموذج التسجيل
document.getElementById("signupForm").addEventListener("submit", function(event) {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm_password").value;
    let phoneNumber = document.getElementById("phone").value;
    let gender = document.querySelector('input[name="gender"]:checked');

    if (!validateEmail(email)) {
        event.preventDefault();
        alert("البريد الإلكتروني غير صالح!");
        return;
    }

    if (!validatePhoneNumber(phoneNumber)) {
        event.preventDefault();
        alert("رقم الهاتف غير صالح! يجب أن يبدأ بـ 73 أو 77 أو 78 ويتكون من 9 أرقام.");
        return;
    }

    if (!validatePassword(password, confirmPassword)) {
        event.preventDefault();
        alert("كلمة المرور غير متطابقة!");
        return;
    }

    if (!gender) {
        event.preventDefault();
        alert("يرجى تحديد الجنس.");
        return;
    }
});

// إضافة التحقق من المدخلات في نموذج تسجيل الدخول
document.getElementById("loginForm").addEventListener("submit", function(event) {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if (!validateEmail(email)) {
        event.preventDefault();
        alert("البريد الإلكتروني غير صالح!");
        return;
    }
});
