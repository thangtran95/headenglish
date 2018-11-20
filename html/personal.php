<!DOCTYPE html>
<html>

<head>
    <?php include 'views/head.php';?>
</head>

<body>
    <section class="main">
        <?php include 'views/header.php';?>
        <section class="wrapper">
            <div class="login-page personal-page">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-6 col-md-offset-3">
            				<div class="box-login-page">
            					<ul class="old-information">
                                    <li><h2>Thông tin cá nhân</h2></li>
                                    <li><p><span>Họ và tên:</span> Trần Văn A</p></li>          
                                    <li><p><span>Email:</span> abc@gmail.com</p></li>
                                    <li><p><span>Số điện thoại:</span> </p></li>
                                </ul>
                                <ul class="new-information">
                                    <li><h2>Thay đổi thông tin cá nhân</h2></li>
                                    <form>
                                        <div class="form-group">
                                            <label for="name">Họ và tên:</label>
                                            <input type="text" class="form-control" id="name" placeholder="Nhập họ tên...">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" id="email" placeholder="Nhập email...">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Số điện thoại:</label>
                                            <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại...">
                                        </div>
                                        <div class="form-group">
                                            <label for="pwd">Mật khẩu:</label>
                                            <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu...">
                                        </div>

                                        <div class="btn-save">
                                            <button type="submit" class="btn btn-default">Lưu thay đổi</button>
                                        </div>
                                    </form>
                                </ul>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
        </section>
        <?php include 'views/footer.php';?>
    </section>
    <?php include 'views/script.php';?>
</body>

</html>