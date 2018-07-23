<?php
	require 'jsonlogic.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <link rel="shortcut icon" href="Images/favicon.ico" />
    <link rel="stylesheet" href="Styles/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Valeo Form</title>
  </head>
<body>
   <img alt="logo" src="Images/valeo.png" class="img-fluid rounded mx-auto d-block" />
 <div class="container">
 	<div class="jumbotron">
      <h1 class="h1 text-center">Welcome to Valeo Form</h1>
 <form method="post" action="">
  <div class="form-group">
    <label for="firstname"><strong>First Name</strong></label>
    <input type="text" class="form-control" id="firstname" name="First_Name"placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="lastname"><strong>Last Name</strong></label>
    <input type="text" class="form-control" id="lastname" name="Last_Name" placeholder="Last Name">
  </div>
  <div class="form-group">
    <label for="dob"><strong>Date Of Birth</strong></label>
    <input type="date" class="form-control" id="dob" name="Date-of-birth">
  </div>
  <label><strong>Gender</strong></label><br>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Gender" id="inlineRadio1" value="Male">
  <label class="form-check-label" for="inlineRadio1"><strong>Male</strong></label>
	</div>
	<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="Gender" id="inlineRadio2" value="Female">
  <label class="form-check-label" for="inlineRadio2"><strong>Female</strong></label>
	</div>
	<div class="form-group">
      <label for="height"><strong>Height in centimeters (cm's)</strong></label>
      <input type="text" class="form-control" id="height" name="Height">
    </div>	
    <div class="form-group">
      <label for="weight"><strong>Weight in Kilograms (kg's)</strong></label>
      <input type="text" class="form-control" id="weight" name="Weight">
    </div>
    <div class="form-group">
    <label for="imagecapture"><strong><u>Upload Image:-</u></strong></label>  
    <div class="content-container">
    <div class="tc">
      <div class="left-container vt">
        <div id="video-container" class="video-container"></div>
        <div id="grab-container" class="grab-container tc">
          <a id="btn-grab" class="btn-grab" onclick="onBtnGrabClick();">Snap</a>
        </div>
      </div>
      <div class="right-container tl">
        <div id="image-container" class="image-container"></div>
        <div id="upload-container" class="upload-container">
          <p><strong>File Name:</strong>&nbsp;&nbsp;&nbsp;&nbsp;<input id="txtFileName" name="File_Name" class="file-name-input"><br></p>
          <p>
                        <label><input type="radio" name="img-format" value="BMP" onchange="setCheckboxEnable(this.value);">BMP</label>
                        <label><input type="radio" name="img-format" value="JPEG" onchange="setCheckboxEnable(this.value);">JPEG</label>
                        <label><input type="radio" name="img-format" value="TIFF" onchange="setCheckboxEnable(this.value);">TIFF</label>
                        <label><input type="radio" name="img-format" value="PNG" onchange="setCheckboxEnable(this.value);" checked>PNG</label>
                        <label><input type="radio" name="img-format" value="PDF" onchange="setCheckboxEnable(this.value);">PDF</label>
                    </p>
          <p>
                        <label><input type="checkbox" name="multi" value="TIFF" id="ckbTiff">Muti-Page TIFF</label>
                        <label><input type="checkbox" name="multi" value="PDF" id="ckbPdf">Muti-Page PDF</label>
                    </p>
          <a id="btn-upload" class="btn-upload" onclick="onBtnUploadClick(this);">Upload</a>
        </div><br>
        <div id="uploaded-container" class="uploaded-container">
          <h4>List of Uploaded images</h4>
              <div id="image-links">
              </div>
        </div>
      </div>  
    <div id="loaderContent" class="invisible" >
    <img id="imgLoader" src="Images/loader.gif" />
    <span id="spLoader">Initiating...</span>
  </div>
    <div id="loadingLayer" class="invisible"></div> 
</div>
     <button type="submit" class="btn btn-success btn-lg" name="submit" value="submitted" id="submit">Submit</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script type="text/javascript" src="DCSResources/dynamsoft.camera.config.js"> </script>
    <script type="text/javascript" src="DCSResources/dynamsoft.camera.initiate.js"> </script>
    <script type="text/javascript" src="Scripts/script.js"></script>
  		</div>
  	</div>
  </body>
</html>