<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
<meta name="author" content="GeeksLabs">
<meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
<link rel="shortcut icon" href="img/favicon.png">

<title>{{isset($title) ? $title : 'Title Not Found'}}</title>

<!-- Bootstrap CSS -->
<link href="{{url('')}}/admin_bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- bootstrap theme -->
<link href="{{url('')}}/admin_bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<!--external css-->
<!-- font icon -->
<link href="{{url('')}}/admin_bootstrap/css/elegant-icons-style.css" rel="stylesheet" />
<link href="{{url('')}}/admin_bootstrap/css/font-awesome.min.css" rel="stylesheet" />
<link href="{{url('')}}/admin_bootstrap/css/daterangepicker.css" rel="stylesheet" />
<link href="{{url('')}}/admin_bootstrap/css/bootstrap-datepicker.css" rel="stylesheet" />
<link href="{{url('')}}/admin_bootstrap/css/bootstrap-colorpicker.css" rel="stylesheet" />

<!-- Custom styles -->
<link href="{{url('')}}/admin_bootstrap/css/style.css" rel="stylesheet">
<link href="{{url('')}}/admin_bootstrap/css/style-responsive.css" rel="stylesheet" />

{{-- <script src="{{url('')}}/testing/js/bootstrap-datepicker.min.js"></script> --}}

{{-- datepicker --}}
{{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> --}}
<script type="text/javascript" src="{{url('')}}/calendar/jquery.min.js"></script>
<script type="text/javascript" src="{{url('')}}/calendar/datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('')}}/calendar/datepicker.css">
<link rel="stylesheet" href="{{url('')}}/calendar/bootstrap.min.css">
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}

<link rel="stylesheet" type="text/css" href="{{url('')}}/sweetalert2/dist/sweetalert2.min.css">

<script type="text/javascript">
	jQuery(function() {
		$('.sandbox-container').datepicker({
			'format' : 'dd/mm/yyyy',
			'autoclose' : true,
			'todayHighlight' : true,
			'toggleActive': true
		});
	});
</script>