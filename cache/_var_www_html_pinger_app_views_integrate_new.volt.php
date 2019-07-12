<html>
<form class="" name="myForm" action="/pinger/integrate/insert" id="frm" method="post" enctype="multipart/form-data">
  <input type="hidden" name="user[company_id]" value="<?= $data['company_id'] ?>">
  <div class="form-group">
    <label for="pwd">Select API:</label>
    <select class="form-control" name="user[api_id]" id="app" onchange="getType(this)" required>
      <option value="">Select</option>
        <?php foreach ($names as $id => $name) { ?>

       <option <?php if ($data['api_id'] == $id) { ?>selected<?php } ?> value="<?= $id ?>"><?= $name ?></option>
      <?php } ?>
    </select>
      <?php foreach ($types as $idd => $type) { ?>
      <input type="hidden" id="<?= $idd ?>" value="<?= $type ?>">
      <?php } ?>
    <input type="hidden" name="user[type]" id="typ" value="">
  </div>
   <div class="form-group" id="app_type" style="display:none;">
    <label for="pwd">Choose App Type:</label>
    <div class="radio">
   <label><input type="radio" name="user[app_type]"  onclick="certfile(this)" value="public">Public</label>
   </div>
   <div class="radio">
   <label><input type="radio" name="user[app_type]"  onclick="certfile(this)" value="private">Private</label>
   </div>
   <div class="radio">
  <label><input type="radio" name="user[app_type]"  onclick="certfile(this)" value="partner">Partner</label>
    </div>
  </div>

  <div class="form-group" style="display:none;" id="fyl">
    <label for="pwd">Uploade your certificates:</label><br>
      Public Key(e.g publickey.cer)<input type="file" class="form-control"  name="user[public_certificate]" onchange="validate(this,['cer','cert'])" value="">
      Private Key(e.g privatekey.pem)<input type="file" class="form-control"  name="user[private_certificate]" onchange="validate(this,['pem'])" value="">
  </div>

  <div class="form-group">
    <label for="pwd">Client Id:</label>
    <input type="text" class="form-control" name="user[clientId]" <?php if ($data['clientId']) { ?>value="<?= $data['clientId'] ?>"  <?php } ?>   required />
  </div>
  <div class="form-group">
    <label for="pwd">Client Secret:</label>
    <input type="text" class="form-control" required name="user[clientSecrect]" <?php if ($data['clientSecrect']) { ?>value="<?= $data['clientSecrect'] ?>"  <?php } ?> />
  </div>
<div class="form-group">
      <div class="col-xs-10">
          <button type="submit" class="btn btn-primary">Submit</button>
      </div>
</form>

<script type="text/javascript">
$(document).ready(function(){
var apiId="<?= $data['api_id'] ?>";
var cid="<?= $data['company_id'] ?>";
if(apiId && cid){
var v=$( "#app option:selected" ).val();
var s=$('#'+v).val();
$("#typ").val(s);
$("#frm").hide();
document.myForm.submit();
}
});


function getType(arg){
  var v=$(arg).val();
  var s=$('#'+v).val();
  $("#typ").val(s);
  if(v==5){
    $("#app_type").removeAttr('style');
    $("input:radio").attr("required","required");
  }else{
    $("input:radio").prop("checked", false);
    $('input:file').val(null);
    $("#fyl").attr('style','display:none');
    $("input:radio").removeAttr("required");
    $("#app_type").attr('style','display:none');
  }
}

function certfile(arg){
  var v=$(arg).val();
  if(v=='private' || v=='partner'){
     $("#fyl").removeAttr('style');
     $("input:file").attr("required","required");
  }else{
      $("#fyl").attr('style','display:none');
      $("input:file").removeAttr("required");
      $('input:file').val(null);
  }
}

function validate(arg,typ) {
    var file=arg.value;
    var ext = file.split(".");
    ext = ext[ext.length-1].toLowerCase();
    var arrayExtensions = typ;

    if (arrayExtensions.lastIndexOf(ext) == -1) {
        alert("Please upload correct extension type");
        $(arg).val("");
        return false;
    }
}
</script>
</html>
