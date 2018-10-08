<head>
	<link rel="stylesheet" type="text/css" href="{{url('')}}/sweetalert2/dist/sweetalert2.min.css">
	<style type="text/css">
		.swal-modal {
			  font-family: Helvetica;
			}
	</style>

</head>

<body>
	{{-- <div id="ERROR_COPY" style="display: none;" class="alert alert-danger">
		{{$pesan_error}}
	</div> --}}


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="{{url('')}}/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<script src="{{url('')}}/sweetalert2/dist/sweetalert2.min.js"></script>


	{{-- <script src="{{url('')}}/"></script> --}}
	{{-- <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> --}}


	{{-- <script type="text/javascript">
		swal({
			title: 'Errors',
			type: 'error',
			html: jQuery("#ERROR_COPY").html(),
			showCloseButton: true,
		})
	</script> --}}

	{{-- <script type="text/javascript">
		swal("Good job!", "You clicked the button!", "success");
	</script> --}}

	<script type="text/javascript">
		swal({
		  title: '<strong>HTML <u>example</u></strong>',
		  type: 'info',
		  html:
		    'You can use <b>bold text</b>, ' +
		    '<a href="//github.com">links</a> ' +
		    'and other HTML tags',
		  showCloseButton: true,
		  showCancelButton: true,
		  focusConfirm: false,
		  confirmButtonText:
		    '<i class="fa fa-thumbs-up"></i> Great!',
		  confirmButtonAriaLabel: 'Thumbs up, great!',
		  cancelButtonText:
		    '<i class="fa fa-thumbs-down"></i>',
		  cancelButtonAriaLabel: 'Thumbs down',
		})
	</script>
</body>