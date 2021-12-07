<!DOCTYPE html>
<html>
    <head>
        <title>dashes
        </title>
        <link rel="stylesheet" href="csiroundcss.css">
</head>
<body>
    <div class="abc">
        <center><h1>EVENT NAME</H1></center>
    <ion-modal-view class="modal contact-details-modal" id="contactDetailModal">



<ion-content delegate-handle="modalContent">   
<center>
<br><br>

<br>

<div class="meter_reading" style="border: 0;border-bottom: 1px solid     #b2b2b2;outline: 0;width: 20px;">
<input type="text" id="meter" name=" meter" value="" />
<!--<input type="text" id="meter" name=" meter" value="" />
<input type="text" id="meter" name=" meter" value="" />
<input type="text" id="meter" name=" meter" value="" />
<input type="text" id="meter" name=" meter" value="" />
<input type="text" id="meter" name=" meter" value="" />-->

</div>


</div> 
</center>
</ion-content>
</ion-modal-view>
    </div>
    <div class="def">  

<center>
<button type="button" class="a" onclick="myFunction()">Clue1</button>
<p id="demo1"></p>
<button type="button" class="a" onclick="myFunction2()">Clue2</button>
<p id="demo2"></p>
<button type="button" class="a" onclick="myFunction3()">Clue3</button>
<p id="demo3"></p>
<a href="csiround.php"><button type="button" class="b">Next Question</button></a>
<a href="csiround.php"><button type="button" class="c">Prev Question</button></a>


<script>
    
function myFunction() {
  document.getElementById("demo1").innerHTML = "<h2> Founded in 1945 </h2>";
}

function myFunction2() {
  document.getElementById("demo2").innerHTML = " <h2>Founder is Mohamed Premji </h2>"; 
}

function myFunction3() {
    document.getElementById("demo3").innerHTML = "<h2>Thiery Delaporte</h2>";
}

</script>
</div>
</body>
</html>
