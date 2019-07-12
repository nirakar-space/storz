<html>
<form class="" action="/pinger/mapping/map" method="post">
  <div class="form-group">
    <label for="pwd">Rule name:</label>
    <input type="text" class="form-control" name="map[rulename]" />
  </div>
  <div class="form-group">
    <label for="pwd">From Map:</label>
    <textarea class="form-control" name="map[mapfrom]" rows="7"></textarea>
  </div>
<div class="cntnr">
<div class="well stps">
  <div class="form-group">
    <label for="pwd">Step Name:</label>
    <input type="text" class="form-control" name="map[stepname][]" />
  </div>
 <div class="form-group">
  <label for="pwd">To Map:</label>
  <textarea class="form-control" rows="7" name="map[mapto][]"></textarea>
  </div>
  <input type="button" class="form-control rmv" onclick="removes(this)"  value="Remove">
</div>
</div>
<div class="form-group">
      <div class="col-xs-10">
          <button type="submit" class="btn btn-primary">Map</button>
          <button type="button" class="btn btn-primary" id="addmore">Add step</button>
      </div>
</form>

<script>
$(document).ready(function(){

$("#addmore").click(function(){
$(".stps:first").clone().appendTo(".cntnr");
});
});
function removes(arg){
  var c=$(".rmv").length;
  if(c>1){
    $(arg).parent().remove();
  }
}
</script>
</html>
