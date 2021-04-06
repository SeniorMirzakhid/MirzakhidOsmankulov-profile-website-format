<!DOCTYPE html>
<html>
<head>
	<title>Save</title>
	<style type="text/css">
		div {
			line-height: 40px;
		}
	</style>
</head>
<body>
<form method="POST" action="{{ route('add-client')}}">
	@csrf
	<div><input type="text" name="name" placeholder="name"></div>
	<div><input type="text" name="surname" placeholder="surname"></div>
	<div><input type="email" name="email" placeholder="email"></div>
	<label for="img">Select image:</label>
  <input type="file" id="img" name="img" accept="image/*">
  <input type="submit">
</form>
</body>
</html>