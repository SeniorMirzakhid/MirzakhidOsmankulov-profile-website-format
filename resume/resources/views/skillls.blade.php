<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

.container {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.html {width: 90%; background-color: #4CAF50;}
.css {width: 80%; background-color: #2196F3;}
.js {width: 65%; background-color: #f44336;}
.php {width: 60%; background-color: #808080;}
</style>
</head>
<body>
<div class="first" style="display: flex; justify-content: space-around; padding: 30px;  font-size: 30px; background-color: yellow;margin: 0px;">
	<div class="main"><a href="index.blade.php">About me</a></div>
	<div class="main"><a href="skills.blade.php">Skills</a></div>
	<div class="main"><a href="contacts.blade.php">Contacts</a></div>
</div>
<hr>
<h1>My Skills</h1>

<p>HTML</p>
<div class="container">
  <div class="skills html">90%</div>
</div>

<p>CSS</p>
<div class="container">
  <div class="skills css">80%</div>
</div>

<p>JavaScript</p>
<div class="container">
  <div class="skills js">65%</div>
</div>

<p>PHP</p>
<div class="container">
  <div class="skills php">60%</div>
</div>
<style type="text/css">
	a {
		text-decoration: none;
		color: blue;
	}
	hr {
		margin: 50px;
	}
</style>
</body>
</html>
