<?php

include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1>Edit Profile</h1>

   <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

<?php include ('views/elements/edit_form.php');
echo '<p><a href="'.BASE_URL.'">Back to home page</a></p>';
?>

</div>
</div>

<?php include('views/elements/footer.php');?>


<script>$('registration_form').validate();</script>

<script>
$('#password, #passwordConfirmation').on('keyup', function () {
  if ($('#password').val() == $('#passwordConfirmation').val()) {
    $('#message').html('Passwords Match!').css('color', 'green');
    $('#submit').prop('disabled', false);
  } else {
    $('#message').html('Passwords do not match!').css('color', 'red');
    $('#submit').prop('disabled', true);
}});
</script>
