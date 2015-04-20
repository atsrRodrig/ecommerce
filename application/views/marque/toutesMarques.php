<!--   informationHeader.php  dans views/globals --> 

<?php //$this->load->view("globals/header"); ?> 



    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">

          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          
          <div class="jumbotron">
            <h1>Les familles </h1>
            <p>Présentation des produits disponibles</p>
          </div>
          
          <div class="row">
             
            <?php foreach ($allMarques as $key => $uneMarque) : ?> 

              <div class="col-xs-6 col-lg-4">
              
                <h2><?= $uneMarque->nom; ?></h2>
                <p><?= $uneMarque->description; ?> </p>
                
                <p><a class="btn btn-default" href="<?=site_url('produit/marque/'.$uneMarque->id)?>" role="button">Voir les produits &raquo;</a></p>
              
              </div>    <!--/.col-xs-6.col-lg-4-->
            
             <?php endforeach ; ?>
            
            </div>    <!--/.col-xs-6.col-lg-4-->
          
          </div>      <!--/row-->

        </div>        <!--/.col-xs-12.col-sm-9-->


        <!-- sidebar.php  dans views/globals -->
       

      </div>    <!--/row-->

 
    </div>      <!--/.container-->

<!-- informationHeader.php  dans views/globals--> 

  
<?php //$this->load->view("globals/footer"); ?>  
