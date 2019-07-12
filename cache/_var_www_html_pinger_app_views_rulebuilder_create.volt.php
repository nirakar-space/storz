<!DOCTYPE html>
<html>
<div class="page-header">
    <h1>Rules.</h1>
</div>
<script>
$(document).ready(function(){
  var k;
});
function add_headers(arg){
 $(arg).parent().append('<tr><td><input type="text" placeholder="key" name="head_key[]" size="32"><input type="text" name="head_value[]" placeholder="Value" size="32"><input type="button" onclick="remove_headers(this)" value="-"></td></tr>');
}

function remove_headers(obj){
 $(obj).parent().remove();
}

function add_parameters(arg){
  $(arg).closest('table').append('<tr><td><input type="text" placeholder="key" class="pk" name="para_key[]" size="32"></td><td><input type="text" name="para_value[]" class="pv" placeholder="Value" size="32"><input type="button" onclick="add_subpara(this)" value="S"><table></table></td><td><input type="button" onclick="remove_parameters(this)" value="-"></td></tr>');
 }

 function remove_parameters(obj){
  $(obj).closest('tr').remove();
 }

 function add_subpara(arg){
   $(arg).closest('td').find(".pv").first().removeAttr('name').attr('style','display:none');
   if($(arg).attr('name')!='fst'){
     $(arg).closest('td').find(".pvs").first().removeAttr('name').addClass("intro").attr('style','background-color:cyan');
   }

   var str='';
   $(".intro").each(function() {
    str=str+'['+($(this).val())+']';
  });
   if($(arg).closest('tr').find(".pk").val()){
     k=$(arg).closest('tr').find(".pk").val();
   };
   var base='para_value';
   var ar='['+k+']'+str;
   var fn='[]';

   var nm=base+ar+fn;
   $(arg).closest('td').children('table').append('<tr><td><input type="text"  class="pvs" name="'+nm+'" size="32" placeholder="subvalue"><input type="button" value="-" onclick="remove_subpara(this)"><input type="button" onclick="add_subpara(this)" value="T"><table></table></td></tr>');

 }

function remove_subpara(arg){
var v=$(arg).closest('table').children().length;
if(v==1){
   $(arg).parents().eq(3).find(".pv").removeAttr('style').attr('name','para_value[]');
}
$(arg).closest('tr').remove();
}

 function post_serialize(){
    $(".section").each(function(){
      var frmdata=$(this).find(":input").serialize();
      $(this).find(".form_data").val(frmdata);
     });
 }

 function reqvars(arg,flg){
    if(flg==1){
    $(arg).closest('table').append('<tr><td><input type="text" placeholder="key" name="uservar[]" size="32"><input type="button" onclick="remove_reqvars(this)" value="-"></td></tr>');
    }else if (flg==2) {
      $(arg).closest('table').append('<tr><td><input type="text" placeholder="key"  size="32"><input type="button" onclick="remove_reqvars(this)" value="-"></td></tr>');
    }
 }

 function remove_reqvars(){
   $(obj).parent().remove();
 }

 $(document).ready(function(){
   var template = $('#sections .section:first').clone();

   var sectionsCount = 1;
   $("#addstep").click(function(){
     sectionsCount++;
      template.clone().find(":input").each(function(){
        /*$(this).attr("id",$(this).attr("id") + sectionsCount)*/;
      }).end().appendTo('#sections');
      return false;
   });
 });
</script>
<form method="POST" id="ruleForm" action="/pinger/Rulebuilder/insertRule">
<div  id="sections">
<table border="1"  class="section">
  <tr>
    <td colspan="3"><input type="hidden" name="data[]" class="form_data" value=""/><td>
  </tr>
  <tr>
    <td colspan="3">Step:<span id="lbl">1</span><td>
  </tr>
<tr>
  <td>Destination:</td>
  <td>
    <select name="type">
         <option value="">SELECT</option>
         <option value="GET">GET</option>
         <option value="POST">POST</option>
         <option value="PUT">PUT</option>
         <option value="DELETE">DELETE</option>
     <select>
  </label><input type="text" id="x" name="end_point"size="70">
 </td>
</tr>
<tr>
  <td>Authentication:</td>
  <td>
   <select name="method">
      <option value="">SELECT</option>
        <option value="no-auth">No Auth</option>
        <option value="oauth-1">OAuth 1.0</option>
        <option value="oauth-2">OAuth 2.0</option>
        <option value="basic-auth">Basic Auth</option>
        <option value="digest-auth">Digest Auth</option>
        <option value="aws-auth">AWS Signature</option>
    <select>
      <select name="operation">
         <option value="">SELECT OPERATION</option>
           <option value="RequestToken">RequestToken</option>
           <option value="Autherization">Autherization</option>
           <option value="AccessToken">AccessToken</option>
           <option value="DataFetch">DataFetch</option>
       <select>
  </td>
</tr>
<tr>
  <td>Header(s)</td>
  <td>
    <table id="heads">
      <tr>
        <td><input type="text" placeholder="key" name="head_key[]" size="32"><input type="text" name="head_value[]" placeholder="Value" size="32"><input type="button" onclick="add_headers(this)" value="+"></td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td>Parameter(s):</td>
  <td>
    <table id="paras" border="1">
      <tr>
        <td><input type="text" placeholder="key" class="pk" name="para_key[]" size="32"></td>
        <td>
          <input type="text" class="pv" name="para_value[]"  placeholder="Value" size="32"><input type="button" onclick="add_subpara(this)" name="fst" value="S">
          <table border="2"></table>
        </td>
        <td><input type="button" onclick="add_parameters(this)" value="+"></td>
      </tr>
    </table>
    <!-- <tr>
      <td>Paras</td>
      <td>
        <textarea name="parameters"></textarea>
    </td>
    </tr> -->
  </td>
</tr>
</table>
</div>
<input type="submit" name="" onclick="post_serialize()" value="Create">
<input type="button" value="Add steps" id="addstep">
</form>
</html>
<!-- $(arg).parents('table[class^="paras"]').attr('style','border:2px'); -->
