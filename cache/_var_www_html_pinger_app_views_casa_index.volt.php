<html>
<div class="">
<?= $this->getContent() ?>
<div class="container-fluid page-padding">
    <div class="panel panel-default hide" id="showdiv">
        <div class="panel-body">
          <form id="mapfrm" action="/invo/dataintigration/create" method="post">
          <div class="row form-group">
            <div class="col-md-12" id="descid">
              <label>Description</label>
              <textarea name="data[description]" id="descdata" class="form-control"></textarea>
            </div>
                    <div class="col-md-12">
                    <br />
                    <strong>Create Account</strong>
                       <table class="table table-bordered " id="maptblcreate">
                       <tr class="hide" id="createbasetr">
                       <td class="tdcls keytd"></td>
                       <td class="tdcls subkey1td"></td>
                       <td class="tdcls subkey2td"></td>
                       <td class="tdcls subkey3td"></td>
                       <td class="tdcls subkey4td"></td>
                       <td class="tdcls subkey5td"></td>
                       <td class="tdcls subkey6td"></td>
                       <td class="tdcls onecls">
                       <select name="data[accounttype][]" class="accounttype form-control">
                         <option value="">Chose Account Type</option>
                         <option value="1">Equity</option>
                         <option value="2">Liabilities</option>
                         <option value="3">Assets</option>
                         <option value="4">Income</option>
                         <option value="5">Expenses</option>
                       </select>
                       </td>
                       <td class="tdcls onecls">
                       <input type="text" value="" name="data[catagory][]" class="form-control catagory" placeholder="catagory">
                       </td>
                       <td class="tdcls onecls"><input type="text" value="" name="data[subcatagory][]" class="form-control subcatagory" placeholder="subcatagory"></td>
                       <td class="tdcls onecls"><input type="button" value="create" class="btn btn-primary btn-outline tdcls onecls" onclick="createrule();"></td>
                       </tr>
                          <tr class="mintrcreate">
                          <td class="tdcls keytd"></td>
                          <td class="tdcls subkey1td"></td>
                          <td class="tdcls subkey2td"></td>
                          <td class="tdcls subkey3td"></td>
                          <td class="tdcls subkey4td"></td>
                          <td class="tdcls subkey5td"></td>
                          <td class="tdcls subkey6td"></td>
                          <td class="tdcls onecls">
                          <select name="data[accounttype][]" class="accounttype form-control">
                            <option value="">Chose Account Type</option>
                            <option value="1">Equity</option>
                            <option value="2">Liabilities</option>
                            <option value="3">Assets</option>
                            <option value="4">Income</option>
                            <option value="5">Expenses</option>
                          </select>
                          </td>
                          <td class="tdcls onecls">
                          <input type="text" value="" name="data[catagory][]" class="form-control catagory" placeholder="catagory">
                          </td>
                          <td class="tdcls onecls"><input type="text" value="" name="data[subcatagory][]" class="form-control subcatagory" placeholder="subcatagory"></td>
                          <td class="tdcls onecls">
                          <input type="button" value="create" class="btn btn-primary btn-outline tdcls onecls" onclick="createrule();"></td>
                          </tr>
                        </table>
                    </div>
                      <div class="col-md-12">
                        <div id="showaccountcreate"></div>
                        </div>
          </div>
          <hr>
            <div class="row">
                <div class="col-md-12">
                    <div id="maptbl">
                       <div id="basetr" class="maintr hide">
                            <strong>API Data</strong>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                    <br />
                                       <table class="table table-bordered ">
                                          <tr class="mintr" id="minibasetr">
                                          <td class="tdcls keytd"></td>
                                          <td class="tdcls subkey1td"></td>
                                          <td class="tdcls subkey2td"></td>
                                          <td class="tdcls subkey3td"></td>
                                          <td class="tdcls subkey4td"></td>
                                          <td class="tdcls subkey5td"></td>
                                          <td class="tdcls subkey6td"></td>
                                          <td class="tdcls onecls">
                                          <select name="data[matcher][]" class="matcher form-control">
                                            <option value="">chose Matcher</option>
                                            <option value="+">+</option>
                                            <option value="-">-</option>
                                            <option value="*">*</option>
                                            <option value="/">/</option>
                                            <option value="%">%</option>
                                            <option value="map">map</option>
                                          </select>
                                          </td>
                                          <td class="tdcls onecls">
                                          <select name="data[matchertyp][]" onchange="addextradata(this);" class="matchertyp form-control">
                                            <option value="">chose</option>
                                            <option value="1">Fixed Number</option>
                                            <option value="2">Other Data Value</option>
                                          </select>
                                          </td>
                                          <td class="tdcls onecls"><input type="text" value="" name="data[data][]" class="form-control data" placeholder="data"></td>
                                          </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row form-group tdcls onecls">
                                        <div class="col-md-6 ">
                                            <label>Select Account</label>
                                            <select name="data[accounts][]" class="form-control accounts">
                                                <option value="">select accounts</option>
                                                <?php foreach ($accounts as $account) { ?>
                                                  <option value="<?= $account['id'] ?>"><?= $account['name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Select Account Type</label>
                                            <select name="data[type][]" class="form-control type">
                                              <option value="">select type</option>
                                              <option value="debit">debit</option>
                                              <option value="credit">credit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="maintr">
                                <strong>API Data</strong>
                                <div class="row form-group">
                                    <div class="col-md-12">
                                    <br />
                                        <table class="table table-bordered">
                                          <tr class="mintr">
                                          <td class="tdcls keytd"></td>
                                          <td class="tdcls subkey1td"></td>
                                          <td class="tdcls subkey2td"></td>
                                          <td class="tdcls subkey3td"></td>
                                          <td class="tdcls subkey4td"></td>
                                          <td class="tdcls subkey5td"></td>
                                          <td class="tdcls subkey6td"></td>
                                          <td class="tdcls onecls">
                                          <select name="data[matcher][]" class="form-control matcher">
                                            <option value="">chose Matcher</option>
                                            <option value="+">+</option>
                                            <option value="-">-</option>
                                            <option value="*">*</option>
                                            <option value="/">/</option>
                                            <option value="%">%</option>
                                            <option value="map">map</option>
                                          </select>
                                          </td>
                                          <td class="tdcls onecls">
                                          <select name="data[matchertyp][]" onchange="addextradata(this);" class="matchertyp form-control">
                                            <option value="">chose</option>
                                            <option value="1">Fixed Number</option>
                                            <option value="2">Other Data Value</option>
                                          </select>
                                          </td>
                                          <td class="tdcls onecls"><input type="text" value="" name="data[data][]" class="form-control data" placeholder="data"></td>
                                          </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-6 tdcls onecls">
                                        <label>Select Account</label>
                                        <select name="data[accounts][]" class="form-control accounts">
                                            <option value="">select accounts</option>
                                            <?php foreach ($accounts as $account) { ?>
                                            <option value="<?= $account['id'] ?>"><?= $account['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6 tdcls onecls">
                                        <label>Select Acccount Type</label>
                                        <select name="data[type][]" class="form-control type">
                                            <option value="">select type</option>
                                            <option value="debit">debit</option>
                                            <option value="credit">credit</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                       </div>
                    </div>
                </div>

              <input type="hidden" value="" name="jsondataval" id="jsondata">
              <input type="hidden" value="" name="formid" id="formid">
              <input  class="btn btn-primary btn-outline tdcls onecls" type="button" value="Add More" onclick="addrows();">
              <input class="btn btn-primary tdcls onecls" type="submit" value="Submit" onclick="checkrows();">
          </form>
          </div>
      </div>

    <div id="result"></div>
    <div class="panel panel-none">
        <div class="panel-heading">
            <h4 class="panel-title">API Rules <sup class="records"><?= $invoice->total_items ?></sup><span class="text-small">&nbsp;Records Found</span></h4>
        </div><br />
        <div class="panel-body">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="col-md-1">Date</th>
                    <th class="col-md-9">Data</th>
                    <th class="col-md-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $v168200415118890201191iterator = $invoice->items; $v168200415118890201191incr = 0; $v168200415118890201191loop = new stdClass(); $v168200415118890201191loop->self = &$v168200415118890201191loop; $v168200415118890201191loop->length = count($v168200415118890201191iterator); $v168200415118890201191loop->index = 1; $v168200415118890201191loop->index0 = 1; $v168200415118890201191loop->revindex = $v168200415118890201191loop->length; $v168200415118890201191loop->revindex0 = $v168200415118890201191loop->length - 1; ?><?php foreach ($v168200415118890201191iterator as $invoice) { ?><?php $v168200415118890201191loop->first = ($v168200415118890201191incr == 0); $v168200415118890201191loop->index = $v168200415118890201191incr + 1; $v168200415118890201191loop->index0 = $v168200415118890201191incr; $v168200415118890201191loop->revindex = $v168200415118890201191loop->length - $v168200415118890201191incr; $v168200415118890201191loop->revindex0 = $v168200415118890201191loop->length - ($v168200415118890201191incr + 1); $v168200415118890201191loop->last = ($v168200415118890201191incr == ($v168200415118890201191loop->length - 1)); ?>
                <?php if ($v168200415118890201191loop->first) { ?>
                <?php } ?>
                <tr>
                  <td class="col-md-1"><?= date('d-m-Y', $this->callMacro('strtotime', [$invoice['created_at']])) ?></td>
                    <td class="col-md-9"><?= $invoice['data'] ?></td>
                    <td>
                        <div class="col-md-2">
                            <div class="">
                            <?php if ($invoice['flag'] == 1) { ?>
                                <h6 class="text-primary" >Rule_Created</h6>
                              <input type="button" class="btn btn-primary btn-sm" value="Add A New Rule" onclick="showmapdata(<?= $invoice['id'] ?>)">
                            <?php } else { ?>
                            <br />
                              <input type="button" class="btn btn-primary btn-sm" value="
Create Rule" onclick="showmapdata(<?= $invoice['id'] ?>)">
                            <?php } ?>

                            </div>

                        </div>
                    <!--<input type="submit" value="sendmail" class="btn btn-default" onclick="sendmaildata(<?= $invoice['id'] ?>);" />-->
                  </td>
                </tr>
                <?php if ($v168200415118890201191loop->last) { ?>
            </tbody>
            <?php } ?>
        <?php $v168200415118890201191incr++; } ?>
        </table></div>
    </div>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function(){
$(".tdcls").attr("style","display:none");
   $('[data-toggle="tooltip"]').tooltip();
   catagoryautocomplete();
   subcatagoryautocomplete();
});
function catagoryautocomplete(){
            var catdata=<?= json_encode($catarr) ?>;
            var catdataarr=[];
            for(i in catdata){
            var arr=[];
            arr['label']=i;
            arr['value']=i;
            catdataarr.push(arr);
            }
               $( ".catagory" ).autocomplete({
                  minLength: 0,
                  source: catdataarr,
                  focus: function( event, ui ) {
                     $(this).val( ui.item.label );
                        return false;
                  },
                  select: function( event, ui ) {
                  $(this).val( ui.item.label );
                     return false;
                  }
               });

}

function subcatagoryautocomplete(){
            var subcatdata=<?= json_encode($subcatarr) ?>;
            var subcatdataarr=[];
            for(i in subcatdata){
            var arr=[];
            arr['label']=i;
            arr['value']=i;
            subcatdataarr.push(arr);
            }
               $( ".subcatagory" ).autocomplete({
                  minLength: 0,
                  source: subcatdataarr,
                  focus: function( event, ui ) {
                     $(this).val( ui.item.label );
                        return false;
                  },
                  select: function( event, ui ) {
                  $(this).val( ui.item.label );
                     return false;
                  }
               });

}


flagaccount=1;
function createrule(){
var keyval=$(".mintrcreate").find(".key").val();
var subkey1val=$(".mintrcreate").find(".subkey1").val();
var subkey2val=$(".mintrcreate").find(".subkey2").val();
var subkey3val=$(".mintrcreate").find(".subkey3").val();
var subkey4val=$(".mintrcreate").find(".subkey4").val();
var subkey5val=$(".mintrcreate").find(".subkey5").val();
var subkey6val=$(".mintrcreate").find(".subkey6").val();
var accounttypeval=$(".mintrcreate").find(".accounttype").val();
var catagoryval=$(".mintrcreate").find(".catagory").val();
var subcatagoryval=$(".mintrcreate").find(".subcatagory").val();
  mainarrcreate=[];
  mainarrcreate.push({accountnumber : flagaccount});
  mainarrcreate.push({key : keyval});
  mainarrcreate.push({subkey1 : subkey1val});
  mainarrcreate.push({subkey2 : subkey2val});
  mainarrcreate.push({subkey3 : subkey3val});
  mainarrcreate.push({subkey4 : subkey4val});
  mainarrcreate.push({subkey5 : subkey5val});
  mainarrcreate.push({subkey6 : subkey6val});
  mainarrcreate.push({accounttype : accounttypeval});
  mainarrcreate.push({catagory : catagoryval});
  mainarrcreate.push({subcatagory : subcatagoryval});
  var myJsonString = JSON.stringify(mainarrcreate);
  var str='<input type="hidden" value="" name="accountrule[]" id="rule'+flagaccount+'" class="rulecreatedata">';
  $("#descid").append(str);
  $("#rule"+flagaccount).val(myJsonString);
  var strshow="<div class='alert alert-success' id='rulediv"+flagaccount+"'>";
  if(keyval){
    strshow+=keyval;
  }
  if(subkey1val){
    strshow+="->"+subkey1val;
  }
  if(subkey2val){
    strshow+="->"+subkey2val;
  }
  if(subkey3val){
    strshow+="->"+subkey3val;
  }
  if(subkey4val){
    strshow+="->"+subkey4val;
  }
  if(subkey5val){
    strshow+="->"+subkey5val;
  }
  if(subkey6val){
    strshow+="->"+subkey6val;
  }
  if(accounttypeval){
    var acntval=$(".mintrcreate").find('.accounttype option:selected').text();
    strshow+="=>>"+acntval;
  }
  if(catagoryval){
    strshow+="/"+catagoryval;
  }
  if(subcatagoryval){
    strshow+="/"+subcatagoryval;
  }
  strshow+="<a href='#' onclick='removeruledata("+flagaccount+"); return false;' title='Remove Line' class='b900 rmvbtn pull-right'>X</a></div>";
  $("#showaccountcreate").append(strshow);
  $(".accounts").append('<option value="r'+flagaccount+'">'+strshow+'</option>');
  flagaccount++;
  $(".mintrcreate").each(function(){
    if($(this).hasClass('hide')){

    }else{
      $(this).remove();
    }
  });
  $("#createbasetr").removeClass("hide");
  $("#createbasetr").addClass("mintrcreate");
  $("#createbasetr").clone().appendTo( "#maptblcreate" );
  $("#createbasetr").addClass("hide");
  $("#createbasetr").removeClass("mintrcreate");
  catagoryautocomplete();
  subcatagoryautocomplete();
}

function removeruledata(flg){
  $("#rulediv"+flg).remove();
  $("#rule"+flg).remove();
}
function addrows(){
$("#basetr").removeClass("hide");
$("#basetr").clone().appendTo( "#maptbl" );
$("#basetr").addClass("hide");
}

function checkrows(){
var arr=[];
var frmid=$("#formid").val();
arr.push({frmid : frmid});
arr.push({description : $("#descdata").val()});
if($(".rulecreatedata").length >0){
  subarr=[];
  $(".rulecreatedata").each(function(){
    subarr.push($(this).val());
  });
  arr.push({createruledata : subarr});
}else{
  arr.push({createruledata : 0});
}
  $(".maintr").each(function(){
  subarr=[];
  subarr.push({accounts : $(this).find(".accounts").val()});
  subarr.push({type : $(this).find(".type").val()});
  $(this).find(".mintr").each(function(){
    mainarr=[];
    mainarr.push({key : $(this).find(".key").val()});
    mainarr.push({subkey1 : $(this).find(".subkey1").val()});
    mainarr.push({subkey2 : $(this).find(".subkey2").val()});
    mainarr.push({subkey3 : $(this).find(".subkey3").val()});
    mainarr.push({subkey4 : $(this).find(".subkey4").val()});
    mainarr.push({subkey5 : $(this).find(".subkey5").val()});
    mainarr.push({subkey6 : $(this).find(".subkey6").val()});
    mainarr.push({matcher : $(this).find(".matcher").val()});
    mainarr.push({matchertyp : $(this).find(".matchertyp").val()});
    mainarr.push({data : $(this).find(".data").val()});
    subarr.push(mainarr);
  });
    arr.push(subarr);
  });
  var myJsonString = JSON.stringify(arr);
  $("#jsondata").val(myJsonString);
}

function addextradata(obj){
  var selectvl=$(obj).val();
  if(selectvl=="2"){
  var aa=$("#minibasetr").clone();
  $(obj).closest("table").append($("#minibasetr").clone());
  }
}

function showmapdata(formid){
    $("#showdiv").removeClass("hide");
    $("#formid").val(formid);
    fetchserverdata('',formid,"key");

}
function fetchserverdata(obj,formid,culmnname){
if(culmnname!="key"){
culmnname="subkey"+culmnname;
}

  if(obj){
    var choseval= $(obj).val();
  }else{
    choseval='';
  }
  $(".onecls").removeAttr("style");
  $("."+culmnname+"td").removeAttr("style");

  if(obj){
      $(obj).closest("tr").find("."+culmnname+"td").load( "<?= $baseurl ?>invo/dataintigration/new?formid="+formid+"&columnname="+culmnname+"&lastdata="+choseval);
  }else{
    $("."+culmnname+"td").load( "<?= $baseurl ?>invo/dataintigration/new?formid="+formid+"&columnname="+culmnname+"&lastdata="+choseval);
  }

}

function hidedata(){
  $(".tdcls").each(function(){
    var data=$(this).find(".tdcls").html();
  });
}
</script>
</html>
