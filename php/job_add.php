<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nick Harbison Portfolio</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
  <title>Contact Info</title>
</head>
<body>

  <?php

if (isset($_POST['submit'])){
  $data_missing =  array();
  if(empty)($POST['contact_name'])){
    $data_missing[] = 'Your Name';
  } else {
    $name= ($POST['contact_name']);
  }
  $data_missing =  array();
  if(empty)($POST['contact_type'])){
    $data_missing[] = 'Type of Contact';
  } else {
    $name= ($POST['contact_type']);
  }
  $data_missing =  array();
  if(empty)($POST['co_name'])){
    $data_missing[] = 'Company Name';
  } else {
    $name= ($POST['co_name']);
  }
  $data_missing =  array();
  if(empty)($POST['contact_email'])){
    $data_missing[] = 'Your Email Address';
  } else {
    $name= ($POST['contact_email']);
  }
  $data_missing =  array();
  if(empty)($POST['contact_tele'])){
    $data_missing[] = 'Contact Telephone';
  } else {
    $name= ($POST['contact_tele']);
  }
  $data_missing =  array();
  if(empty)($POST['job_desc'])){
    $data_missing[] = 'Description of Job';
  } else {
    $name= ($POST['job_desc']);
  }
  if(empty($data_missing)){
    require_once('sql_connect.php');

    $query - "INSERT INTO job_info (contact_name, contact_type, co_name, contact_email, contact_tele, job_desc,submission_date) VALUES (?,?,?,?,?,?,NOW())";

    $stmt = mysqli_prepare($dbc, $query);

    mysqli_stmt_bind_param($stmt, "sisssss", $contact_name,$contact_type,$co_name,$contact_email,$contact_tele,$job_desc,$submission_date);

    $affected_rows = mysqli_stmt_affected_rows($stmt);

    if($affected_rows ==1){
      echo "Info Sent!";
      mysqli_stmt_close($stmt);
      mysqli_close($dbc);
    } else {
      echo 'Opps, something went wrong!';
      echo mysqli_error();

      mysqli_stmt_close($stmt);
      mysqli_close($dbc);
    }
    } else {
      echo 'You need to enter the following information:';
      foreach($data_missing as $missing){
        echo "$missing";

    }
  }
}

?>

 </body>
</html>
