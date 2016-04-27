<html>
<head>
	<title>Demo 1 : Convert All Textareas</title>
</head>
<body>

<div id="menu"></div>

<div id="intro">
By calling the nicEditors.allTextareas() function the below example replaces all 3 textareas on the page with nicEditors. NicEditors will match the size of the editor window with the size of the textarea it replaced.
</div>
<br />

<div id="sample">
<script type="text/javascript" src="nicEdit.js"></script>
<script type="text/javascript">bkLib.onDomLoaded(function(){ nicEditors.allTextAreas() });</script>

<form name="frmsample" action="sample.php" method="post">

	<h4>First Textarea</h4>
	<textarea name="area1" cols="40"></textarea>
	<br />
	<input type="submit" >	
</form>
</div>

</body>
</html>