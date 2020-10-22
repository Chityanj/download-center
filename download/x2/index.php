<?php
function getTitle($t){
    $title = basename($t);
    $title = str_replace('_', ' ', $title);//replacing '_' by spaces
    return $title;
}
?>


<html lang="en">
   
   <head>
      <meta http-equiv="Pragma" content="no-cache">
      <meta http-equiv="Expires" content="-1">
      <meta charset="UTF-8">
	<title><?php echo getTitle(__DIR__); ?></title>
      <link rel="icon" href="_media/favicon.ico">
      <meta name="google-site-verification" content="6t0LoIeFksrjF4c9sqUEsVXiQNxLp2hgoqo0KryT-sE">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="keywords" content="revengeos,revengeos downloads,revengeos for xiaomi,xiaomi,custom rom,xda revengeos,xda,download revngeos,ros,android,aosp">
      <meta name="description" content="Download Portal for RevengeOS.">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="../../js/downloadpg.js"></script>
	
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">   
      <link rel="stylesheet" href="../../css/styles.css" title="vue">
      
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      
   </head>
<body>
<section class="cover show">
   <div class="mask"></div>
   <div class="cover-main">
   <div id="devicehead"></div>
   <div class="container-flexible">
      <div class="row justify-content-center">
         <div class="col-sm-3">
            <div id="downimg"></div>
         </div>
         <div class="col-sm-3">Hello<br>hrllo</div>
      </div>
   </div>
   <div class="text-center">

  <button type="button" class="btn btn-info btn aqua-gradient " data-toggle="modal" data-target="#modalYT">Changelog</button>
  <button type="button" class="btn btn-default peach-gradient">XDA</button>
  <button type="button" class="btn btn-secondary btn blue-gradient">Download</button>
<style>
.btn {border-radius: 30px;}
.justify-content-center {
     margin-bottom: 25px!important;
}
.col-sm-3 {
    margin-bottom: 10;
}
</style>
</div>
</section>
	
<script src="../../js/cover.js"></script>
      
      <script></script>
      <div class="progress" style="opacity: 0; width: 0%;"></div>
      
<!--Modal: Name-->
<div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <iframe class="embed-responsive-item" src="https://raw.githubusercontent.com/RevengeOS-Devices/official_devices/r10.0/x2/changelog.txt" allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <span class="mr-4">Spread the word!</span>
        <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
        <!--Twitter-->
        <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
        <!--Google +-->
        <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
        <!--Linkedin-->
        <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
 </div>
   </body>
</html>
