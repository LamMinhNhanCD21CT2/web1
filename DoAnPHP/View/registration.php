<!-- ================================== -->
<style>
	body {
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}

	.form-control {
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}

	.form-control:focus {
		border-color: #5cb85c;
	}

	.form-control,
	.btn {
		border-radius: 3px;
	}

	.signup-form {
		width: 450px;
		margin: 0 auto;
		padding: 30px 0;
		font-size: 15px;
	}

	.signup-form h2 {
		color: #636363;
		margin: 0 0 15px;
		position: relative;
		text-align: center;
	}

	.signup-form h2:before,
	.signup-form h2:after {
		content: "";
		height: 2px;
		width: 30%;
		background: #d4d4d4;
		position: absolute;
		top: 50%;
		z-index: 2;
	}

	.signup-form h2:before {
		left: 0;
	}

	.signup-form h2:after {
		right: 0;
	}

	.signup-form .hint-text {
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}

	.signup-form form {
		color: #999;
		border-radius: 3px;
		margin-bottom: 15px;
		background: #f2f3f7;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		padding: 30px;
	}

	.signup-form .form-group {
		margin-bottom: 20px;
	}

	.signup-form input[type="checkbox"] {
		margin-top: 3px;
	}

	.signup-form .btn {
		font-size: 16px;
		font-weight: bold;
		min-width: 140px;
		outline: none !important;
	}

	.signup-form .row div:first-child {
		padding-right: 10px;
	}

	.signup-form .row div:last-child {
		padding-left: 10px;
	}

	.signup-form a {
		color: #fff;
		text-decoration: underline;
	}

	.signup-form a:hover {
		text-decoration: none;
	}

	.signup-form form a {
		color: #5cb85c;
		text-decoration: none;
	}

	.signup-form form a:hover {
		text-decoration: underline;
	}

	.dangnhap-ctn a {
		text-decoration: none;
	}

	.dangnhap-ctn a:hover {
		color: #5cb85c;
	}
</style>

<div class="signup-form">
	<form action="index.php?action=dangky&act=dangky_action" method="post">
		<h2>Đăng ký tại đây!</h2>
		<p class="hint-text">Tạo tài khoản để nhận được thông báo mới từ chúng tôi nhé!</p>
		<div class="row">
			<div class="col-xs-4 col-md-12 d-flex justify-content-between p-2">
				<label for="email" class="col-xl-4"><a style="font-size: 12px;">Tên Khách Hàng:</a></label>
				<input class="form-control col-xl-8" name="txttenkh" placeholder="Nhập tên..." required="" autofocus="" type="text">
			</div>
			<div class="col-xs-4 col-md-12 d-flex justify-content-between p-2">
				<label for="email" class="col-xl-4"><a style="font-size: 12px;">Địa chỉ:</a></label>
				<input class="form-control" name="txtdiachi" placeholder="Nhập địa chỉ..." required="" autofocus="" type="text">
				<!-- <input class="form-control col-xl-8" name="txttenkh" placeholder="Nhập tên..." required="" autofocus="" type="text"> -->
			</div>
			<div class="col-xs-4 col-md-12 d-flex justify-content-between p-2">
				<label for="email" class="col-xl-4"><a style="font-size: 12px;">Số điện thoại:</a></label>
				<input class="form-control" name="txtsodt" placeholder="Nhập số điện thoại..." required="" autofocus="" type="text">
				<!-- <input class="form-control col-xl-8" name="txttenkh" placeholder="Nhập tên..." required="" autofocus="" type="text"> -->
			</div>


		</div>
		<label class="pt-2" for="email">
			<h3>Tài khoản của bạn:</h3>
		</label>
		<div class="col-xs-4 col-md-12 d-flex justify-content-between p-2">
			<label for="email" class="col-xl-4"><a style="font-size: 12px;">Tên đăng nhập:</a></label>
			<input class="form-control" name="txtusername" placeholder="Tạo tên đăng nhập của bạn..." required="" type="text">
			<!-- <input class="form-control col-xl-8" name="txttenkh" placeholder="Nhập tên..." required="" autofocus="" type="text"> -->
		</div>
		<div class="col-xs-4 col-md-12 d-flex justify-content-between p-2">
			<label class="col-xl-4"><a style="font-size: 12px;">Email:</a></label>
			<input class="form-control" name="txtemail" placeholder="Nhập địa chỉ email..." type="email">
		</div>
		<div class="col-xs-4 col-md-12 d-flex justify-content-between p-2">
			<label class="col-xl-3"><a style="font-size: 11px;">Mật khẩu:</a></label>
			<input class="form-control col-xl-4 " name="txtpass" placeholder="Tạo mật khẩu mới..." type="password">
			<input class="form-control col-xl-5" name="retypepassword" placeholder="Nhập lại mật khẩu đã tạo..." type="password">
		</div>

		<div class="form-group  p-4">
			<button type="submit" class="btn btn-info btn-lg btn-block">Đăng ký ngay</button>
		</div>
	</form>
	<div class="text-center dangnhap-ctn">Bạn đã có tài khoản? <a href="index.php?action=dangnhap">Đăng nhập</a></div>
</div>