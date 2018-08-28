<!doctype html>
<html lang="en">
<?php $theme = 'alien'; ?>
<head>
  <meta charset="utf-8">
  <meta property="og:image" content="https://scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/11079055_438712539629367_5195528268420482768_n.png?oh=54ca8a0352cd05d52092879d519ba04c&oe=5A7F6A00"/>
  <?php
  if(checkthis() == true){
  ?>
      <title><?php echo config::$sitename; ?> - <?php echo lib::get('cat',false,false,false); ?> - <?php echo lib::get('view',false,false,false); ?>
    </title>
    <meta name="description" content="<?php echo stories::getstorydesc(lib::get('uniquekey',false,false,false)); ?>">
    <meta name="author" content="<?php echo stories::getstoryusername(lib::get('uniquekey',false,false,false)); ?>">
  <?php
  }
  else
  {
  ?>
  <title><?php echo config::$sitename; ?> - Home</title>
  <meta name="description" content="Welcome to The Alien Network, a conspiracy theory website, we have different topics and encourage active communication!">
  <?php
  }
  ?>
  <meta name="author" content="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  <link rel="stylesheet" type="text/css" href="<?php if(checkthis() == true){?>theme.php?theme=alien2 <?php } else {?>theme.php?theme=alien<?php   }?>" />
  <link rel="icon" type="image/x-icon" href="https://www.thealiennetwork.co.uk/favicon.ico" />
  <script type="text/javascript">
    $(function () {
      $('#myCarousel.slide').carousel({
        interval: 0,
        pause: "hover"
      });

      $('input').focus(function () {
        $("#myCarousel").carousel('pause');
      }).blur(function () {
        $("#myCarousel").carousel('cycle');
      });
    });
  </script>
  <style>
<?php if(checkthis() == true){?><?php $theme = 'alien2'; ?> <?php
 include('theme.php'); ?> <?php } else {?><?php $theme = 'alien'; include('theme.php'); ?><?php   }?>
  </style>
  <script>
    (function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-69830786-1', 'auto');
    ga('send', 'pageview');
  </script>
  <div id="fb-root"></div>
  <script>
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-8636140955660357",
      enable_page_level_ads: true
    });
  </script>
</head>