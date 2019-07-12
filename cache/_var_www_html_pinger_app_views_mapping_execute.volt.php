<html>
<div class="container">
<h2>Execution</h2>
<form method="post" action="/pinger/mapping/execute">
  <div class="form-group">
    <label for="email">Inserting rules:</label>
    <select class="form-control" name="rulename">
      <option value="">Select</option>
      <?php foreach ($mapnames as $id => $name) { ?>
      <option value="<?= $id ?>"><?= $name ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="pwd">Choose Company:</label>
    <select class="form-control" name="cid">
      <option value="">Select</option>
      <?php foreach ($companies as $idd => $namee) { ?>
      <option value="<?= $idd ?>"><?= $namee ?></option>
      <?php } ?>
    </select>
  </div>
   <div class="form-group">
    <label for="pwd">Data:</label>
    <textarea name="data" class="form-control" rows="10" cols="70"></textarea>
   </div>
   <div class="form-group">
    <label for="pwd">Upload File:</label>
    <input type="file" class="form-control" name="datafile">
   </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

</body>
</html>
