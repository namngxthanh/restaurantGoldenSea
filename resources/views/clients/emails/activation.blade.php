<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kích hoạt tài khoản</title>
</head>

<body>
    <h1>Kích hoạt tài khoản</h1>
    <p>Xin chào {{ $user->name }},</p>
    <p>Bạn đã đăng ký tài khoản trên website của GoldenSea. Vui lòng nhấp vào liên kết bên dưới để kích hoạt tài khoản
        của bạn:</p>
    <a href="{{ url('/activate/' . $activationToken) }}"
        style="padding: 10px 20px; background-color: #48B6F1; color: white; text-decoration: none; border-radius: 5px;">Kích
        hoạt tài khoản</a>
    <p style="margin-top: 20px;">Nếu bạn không yêu cầu kích hoạt tài khoản, vui lòng bỏ qua email này.</p>
    <p style="margin-top: 20px;">Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi.</p>
    <p style="margin-top: 20px;">Trân trọng,</p>
    <p style="margin-top: 20px;">Đội ngũ GoldenSea</p>
</body>

</html>