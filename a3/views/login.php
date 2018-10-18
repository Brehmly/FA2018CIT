<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> The Login View </h1>

  </div>
	<form action="<?php echo BASE_URL?>addpost/<?php echo $task?>" id='login' method="post" onsubmit="editor.post()">
		<label>Login</label>

		<label>Username</label>
			<input type="text" id="email" name='email' value="" required />
		<label>Password</label>
			<input type="password" id="password" name='password' value="" required />
		<button id='submit' type='submit'>Login</button>
	</form>
</div>



<?php include('elements/footer.php');?>
