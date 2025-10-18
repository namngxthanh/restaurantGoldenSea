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
        // if (
        //     name === "" ||
        //     email === "" ||
        //     password === "" ||
        //     confirm_password === ""
        // ) {
        //     errorMessage += "Vui lòng nhập đầy đủ thông tin\n";
        //     return;
        // }
        // console.log("Submit form");
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
            toastr.error(errorMessage, "Có lỗi roi");
            e.preventDefault();
            // return;
        }
    });
});
