<!-- photouploader.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Photo Album</title>
</head>
<body>
<h2>Photo uploader</h2>
<form name="upload" id="upload">
<fieldset>
	<dl>
		<dt><label for="phototitle">Photo title: </label></dt>
		<dd><input type="text" name="phototitle" id="phototitle" size="25" /></dd>
		<dt><label for="selectphoto">Select a photo: </label></dt>
		<dd><input type="file" name="selectphoto" id="selectphoto" /></dd>
		<dt><label for="description">Description: </label></dt>
		<dd><input type="text" name="description" id="description" size="25" /></dd>
		<dt><label for="date">Date: </label></dt>
		<dd><input type="date" name="date" id="date" /></dd>
		<dt id="keywordid">
			<label for="keywords">Keywords (comma-delimited e.g. keyword1; keyword 2, ...):</label>
			<input type="text" name="keywords" id="keywords" size="25" />
		</dt>
		<dt><input type="submit" value="Upload"/> <!-- Submit Button --></dt>
	</dl>
</fieldset>
</form>
<p><a href="photolookup.php" title="Photo Lookup">Photo Lookup</a></p>
</body>
</html>
<!-- END photouploader.php -->}