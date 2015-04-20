
<<<<<<< HEAD
<!--  informationHeader.php  dans views/globals --> 

<?php //$this->load->view("globals/header"); ?> 


<div class="container">

=======
<!--   informationHeader.php  dans views/globals --> 

<?php $this->load->view("globals/header"); ?>



<div class="container">
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
    <div class="row">

        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th class="text-center">Prix</th>
                        <th class="text-center">Total HT</th>
                        <th> </th>
                    </tr>
                </thead>
                
                <tbody>
<<<<<<< HEAD
                	<?php $sousTotal = 0.0; $montantTva = 0.0 ; ?>
                    
                    <?php if (!empty($allProduits)) : ?>

=======
                    <?php if (!empty($allProduits)) : ?>

                        <?php  $sousTotal = 0.0 ; $montantTva = 0.0 ; ?>

>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
                        <?php foreach ($allProduits as $key => $unProduit) : ?>
                            <tr>
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
<<<<<<< HEAD

=======
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
                                        <a class="thumbnail pull-left" href="<?=site_url('produit/information/'.$unProduit->id); ?>"><img class="media-object" src="<?=$unProduit->displayImage(); ?>" style="width: 62px; height: 55px;"> </a>
                                        
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="<?=site_url('produit/information/'.$unProduit->id); ?>"><?=$unProduit->titre; ?></a></h4>
                                            <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                            <span>Status: </span><span class="text-success"><strong>En Stock</strong></span>
                                        </div>
                                    </div>
                                </td>
                                

                                <!-- quantité -->

                                <td class="glyphicon col-sm-1 col-md-1" style="text-align:center;">
<<<<<<< HEAD
                              
                                    <input type="number" class="glyphicon form-control" id="nbrProduit" value="<?=$panier[$unProduit->id]; ?>" href="<?=site_url('panier/action/ajouter/'.$unProduit->id); ?>">
                              
=======
                                    <input type="number" class="glyphicon form-control" id="nbrProduit" value="<?=$panier[$unProduit->id];?>" href="<?=site_url('panier/action/ajouter/'.$unProduit->id);?>">
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
                                    <div class="row glyphicon">
                                        <a href="<?=site_url('panier/action/ajouter/'.$unProduit->id);?>"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
                                        <a href="<?=site_url('panier/action/enlever/'.$unProduit->id);?>"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                                    </div>
                                </td>
                                
<<<<<<< HEAD
                                					<!-- formatPrix est defini dans notre helper "monsuper_helper.php"  -->
                                <td class="col-sm-1 col-md-1 text-center"><strong><?=formatPrix($unProduit->prix); ?></strong></td>
=======

                                <td class="col-sm-1 col-md-1 text-center"><strong><?=number_format($unProduit->prix,2,'.',''); ?>€</strong></td>
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
                                <td class="col-sm-1 col-md-1 text-center"><strong><?=number_format(($unProduit->prix*$panier[$unProduit->id]),2,'.',''); ?>€</strong></td>
                                
                               
                                <td class="col-sm-1 col-md-1">
                                	<button type="button" class="btn btn-danger">
                                    	<span class="glyphicon glyphicon-remove"><a href="<?=site_url('panier/action/supprimer/'.$unProduit->id)?>">Supprimer</a> </span>
<<<<<<< HEAD
=======
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?=$panier[$unProduit->id]; ?>">
                                </td>
                                
                                <td class="col-sm-1 col-md-1 text-center"><strong><?=number_format($unProduit->prix,2,'.',''); ?>€</strong></td>
                                <td class="col-sm-1 col-md-1 text-center"><strong><?=number_format(($unProduit->prix*$panier[$unProduit->id]),2,'.',''); ?>€</strong></td>
                                
                                <td class="col-sm-1 col-md-1">
                                	<button type="button" class="btn btn-danger">
                                    	<span class="glyphicon glyphicon-remove"></span> Supprimer
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
                                	</button>
                                </td>
                            </tr>

                            <?php $sousTotal += ($unProduit->prix * $panier[$unProduit->id]);  ?>
                            
                        <?php endforeach; ?>

<<<<<<< HEAD
                        <?php $montantTva += ($sousTotal * 0.2);  ?>
=======

                        <?php   $montantTva += ($sousTotal * 0.2);  ?>

                        
       
                            <?php $sousTotal += ($unProduit->prix*$panier[$unProduit->id]);  ?>

                        <?php endforeach; ?>

                        <?php   $montantTva += ($sousTotal * 0.2); ?>
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527

                    <?php else : ?>
                        <h2 style="color:red;">Aucun produit dans le panier...</h2>
                    <?php endif; ?>   

<<<<<<< HEAD
   
=======
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
                    <!--
                    <tr>
                        <td class="col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Product name</a></h4>
                                <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                <span>Status: </span><span class="text-warning"><strong>Leaves warehouse in 2 - 3 weeks</strong></span>
                            </div>
                        </div></td>
                        <td class="col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="2">
                        </td>
                        <td class="col-md-1 text-center"><strong>$4.99</strong></td>
                        <td class="col-md-1 text-center"><strong>$9.98</strong></td>
                        <td class="col-md-1">
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                	-->

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Sous total HT</h5></td>
<<<<<<< HEAD
                        <td class="text-right"><h5><strong><?=formatPrix($sousTotal);?></strong></h5></td> 
                        <!--<td class="text-right"><h5><strong><?=number_format(($sousTotal),2,'.',' ');?></strong></h5></td>-->
                    </tr>

=======
                        <td class="text-right"><h5><strong><?=formatPrix($sousTotal);?></strong></h5></td>
                        <td class="text-right"><h5><strong><?=number_format($sousTotal,2,'.',' ');?></strong></h5></td>
                    </tr>
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>TVA</h5></td>
                        <td class="text-right"><h5><strong><?=formatPrix($montantTva); ?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total à payer</h3></td>
                        <!--<td class="text-right"><h3><strong><?=number_format(($sousTotal+$montantTva),2,'.',' ');?></strong></h3></td>-->
<<<<<<< HEAD
                        <td class="text-right"><h3><strong><?=formatPrix($sousTotal+$montantTva);?></strong></h3></td>
                    </tr>

                    <tr>
                        <td>
                        	

                            <?php
                                $message = $this->session->flashdata("success_com");
                                if($message) :

                                ?>  <!-- affiche le message s'il n'est pas vide -->
                                <div class="alert alert-success">
                                    <?= $message; ?>     <!-- Affiche un message rapide -->
                                </div>
                            <?php endif; ?>   



                        </td>
                        <td>   </td>
                        <td>   </td>
=======
                        <td class="text-right"><h3><strong><?=formatPrix($sousTotal+$montantTva);?></strong></h3></td>-->
                    </tr>

                    <tr>
                        <td><?php if(!empty($this->session->flashdata("success_com"))) : ?>                 <!-- affiche le message s'il n'est pas vide -->
                                <div class="alert alert-success">
                                    <?=$this->session->flashdata("success_com"); ?>     <!-- Affiche une message rapide -->
                                </div>
                            <?php endif; ?>    </td>
                        <td>   </td>
                        <td>   </td>
                        <td class="text-right"><h5><strong><?=number_format($montantTva,2,'.',' ');?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>,
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total à payer</h3></td>
                        <td class="text-right"><h3><strong><?=number_format(($sousTotal+$montantTva),2,'.',' ');?></strong></h3></td>
                    </tr>

                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span><a href="<?=site_url('main')?>">Continuer vos achats</a> 
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Règlement <span class="glyphicon glyphicon-play"></span>
                        </button></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!--   informationHeader.php  dans views/globals --> 

<<<<<<< HEAD
<?php //$this->load->view("globals/footer"); ?> 
=======
<?php $this->load->view("globals/footer"); ?>
>>>>>>> 643d5cfb893ccc3d29c2392ae1ebd16eb4b66527
