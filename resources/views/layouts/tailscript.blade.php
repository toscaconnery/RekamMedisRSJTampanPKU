<!-- javascripts -->
<script src="{{url('')}}/admin_bootstrap/js/jquery.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/bootstrap.min.js"></script>
<!-- nice scroll -->
<script src="{{url('')}}/admin_bootstrap/js/jquery.scrollTo.min.js"></script>
{{-- <script src="{{url('')}}/admin_bootstrap/js/jquery.nicescroll.js" type="text/javascript"></script> --}}

<!-- jquery ui -->
<script src="{{url('')}}/admin_bootstrap/js/jquery-ui-1.9.2.custom.min.js"></script>

<!--custom checkbox & radio-->
<script type="text/javascript" src="{{url('')}}/admin_bootstrap/js/ga.js"></script>
<!--custom switch-->
<script src="{{url('')}}/admin_bootstrap/js/bootstrap-switch.js"></script>
<!--custom tagsinput-->
<script src="{{url('')}}/admin_bootstrap/js/jquery.tagsinput.js"></script
<!-- bootstrap-wysiwyg -->
<script src="{{url('')}}/admin_bootstrap/js/jquery.hotkeys.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/bootstrap-wysiwyg.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/bootstrap-wysiwyg-custom.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/moment.js"></script>
<script src="{{url('')}}/admin_bootstrap/js/bootstrap-colorpicker.js"></script>
<!-- <script src="{{url('')}}/admin_bootstrap/js/daterangepicker.js"></script> -->
<script src="{{url('')}}/datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- ck editor -->
<script type="text/javascript" src="{{url('')}}/admin_bootstrap/assets/ckeditor/ckeditor.js"></script>
<!-- custom form component script for this page-->
<script src="{{url('')}}/admin_bootstrap/js/form-component.js"></script>
<!-- custome script for all page -->
<script src="{{url('')}}/admin_bootstrap/js/scripts.js"></script>

<!-- form validation -->
<script type="text/javascript" src="{{url('')}}/admin_bootstrap/js/jquery.validate.min.js"></script>
<script src="{{url('')}}/js/form-validation.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('body').on('focus',".sandbox-container", function(){
		 	$(this).datepicker({
		 		format: "dd/mm/yyyy"
		 	});
		});
	});
</script>