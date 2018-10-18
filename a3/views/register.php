<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Register View </h1>

 </div>
 <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()">
   <label>First Name</label>
   <input type="text" class="span6" name="user_firstName" value="" required/><br>
   <label>Last Name</label>
   <input type="text" class="span6" name="user_lastName" value="" required/><br>
   <label>email</label>
   <input type="text" class="span6" name="user_email" value="" required/><br>
   <label>Password</label>
   <input type="text" class="span6" name="user_password" value="" required/><br>
   <input type="hidden" name="user_pID" value=""/>
   <button id="submit" type="submit">Register</button>
 </form>
</div>
<?php include('elements/footer.php');?>
