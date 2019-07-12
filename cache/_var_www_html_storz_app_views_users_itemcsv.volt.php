<html>
<div class="page-header">
    <h1>Upload csv.</h1>
</div>

<form method="post" enctype="multipart/form-data" action="/pinger/users/itemcsv">
<table >
  <tr>
  <td>CSV type:</td>
  <td>
  <select class="" name="csv_type">
    <option value="item">Item</option>
    <option value="customer">Customer</option>
    <option value="company">Company</option>
  </select>
  </td>
</tr>
<tr>
<td>Upload CSV:</td><td><input type="file" name="item_csv"></td>
</tr>
<tr><td><input type="submit" value="Upload"></td></tr>
</table>
</form>
<html>
