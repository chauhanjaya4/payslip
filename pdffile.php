
<body  style="background:url('images/trf.jpg'); background-color:rgba(0,0,0,0.7);">


<div class="header-right">
				<div class="profile_details_left">

					<div class="profile_details">
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img" style="padding:10px;">
										<span class="prfil-img"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

<div class="download-list__wrap">
<div><img src='images/1.png' style='float:right;margin:50px;padding:10px auto;height:5%;width:5%;'	></div>
      <div><img src='images/trfltd-logo.png' style='float:left;margin:50px;padding:10px auto;height:10%;width:10%;'	></div>
  <ul class="download-list">
   
    

    <li class="item">
      <div class="icon">
      
      
      </div>
      <div class="src">
       
      
      </div>
      
      <div class="btn">
      
     <?php
      include'header.php';
		include("config.php");

    

          
        
		$my=$_SESSION['unm']; 		
    	$file_name = $_POST['select_1'].$_POST['select_2'].str_pad($my,8,"0",STR_PAD_LEFT).'.pdf';
    	$path= 'uploads/'.$file_name;
      

		if (file_exists($path)) {
   		

      echo"<div class='btn'><img src='pdf.png'></div><div class='btn'><a href='$path' target='_blank'>View Payslip</a>
      <a href='pdf_download.php?path=$path'>Download Payslip</a></div>	<a href='payslip.php' class='btn btn-success text-white'style='margin:20px;background-color:#112476;'>Back To Home</a></li>  ";
    
    }

    else{
      echo "<script> location.href='sorry.php'; </script>";
    }
   

  
    
  

  
    

  
    
    ?>





<script>
  const countChecked = function() {
  let n = $( "input:checked" ).length;
  if(n == 0) {
    $('.button-area').removeClass('show');
  } else {
    $('.button-area').addClass('show');
    $( ".dl-all-btn" ).text( "Download " + n + (n === 1 ? " file" : " files"));
  }
};

$( "input[type=checkbox]" ).on( "click", function(){

  if( $(this).is(':checked') ) {
    countChecked();
  } else {
    countChecked();
  }
});

/*$('.js-clear-btn').on( 'click', function( e ) {
  $( "input:checked" ).prop('checked', false);
  $('.button-area').removeClass('show');
  countChecked();
  e.preventDefault();
});*/
  
  </script>
  <script src="js/bootstrap.js"></script>
	<script src="js/proton.js"></script>
</body>
</html> 



