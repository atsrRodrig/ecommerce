

		<div class="col-md-3">

                <p class="lead">Les Catégories</p>
   	
            
            	<?php
                    
                    // on  execute le model <Marque_model ICI car il a été chargé dans l'autoload.php rubrique autoload
                    // sinon la variable $allMarques ne serait pas connue a ce niveau

                    $allCategories = $this->Categorie_model->getCategories();  

                    foreach($allCategories as $key => $uneCategorie) : ?>

					<div class="list-group">
                    	<a href="<?=site_url('categorie/information/'.$uneCategorie->id)?>" class="list-group-item"><?=$uneCategorie->nom ?></a>
                   	</div>
				 <?php endforeach; ?>
			   
        </div>
