<script type="text/javascript">  
	Swal({
	  position: 'center',
	  type: 'success',
	  title: '{{Session::get('pesan_berhasil')}}',
	  showConfirmButton: false,
	  timer: 3000
	})
</script>
@php
	Session::forget('pesan_berhasil');
@endphp