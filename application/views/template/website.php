<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo substr(I18n::$lang, 0, 2); ?>" lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
<head> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
<meta name="language" content="<?php echo I18n::$lang ?>" /> 
<title><?php echo $title ?></title>
<?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
</head>
<body>
		<div id='cabecalho' class='header'>
			<center>
				<h1><?php echo $title ?></h1>
			</center>
		</div>
		<div class='left menu ui-corner-all'>
			<?php //echo $menu ?>
		</div>
		<div id='conteudo' class='right conteudo'>			
			<ul></ul>
			<?php echo $content ?>
		</div>
		<div style='clear: both'></div>		
    </body>
</body>
</html>