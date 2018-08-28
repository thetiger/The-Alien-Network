<div class="container-fluid col-xs-12 col-md-12 test">

    <div class="row">

        <div class="container test whitetext">

            <div class="row">

                <div class="col-md-4 logotext">
                    <h4>&nbsp;<span class="glyphicon glyphicon-flag"></span> The Alien Network</h4>
                </div>

                <?php if(!isset($_SESSION['username']) && !isset($_SESSION['hash']) && !isset($_SESSION['id'])){?>
                <div class="col-md-8 navbutton1">

                    <form role="form" method="post" action="<?php if(checkthis() == true){?> ../../../home<?php } ?><?php if(checkthis() == false){?>home<?php } ?>" class="form-inline">
                        <fieldset class="form-group">
                            <label for="username">Username:</label>
                            <input required type="text" class="form-control loginbutton" id="username" name="username" placeholder="Username">
                            <?php if(!empty($errName)){echo "<p class='text-danger'>$errPass</p>";}?>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="password">Password:</label>
                            <input required  type="password" class="form-control loginbutton" id="password" name="password" placeholder="Password">
                            <?php if(!empty($errPass)){echo "<p class='text-danger'>$errPass</p>";}?>
                        </fieldset>
                        <button type="submit" class="btn btn-primary backgroundnavcolor" name="login">Login</button>
                    </form>

                </div>
                <?php
                                                                                             }
    elseif(isset($_SESSION['username']) && isset($_SESSION['hash']) && isset($_SESSION['id']))
    {
        
        ?>
                    <div class="col-md-4 navbutton1">


                    </div>
                    <div class="col-md-2 navbutton1">

                    </div>
                    <div class="col-md-2 navbutton1">
                        &nbsp;<span class="glyphicon glyphicon-user"></span> Hello,
                        <?php echo $_SESSION['username']; ?><br> &nbsp;
                        <span class="glyphicon glyphicon-envelope"></span>
                        <?php echo accounts::getusermessages(); ?>
                    </div>
                    <?php
    }
    ?>
            </div>

        </div>

    </div>


</div>