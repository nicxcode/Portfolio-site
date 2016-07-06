<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nick Harbison Portfolio</title>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<script type = "text/javascript">
function redirect(page) {
    setTimeout(function () {
        window.location.href = page;
    }, 5000);
}
</script>
</head>

<body>
<!-- jQuery and bootstrap -->
  <script src="https://code.jquery.com/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/counter.js"></script>
<div class="jumbotron-fluid" id="primary">
<?php
//alert function
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
if (isset($_POST['submit'])) {
  $from = 'Web_Form_Contact';
  $to = 'nickh@nicxcode.com';
  $subject = 'Nicxcode_Contact';
  $c_type = $_POST["c_type"];

if (empty($_POST["c_name"])) {
    $errName = 'Info missing: Name';
  } else {
    $c_name = $_POST["c_name"];
  }

if (empty($_POST["c_email"] )) {
	   $errEmail = 'Please enter a valid email address';
   } else {
     $c_email = $_POST["c_email"];
   }
if (empty($_POST["co_name"])) {
    $errCoName = 'Info missing: Company Name';
  } else {
    $co_name = $_POST["co_name"];
  }
if (empty($_POST["j_desc"])) {
    $errjDesc = 'Info missing: Job Description';
  } else {
    $j_desc = $_POST["j_desc"];
  }

  $body = "From: $c_name\n E-Mail: $c_email\n Type: $c_type\n CoName: $co_name\n Description\n $j_desc";

if (empty($errName) && empty($errEmail) && empty($errCoName) && empty($errjDesc)) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch. This page will redirect in 5 seconds.</div>';
    echo '<script> redirect("../index.html")</script>';
    } else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
} else {
  print '<div class="alert alert-danger">'.$errName.'<br />'.$errCoName.'<br />'.$errjDesc.'<br />'.$errMail.'</div>'; //phpAlert( "$errName\n $errEmail\n  $errCoName\n $errjDesc" );
  }
}
  echo "$result";

?>
<div class="jumbotron-fluid" id="mainHd">
  <div class="container">
    <div id="topbar" class="row">
    <!--  <div class="col-md-6">
         Not sure if I want to add an image, heashot maybe?
        <img src="http://placehold.it/250x200" alt="nick harbison logo" />
      -->
      </div>
      <div class="col-md-6 text-right">
          <h1>Nick Harbison</h1>
          <h5>Front-End Developer</h5>
          <h2>SITE UNDER CONSTRUCTION</h2>
          <h3>But feel free use the form below!</h3>
      </div>
    </div>
<!-- Begin navbar, mobile friendly -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Group brand and toggle  -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.html">Home</a>
    </div>

    <!-- Begin collapse bar -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Where I Spend My Time <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li data-role="list-divider" class="dropDivider">References</li>
            <li><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></li>
            <li><a href="https://jquery.com/" target="_blank">jQuery</a></li>
            <li><a href="https://www.codecademy.com/articles/glossary-css">CSS Glossary</a></li>
            <li><a href="http://www.webmonkey.com/2010/02/html_cheatsheet/">HTML Cheat Sheet</a></li>
            <li role="separator" class="divider"></li>
            <li data-role="list-divider" class="dropDivider">Inspiration</li>
            <li><a href="http://www.hipstercode.com/" target="_blank">Chris Hawkes</a></li>
            <li><a href="https://www.youtube.com/channel/UCyIe-61Y8C4_o-zZCtO4ETQ" target="_blank">DevTips</a></li>
            </ul>
        </li><!-- /dropdown -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
<div class="container">
 <form class="form-horizontal" role="form" method="post" action="info.php"
  <div class="row">
    <div class="col-xs-10  col-sm-6  col-md-6 col-lg-offset-2 col-md-offset-2">
      <<h2>Contact Me! <small></small></h2>
       <form>
        <div class="form-group row">
          <label for="clientEmail" class="col-sm-2 form-control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="c_email"class="form-control" id="clientEmail" value="<?php echo $_POST["c_email"]; ?>" placeholder="Email" >
          </div>
        </div>
        <div class="form-group row">
          <label for="clientName" class="col-sm-2 form-control-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="c_name" id="clientName" value="<?php echo $_POST["c_name"]; ?>" placeholder="Your Name" >
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Contact Type</label>
          <div class="col-sm-10">
            <div class="radio">
              <label>
                <input type="radio" name="c_type" id="gridRadios1" value="recruiter" checked>
                I am a recruiter, and do not work directly for the company hiring.
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="c_type" id="gridRadios2" value="employee">
                I work for the company in question, and wish to discuss an open position.
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="c_type" id="gridRadios3" value="other" >
                Other
              </label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="coName" class="col-sm-2 form-control-label">Company Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="co_name" id="coName" value="<?php echo $_POST["co_name"]; ?>" placeholder="Company Name" >
          </div>
        </div>
       <!-- Job Description Text Box -->
        <div class="form-group row">
            <label for="Job Description ">Job Description: (1100 character max!)</label>
           <div class="col-sm-10 col-lg-offset-2 col-md-offset-2 col-xl-offset-2 col-sm-offset-2" >
              <div class="form-group">

                  <textarea class="form-control" rows="5" name="j_desc" id="jobDesc" value="<?php echo $_POST["j_desc"]; ?>" placeholder="Job Description" ></textarea>
                  <p class="counter">1100</p>
              </div>
           </div>
        </div>
       <div class="form-group row">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" id="send" name="submit" value="Send"class="btn btn-secondary">Submit</button>
          </div>
       </div>
       <div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<?php echo $result; ?>
		</div>
	</div>
      </form>
    </div>
  </div>
</div>
</div>
<!--redirect script -->
<script>
function redirect(page) {
    setTimeout(function () {
        window.location.href = page;
    }, 5000);
}
//sends to homepage
if ($reDir == "1") {
redirect("../index.html");
});
</script>
