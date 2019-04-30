<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dimgal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="upload.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="upload.js"></script>
</head>
<body>
   <div>
     <input id="files" type="file" name="files[]" multiple/>
     <button id="upload">Upload</button>
     <div id="progress-wrp">
        <div class="progress-bar"></div>
        <p style="font-size: 18px">Status : <div class="status">0%</div></p>
    </div>
   </div> 
   <div id="result">
       
   </div>
</body>
</html>