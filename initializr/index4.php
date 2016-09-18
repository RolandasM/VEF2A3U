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
                        <h1>Verkefni 2 (14%) – Vefur, uppsetning</h1>

                        <p>Búðu til myndavef sem mun geyma myndagagnagrunn. Við munum notast við
                        einfaldan ljósmyndagagnagrunn sem þú þarft að búa til og setja gögn í síðar (notendur og myndir). </p>
                         <p>Það er einnig í boði að gera vef að eigin vali með samþykki kennara.</p>
                         <p>Við munum vinna áfram með það sem við gerum hér í næstu verkefnum.</p> 
                    </header>
                    <section>                                 
                        <p>1. (5%) Hönnun. Notaðu eitthvað framenda framework, template eða álíka til að vinna með fyrir uppsetningu á viðmótinu (css/html). Búðu til og stílaðu amk. forsíðuna. Settu smá innihald t.d. texta og myndir. Hér þarf ekki að klára viðmótið fyrir vefinn. 
                        </p>
                        <p>2.  (5%) Uppsetning. Hlutaðu niður vefinn sem hefur að geyma t.d. header, menu og footer á sambærilegan hátt og gert er í kafla 4. Notaðu til þess include og viðeigandi path lausnir og aðferðir sem kynntir eru í 4. kafla (error, missing osfrv.). 
                        </p>
                        <p>  3.  (1%) Búðu til menu og notaðu php til að sýna á hvaða síðu notandi er staddur.   </p>
                        <p>4. (1%) Footer - Búðu til copyright með php sbr. Lausn í kafla 4 
                        </p>
                        <p>5. (1%) &lt;title&gt;  notaðu php fyrir title sbr.  lausn í kafla 4  </p>
                        <p>6. (1%) Búðu til random image (úr array) sem banner fyrir header eða background mynd fyrir vefsíðu, láttu fyrirsögn &lt;h1&gt;  eða caption breytast </p>      
                    </section>
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
