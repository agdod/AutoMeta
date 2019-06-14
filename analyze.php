<?php 
	include('functions.php');

	if (!isLoggedIn()) {
        header('location: login.php');
	}
    include('navbar.php') 
?>  
<!DOCTYPE html>
<html>

<head>
  
<title>AutoMeta</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/upload.css">
    <style>
body
{width :100%
margin:0 auto;
padding:0px
font-family:helvetica;
background-color:£0B3861;}

    div.imagePreview:hover {
        cursor : hand;
        cursor: pointer;
        opacity: .9;
    }

    a.divLink {
        position : absolute;
        width: 100%
        height: 100%
        top:0;
        left: 0;
        text-decoration: none;
        z-index: 10;
    }
</style>
</head>
<body>


<!-- Container for title and info -->
<div class="w3-padding-64">
    <div class="w3-center" style="margin-bottom:50px;">
    <h1 class="w3-center">ANALYSE & UPLOAD A NEW IMAGE</h1>
    Here you can analyze and upload your images.
    </div>

<!-- Drag and drop laatikko -->
<div id="drop_file_zone" class="imagePreview" >
<input id ="dragNdrop" class="divLink"  type="file" multiple >
<img  alt="image display here" id="test" src="#">
      <a class = "divLink" href="#" onClick="alert('you clicked me!');"></a>
      

</div>

<!-- Keyword container -->
<div class="keywordbox w3-center">
    <h3>KEYWORDS:</h3>
    <div id="keywordlist">
        List the keywords in this div
    </div> <!--close keywordlist div -->
</div>
<p id="filename"> <i>Display filename here ...... </i></p>
<button class ="uploadto" type="button" onClick="file_explorer()">Analyse Image</button>
<button class="uploadto">Save XML</button>

</div>




<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>
<script type="text/javascript">
function preview_image(event)
{
    var reader = new FileReader(event);
    //reader.onload = function()
    
        var output = document.getElementById('output_image');
        output.src = event.target.files[0];
    
    reader.readAsDataURL(event.target.files[0]);
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--Drag and droppiin liittyvä-->
<script src="js/xmloutput.js"></script>
<script src="js/upload.js"></script> <!--Drag and droppiin liittyvä-->
<script src="js/visionXml.js"></script>

</body>
</html>
