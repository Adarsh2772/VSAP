<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600" rel="stylesheet"> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

<style type="text/css">
	.header-main{
		display: none;
}

</style>

{{--include style--}}
        @include('weblayout.header')
<script type="text/javascript">
  swal(
        'Success',
        'Your mail has been sent sucessfully. Thank You..!',
        'success'
      ).then(function() {
    window.location = "/contact";
});
 
  
</script>		