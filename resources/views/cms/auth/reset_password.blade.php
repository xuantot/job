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
</head>

<body>
    <div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
                @if (session('success'))
                    <div class="alert alert-success">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif

                {{-- @if (isset(session('send_success')))
                <div class="alert alert-success">
                    <p>{{ session('send_success') }}</p>
                </div>
                @endif --}}

                    {{-- @if (session('fail_code_success'))
                    <div class="alert alert-success">
                        <p>{{ session('fail_code_success') }}</p>
                    </div>
                    @endif --}}
				<div class="panel-heading">Reset Password</div>
				<div class="panel-body">
					<form role="form" action="/company/cms/login/reset_password" method="POST">
                        @csrf
						<fieldset>
                            @foreach ($check_code as $item)
							{{-- <div class="form-group">
                                <input class="form-control" placeholder="E-mail" value="{{$item->email}}" name="email" type="email" autofocus="">
                            </div> --}}
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" value="{{$item->id}}" name="id" type="hidden" autofocus="">
                            </div>
							<div class="form-group">
								<input class="form-control" placeholder="Code" name="code_reset" type="" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password confirmation" name="password_confirmation" type="" value="">
                            </div>
                            @endforeach

                            <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
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
