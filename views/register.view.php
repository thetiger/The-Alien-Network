<div class="container-fluid col-xs-12 col-md-12 test">

    <div class="row">

        <div class="container test whitetext">

            <div class="row">

<div class="col-md-6 whitetext stories">
<h4><span class="glyphicon glyphicon-plus"></span> Registration</h4>
<p>Registering with us is easy, all we require is that you follow all the details as provided.</p>
<form role="form" method="post" action="register">
<fieldset class="form-group">
    <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
    <input required type="text" class="form-control" id="username" name="username" placeholder="Username">
    <?php if(!empty($errName)){echo "<p class='text-danger'>$errName</p>";}?>
    <label for="Password"><span class="glyphicon glyphicon-pencil"></span> Password</label>
    <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
    <?php if(!empty($errPass)){echo "<p class='text-danger'>$errPass</p>";}?>
    <label for="email"><span class="glyphicon glyphicon-info-sign"></span> Email</label>
    <input required type="email" class="form-control" id="email" name="email" placeholder="Your Email">
    <?php if(!empty($errEmail)){echo "<p class='text-danger'>$errEmail</p>";}?>
    <label for="gender">Gender</label>
    <select required name="gender" class="form-control" id="gender">
      <option value="m">Male</option>
      <option value="f">Female</option>
    </select>
    <?php if(!empty($errGender)){echo "<p class='text-danger'>$errGender</p>";}?>
    <button class="btn btn-primary backgroundnavcolor" style="margin-top:5px;" id="submitreg" name="submitreg" type="submit" value="Send">Login</button>
  </fieldset>
  </form>
</div>

<div class="col-md-6 whitetext stories pull-right">
<p>Benefits of being a user</p>
<p><span class="glyphicon glyphicon-user" style="font-size:15.2pt"></span> Your very own Alien Network Profile</p>
<p><span class="glyphicon glyphicon-th-list" style="font-size:15.2pt"></span> Up the minute stories developing</p>
<p><span class="glyphicon glyphicon-envelope" style="font-size:15.2pt"></span> Site-wide messaging facilities</p>
<p><span class="glyphicon glyphicon-signal" style="font-size:15.2pt"></span> Watch all topics in real-time</p>
<p><span class="glyphicon glyphicon-star" style="font-size:15.2pt"></span> Mobile responsiveness</p>
<p><span class="glyphicon glyphicon-map-marker" style="font-size:15.2pt"></span> Quick and easily share to all major Social Networks</p>
<p><span class="glyphicon glyphicon-random" style="font-size:15.2pt"></span> Partake in major site-wide topics</p>
<p><span class="glyphicon glyphicon-globe" style="font-size:15.2pt"></span> Discuss topics in a world-wide environment</p>
</div>

</div>
</div>


</div>
</div>


</div>