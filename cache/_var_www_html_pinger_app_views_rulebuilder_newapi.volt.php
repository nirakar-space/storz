<div class="page-header">
    <h1>Add New API.</h1>
</div>
<html>
<script>
function addparas(){
$("#para_id").append('<tr><td><input type="text" name="api_meta_keys[]"><input type="button" onclick="remove_paras(this);" value="-"></td></tr>></td></tr>');
}

function remove_paras(obj){
 $(obj).parent().remove();
}
</script>
<form action="/pinger/Rulebuilder/newapi" method="post">
  <table>
    <tr><td>Name:</td><td><input type="text" name="api_name"></td></tr>
    <tr><td>Identifiers:</td><td><input type="text" name="api_identifier"></td></tr>
    <tr><td>Metakeys:</td>
    <td>
    <table id="para_id">
    <tr><td><input type="text" name="api_meta_keys[]"><input type="button" onclick="addparas();" value="+"></td></tr>
    </table>
    <tr>
     <td><input type="submit" value="Add"></td>
    </tr>
  </table>
</form>
</html>
