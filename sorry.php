<html class="error">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

body {
  background: rgba(155, 155, 155, 0.3);
  font-family: "Roboto";
}

ul li a {
  margin-left: 10px;
  font-size: 13px;
}

.navbar-brand {
  font-size: 15px;
  font-weight: 700;
  text-transform: uppercase;
}

.floofy {
  content: url("https://cdn1.iconfinder.com/data/icons/Akisame_iconset_by_MagcWindw/512/Ak_Leaf.png");
  width: 130px;
}

span.title {
  font-size: 28px;
}

.typed-cursor {
  font-size: 28px;
}

@media (max-width: 768px) {
  ul li a {
    text-align: center;
  }

  .fa-home:after {
    font-family: "Roboto";
    font-size: 13px;
    margin-left: 5px;
    content: "Home";
  }

  .fa-question:after {
    font-family: "Roboto";
    font-size: 13px;
    margin-left: 5px;
    content: "Help";
  }

  .fa-envelope:after {
    font-family: "Roboto";
    font-size: 13px;
    margin-left: 5px;
    content: "Contact us";
  }

  .error-img {
    text-align: center;
    margin: 0 auto !important;
    float: none;
  }
}
.typed-cursor {
  opacity: 1;
  -webkit-animation: blink 0.7s infinite;
  -moz-animation: blink 0.7s infinite;
  animation: blink 0.7s infinite;
}

@keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-moz-keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.container {
  display: table;
}

.row {
  height: 350px;
  display: table-row;
}

.vertical-center {
  display: table-cell;
  float: none;
  vertical-align: middle;
}

.error-img {
  text-align: right;
  margin: 0 auto !important;
}

.error-desc {
  vertical-align: middle;
  height: 161px;
}
    </style>
    </head>
    <body>
<div class="container">
    <div class="row vertical-center">
         <div class="col-xs-4 col-sm-4 col-lg-4 col-md-4 error-img">
    <img class="floofy">
    </div>
  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 error-desc">
                <span class="title"></span>
                <p  style="padding:10px;font-size:20px;">Sorry! No such File found.<br />
     Please Contact Your Admin</p>
     <div><button class="btn btn-primary"> <a href="payslip.php" style="color:#f1f1f1;padding:10px;font-size:20px;"><i class="fa fa-home" style="color:#f1f1f1;margin:10px;">Back</i></a>  </button> </div>
     
            </div>
            
  </div>
  </div>
  
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
           
          
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           
               
                 
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
  
</body>
<script>

$(function(){
      $(".title").typed({
        strings: ["Woopsie!", "An error occurred. :(<br />"],
        typeSpeed: 40,
        onStringTyped: function() {
          if($(".title:contains('An error occurred. :(')").length > 0) {
      $('.typed-cursor').hide();
    }
        },
      });

  });


</script>
</html>