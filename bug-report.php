<?php
if(isseet($_POST['submit'])){
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $textarea = $_POST['textarea'];
  $brandname = $_POST['brandname'];
  $androidversion = $_POST['androidversion'];
  $phonemodelname = $_POST['phonemodelname'];
  $photo = $_POST['photo'];




  $to             = 'oshandissanayaka090@gamil.com';
  $mail_subject   = 'Gavesha Bug Report';
  $email_body     = "Message From Gavesha Bug Report<br>";
  $email_body     .= "<b>From : </b> {$name} ({$email}). <br>";
  $email_body     .= "<b>Contact Number (WhatsApp) : </b> {$phonenumber}";
  $email_body     .= "<b>Bug : </b>" . nl2br(strip_tags($textarea));
  $email_body     .= "<b>Brand Name : </b> {$brandname} . <br>";
  $email_body     .= "<b>Phone Model Number : </b> {$phonemodelname} . <br>";
  $email_body     .= "<b>Phone Android Version : </b> {$androidversion} . <br>";
  $email_body     .= "<b>Screen Shot : </b> {$photo} . <br>";

  $header = "From : $email\r\nContent-Type: text/html;";

  $send_result = mail($to, $mail_subject, $email_body, $header);

  if($send_result){
echo "Message Send";
  }
  else{
    echo "Message Not Send";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="style.css">-->
  <link rel="shortcut icon" type="image/png" href="img/fevicon.png"/>

</head>
<body>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



<style media="screen">

  .glass{
    background: linear-gradient(135deg, rgba(255, 255,255, 0.1), rgab(255, 255, 255, 0));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 8px 32px 0 rgba(0, 0,0, 0.37)
  }

  body{
    background-image: url(https://static.vecteezy.com/system/resources/previews/001/409/192/original/abstract-geometric-banner-free-vector.jpg);
    background-repeat: no-repeat;
    width: 100%;
    height: 200vh;
    background-size: cover;
    background-position: center;
        margin: 0;
    padding: 0;
  }

  /* body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(120deg, #2980b9, #8e44ad);
    height: 100vh;
  } */



</style>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">
Arduino classroom</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="collapsibleNavbar">
      <ul class=" navbar-nav me-auto" style="margin-left:200px">
        <li class="nav-item">
         <a class="nav-link " href="index.html">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Learn
          </a></button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="#">Gavesha</a></li>
            <li><a class="dropdown-item" href="#">Arduino</a></li>
            <li><a class="dropdown-item" href="#">ESP32</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.html">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="row img" style=" margin-top: 20px;  border-radius: 10px; padding: 20px; margin-right: auto; margin-left: auto; width: 40%;">

  <form method = "POST" action="bug-report.php" class="was-validated glass" style="margin: 30px;">
    <h3 style="text-align: center; margin-bottom:30px; margin-top:30px;">Gavesha Bug Report</h3>

        <div class="mb-3">
    <input type="text" id="name" class="form-control" placeholder="Your Name" aria-label="text example" required>
    <div class="invalid-feedback">
      Enter Your Name
    </div>
  </div>

            <div class="mb-3">
    <input type="email" id="email" class="form-control" placeholder="Your Email" aria-label="text example" required>
    <div class="invalid-feedback">
      Enter Your Email
    </div>
  </div>

          <div class="mb-3">
    <input type="tel" id="phonenumber" class="form-control" placeholder="Your WhatsApp Number" minlength="10" maxlength="10" aria-label="text example" required>
    <div class="invalid-feedback">
      Enter Your WhatsApp Number
    </div>
  </div>

  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Textarea</label>
    <textarea class="form-control" id="textarea" placeholder="Enter Gavesha App Bug" required></textarea>
    <div class="invalid-feedback">
      Please Enter Gavesha App Bug In The Textarea
    </div>
  </div>

  <div class="mb-3">
    <select id="brandname" class="form-select" required aria-label="select example">
      <option value="">Your Phone Brand</option>
      <option value="Huawei">Huawei</option>
      <option value="Samsung">Samsung</option>
      <option value="Apple">Apple</option>
      <option value="Sony">Sony</option>
      <option value="Nokia">Nokia</option>
      <option value="Xiaomi">Xiaomi   </option>
      <option value="Oppo">Oppo       </option>
      <option value="Honor">Honor     </option>
      <option value="Doro">Doro       </option>
      <option value="CAT      ">CAT        </option>
      <option value="Miccromax">Miccromax  </option>
      <option value="Casio    ">Casio      </option>
      <option value="Google   ">Google     </option>
      <option value="Lenovo   ">Lenovo     </option>
      <option value="Microsoft">Microsoft  </option>
      <option value="Oneplus  ">Oneplus    </option>
      <option value="Orange   ">Orange     </option>
      <option value="Panasonic">Panasonic  </option>
      <option value="Techno   ">Techno     </option>

    </select>
    <div class="invalid-feedback">Select Your Phone Brand Name</div>
  </div>

    <div class="mb-3">
    <input type="text" id="phonemodelname" class="form-control" placeholder="Phone Model Number" aria-label="text example" required>
    <div class="invalid-feedback">
      Please Enter Your Phone Model In This Text Box
    </div>
  </div>

      <div class="mb-3">
    <input type="text" id="androidversion" class="form-control" placeholder="Phone Android Version" aria-label="text example" required>
    <div class="invalid-feedback">
      Please Enter Your Phone Android Version In This Text Box
    </div>
  </div>

  <div class="mb-3">
    <input type="file" id="photo" class="form-control" aria-label="file example" required>
    <div class="invalid-feedback">Upload Your Phone Model Number And Android Vision With Screenshot</div>
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" name="submit" type="submit" style="margin-left:auto; margin-right:auto; width: 30%; display: block; margin-bottom:20px">Submit form</button>
  </div>
</form>

</body>
</html>