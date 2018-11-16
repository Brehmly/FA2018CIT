<?php
include('views/elements/header.php');?>

<?php if(!$result) {?>

  <div class="container" id="wx">
    <div class = "page-header">
      <h1>Weather</h1>
    </div>
    <form method ="post" action="<?php echo BASE_URL?>weather/getresults">
      <label for "zip">Enter Your zip code</label>
      <input type="text" name="zip" id="zip" required="zip"/>
      <br>
      <button type="submit" class="btn">Load results</button>

    </form>
  <?php }
  else {
     ?>
</div>

<div class="container">
  <div class ="page-header">
    <h1>Weather for <?php echo $weather->request->query;?></h1>
  </div>
    <h4><img src="<?php echo $weather->current_condition->weatherIconUrl;?>"/></h4>
    <h4>Temperature: <?php echo $weather->current_condition->temp_F;?></h4>
    <h4>Wind: <?php echo $weather->current_condition->windspeedMiles;?></h4>
    <h4>Humidity: <?php echo $weather->current_condition->humidity;?> (<?php echo $weather->current_observation->pressure;?>)</h4>
</div>
<?php }
include('views/elements/footer.php');
?>
