<div class="container-fluid col-xs-12 col-md-12 maincontent">

    <div class="row">

        <div class="container">

            <div class="row">


                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="../../../home">Home</a></li>
                                <li><a href="../../../live">Live</a></li>
                                <!--<li><a href="../../../top">Top 100</a></li>-->
                                <!--<li><a href="../../../breaking">Breaking</a></li>-->
                                <!--<li><a href="../../../unconfirmed">Unconfirmed</a></li>-->
                                <!--<li><a href="../../../users">Users</a></li>-->
                                <?php if(isset($_SESSION['username']) && isset($_SESSION['hash']) && isset($_SESSION['id'])){ ?>
                                <li><a href="../../../create">Create</a></li>
                                <!--<li><a href="../../../profile">Profile</a></li>-->
                                <li><a href="../../../logout">Logout</a></li>
                                <?php } ?>
                                <li><a href="../../../about">About</a></li>
                                <?php if($has_session == false){ ?>
                                <li><a href="../../../register">Register</a></li>
                                <?php
                                                                            }
         ?>
                                    <li><a href="../../../videos">Conspiracies</a></li>
                                    <li class="active"><a href="<?php echo $actual_link; ?>">This story <span class="sr-only">(current)</span></a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</div>
</div>