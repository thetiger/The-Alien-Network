<div class="containerfluid col-xs-12 col-md-12 maincontent">

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
                                <?php
                                if(!isset($switch)){?>
                                    <li class="active"><a href="home">Home</a> <span class="sr-only">(current)</span></li>
                                    <li><a href="live">Live</a></li>
                                    <li><a href="top">Top 100</a></li>
                                    <li><a href="breaking">Breaking</a></li>
                                    <li><a href="unconfirmed">Unconfirmed</a></li>
                                    <li><a href="users">Users</a></li>
                                    <?php if(isset($_SESSION['username']) && isset($_SESSION['hash'])){ ?>
                                    <li><a href="create">Create</a></li>
                                    <li><a href="profile">Profile</a></li>
                                    <li><a href="logout">Logout</a></li>
                                    <?php } ?>
                                    <li><a href="about">About</a></li>
                                    <?php if(!isset($_SESSION['username']) && !isset($_SESSION['hash'])){ ?>
                                    <li><a href="register">Register</a></li>
                                    <?php
                                                                              }
           ?>
                                        <li><a href="videos">Videos</a></li>
                                        <?php
                                }
                                ?>
                                <?php
                                if(isset($switch)){?>
                                    <li<?php if($switch == 'home'){?> class="active" <?php }?>><a href="home">Home</a>  <span class="sr-only">(current)</span></li>
                                    <li<?php if($switch == 'live'){?> class="active" <?php }?>><a href="live">Live</a> <span class="sr-only">(current)</span></li>
                                    <li<?php if($switch == 'top'){?> class="active" <?php }?>><a href="top">Top 100</a> <span class="sr-only">(current)</span></li>
                                    <li<?php if($switch == 'breaking'){?> class="active" <?php }?>><a href="breaking">Breaking</a> <span class="sr-only">(current)</span></li>
                                    <li<?php if($switch == 'unconfirmed'){?> class="active" <?php }?>><a href="unconfirmed">Unconfirmed</a> <span class="sr-only">(current)</span></li>
                                    <li<?php if($switch == 'users'){?> class="active" <?php }?>><a href="users">Users</a> <span class="sr-only">(current)</span></li>
                                    <?php if(isset($_SESSION['username']) && isset($_SESSION['hash'])){ ?>
                                    <li<?php if($switch == 'create'){?> class="active" <?php }?>><a href="create">Create</a> <span class="sr-only">(current)</span></li>
                                    <li<?php if($switch == 'profile'){?> class="active" <?php }?>><a href="profile">Profile</a> <span class="sr-only">(current)</span></li>
                                    <li<?php if($switch == 'logout'){?> class="active" <?php }?>><a href="live">Live</a> <span class="sr-only">(current)</span></li>
                                    <?php } ?>
                                    <li<?php if($switch == 'about'){?> class="active" <?php }?>><a href="about">About</a> <span class="sr-only">(current)</span></li>
                                    <?php if(!isset($_SESSION['username']) && !isset($_SESSION['hash'])){ ?>
                                        <li<?php if($switch == 'register'){?> class="active" <?php }?>><a href="register">Register</a> <span class="sr-only">(current)</span></li>
                                    <?php
                                                                              }
           ?>
                                        <li<?php if($switch == 'videos'){?> class="active" <?php }?>><a href="videos">Videos</a> <span class="sr-only">(current)</span></li>
                                        <?php
                                }
                                ?>
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