<script type="text/javascript">  
	Swal({
	  position: 'center',
	  type: 'success',
	  title: 'Pasien terpilih',
	  showConfirmButton: false,
	  timer: 1500
	})
</script>
@php
	Session::forget('pasien_terpilih');
@endphp