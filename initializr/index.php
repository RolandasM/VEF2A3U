<?php include './includes/title.php'; 
	  include './includes/random_image.php';?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>VEF2A3U<?php echo "&#8212;{$title}"; ?></title>      
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Imghur</h1>
                <nav>
                    <?php require './includes/menu.php'; ?>
                </nav>
            </header>
        </div>
				
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Animals</h1>
                        <img src="img/pic1.jpg" alt="pic1" style="width:225px;height:225px">
                        <img src="img/pic2.jpg" alt="pic2" style="width:225px;height:225px">
                        <img src="img/pic3.jpg" alt="pic3" style="width:225px;height:225px">
                        <img src="img/pic4.jpg" alt="pic4" style="width:225px;height:225px">
                    </header>
                    
                </article>

                <aside>
                    <h3>Welcome!</h3>
                    <p>Welcome my friend, to the greatest website ever, imghur(totally not a ripoff of imgur). Stay here for a while and feel free to come back at any time.</p>
                    Random Image Here:
                    <figure>
						<img src="<?= $selectedImage; ?>" alt="Random image" <?= $imageSize[3]; ?>>
						<figcaption><?= $caption; ?></figcaption>
					</figure>
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <?php include './includes/footer.php'; ?>
            </footer>
        </div>

       
      

        
    </body>
</html>
