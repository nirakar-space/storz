<html>
<form class="" action="/pinger/mapping/rule" method="post">
  <!-- <input type="hidden" name="fromJson" value='<?= $maparr['mapfrom'] ?>'> -->

    <div class="form-group">
      <label for="url">Rule Name:</label>
      <span><?= $maparr['rulename'] ?></span>
      <input type="hidden" name="rulename" value="<?= $maparr['rulename'] ?>">
    </div>
  <?php foreach ($datas as $steps => $infos) { ?>
  <div class="well">
    <div class="form-group">
      <label for="url">Step:</label>
      <span><?= $maparr['stepname'][$steps] ?></span>
      <input type="hidden" name="step[]" value="<?= $steps ?>">
    </div>
    <div class="form-group">
      <label for="actiontype">Type:</label>
      <select class="form-control" name="type[]">
        <option value="">Select</option>
        <option value="get">GET</option>
        <option value="post">POST</option>
        <option value="put">PUT</option>
      </select>
    </div>
      <div class="form-group">
        <label for="url">URL:</label>
        <input type="text" class="form-control" name="url[]">
      </div>
      <?php foreach ($infos as $index => $data) { ?>
      <div class="form-group">
        <label for="pwd"><?= $data ?>:</label>
        <select class="form-control" name="data[<?= $steps ?>]<?= $d[$steps][$index] ?>">
          <option value="">Select</option>
          <?php foreach ($mdatas as $datam) { ?>
          <option value="<?= $datam ?>"><?= $datam ?></option>
          <?php } ?>
        </select>
      </div>
      <?php } ?>
   </div>
  <?php } ?>
   <div class="form-group">
     <button type="submit" class="btn btn-primary">Create</button>
   </div>
</form>
</html>
