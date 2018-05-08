<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<script>UPLOADCARE_PUBLIC_KEY = "a42d6bf450b23f6af9be";</script>
<script src="https://ucarecdn.com/libs/widget/3.2.1/uploadcare.full.min.js" charset="utf-8"></script>
<script src="jscolor.js"></script>

<style type="text/css" media="screen">

.container {
	margin:50px;
}

label {
	font-size: 12px;
}


</style>

    <title>Dosen Upload</title>
  </head>
  <body>
	  <div class="container">
  <div class="row">
	  <div style="margin: 0 auto;">
    <form class="form" action="/store.php" method="post">
	<div style="margin-bottom: 20px;">
		<input type="hidden" role="uploadcare-uploader" name="content" data-crop="1573x1420 upscale" data-image-shrink="1573x1420" data-images-only="true" />
	</div>
	
	<div class="form-row">
	<div class="form group col-md-3">
		<label for="my_hex">"my" HEX Color</label>
		<input id="my_hex" type="text" class="form-control jscolor {onFineChange:'update_my(this)'}" value="ffffff">
	</div>
    <div class="form-group col-md-2">
      <label for="my_r">"my" (R)GB Color</label>
      <input type="text" class="form-control" value="255" id="my_r" name="my_r">
    </div>
    <div class="form-group col-md-2">
      <label for="my_g">"my" R(G)B Color</label>
      <input type="text" class="form-control" value="255" id="my_g" name="my_g">
    </div>
    <div class="form-group col-md-2">
      <label for="my_b">"my" RG(B) Color</label>
      <input type="text" class="form-control" value="255" id="my_b" name="my_b">
    </div>
    <div class="form-group col-md-3">
      <label for="my_opacity">"my" Opacity</label>
      <input type="text" class="form-control" value="1" id="my_opacity" name="my_opacity">
    </div>
  </div>
  
  <div class="form-row">
	 <div class="form group col-md-3">
		<label for="muesli_hex">"muesli" HEX Color</label>
		<input id="muesli_hex" type="text" class="form-control jscolor {onFineChange:'update_muesli(this)'}" value="ffffff">
	</div>
    <div class="form-group col-md-2">
      <label for="muesli_r">"muesli" (R)GB Color</label>
      <input type="text" class="form-control" value="255" id="muesli_r" name="muesli_r">
    </div>
    <div class="form-group col-md-2">
      <label for="muesli_g">"muesli" R(G)B Color</label>
      <input type="text" class="form-control" value="255" id="muesli_g" name="muesli_g">
    </div>
    <div class="form-group col-md-2">
      <label for="muesli_b">"muesli" RG(B) Color</label>
      <input type="text" class="form-control" value="255" id="muesli_b" name="muesli_b">
    </div>
    <div class="form-group col-md-3">
      <label for="muesli_opacity">"muesli" Opacity</label>
      <input type="text" class="form-control" value="0.6" id="muesli_opacity" name="muesli_opacity">
    </div>
  </div>
  
    <div class="form-row">
	  <div class="form-group form-check col-md-3">
		  <input checked="true" type="checkbox" class="form-check-input" id="exampleCheck1" name="show_logo">
    <label class="form-check-label" for="exampleCheck1">mymuesli Logo zeigen</label>
	  </div>
    </div>
    
    
    <div class="form-row">
	    <div class="form group col-md-3">
		<label for="title_hex">"subtitle" HEX Color</label>
		<input id="title_hex" type="text" class="form-control jscolor {onFineChange:'update_title(this)'}" value="ffffff">
	</div>
    <div class="form-group col-md-2">
      <label for="title_r">"subtitle" (R)GB Color</label>
      <input type="text" class="form-control" value="255" id="title_r" name="title_r">
    </div>
    <div class="form-group col-md-2">
      <label for="title_g">"subtitle" R(G)B Color</label>
      <input type="text" class="form-control" value="255" id="title_g" name="title_g">
    </div>
    <div class="form-group col-md-2">
      <label for="title_b">"subtitle" RG(B) Color</label>
      <input type="text" class="form-control" value="255" id="title_b" name="title_b">
    </div>
    <div class="form-group col-md-3">
      <label for="title_opacity">"subtitle" Opacity</label>
      <input type="text" class="form-control" value="1" id="title_opacity" name="title_opacity">
    </div>
  </div>
  
  <div class="form-row">
	  <label for="title_text">"subtitle" Text</label>
      <input type="text" class="form-control" value="LIEBLINGSMUESLI" id="title_text" name="title_text">
  </div>
	
	
	<button class="btn btn-primary" style="margin-top: 20px;" type="submit" value="save">Save</button>
	
	</form>
  </div>
  </div>
	  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  
  <script>
function update_my(picker) {

    document.getElementById("my_r").value = Math.round(picker.rgb[0]);
    document.getElementById("my_g").value = Math.round(picker.rgb[1]);
    document.getElementById("my_b").value = Math.round(picker.rgb[2]);
    
  
}
function update_muesli(picker) {

    document.getElementById("muesli_r").value = Math.round(picker.rgb[0]);
    document.getElementById("muesli_g").value = Math.round(picker.rgb[1]);
    document.getElementById("muesli_b").value = Math.round(picker.rgb[2]);
    
  
}
function update_title(picker) {

    document.getElementById("title_r").value = Math.round(picker.rgb[0]);
    document.getElementById("title_g").value = Math.round(picker.rgb[1]);
    document.getElementById("title_b").value = Math.round(picker.rgb[2]);
    
  
}
</script>
  
  </body>
</html>