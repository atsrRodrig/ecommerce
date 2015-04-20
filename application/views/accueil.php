
<!--   header.php  dans views/globals --> 
<?php //$this->load->view("globals/header"); ?> 


    <!-- Page Content -->
    <div class="container">

        <div class="row">


            <!--   sidebar.php  dans views/globals --> 
            <?php $this->load->view("globals/sidebar"); ?>
            
            
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                           
                            
                            <!-- est place ICI et non pas dans le controleur car cette page est appellée plusieurs fois-->
                            <!-- et depuis plusieurs autres pages donc ne peut pas ere uniquement dans le MAIN -->

                            <?php $allImages = $this->Produit_model->displayImagesCaroussel();  ?>



                            <ol class="carousel-indicators">

                                <?php foreach ($allImages as $key => $uneImage) : ?>  
                                    
                                    <?php if ($key === 0) : ?>
                                         <li data-target="#carousel-example-generic" data-slide-to="<?= $key ?>" class="active"></li>
                                    
                                    <?php else : ?>
                                        <li data-target="#carousel-example-generic" data-slide-to="<?= $key ?>" ></li>
                                    <?php endif ; ?>

                                <?php  endforeach; ?>
                            </ol>
                           
                                                        
                            <div class="carousel-inner">
                               <?php foreach ($allImages as $key => $uneImage) : ?>  
                                    <?php if($key === 0) : ?>
                                    
                                        <div class="item active">
                                            <img style="width:430px; height:300px;" class="slide-image center-block" src="<?=$uneImage->displayImage(); ?>" alt="">
                                        </div>

                                    <?php else : ?>
                                        
                                        <div class="item">
                                            <img style="width:430px; height:300px;" class="slide-image center-block" src="<?=$uneImage->displayImage(); ?>" alt="">
                                        </div>
                                    <?php endif ; ?>
                                    
                                <?php endforeach ; ?>
                            </div>


                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
               
                        </div>
                    </div>
                </div>


                <div class="row">


                    <?php foreach ($allProduits as $key => $unProduit) : ?>

                        <div style="min-height:368px;" class="col-sm-4 col-lg-4 col-md-4">
                            <div class="thumbnail">
      
                                <!-- <img src="<?=base_url();?>assets/images/<?=$unProduit->image?>" alt=""> -->
                             
                                <!-- on appelle la methode displayImage en lui balancant l'objet courant puis
                                  on aura un return de la concatenation  en retour -->

                                <img src="<?=$unProduit->displayImage(); ?>" alt="">
                                                                
                                <div class="caption">
                                    
                                    <h4><?=$unProduit->nomMarque; ?></h4> 

                                    <h4 class="pull-right"><?=$unProduit->prix; ?> €</h4>
                                    <h4><a href="<?=site_url('produit/information/'.$unProduit->id)?>"><?=$unProduit->titre; ?></a></h4>
                                    
                                    <p><?= word_limiter($unProduit->description,5); ?></p>  <!-- Coupe le texte a partir du 5eme mot-->
                                </div>
                                

                                <div class="ratings">
                                    <p class="pull-right"><?=$unProduit->nombre; ?> commentaires</p>
                                    
                                    <?php for($i = 0 ; $i <=4 ; $i++) : ?>

                                        <?php if ($i < round($unProduit->moyenne)) : ?>
                                            <span class="glyphicon glyphicon-star"></span>
                                        
                                        <?php else : ?>
                                        
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                        <?php endif; ?>

                                    <?php endfor; ?>
                                                           
                                </div>


                            </div>
                        </div>
                    <?php endforeach ; ?>


                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- /.container -->


<!--   footer.php  dans views/globals --> 

<?php //$this->load->view("globals/footer"); ?> 
