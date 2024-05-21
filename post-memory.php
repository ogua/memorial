<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.13, a.mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <!-- <link rel="shortcut icon" href="assets/images/photo-1495467270795-cf51cd29f1b4.jpeg" type="image/x-icon"> -->
  <meta name="description" content="In Loving Memory OF Alice Groenefelt - Imanuel">
  <title>Memorial Tribute Page</title>
  <link rel="stylesheet" href="assets/css/mobirise2.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/css/jarallax.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/theme.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap&display=swap"></noscript>
  <link rel="stylesheet" href="assets/css/mbr-additional.css" type="text/css">
  

</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu2 cid-udpvBnR36B" once="menu" id="menu-5-udpvBnR36B">
	
	<nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
						<a class="nav-link link text-black display-4" href="index.php">HOME</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link text-yellow display-4" href="#" aria-expanded="false">Leave a memory</a>
					</li></ul>
				
				<!-- <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="#">NEW POST</a></div> -->
			</div>
		</div>
	</nav>
</section>

	

<section data-bs-version="5.1" class="header14 cid-udpvBnVmu6 mbr-parallax-background" id="call-to-action-9-udpvBnVmu6">
    
	<div class="container">
		<div class="row justify-content-center">
			<div class="card col-12 col-md-12 col-lg-10">
				<div class="card-wrapper">
					<div class="card-box align-center">
						<h1 class="card-title mbr-fonts-style mb-4 display-1">
							<strong>Share Your Memory</strong></h1>
						<p class="mbr-text mbr-fonts-style mb-4 display-7">Please post your favorite story and tribute</p>

						<form action="action.php" method="post" id="sharememory" enctype="multipart/form-data">

							<div class="form-group">
								<input type="text" class="form-control" name="fullname" placeholder="Enter Full name" required>
							</div>

							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Enter Email Address">
							</div>

							<div class="form-group">
								<textarea name="message" id="message" class="form-control" placeholder="Enter message"></textarea required>
							</div>

							<div class="form-group">
								<label for="">Attach Video / Image</label>
								<input type="file" name="ivfile" id="ivfile" required>
							</div>


								<input type="submit" value="Share Memory" class="btn btn-success">


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section data-bs-version="5.1" class="footer4 cid-udpvBnXbDq" once="footers" id="footer-4-udpvBnXbDq">

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">© 2024 Alice Groenefelt - Imanuel All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/parallax/jarallax.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/index.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/theme/js/script.js"></script>

  <script src="assets/js/loading_overlay.js"></script>
    <script src="assets/js/sweertalert.js"></script>
    
    <script type="text/javascript">
    $('document').ready(function(){
        
        $(document).on("submit","#sharememory",function(e){
            e.preventDefault();
            
            $.ajax({
                beforeSend: function(){
                    $.LoadingOverlay("show");
                },
                complete: function(){
                    $.LoadingOverlay("hide");
                },
                url: 'action.php',
                type: 'POST',
                contentType: false,
                processData: false,
                cache: false,
                data: new FormData(this),
                success: function(data){ 
                    swal(data,{
                        icon: 'success',
                    });
                    document.getElementById("sharememory").reset();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
            
            
        });
        
    });
    
    </script>
  
  
  
  <input name="animation" type="hidden">
  </body>
</html>