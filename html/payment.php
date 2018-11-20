<!DOCTYPE html>
<html>

<head>
    <?php include 'views/head.php';?>
</head>

<body>
    <section class="main">
        <?php include 'views/header.php';?>
        <section class="wrapper">
            <div class="payment-page">
            	<div class="container">
            		<div class="row">
            			<div class="col-md-5 form-payment">
                            <h4><span>Lưu ý </span>Bạn nhập đầy đủ thông tin sau:</h4>
            				<form class="form-horizontal" >
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="price">Học phí:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="price" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="name">Họ tên:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="name" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="email">Email:</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="email" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="phone">Số điện thoại:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="phone" placeholder="">
                                    </div>
                                </div>
                               
                                <div class="form-group"> 
                                    <div class="col-sm-offset-4 col-sm-8">
                                        <button type="submit">Thanh toán</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-7">
                            <div class="btn-payment-by text-center">
                                <div class="radio">
                                    <label><input type="radio" name="optradio1" id="show-list-bank">Thanh toán bằng ngân hàng nội địa</label>
                                </div>
                                <div class="box-bank" id="show-boxbank">
                                    <h5><span>Lưu ý:</span> Bạn cần đăng ký internet-Banking hoặc dịch vụ thanh toán trực tuyến tại ngân hàng trước khi thực hiện</h5>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label class="cus-rdo-btn">
                                                <input type="radio" class="radio-inline" name="radios1" value="">
                                                <span class="outside">
                                                    <span class="inside"></span>
                                                </span><img src="resources/images/logo/vib.png">
                                            </label>
                                        </div>

                                        <div class="col-xs-3">
                                            <label class="cus-rdo-btn">
                                                <input type="radio" class="radio-inline" name="radios1" value="">
                                                <span class="outside">
                                                    <span class="inside"></span>
                                                </span><img src="resources/images/logo/vib.png">
                                            </label>
                                        </div>

                                        <div class="col-xs-3">
                                            <label class="cus-rdo-btn">
                                                <input type="radio" class="radio-inline" name="radios1" value="">
                                                <span class="outside">
                                                    <span class="inside"></span>
                                                </span><img src="resources/images/logo/vib.png">
                                            </label>
                                        </div>

                                        <div class="col-xs-3">
                                            <label class="cus-rdo-btn">
                                                <input type="radio" class="radio-inline" name="radios1" value="">
                                                <span class="outside">
                                                    <span class="inside"></span>
                                                </span><img src="resources/images/logo/vib.png">
                                            </label>
                                        </div>

                                        <div class="col-xs-3">
                                            <label class="cus-rdo-btn">
                                                <input type="radio" class="radio-inline" name="radios1" value="">
                                                <span class="outside">
                                                    <span class="inside"></span>
                                                </span><img src="resources/images/logo/vib.png">
                                            </label>
                                        </div>

                                        <div class="col-xs-3">
                                            <label class="cus-rdo-btn">
                                                <input type="radio" class="radio-inline" name="radios1" value="">
                                                <span class="outside">
                                                    <span class="inside"></span>
                                                </span><img src="resources/images/logo/vib.png">
                                            </label>
                                        </div>

                                        <div class="col-xs-3">
                                            <label class="cus-rdo-btn">
                                                <input type="radio" class="radio-inline" name="radios1" value="">
                                                <span class="outside">
                                                    <span class="inside"></span>
                                                </span><img src="resources/images/logo/vib.png">
                                            </label>
                                        </div>

                                        <div class="col-xs-3">
                                            <label class="cus-rdo-btn">
                                                <input type="radio" class="radio-inline" name="radios1" value="">
                                                <span class="outside">
                                                    <span class="inside"></span>
                                                </span><img src="resources/images/logo/vib.png">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="btn-payment-by text-center">
                                <div class="radio">
                                    <label><input type="radio" id="show-master-visa" name="optradio1">Thanh toán bằng thẻ visa hoặc MasterCard</label>
                                </div>

                                <div class="box-bank--1" id="show-boxbank">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <label class="cus-rdo-btn">
                                                <input type="radio" class="radio-inline" name="radios1" value="">
                                                <span class="outside">
                                                    <span class="inside"></span>
                                                </span><img src="resources/images/logo/mastercard.png">
                                            </label>
                                        </div>

                                        <div class="col-xs-6">
                                            <label class="cus-rdo-btn">
                                                <input type="radio" class="radio-inline" name="radios1" value="">
                                                <span class="outside">
                                                    <span class="inside"></span>
                                                </span><img src="resources/images/logo/visa.png">
                                            </label>
                                        </div>

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