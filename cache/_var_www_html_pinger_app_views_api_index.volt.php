<div class="page-header">
    <h1>Api intigration.</h1>
</div>
<form action="api/fetch" method="post">
<table>
<tr><td>Type:</td><td><select name="type"><option value="GET">GET</option><option value="POST">POST</option></select></td></tr>
<tr><td>Api Endpoints:</td><td><input type="text" name="endpoint"></td></tr>
 <tr><td>Consumer Key:</td><td><input type="text" name="consumer_key"></td></tr>
 <tr><td>Consumer Secret:</td><td><input type="text" name="shared_secret"></td></tr>
 <tr><td>Request Token URL: :</td><td><input type="text" name="request_url"></td></tr>
 <tr><td>Authorise URL:</td><td><input type="text" name="authorize_url"></td></tr>
 <tr><td>Access Token URL:</td><td><input type="text" name="access_url"></td></tr>
 <tr><td>Signature Method:</td><td><input type="text" name="signature_method" value="HMAC-SHA1"></td></tr>
 <tr><td><input type="Submit" value="submit"></td></tr>
</table>
</form>
