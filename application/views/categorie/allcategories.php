
<!--   header.php  dans views/globals --> 

<?php //$this->load->view("globals/header"); ?>


    
    <!-- Page Content -->
    <div class="container">


        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1><?=$uneCategorie->nom; ?></h1>
            <p>Vous pouvez passer commande des produits qui vous seront livrés à votre domicile dès le lendemain</p>
            <p><a class="btn btn-primary btn-large">Plus d'informations...</a>
            </p>
        </header>

        <hr>


        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Derniers arrivages... </h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">


            <?php if (!empty($allProduits)) : ?>

                <?php foreach ($allProduits as $key => $unProduit) : ?>

                <div class="col-md-3 col-sm-6 hero-feature">
                    <div class="thumbnail">
                        <img src="<?=$unProduit->displayImage(); ?>" alt="">

                        <div class="caption">
                            <h3><?=$unProduit->nomMarque; ?></h3> 
<<<<<<< HEAD
                            <p><?=word_limiter($unProduit->description,7); ?></p>  <!-- Coupe le texte a partir du 5eme mot-->
=======
                            <p><?= word_limiter($unProduit->description,7); ?></p>  <!-- Coupe le texte a partir du 5eme mot-->
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
                            <p>
                                <a href="<?=site_url('produit/information/'.$unProduit->id)?>"><?=$unProduit->titre; ?>  </a>
                                <a href="<?=site_url('produit/information/'.$unProduit->id)?>" class="btn btn-primary">Acheter : <?=$unProduit->prix; ?> €/Kg</a> 
                            </p>
                        </div>
                    </div>
                </div>

                <?php endforeach; ?>

            <?php else : ?>
                <h2 style="color:red;">Aucun produit disponible dans cette catégorie...</h2>
            <?php endif; ?>
            
        </div>
        
        <!-- /.row -->
    </div>

<!--   footer.php  dans views/globals --> 

<?php //$this->load->view("globals/footer"); ?>
