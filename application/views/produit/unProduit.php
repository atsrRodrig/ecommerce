
<!--   informationHeader.php  dans views/globals --> 

<?php //$this->load->view("globals/header"); ?> 


    <!-- Page Content -->
    <div class="container">

        <div class="row">
            

            
            <!--   sidebar.php  dans views/globals --> 
            <?php $this->load->view("globals/sidebar"); ?>
            


            <!-- <p> <?php //var_dump($unProduit); ?> </p> -->

            <div class="col-md-9">

                <div class="thumbnail">
                    
                    <img style="width:450px; height:320px;" class="img-responsive center-block" src="<?=$unProduit->displayImage(); ?>" alt=""> 
                    
                    
                    <div class="caption-full">

                        <h4 class="pull-right"><?php echo $unProduit->prix; ?> €</h4>
                        
                        <h4><a href="<?php site_url('produit/information/'.$unProduit->id);?>"><?=$unProduit->titre; ?></a></h4>
                        
                        <p><?=$unProduit->description; ?></p>

                        <p>Plus d'informations <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                        <p>Want to make these reviews work? Check out
                            <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p>
                    </div>




                    <div class="ratings">

                        <p class="pull-right"><?php echo $statistics->nombre ?> Commentaires</p>
                        <p>Moyenne :
							          <?php for($i = 0 ; $i <=4 ; $i++) : ?>

	                        	<?php if($i < round($statistics->moyenne)) : ?>
	                            	<span class="glyphicon glyphicon-star"></span>

	                            <?php else : ?>
	                                <span class="glyphicon glyphicon-star-empty"></span>
	                    		<?php endif; ?>

	                    	<?php endfor; ?>
	                    	
                        </p>
                    </div>

                </div>



                <div class="well">

                    <?=form_open("panier/ajout"); ?>  
                            <input type="number" placeholder="Quantité" name="nbrProduits">
                            <button type="submit" class="btn btn-primary">Ajouter au panier</button>

                            <input type="hidden" name="idProduit" value="<?php echo $unProduit->id; ?>">
                    		<button type="button" class="btn btn-default">
                            	<span class="glyphicon glyphicon-shopping-cart"></span><a href="<?php echo site_url('panier')?>">Votre panier en cours</a> 
                        	</button></td>
					<?=form_close(); ?>  		<!-- C'est identique  </form>  -->
                    

                    <?php /* 

                            <input type="hidden" name="idProduit" value="<?=$unProduit->id?>">

                    		  <button type="button" class="btn btn-default">


                            	<span class="glyphicon glyphicon-shopping-cart"></span><a href="<?=site_url('panier')?>">Votre panier en cours</a> 
                        	</button></td>

                    <!-- AUTRE METHODE
                    <?php

                        $data=["name"=>"nbrProduits",
                               "type"=>"number",
                               "placeholder"=>"Quantité",
                               "value"=>set_value("1")
                              ];
                        echo form_input($data);        
                    ?>

                    <?php
                        $data=["name"=>"valider",
                               "type"=>"submit", 
                               "placeholder"=>"OK",
                               "class"=>"btn btn-primary",
                               "value"=>set_value("valide"),
                               "content"=>"Ajouter au panier"
                              ];
                        echo form_button($data);       
                    ?>

                    <?php
                        $data=["name"=>"idProduit",
                               "type"=>"hidden",
                               "class"=>"form-control",
                               "value"=>$unProduit->id
                              ];
                        echo form_input($data);        

                    */?>
                </div>



                    ?>
                    -->
                    <?=form_close(); ?>  <!-- C'est identique  </form>  -->

                </div>


                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Votre Commentaire</a>
                    </div>

                    <hr>


                    <?=form_open("produit/information/".$unProduit->id); ?>
                        
                    <?php
                        $data=["name"=>"nomAuteur",
                               "placeholder"=>"Votre Nom",
                               "class"=>"form-control",
                               "value"=>set_value("auteur")
                              ];
                        echo form_input($data);        
                    ?>

                    <?php 
                        echo form_error("nomAuteur"); 
                    ?> 

                    <?php
                        $data=["name"=>"note",
                               "placeholder"=>"Votre Note",
                               "class"=>"form-control",
                               "value"=>set_value("5")
                              ];
                        echo form_input($data);        
                    ?>
                    <?php echo form_error("note"); ?> 

                    
                    <?php
                        $data=["name"=>"commentaire",
                               "placeholder"=>"Votre commentaire",
                               "class"=>"form-control",
                               "value"=>set_value("Aucun commentaire")
                              ];
                        echo form_textarea($data);        
                    ?>
                    <?php echo form_error("commentaire"); ?>   


                    <?php
                        $data=["name"=>"valider",
                               "type"=>"submit", 
                               "placeholder"=>"OK",
                               "class"=>"btn btn-primary",
                               "value"=>set_value("valide"),
                               "content"=>"valider"
                              ];
                        echo form_button($data);        
                    ?>
                    
                    <!-- <?php //echo validation_errors(); ?>  -->


                    
                    <?=$this->session->flashdata("success_com"); ?>     <!-- Affiche une message rapide -->
   

                    <?php foreach ($allComments as $key => $oneComment) : ?>
                    
                        <div class="row">
                            <div class="col-md-12">

                                <?php for($i = 0 ; $i <=4 ; $i++) : ?>

                                	<?php if($i < $oneComment->note) : ?>
	                                	<span class="glyphicon glyphicon-star"></span>

	                                <?php else : ?>
	                                    <span class="glyphicon glyphicon-star-empty"></span>
                            		<?php endif; ?>

                            	<?php endfor; ?>

                                <?php echo $oneComment->auteur?>

                                <span class="pull-right"> <?=$oneComment->datecommentaire?> </span>
                                <p><?=$oneComment->contenu?></p>
                            </div>
                        </div>
                        <hr>

                    <?php endforeach ; ?>
                
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

<!--   informationHeader.php  dans views/globals --> 

<?php //$this->load->view("globals/footer"); ?> 
