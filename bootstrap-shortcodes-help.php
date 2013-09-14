<?php
$thisfile = realpath(dirname(__FILE__));           
# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
//use \Michelf\Markdown;
use \Michelf\MarkdownExtra;

$text = file_get_contents(dirname(__FILE__) . '/README.md');
$html = MarkdownExtra::defaultTransform($text);
?>
<!DOCTYPE html>
<html>
    <head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <title>PHP Markdown Lib - Readme</title>
    </head>
    <body>
        <div class="container">
		<?php
			# Put HTML content in the document
            $html = str_replace('<table>', '<table class="table table-striped">', $html);
			echo $html;
		?>
        </div>
    </body>
</html>