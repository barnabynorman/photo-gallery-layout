<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A demo gallery">
	<meta name="author" content="Barnaby Norman">

	<title>Barnaby Norman : Photo Gallery</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<?php
        require_once 'gallery.php';
        $gallery = new Gallery('gallery'); // Name of gallery used to group images
//        $gallery->addImage('PATH TO IMAGE', 'TITLE OR DESCRIPTION', MARGIN FOR TOP, 'IMAGE WIDTH OR HEIGHT (DEFAULTS TO WIDTH)');
        $gallery->addImage('http://placebeard.it/300/700/notag', 'Restrict height', 40, 'height');
        $gallery->addImage('http://placekitten.com/700/700', 'Square so default');
        $gallery->addImage('http://placebeard.it/700/700/notag', 'Square so default');
        $gallery->addImage('http://placekitten.com/150/150', 'Square so default');
        $gallery->addImage('http://placebeard.it/250/300/notag', 'Sample Image 4', 40, 'height');
        $gallery->addImage('http://placekitten.com/250/300', 'Restrict height', 40, 'height');
        $gallery->addImage('http://placebeard.it/700/350/notag', 'Set margin larger to center', 100);
        $gallery->addImage('http://placekitten.com/210/210', 'Square');
        $gallery->addImage('http://placebeard.it/400/400/notag', 'Square so default');
        $gallery->addImage('http://placekitten.com/80/200', 'Restrict height', 40, 'height');
        $gallery->addImage('http://placebeard.it/650/650/notag', 'Square so default');
        $gallery->addImage('http://placekitten.com/280/280', 'Restrict height', 40, 'height');
        $gallery->addImage('http://placebeard.it/500/500/notag', 'Square so default');
        echo(htmlentities($gallery->render(true)));
    ?>
		<br>
</body>

</html>
