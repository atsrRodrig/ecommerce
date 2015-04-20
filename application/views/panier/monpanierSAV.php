
<!--   informationHeader.php  dans views/globals --> 

<?php $this->load->view("globals/header"); ?>



<div class="container">
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
                    <?php if (!empty($allProduits)) : ?>

                        <?php  $sousTotal = 0.0 ; $montantTva = 0.0 ; ?>

                        <?php foreach ($allProduits as $key => $unProduit) : ?>
                            <tr>
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="<?=site_url('produit/information/'.$unProduit->id); ?>"><img class="media-object" src="<?=$unProduit->displayImage(); ?>" style="width: 62px; height: 55px;"> </a>
                                        
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="<?=site_url('produit/information/'.$unProduit->id); ?>"><?=$unProduit->titre; ?></a></h4>
                                            <h5 class="media-heading"> by <a href="#">Brand name</a></h5>
                                            <span>Status: </span><span class="text-success"><strong>En Stock</strong></span>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?=$panier[$unProduit->id]; ?>">
                                </td>
                                
                                <td class="col-sm-1 col-md-1 text-center"><strong><?=number_format($unProduit->prix,2,'.',''); ?>€</strong></td>
                                <td class="col-sm-1 col-md-1 text-center"><strong><?=number_format(($unProduit->prix*$panier[$unProduit->id]),2,'.',''); ?>€</strong></td>
                                
                               
                                <td class="col-sm-1 col-md-1">
                                	<button type="button" class="btn btn-danger">
                                    	<span class="glyphicon glyphicon-remove"><a href="<?=site_url('panier/action/supprimer/'.$unProduit->id)?>">Supprimer</a> </span>
                                	</button>
                                </td>
                            
                            </tr>

                            <?php $sousTotal += ($unProduit->prix * $panier[$unProduit->id]);  ?>

                        <?php endforeach; ?>



                        <?php   $montantTva += ($sousTotal * 0.2); ?>

                    <?php else : ?>
                        <h2 style="color:red;">Aucun produit dans le panier...</h2>
                    <?php endif; ?>   

    
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
                        <td class="text-right"><h5><strong><?=number_format($sousTotal,2,'.',' ');?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>TVA</h5></td>
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

<?php $this->load->view("globals/footer"); ?>
