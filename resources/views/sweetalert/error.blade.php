<script type="text/javascript">  
	Swal({
	  position: 'center',
	  type: 'error',
	  title: '{{Session::get('pesan_kesalahan')}}',
	  showConfirmButton: false,
	  timer: 3000
	})
</script>
@php
	Session::forget('pesan_kesalahan');
@endphp