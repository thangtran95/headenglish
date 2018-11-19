<!DOCTYPE html>
<html>

<head>
    <?php include 'views/head.php';?>
</head>

<body>
    <section class="main">
        <?php include 'views/header.php';?>
        <section class="wrapper">
            <div class="exam-page">
            	<div class="container">
            		<div class="row">
            			<div class="col-sm-12">
            				<div class="menu-test">
            					<ul class="nav nav-tabs">
            						<li class="active"><a data-toggle="tab" href="#home">Giới thiệu<i class="fa fa-unlock "></i></a></li>
            						<li><a data-toggle="tab" href="#menu1">Nguyên âm đơn<i class="fa fa-unlock "></i></a></li>
            						<li><a data-toggle="tab" href="#menu2">Nguyên âm đôi<i class="fa fa-unlock "></i></a></li>
            						<li><a data-toggle="tab" href="#menu3">Phụ âm<i class="fa fa-lock"></i></a></li>
            						<li><a data-toggle="tab" href="#menu4">Ôn tập & Kiểm tra<i class="fa fa-lock"></i></a></li>
            					</ul>
            				</div>
            			</div>
            		</div>
            	</div>

            	<div class="container-fluid">
            		<div class="tab-content">
            			<div id="home" class="tab-pane fade in active">
            				<div class="row ed-flex">
            					<div class="col-sm-6 ">
            						<div class="video-lesson">
            							<iframe width="100%" height="450" src="https://www.youtube.com/embed/7mahmMmnSx4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            						</div>

            						<div class="down-pdf">
            							<h4><a href="javascript:void(0)" id="click-show-pdf"><i class="fa fa-chevron-down"></i> Worksheet</a></h4>

            							<ul class="box-download-pdf">
            								<li><a href="#">Download IPA table</a></li>
            								<li><a href="#">Extra exercies</a></li>
            							</ul>
            						</div>
            					</div>
            					<div class="col-sm-6 ">
            						<div class="title-answer">
            							<h4>Phiếu trả lời</h4>
            						</div>
            						<div class="box-full-answer">
            							<div class="box-answer">
            								<ul>
            									<li><h3>Phần 1: Khởi động</h3></li>
            									<li><p>1. How are you today?</p></li>
            									<li>
            										<div class="radio">
            											<label><input type="radio" name="c1">A</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">B</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">C</label>
            										</div>
            									</li>
            									<li><p>2. How are you today?</p></li>
            									<li>
            										<div class="radio">
            											<label><input type="radio" name="c1">A</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">B</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">C</label>
            										</div>
            									</li>
            								</ul>

            								<ul>
            									<li><h3>Phần 2: Bài tập</h3></li>
            									<li><p>3. How are you today?</p></li>
            									<li>
            										<div class="radio">
            											<label><input type="radio" name="c1">A</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">B</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">C</label>
            										</div>
            									</li>

            									<li><p>4. How are you today?</p></li>
            									<li>
            										<div class="radio">
            											<label><input type="radio" name="c1">A</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">B</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">C</label>
            										</div>
            									</li>
            									<li><p>5. How are you today?</p></li>
            									<li>
            										<div class="radio">
            											<label><input type="radio" name="c1">A</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">B</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">C</label>
            										</div>
            									</li>
            									<li><p>6. How are you today?</p></li>
            									<li>
            										<div class="radio">
            											<label><input type="radio" name="c1">A</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">B</label>
            										</div>
            										<div class="radio">
            											<label><input type="radio" name="c1">C</label>
            										</div>
            									</li>
            								</ul>
            							</div>
            							<div class="btn-submit-exam">
            								<a href="#">Nộp bài</a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<div id="menu1" class="tab-pane fade">
            				<h3>Menu 1</h3>
            			</div>
            			<div id="menu2" class="tab-pane fade">
            				<h3>Menu 2</h3>
            			</div>
            			<div id="menu3" class="tab-pane fade">
            				<h3>Menu 3</h3>
            			</div>
            			<div id="menu4" class="tab-pane fade">
            				<h3>Menu 4</h3>
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