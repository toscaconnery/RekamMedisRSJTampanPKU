<script type="text/javascript">  
	Swal({
	  position: 'center',
	  type: 'error',
	  title: 'Belum ada pasien yang dipilih',
	  showConfirmButton: false,
	  timer: 2000
	})
</script>
@php
	Session::forget('pasien_belum_dipilih');
@endphp