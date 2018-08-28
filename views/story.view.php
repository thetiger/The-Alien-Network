<div class="container-fluid col-xs-12 col-md-12 test">

    <div class="row">

        <div class="container test whitetext">

            <div class="row">

                <!-- Start of Story-->

                <div class="col-lg-12 text-center yellowtext">
                    <h3>
                        <?php echo lib::get('view',false,false,false); ?>
                    </h3>
                </div>

                <div class="col-lg-12">
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9 videostory">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo stories::grabvideoforfirst(lib::get('uniquekey',false,false,false)); ?>"></iframe>
                        </div>
                    </div>

                    <div class="col-md-6 whitetext blackbg">
                        <h4 class="textindent redtext">
                            <?php echo lib::get('cat',false,false,false); ?>
                        </h4>
                        <?php echo stories::grabpostforfirst(lib::get('uniquekey',false,false,false)); ?>
                        <h4 class="bluetext text-center">
                            <?php echo stories::grabusernameforstory(lib::get('uniquekey',false,false,false)); ?>
                        </h4>

                    </div>

                </div>

                <div class="col-lg-12">
                    <div class="col-md-6">
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <hr>
                    </div>
                </div>

                <div class="col-lg-12 addtoanybuttons">

                    <!-- AddToAny BEGIN -->
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_dd" href="https://www.addtoany.com/share?linkurl=<?php echo " https://
                            ".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; ?>&amp;linkname=<?php echo config::$sitename; ?> - <?php echo lib::get('view',false,false,false); ?>"></a>
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_google_plus"></a>
                    </div>
                    <script>
                        var a2a_config = a2a_config || {};
                        a2a_config.linkname =
                            "<?php echo config::$sitename; ?> -  <?php echo lib::get('view',false,false,false); ?>";
                        a2a_config.linkurl = "<?php echo "
                        http: //".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; ?>";
                            a2a_config.num_services = 4;
                    </script>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                    <!-- AddToAny END -->

                </div>
                <?php
    if(isset($_SESSION['username'])){
        echo '<div class="col-lg-12 addtoanybuttons">
<a href="../../../reply/'.lib::get('uniquekey',false,false,false).'" class="btn btn-primary backgroundnavcolor" role="button">Reply</a>
</div>';
                                                                              }
           ?>

                    <div class="col-lg-12 whitetext bottommargin">

                        <div id="myCarousel" class="carousel slide sliderbg" data-ride="carousel" data-interval="false">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">

                                <?php echo stories::grabpostforstory(lib::get('uniquekey',false,false,false)); ?>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

                        </div>


                    </div>

            </div>

        </div>

    </div>

</div>