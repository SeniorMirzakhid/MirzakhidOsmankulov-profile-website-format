<!DOCTYPE html>
<html>
<head>
	<title>Create new Client</title>
</head>
<body>
<form method="POST" action="{{ route('add-client')}}">
	@csrf
	<input type="text" name="name" placeholder="name">
	<input type="text" name="surname" placeholder="surname">
	<input type="text" name="age" placeholder="age">
	<button type="submit">Create</button>
</form>
</body>
</html>