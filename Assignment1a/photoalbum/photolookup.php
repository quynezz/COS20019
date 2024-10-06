<!-- photolookup.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Photo Album</title>
</head>
<body>
<h2>Photo lookup</h2>
<form name="upload" id="upload">
<fieldset>
	<dl>
		<dt><label for="phototitle">Photo title: </label></dt>
		<dd><input type="text" name="phototitle" id="phototitle" size="25" /></dd>
		<dt><label for="keyword">Keyword: </label></dt>
		<dd><input type="text" name="keyword" id="keyword" size="25" /></dd>
		<dt><label for="fromdate">From Date: </label></dt>
		<dd><input type="date" name="fromdate" id="fromdate" /></dd>
		<dt><label for="todate">To Date: </label></dt>
		<dd><input type="date" name="todate" id="todate" /></dd>
		<dt><input type="submit" value="Search"/> <!-- Submit Button --></dt>
	</dl>
</fieldset>
</form>
<p><a href="photouploader.php" title="Photo Uploader">Photo Uploader</a></p>
</body>
</html>
<!-- END photolookup.php -->}