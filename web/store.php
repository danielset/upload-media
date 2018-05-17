<?php
	
$design_url = $_POST['content'];

$my_r = $_POST['my_r'];
$my_g = $_POST['my_g'];
$my_b = $_POST['my_b'];

$show_logo = $_POST['show_logo'];

$my_color = $my_r . ',' . $my_g . ',' . $my_b;

$my_opacity = $_POST['my_opacity'];


$muesli_r = $_POST['muesli_r'];
$muesli_g = $_POST['muesli_g'];
$muesli_b = $_POST['muesli_b'];

$muesli_color = $muesli_r . ',' . $muesli_g . ',' . $muesli_b;

$muesli_opacity = $_POST['muesli_opacity'];


$title_r = $_POST['title_r'];
$title_g = $_POST['title_g'];
$title_b = $_POST['title_b'];

$title_color = $title_r . ',' . $title_g . ',' . $title_b;

$title_opacity = $_POST['title_opacity'];
$title_text = $_POST['title_text'];


$rendering_url = 'https://potent-motion.glitch.me/?query=';
$base_url = 'http://technicalmarketing.guide/3d/big.php';

$code_start = "const browser = await puppeteer.launch();
const page = await browser.newPage();
await page.setViewport({width: 600, height: 1630});
await page.goto('";

$code_end = "');
await page.screenshot({path:
'screenshot.png',omitBackground:true});
await browser.close();";

if ($show_logo == 'on') {
	$show_logo_param = '&logo=true';
} else {
	$show_logo_param = '&logo=false';
}

$total_code = $code_start . $base_url . '?muesli_color=' . $muesli_color . '&muesli_opacity=' . $muesli_opacity . '&my_color=' . $my_color . '&my_opacity=' . $my_opacity . '$title=' . $title_text . '&design_url=' . $design_url . $code_end;

$total_url = $base_url . '?muesli_color=' . $muesli_color . '&muesli_opacity=' . $muesli_opacity . '&my_color=' . $my_color . '&my_opacity=' . $my_opacity . $show_logo_param . '&title=' . $title_text . '&title_color=' . $title_color . '&title_opacity=' . $title_opacity . '&design_url=' . $design_url;


?>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>

<body>

<div class="container">
  <div class="row">
	  <div class="col-sm-6" style="margin: 0 auto;">


<!--textarea style="margin-top: 50px" class="form-control" rows="11"><?php echo $total_code; ?></textarea
<p style="margin-top: 20px">
Code just as fallback. If button fails <a href="https://try-puppeteer.appspot.com" target="_blank">go here</a> and paste code. 
</p>-->

<!--a href="" class="btn btn-primary" target="_blank">Dosenrendering generieren</a-->
		  
<img src="<?php echo($rendering_url . urlencode($total_url)); ?>">

	  </div></div>
</div>

</body>
</html>