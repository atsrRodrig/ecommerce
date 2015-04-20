

<div class="row " style="padding-top:40px;">
    <h3 class="text-center">ESPACE DE DISCUSSION </h3>
    <br /><br />
    <div class="col-md-8">
        <div class="panel panel-info">

            <div class="panel-heading">
                Historique des récentes discussions
            </div>

           
            <div class="panel-body">

                <ul id="chatMessages" class="media-list">
            
                    <?php foreach($allChats as $key => $oneChat) :?>
                        
                        <li class="media">
                            <div class="media-body">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="site_url('assets/images/peche.jpg')" />
                                    </a>

                                    <div class="media-body" >
                                       <?=$oneChat->contenu; ?>
                                        <br />
                                            <small class="text-muted"><?=$oneChat->auteur.'| '.$oneChat->date_message; ?></small>
                                        <hr />
                                    </div>
                                </div>

                            </div>
                        </li>
                    <?php endforeach ; ?>    


                    <!-- 
                    <li class="media">
                        <div class="media-body">

                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle " src="assets/img/user.gif" />
                                </a>
                                <div class="media-body" >
                                    Donec sit amet ligula enim. Duis vel condimentum massa.
              
                                    Donec sit amet ligula enim. Duis vel condimentum massa.Donec sit amet ligula enim. 
                                    Duis vel condimentum massa.
                                    Donec sit amet ligula enim. Duis vel condimentum massa.
                                    <br />
                                    <small class="text-muted">Jhon Rexa | 23rd June at 5:00pm</small>
                                    <hr />
                                </div>
                            </div>

                        </div>
                    </li>
                    -->

                </ul>
            </div>


            <?php
               
                $message = $this->session->flashdata("success_ins");
                
                if(!empty($message)) :
            ?>      <!-- affiche le message s'il n'est pas vide -->
                <div class="alert alert-success">
                    <?= $message; ?>     <!-- Affiche un message rapide -->
                </div>
            <?php endif; ?>   



            <div class="panel-footer">
                
                <div id="divChat">        <!--  pour le JQuery , on cree une div sup pour recuperer le ID  --> 
                
                <?=form_create("chat",          //  c'est l'URL donc mon controlleur Chat.php
                    [
                    "auteur"=>"text",
                    "contenu"=>"textarea",
                    "valider"=>"submit"
                   ]); 
                ?>
                
                </div>
            </div>

        </div>
    </div>



    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
               Utilisateur(s) récents
            </div>
            
            <div class="panel-body">
                
                <ul class="media-list">

                    <?php foreach($allUsers as $key => $oneUser) :?>
                   
                    <li class="media">
                        <div class="media-body">

                            <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle" style="max-height:40px;" src="site_url('assets/images/peche.jpg')" />
                                </a>
                                <div class="media-body" >
                                    <h5><?=$oneUser->auteur.' | '.$oneUser->date_message; ?></h5>
                                    <small class="text-muted">Active From 3 hours</small>
                                </div>
                            </div>
                        </div>
                    </li>

                    <?php endforeach ; ?>    

                </ul>
            

            </div>

        </div>
    </div>
</div>