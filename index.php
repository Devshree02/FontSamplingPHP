<!DOCTYPE html>
<html lang="en">
<head>
  <title>Font Sampling</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" href="assests/css/custom.css">

  <!--html2canvas script files-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js" integrity="sha512-tVYBzEItJit9HXaWTPo8vveXlkK62LbA+wez9IgzjTmFNLMBO1BEYladBw2wnM3YURZSMUyhayPCoLtjGh84NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.esm.js" integrity="sha512-PydZDtPfuZPA8f5RT52IUcWsFH/49uu7p8+lp4C3K2SBB0I9CxoOlk/qzanLFpVvEuASBL0LKi2CKw4VidQOeQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.esm.min.js" integrity="sha512-0hmaFjQS8qYlrVu0XMik2K6J9pJ6Y8yI84SuzOHfugAT9U1jp44MDopCE2i1JsO4zPUEHwPxgGXC37q4KCn1aA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.js" integrity="sha512-sk0cNQsixYVuaLJRG0a/KRJo9KBkwTDqr+/V94YrifZ6qi8+OO3iJEoHi0LvcTVv1HaBbbIvpx+MCjOuLVnwKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="container">
	<div class="container">
		
     <div class="m-3 font-main" id="demophp">Background Color</br></div>
     <label class="mr-5 radio-lable"><input type="radio" name="background-color" class="mr-2 option-input radio" value="yellow">Yellow</label>
     <label class="mr-5 radio-lable"><input type="radio" name="background-color" class="mr-2 option-input radio" value="red">Red</label>
     <label class="mr-5 radio-lable"><input type="radio" name="background-color" class="mr-2 option-input radio" value="black">Black</label>
     <label class="mr-5 radio-lable"><input type="radio" name="background-color" class="mr-2 option-input radio" value="green">Green</label>

     <div class="m-3 font-main">Text Color</br></div>
     <label class="mr-5 radio-lable"><input type="radio" name="color" class="mr-2 option-input radio" value="yellow">Yellow</label>
     <label class="mr-5 radio-lable"><input type="radio" name="color" class="mr-2 option-input radio" value="red">Red</label>
     <label class="mr-5 radio-lable"><input type="radio" name="color" class="mr-2 option-input radio" value="black">Black</label>
     <label class="mr-5 radio-lable"><input type="radio" name="color" class="mr-2 option-input radio" value="green">Green</label>

     <div class="m-3 font-main">Font style</br></div>
     <label class="mr-5 radio-lable"><input type="radio" name="font-family" class="mr-2 option-input radio" value="sansSerif">Sans-serif</label>
     <label class="mr-5 radio-lable"><input type="radio" name="font-family" class="mr-2 option-input radio" value="monospace">Monospace</label>
     <label class="mr-5 radio-lable"><input type="radio" name="font-family" class="mr-2 option-input radio" value="cursive">Cursive</label>
     <label class="mr-5 radio-lable"><input type="radio" name="font-family" class="mr-2 option-input radio" value="fantasy">Fantasy</label></form></br>

     <form method="post" action="">

      <input type="text" placeholder="Enter your text" class="input-text mb-3" id="inputtextid"></br>
      <input type="text" placeholder="Enter your name" class="input-text mr-3" id="inputnameid" name="name">
      <input type="submit" class="btn btn-info mr-3" id="submitbutton" name="submit">
      <!-- <button type="button" class="btn btn-info" id="access">Access</button> -->
      <div id="outputdivid" class="output-div mt-3 mb-3"></div>
      <!-- <div id="resultimage"></div> -->
      <!-- <input type="submit" name="submit"> -->
      <!-- <canvas id="myCanvas" width="200" height="100" style="border:1px solid #000000;"></canvas>  -->
      
  </form>
</div>

  <?php


  if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $t=time();
    $dt=date("Y-m-d",$t);
    $image_name="fontSampling".$t.".png";

    
    $file_open = fopen("custom.csv", "a");

    $form_data = array(

      'name'    =>  $name,
      $dt, $image_name
  );
    fputcsv($file_open, $form_data);
    echo "Your entry is submitted successfully";
}


  ?>
 
</body>

<script src="assests/js/custom.js"></script>
<!-- <script type="text/javascript" src="assests/js/html2canvas.js"></script> -->

</html>
