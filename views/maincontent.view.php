<div class="container-fluid col-xs-12 col-md-12 maincontent">

    <div class="row">

        <div class="container">

            <div class="row">


                <div class="col-md-6">

                    <div class="embed-responsive embed-responsive-16by9 videohome">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EKy_493r0cY"></iframe>
                    </div>

                </div>

                <div class="col-md-6 whitetext stories">
                    <h3><span class="glyphicon glyphicon-star"></span> Pinned Topics</h3>
                    <hr>
                    <?php echo stories::front4pinned(); ?>

                </div>

                <div class="col-lg-12">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- resp -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-8636140955660357" data-ad-slot="4688500621" data-ad-format="link"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <div class="col-md-12">

                    <div id="myCarousel" class="carousel slide sliderbg" data-ride="carousel">

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/AYBPkabMCvs"></iframe>
                                </div>
                            </div>

                            <div class="item">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nLZuPB3uSVw"></iframe>
                                </div>
                            </div>

                            <div class="item">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6R-sHXG30h0"></iframe>
                                </div>
                            </div>

                            <div class="item">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kd3t6Gnbd2U"></iframe>
                                </div>
                            </div>
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

                <div class="col-md-3 whitetext stories">
                    <h3><span class="glyphicon glyphicon-star-empty"></span> Breaking</h3>
                    <hr>
                    <?php echo stories::getstoriesforindex('breaking'); ?>

                </div>
                <div class="col-md-3 whitetext stories">
                    <h3><span class="glyphicon glyphicon-star-empty"></span> Aliens</h3>
                    <hr>
                    <?php echo stories::getstoriesforindex('aliens'); ?>

                </div>

                <div class="col-md-3 whitetext stories">
                    <h3><span class="glyphicon glyphicon-star-empty"></span> Paranormal</h3>
                    <hr>
                    <?php echo stories::getstoriesforindex('paranormal'); ?>

                </div>

                <div class="col-md-3 whitetext stories">
                    <h3><span class="glyphicon glyphicon-star-empty"></span> Taboo</h3>
                    <hr>
                    <?php echo stories::getstoriesforindex('greyarea'); ?>

                </div>

            </div>
        </div>

    </div>


</div>

</div>

</div>

</div>

</div>