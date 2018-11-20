<!DOCTYPE html>
<html>

<head>
    <?php include 'views/head.php';?>
</head>

<body>
    <section class="main">
        <?php include 'views/header.php';?>
        <section class="wrapper">
            <div class="login-page">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-6 col-md-offset-3">
            				<div class="box-login-page">
            					<ul class="nav nav-tabs">
            						<li class="active"><a data-toggle="tab" href="#home">Đăng nhập</a></li>
            						<li><a data-toggle="tab" href="#menu1">Đăng ký</a></li>
            					</ul>

            					<div class="tab-content">
            						<div id="home" class="tab-pane fade in active">
            							<h3>Đăng nhập</h3>
            							<form>
            								<div class="form-group">
            									<label for="email">Email:</label>
            									<input type="email" class="form-control" id="email" placeholder="Nhập email...">
            								</div>
            								<div class="form-group">
            									<label for="pwd">Mật khẩu:</label>
            									<input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu...">
            								</div>
            								<div class="checkbox">
            									<label><input type="checkbox"> Ghi nhớ</label>
            									<a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Quên mật khẩu?</a>
            								</div>
            								<button type="submit" class="btn btn-default">Đăng nhập</button>
            							</form>
            						</div>
            						<div id="menu1" class="tab-pane fade">
            							<h3>Đăng ký</h3>
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
            									<label for="pwd">Mật khẩu:</label>
            									<input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu...">
            								</div>
            								<div class="form-group">
            									<label for="pwd">Nhập lại mật khẩu:</label>
            									<input type="password" class="form-control" id="pwd" placeholder="Nhập lại mật khẩu...">
            								</div>
            								
            								<button type="submit" class="btn btn-default">Đăng ký</button>
            							</form>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            </div>

			<div class="reset-pass">
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">            		
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Lấy lại mật khẩu</h4>
							</div>
							<div class="modal-body">
								<form>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Nhập email để lấy lại mật khẩu...">
										<div class="input-group-btn">
											<button class="btn btn-default" type="submit">Gửi</button>
										</div>
									</div>
								</form>
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