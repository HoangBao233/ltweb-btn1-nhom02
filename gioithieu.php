<?php
    // --- KHAI BÁO CÁC BIẾN THÔNG TIN CÁ NHÂN ---
    $hoTen = "Nguyễn Tiến Thịnh";
    $mssv = "3120222126";
    $lop = "CNTT K22";
    $email = "tienthinh13102004@gmail.com";
    $soDienThoai = "0987654321";
    $soThich = "Chơi game đến chết";

    // --- THÔNG TIN MÔI TRƯỜNG ---
    $heDieuHanh = "Windows 11 64-bit";
    $phienBanPHP = PHP_VERSION;
    $moiTruong = "XAMPP for Windows";
    $phienBanGit = "2.55.0";

    // --- THIẾT LẬP MÚI GIỜ VÀ LẤY NGÀY GIỜ TRÊN SERVER ---
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    
    $ngayGioServer = date("d/m/Y - H:i:s");
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Giới Thiệu Bản Thân</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }

        .card {
            background-color: #ffffff;
            width: 100%;
            max-width: 500px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #0056b3;
            text-align: center;
            margin-top: 0;
            border-bottom: 2px solid #0056b3;
            padding-bottom: 10px;
        }

        h3 {
            color: #0056b3;
            margin-top: 25px;
            margin-bottom: 15px;
        }

        .info-group {
            margin-bottom: 12px;
            font-size: 16px;
            color: #333333;
        }

        .info-group strong {
            color: #555555;
            display: inline-block;
            width: 160px;
        }

        .environment {
            margin-top: 25px;
            padding: 15px;
            background-color: #f1f8ff;
            border-left: 4px solid #0056b3;
            border-radius: 4px;
        }

        .server-time {
            margin-top: 25px;
            padding: 12px;
            background-color: #e9ecef;
            border-left: 4px solid #28a745;
            font-size: 14px;
            color: #495057;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <div class="card">

        <h2>THÔNG TIN CÁ NHÂN</h2>
        
        <div class="info-group">
            <strong>Họ và tên:</strong>
            <?php echo $hoTen; ?>
        </div>

        <div class="info-group">
            <strong>Mã số sinh viên:</strong>
            <?php echo $mssv; ?>
        </div>

        <div class="info-group">
            <strong>Lớp học:</strong>
            <?php echo $lop; ?>
        </div>

        <div class="info-group">
            <strong>Email:</strong>
            <?php echo $email; ?>
        </div>

        <div class="info-group">
            <strong>Số điện thoại:</strong>
            <?php echo $soDienThoai; ?>
        </div>

        <div class="info-group">
            <strong>Sở thích:</strong>
            <?php echo $soThich; ?>
        </div>


        <!-- THÔNG TIN MÔI TRƯỜNG -->
        <div class="environment">

            <h3>THÔNG TIN MÔI TRƯỜNG</h3>

            <div class="info-group">
                <strong>Hệ điều hành:</strong>
                <?php echo $heDieuHanh; ?>
            </div>

            <div class="info-group">
                <strong>Phiên bản PHP:</strong>
                <?php echo $phienBanPHP; ?>
            </div>

            <div class="info-group">
                <strong>Môi trường:</strong>
                <?php echo $moiTruong; ?>
            </div>

            <div class="info-group">
                <strong>Phiên bản Git:</strong>
                <?php echo $phienBanGit; ?>
            </div>

        </div>


        <!-- THỜI GIAN SERVER -->
        <div class="server-time">
            <strong>Thời gian hệ thống (Server):</strong><br>
            <?php echo $ngayGioServer; ?>
        </div>

    </div>

</body>
</html>