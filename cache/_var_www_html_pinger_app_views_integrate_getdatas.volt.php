<html>
<form class="">
  <div class="container">
  <div class="form-group">
   <table class="table table-striped">
    <tr>
      <?php foreach ($records as $index => $value) { ?>
      <td><button type="button" class="btn btn-info"><?= $index ?></button></td>
      <?php } ?>
    </tr>
   </table>
  </div>
    <div class="form-group">
      <label for="response">Response:</label>
      <textarea class="form-control" name="name" rows="200" cols="80"></textarea>
    </div>
  </div>
</form>
</html>
