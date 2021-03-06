<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms</title>

	<base href="{{ asset('backend') }}/">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
                <div class="panel-heading">registration</div>
                                <div class="panel-body">

                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        {{ $errors->first() }}
                                    </div>
                                    @endif

                                    <form role="form" action="/company/cms/login/new-account" method="POST">
                                        @csrf
                                        <fieldset>
                                            <div class="form-group">
                                                <label>Tên</label>
                                                <input class="form-control" placeholder="Tên" name="name" type="text" autofocus="">
                                            </div>
                                            <div class="form-group">
                                                <label>Địa chỉ</label>
                                                <input class="form-control" placeholder="Address" name="address" type="text" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Số điện thoại</label>
                                                <input class="form-control" placeholder="Phone" name="phone" type="number" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                                            </div>
                                            <div class="form-group">
                                                <label>Mật khẩu</label>
                                                <input class="form-control" placeholder="Password" name="password" type="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Trạng thái</label>
                                                <input class="form-control" placeholder="nhập lại pass" name="password_confirmation" type="" value="">
                                            </div>
                                            <div class="form-group">
                                                <label>Trạng thái</label>
                                                <select name="role" class="form-control">
                                                    <option value=1 selected>Xin việc</option>
                                                    <option value=2 >Tuyển việc</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Registration</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.col-->
                    </div><!-- /.row -->



                    <script src="js/jquery-1.11.1.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/chart.min.js"></script>
                    <script src="js/chart-data.js"></script>
                    <script src="js/easypiechart.js"></script>
                    <script src="js/easypiechart-data.js"></script>
                    <script src="js/bootstrap-datepicker.js"></script>
                    {{-- <script>
                        ! function ($) {
                            $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                                $(this).find('em:first').toggleClass("glyphicon-minus");
                            });
                            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
                        }(window.jQuery);

                        $(window).on('resize', function () {
                            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
                        })
                        $(window).on('resize', function () {
                            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
                        })
                    </script> --}}
                </body>

                </html>
