
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