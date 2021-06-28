<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="sidebar">
  <a onclick="myFunction()" href="#home">Home</a>
  <a onclick="myFunction()" target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/CSS/:active" rel="noreferrer noopener">News</a>
  <a onclick="myFunction()" href="#contact">Contact</a>
  <a onclick="myFunction()" href="#about">About</a>
</div>

<!-- Page content -->
<div class="content">
  ..
</div>
<script>
function myFunction() {
   var element = document.getElementById("side");
   element.classList.toggle("mystyle");
}
</script>
</body>
</html>