<script type="text/javascript">  
	swal(
	  'Pasien terpilih',
	  '',
	  'success'
	)
</script>
@php
	Session::forget('pasien_terpilih');
@endphp