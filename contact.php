<?php
  require_once("connection.php");

  if(isset($_POST['btnMsg'])){
    $name=$_POST['txtname'];
    $mail=$_POST['txtEmail'];
    $msg=$_POST['txtmsg'];

    $sql="INSERT INTO `messages`(`name`, `email`, `message`) VALUES ('$name','$mail','$msg')";
    $res=mysqli_query($con, $sql);

    if($res){
      $msssg='<div class="alert alert-success text-center w-100 msg">Message sent Successfully!</div>';
    }else{
      $msssg='<div class="alert alert-danger text-center w-100 msg">Failed to send the message!</div>';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/contact.css">
    <title></title>
</head>
<body>
<?php
        include("includes/nav.php");
    ?>
<div class="container-fluid px-5 my-5">
  <div class="row justify-content-center">
    <div class="col-xl-10">
      <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
        <div class="card-body p-0">
          <div class="row g-0">
            <div class="col-sm-6 d-none d-sm-block bg-image"></div>
            <div class="col-sm-6 p-4">
              <div class="text-center">
                <div class="h3 fw-light">Contact Form</div>
                <p class="mb-4 text-muted">Split layout contact form</p>
              </div>
              <?php
              if(isset($msssg)){
                echo $msssg;
              }    
              
              ?>
          
              <form id="contactForm" method="POST" data-sb-form-api-token="API_TOKEN">

                <div class="form-floating mb-3">
                  <input class="form-control" name="txtname" type="text" placeholder="Name" data-sb-validations="required" />
                  <label for="name">Name</label>
                </div>

                <div class="form-floating mb-3">
                  <input class="form-control" name="txtEmail" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                  <label for="emailAddress">Email Address</label>
                  
                </div>

                <div class="form-floating mb-3">
                  <textarea class="form-control" name="txtmsg" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                  <label for="message">Message</label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-primary btn-lg" name="btnMsg" type="submit">Submit</button>
                </div>
              </form>
              
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>