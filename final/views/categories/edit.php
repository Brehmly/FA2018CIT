<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
		<h1>Categories</h1>
  	</div>

  		<?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php } if( is_array($category) ) {
    extract($category);
    }?>

	 <form action="<?php echo BASE_URL ?>categories/update" method="post">
	 	<label for="category">Edit Category Name</label>
		<input type="text" name="category" class="input-sm" id="category" value = "<?php echo $name ?>" required="category">
		<input type="submit" class='btn btn-primary' value="Submit">
	 </form>
	 <form action="<?php echo BASE_URL?>categories/delete/" method="post">
		<label for = "category"><?php echo $name?></label>
		<input type="submit" value="Delete">
	 </form><hr>


</div>

<?php include('views/elements/footer.php');?>
