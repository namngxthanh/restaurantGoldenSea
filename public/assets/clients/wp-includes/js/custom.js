$(document).ready(function () {
    /********************** PAGE LOGIN, REGISTER **********************/
    // * Validate FORM HANDLING
    $("#register").submit(function (e) {
        let name = $("input [name='name']").val();
        let email = $("input [name='email']").val();
        let password = $("input [name='password']").val();
        let confirm_password = $("input [name='confirm_password']").val();
        let checkbox = $("input [name='privacy_policy']").is(":checked");
        let errorMessage = "";
        if (name.length < 3) {
            errorMessage += "Tên người dùng phải có ít nhất 3 ký tự\n";
        }
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorMessage += "Email không hợp lệ\n";
            // return;
        }
        if (password.length < 6) {
            errorMessage += "Mật khẩu phải có ít nhất 6 ký tự\n";
            // return;
        }
        if (password !== confirm_password) {
            errorMessage += "Mật khẩu và xác nhận mật khẩu không khớp\n";
            // return;
        }
        if (!checkbox) {
            errorMessage +=
                "Bạn phải đồng ý với điều khoản và điều kiện sử dụng\n";
            // return;
        }

        if (errorMessage !== "") {
            toastr.error(errorMessage, "Có lỗi rồi");
            e.preventDefault();
            // return;
        }
    });
    // Validate Login form
    $("#login").submit(function (e) {
        toastr.clear();

        let email = $("input [name='email']").val();
        let password = $("input [name='password']").val();
        let errorMessage = "";
        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorMessage += "Email không hợp lệ\n";
            // return;
        }
        if (password.length < 6) {
            errorMessage += "Mật khẩu phải có ít nhất 6 ký tự\n";
            // return;
        }

        if (errorMessage !== "") {
            toastr.error(errorMessage, "Có lỗi roi");
            e.preventDefault();
            // return;
        }
    });

    // Validate Reset Password form

    $("#reset-password-form").submit(function (e) {
        let email = $("input [name='email']").val();
        let password = $("input [name='password']").val();
        let confirmPassword = $("input [name='password_confirmation']").val();
        let errorMessage = "";

        let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorMessage += "Email không hợp lệ với định dạng<br>";
            // return;
        }

        if (password.length < 6) {
            errorMessage += "Mật khẩu phải có ít nhất 6 ký tự<br>";
            // return;
        }

        if (password !== confirmPassword) {
            errorMessage += " Hai mật khẩu không khớp nhau<br>";
        }

        if (errorMessage !== "") {
            toastr.error(errorMessage, "Có lỗi rồii");
            e.preventDefault();
            // return;
        }
    });
});
