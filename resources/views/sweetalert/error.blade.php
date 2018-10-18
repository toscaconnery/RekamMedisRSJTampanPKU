<script type="text/javascript">  
	swal({
	  type: 'error',
	  title: 'Kesalahan',
	  text: '{{Session::get('pesan_kesalahan')}}'
	})
</script>
@php
	Session::forget('pesan_kesalahan');
@endphp