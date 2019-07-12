<html>
<div class="page-header">
    <h1>Inputs.</h1>
</div>
<script>

</script>
<form method="POST" action="/pinger/users/executerules">
<table>
<tr>
<td>Api Type</td>
<td>
<select name="api_id">
<option value="">Select</option>
<option value="1">xero</option>
</select>
</td>
</tr>
<?php foreach ($keys as $key) { ?>
<tr><td><?= $key ?></td><td><input type="text" name="<?= $key ?>"></td></tr>
<?php } ?>
<tr>
<td><input type="submit" value="Fetch"></td>
</tr>
</table>
</form>
</html>
