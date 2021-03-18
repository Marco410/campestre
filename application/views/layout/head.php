<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$css_path = base_url('assets/css').'/';
$img_path = base_url('assets/images').'/';
$js_path = base_url('assets/js').'/';
$assets = base_url('assets').'/';
?>

<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="" name="description">
	<meta content="" name="keywords">
	<meta content="" name="author">

	<title>Campestre del Valle <?php if(isset($title)) echo "| ".$title; ?></title>
    <link rel="shortcut icon" href="<?php echo $img_path?>icons/favicon.ico">

	<link rel="stylesheet" href="<?php echo $assets; ?>lib/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $assets; ?>lib/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo $assets; ?>lib/lightbox/css/lightbox.min.css" />
	<link rel="stylesheet" href="<?php echo $assets; ?>lib/owlcarousel/assets/owl.carousel.min.css" />
    
	<link rel="stylesheet" href="<?php echo $css_path; ?>main.css" />
    <link href="<?php echo $assets; ?>favicon.ico" rel="icon">
    

	<?php
	if(isset($view_style))
	{
		if( ! is_array($view_style))
		{
			?>
			<link rel="stylesheet" href="<?php echo $css_path.$view_style; ?>" />
			<?php
		}
		else
		{
			foreach($view_style as $vs)
			{
				?>
				<link rel="stylesheet" href="<?php echo $css_path.$vs; ?>" />
				<?php
			}
		}
	}
	?>
</head>
