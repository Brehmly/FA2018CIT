
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>


    </div>
    <h3>Comments:</h3>
      <?php
      $this->userObject = new Users();
      foreach($comments as $row) {
      echo $row['commentText']."<br><sub>Posted on ". $row['date']." by ".$row['first_name'].' '.$row['last_name'].'</sub>';
        if($userObject->isAdmin()) {
          echo '<form action="'.BASE_URL.'blog/deleteComment/" method="post">
          <input name="commentID" value="'.$row['commentID'].'" style="display: none">
          <input name="postID" value="'.$pID.'" style="display: none"><br>
          <input type="submit" value="Delete Comment">
          </form><hr>';
        }
    }
       ?>

<br><br>

<?php
  if (isset($_SESSION['uID'])) {
    echo '<form action="'.BASE_URL.'blog/addcomment/" method="post">
      <input name="uID" value="'.$_SESSION["uID"].'" style="display: none">
      <textarea name="commentText">Leave a commment</textarea>
      <br>
      <label for="date">Date:</label>'.date_default_timezone_set('America/Indiana/Indianapolis').'
      <input name="date" id="date" size="16" type="date" value="'.$date = date('Y-m-d H:i:s').'">
      <input name="postID" value="'.$pID.'" style="display: none"><br>
      <input type="submit" class= "btn"></form>';
  }
?>
<?php if($message){?>
  <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $message?>
</div>
<?php }?>

<?php include('views/elements/footer.php');?>
