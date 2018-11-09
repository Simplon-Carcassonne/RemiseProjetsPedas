<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="../images/logo.png" />
    <link rel="stylesheet" type="text/css" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/HeaderFooter.css">
    <link rel="stylesheet" type="text/css" href="../css/catalogue.css">
    <link href="../css/stylepopup.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="../javascript/popup.js"></script>
    <meta name="description" content="site de réservation de poignée de VTT" />
    <meta name="news_keywords" content="Poignée de VTT, réservation" />
    <meta name="author" content="La Team SHPESHIAL" />
    <meta name="copyright" content="" />
    <meta name="viewport" content="width=device-width, user-scalable=yes" />
    <title>Poignée dans l'angle</title>
</head>
<?php
    include '../html/Header.html'
    ?>

<body>
    <section>
        <div id="trisArticle">
            <div id="categorie"> Catégories</div>
            <div id=categorie2>
                <input id="poignees_standard" class="checkRouge" type="checkbox" name="standards" value="poignees_standard"><label for="poignees_standard"> Poignees standards<br></label>
                <input id="poignées_ergonomiques" type="checkbox" name="ergonomiques" value="poignées_ergonomiques"><label for="poignées_ergonomiques">Poignées ergonomiques<br></label>

            </div>
            <div id="marques"> Marques</div>
            <div id=marques2>
                <input id="Extreme" type="checkbox" name="Marques" value="Extreme"><label for="Extreme">Extreme<br></label>
                <input id="Grip" type="checkbox" name="Marques" value="Grip"><label for="Grip">Grip<br></label>
                <input id="Ultime" type="checkbox" name="Marques" value="Ultime"> <label for="Ultime">Ultime<br></label>
                <input id="Ergo" type="checkbox" name="Marques" value="Ergo"><label for="Ergo">Ergo<br></label>
                <input id="LOcking" type="checkbox" name="Marques" value="LOcking"><label for="LOcking"> LOcking<br></label>
            </div>
            <div id="gammes">Gammes</div>
            <div id="gammes2">
                <input id="entrée de gamme" type="checkbox" name="Gamme" value="entrée de gamme"><label for="entrée de gamme"> Entrée de gamme<br></label>
                <input id="milieu de gamme" type="checkbox" name="Gamme" value="milieu de gamme"> <label for="milieu de gamme">Milieu de gamme<br></label>
                <input id="haut de gamme" type="checkbox" name="Gamme" value="haut de gamme"><label for="haut de gamme"> Haut de gamme<br></label>
            </div>
            <div id="prix2">Prix en €</div>
            <div id="prix">
                <div id="min">
                    <label id="mini" for="minimum">Minimum</label>
                    <input id="mini2" type="number" name="height" step="1"><br>
                </div>
                <div id=max>
                    <label id="maxi" for="maximum">Maximum</label>
                    <input id="maxi2" type="number" name="height" step="1"><br>
                </div>
            </div>
        </div>
        </div>
        <div id="produits">
            <?php

                for ($i=0; $i < 11 ; $i++) { 
            ?>
                    <div class="produitCatalogue">
                        <a href="#cacher">
                            <div>
                                <img src=<?php echo('"../images/03.png"'); ?>>
                                <p class="cataloguePrix">
                                    ??€
                                </p>
                            </div>
                            <p class="cataAppelationProduit">
                                Nom du produit
                            </p>
                            <p class="cataDescriptProduit">
                                efzfssrtszztrsrdshtryrergfegrf
                                Description du produit zrefzefezezcd edrytdyeyudeudrsytrdszfdzefdezafezd
                            </p>
                            

                        </a>
                    </div>


            <?php
                }
            ?>
        </div>
    </section>

    <div id="cacher" class="overlay">
      <div class="SpecialPopup">
        <div class="popup">
        <div id="galerie">
          <ul id="galerie_mini">
            <li>
              <a href="../images/big_01.png" title="Photo 1"><img src="../images/mini_01.png" alt="Le titre de la photo 1" /></a>
            </li>
            <li>
              <a href="../images/big_02.png" title="Photo 2"><img src="../images/mini_02.png" alt="Le titre de la photo 2" /></a>
            </li>
            <li>
              <a href="../images/big_03.png" title="Photo 3"><img src="../images/mini_03.png" alt="Le titre de la photo 3" /></a>
            </li>
            <li>
              <a href="../images/big_04.png" title="Photo 4"><img src="../images/mini_04.png" alt="Le titre de la photo 4" /></a>
            </li>
            <li>
              <a href="../images/big_05.png" title="Photo 5"><img src="../images/mini_05.png" alt="Le titre de la photo 5" /></a>
            </li>
          </ul>
          <dl id="photo">
            <dd><img id="big_pict" src="../images/big_01.png" alt="Photo 1 en taille normale" /></dd>
          </dl>
        </div>
        <div class="NomPrix">
          <h2>Zukam 2 Pièces de Poignée de Guidons</h2>
          <h3>8,99€ <span>TTC</span></h3>
          <a class="Reservation" href="#selection_panier">
            <span class="Reservation-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
            <span class="Reservation-text">Réservation</span>
          </a>
          <a class="Retour" href="#">
            <span class="Retour-icon"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
            <span class="Retour-text">Retour catalogue</span>
          </a>
        </div>
        </div>
        <div class="carac_desc">
        <div class="caracteristique">
          <h4>Caractéristique</h4>
          <div class="liste">
            <ul>
              <li><span>Utilisation</span><br/>VTT</li>
              <li><span>Forme</span><br/>poignées sport</li>
              <li><span>Poids</span><br/>55  g</li>
              <li><span>Matériaux</span><br/>silicone </li>
            </ul>
            <ul>
              <li><span>Genre</span><br/>Unisexe</li>
              <li><span>Année modèle</span><br/>2018</li>
              <li><span>Référence produit</span><br/>463003</li>
            </ul>
          </div>
        </div>
        <div class="descriptif">
          <h4>Description produit</h4>
          <p>Matériel en caoutchouc de haute qualité, verrouillage en aluminium, confortable et anti-glissant.<br/>Le verrouillage en aluminium fixe étroitement la poignée, aucun risque de glisser.<br/>Dimension: L128 X 34 mm　diamètre interne : 22 mm<br/>Correspondant à tous les poignée standard.</p>
        </div>
      </div>
      </div>
    </div>
    <div id="selection_panier" class="panier_retour">
      <div class="retour_panier">
        <h1>Réservation<br/>ajoutée au panier</h1>
        <div class="bouton">
          <a class="css-button_retour" href="#">
            <span class="css-button_retour-icon"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
            <span class="css-button_retour-text">Retour</span>
          </a>

          <a class="css-button_panier" href="#">
            <span class="css-button_panier-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
            <span class="css-button_panier-text">Panier</span>
          </a>
        </div>
      </div>
    </div>
    <?php
    include '../html/Footer.html'
    ?>
</body>

</html>
