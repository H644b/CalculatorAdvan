
<!DOCTYPE html>
  <html lang="en">

<head>
<title>
HomePage - CalculatorApp
</title>
<link rel="stylesheet" href="./style.css">
  
</head>
<tag id="lockbutton"><button id="lockbtn"onclick="lock()"><image src="./Lock.png" width="40px" height="40px"></button></tag>
<body>
<h1 id="welcome">
Welcome to this calculator designed by
</h1>
<div>
<tag id="name"><b id="blue">T</b><b id="green">I</b><b id="red">M</b><b id="turquoise">U</b><b id="purple">R</b></tag> <button id="youtube" onclick="window.open('https://www.youtube.com/channel/UCuyihpzyyPeJDjn1IfDOqJg','_blank')"><img src="./Social.png" height="50" width="50" /></button>

</div>
<div id="border">
<div id="awnser">first number
<input type="number" class="ibox" id="firstnum">
</div>
<div id="awnser">second number
<input type="number" class="ibox" id="secnum">
</div>
</div>
<div id="buttons">
<button onclick="add()" id="method">Add
</button>
<button onclick="subtract()" id="method">Subtract
</button>
<button onclick="multi()" id="method">Multiply
</button>
<button onclick="divi()" id="method">Divide
</button>
<input type="checkbox" id="divcheck"></input>
*Check to round division result.
<p id="note">
-----> note: subtracting will subtract the first number from the second number the same for division
</p>
</div>
<button id="info" onclick="window.location.href='html/about.html';" >About Me</button>
<button id="info" onclick="window.location.href='./Draw.html';" >Draw</button>
<!-- <button id="info" onclick="window.location.href='html/contact.html';" >Contact Me</button> -->
<p id="copyright"><i><u><b>Copyright 2022©®. Issued by Preeperteemer</b></u></i></p>
  


  <script  src="./script.js"></script>

</body>
</html>
