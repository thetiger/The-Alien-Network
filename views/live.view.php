<div class="container-fluid col-xs-12 col-md-12 test">

    <div class="row">

        <div class="container test whitetext">

            <div class="row">


                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-16by9 videohome">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php stories::getliveselectedvideo(); ?>"></iframe>
                    </div>
                </div>

                <div class="col-md-6 whitetext blackbg">
                    <h3 class="yellowtext"><span class="glyphicon glyphicon-star"></span> Selected Story</h3>
                    <hr>
                    <?php echo stories::getliveselected(); ?>

                </div>

                <div class="col-lg-12 whitetext">

                    <?php echo stories::getstoriesforlive('breaking'); ?>

                    <?php echo stories::getstoriesforlive('aliens'); ?>

                    <?php echo stories::getstoriesforlive('paranormal'); ?>

                    <?php echo stories::getstoriesforindex('greyarea'); ?>


                </div>


            </div>

        </div>

    </div>

</div>