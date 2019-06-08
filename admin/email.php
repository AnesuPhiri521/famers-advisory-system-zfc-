<?php
  session_start();
  if (!isset($_SESSION['username'])) {
      header("Location: index.php?login=invalid");
  }   
  require 'config/connection.php';
  $username = $_SESSION['username'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/images/farmapp.png">
  <link rel="icon" type="image/png" href="assets/images/farmapp.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Farming Advisory System</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

  <!--     Fonts and icons     -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/new.css" rel="stylesheet" />    

    <!--   Core JS Files   -->
  <script src="assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- End of JS files -->
</head>
<style type="text/css">

.navbar{
  background-color: #2d2d30;
}

.panel-heading{
  background-color: #2d2d30;
  color: #ffffff;
}

.sidenav {
  background-color: #2d2d30;  
  position: fixed;
  width: 300px;
  height: 100%;
}

#main-content{
  margin-left: 320px;     
} 

.upper{
  height: 100px;
  background-color: #518e40;
}

.well{
  padding-top: 10px;
  padding-bottom: 20px;
  margin-top: 10px;
  background-color: #518e40;
  border: 1px solid #518e40; 
  color: #fff; 
}

#well{
  font-weight: normal;
  text-align: center;
}

.sidepanel{
  background-color: #518e40; 
  border: 1px solid #518e40;
}

.logo{
  font-size: 300px;
  color: #8e4051;
}

.glyphicon-chevron-down{
  font-weight: lighter;
}

textarea {
      border: 2px solid #649a41;            
  } 

textarea:focus {
      border: 2px solid #345759;
  }

.color{
  background-color: #8e4051;
}

.carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #8e4051;
  }

.carousel-indicators li {
      border-color: #8e4051;
  }

.carousel-indicators li.active {
      background-color: #8e4051;
  } 
/***********************Inputs CSS***********************/
input[type="text"], input[type="password"], input[type="email"]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;       
    border: none;
    border: 2px solid #649a41;
}

input[type=text]:focus, input[type="password"]:focus, input[type="email"]:focus{
    border: 2px solid #345759;
}
#sel1 {
      border: 2px solid #649a41;            
  } 

#sel1:focus {
      border: 2px solid #345759;
  }
button[type="submit"]{  
    background-color: #649a41;
    color: #ffffff;
    padding: 10px 24px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
}

button[type="submit"]:hover {
    background-color: #466a2e;
    color: #ffffff;
}
/***********************End CSS***********************/  

a:link{
  text-decoration: none;
}

a:visited{
  text-decoration: none;
}

a:hover{
  text-decoration: none;
}

a:active{
  text-decoration: none;
}

footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 20px;
  }

footer a {
      color: #518e40;
  }  

footer a:hover {
      color: #777;
      text-decoration: none;
  } 

</style>

<body>
  
<div class="container-fluid" id="container">
<!-- Sidebar -->  
  <div class="col-md-3 sidenav">
    <div>    
      <div class="well" id="well"><a href="home.php"><h2>Farming App</h2></a></div>
    </div>
    <h3 style="padding-left: 30px; color: white;"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</h3>
    <div class="panel-group" id="accordion" style="padding-left: 30px;">
      <div class="panel panel-default" style="background-color: #2d2d30; border: none;">
        <div class="panel-heading" style="background-color: #2d2d30; border: none; color: white;">
          <h4 class="panel-title" style="background-color: #2d2d30; border: none;">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="background-color: #2d2d30; border: none;"><span class="glyphicon glyphicon-user"></span> System Users <span class="glyphicon glyphicon-collapse-down"></span></a>
          </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse in">
          <div class="panel-body" style="background-color: #2d2d30; border: none;">
            <a href="administrators.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;">Administrators</a>
            <a href="farmers.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;">Farmers</a>
            <a href="agronomists.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;">Agronomists</a>
            
          </div>
        </div>
      </div>
      <div class="panel panel-default" style="background-color: #2d2d30; border: none;">
        <div class="panel-heading" style="background-color: #2d2d30; border: none; color: white;">
          <h4 class="panel-title" style="background-color: #2d2d30; border: none;">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="background-color: #2d2d30; border: none;"><span class="glyphicon glyphicon-home"></span> Land Input <span class="glyphicon glyphicon-collapse-down"></span></a>
          </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse">
          <div class="panel-body" style="background-color: #2d2d30; border: none;">
            <a href="land_price.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Land Price</a>
            <a href="diseases.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Diseases</a> 
            <a href="regions.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Regions</a>     
          </div>
        </div>     
      <div class="panel panel-default" style="background-color: #2d2d30; border: none;">
        <div class="panel-heading" style="background-color: #2d2d30; border: none; color: white;">
          <h4 class="panel-title" style="background-color: #2d2d30; border: none;">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="background-color: #2d2d30; border: none;"><span class="glyphicon glyphicon-envelope"></span> Mail Services <span class="glyphicon glyphicon-collapse-down"></span></a>
          </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse" style="background-color: #2d2d30; border: none;">
          <div class="panel-body" style="background-color: #2d2d30; border: none;">
            <a href="email.php" style="display: block; padding-left: 20px; padding-bottom: 20px; color: white;"> Email Attack</a>   
          </div>
        </div>      
      </div>      
      </div>    
  </div>
  </div>

  <!-- Main Content -->
  <div class="col-md-9" id="main-content">

    <nav class="navbar navbar-inverse">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">          
          <ul class="nav navbar-nav navbar-right">                 
            <li>
            <a href="#"><span class="glyphicon glyphicon-user"></span> 
                <?php echo $_SESSION['username']; ?>
              </a>          
            </li>
          <li>
            <a href="includes/logout.inc.php"><span class="glyphicon glyphicon-log-out"></span> 
              Logout
            </a>          
          </li>          
          </ul>
      </div>
      
    </nav>
    

    <div class="row" style="margin-bottom: 20px;">
    <div class="page-header text-center">
      <h3>Mail Services | Email Attack</h3>      
    </div>
    <form role="form" method="post" >
     <div class="col-md-6">
        <div class="form-group" style="padding-top: 8px; padding-bottom: 8px;">
            <label for="sel1">Agronomists:</label>
            <select class="form-control" id="sel1" name="farmer_email" required="required">
              <option>-- Farmers --</option>
              <?php
                $farmers = mysqli_query($connect, "SELECT * FROM farmers");
                while($agro_row=mysqli_fetch_assoc($farmers))
                    {
              ?>  
              <option value="<?php echo $agro_row['email']; ?>"><?php echo $agro_row['username']." (".$agro_row['email'].")"; ?></option> 
              <?php
                    }     
              ?>      
            </select>
        </div>
        <div class="form-group">
            <label for="subject"> Subject: </label>
            <input type="text" name="subject" id="subject" placeholder="Enter Subject" class="form-control" required="required">
        </div>

     </div>
     <div class="col-md-6">
     <div class="form-group">
      <label for="sel1">Message:</label>
      <textarea class="form-control" name="message" rows="5" id="sel1" style=" margin-top: 8px; padding-bottom: 8px;"></textarea>
    </div>

     </div>
     <button type="submit" class="btn btn-success btn-block" style="margin-top: 28px; float: right;" name="trevor">Send Email</button>
     </form>
    </div>
      <!--         sendgrid email-->

      <?php
      if(isset($_POST['trevor']))
      {
          //sending email to the selected email address from database
          $subject = $_POST['subject'];
          $message_sent = $_POST['message'];
          require 'vendor/autoload.php';
          $api_key = "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";

          $email = new \SendGrid\Mail\Mail();
          $email->setFrom("sehphirry@gmail.com", "ZFC LIMITED FARMERS ADVISORY AND SUPPORT SERVICES");
          $email->setSubject($subject);
          $email->addTo($_POST['farmer_email']);
          $email->addContent("text/plain", $message_sent);
          $sendgrid = new \SendGrid($api_key);
          $sendgrid->send($email);

          if($sendgrid->send($email))
          {
              echo "Mail sent";
          }
          else
          {
              echo "Mail not sent";
          }
      }
      ?>


      <div class="row" style="margin-bottom: 20px;">
     <div class="page-header text-center">
      <h3>Mail Services | Mail Messages</h3>      
    </div>
    <div class="table-responsive" style="padding-top: 25px;">             
  <table class="table table-striped" id="trackingDetails">
    <thead>
      <tr>
        <th>Sender</th>
        <th>Receiver</th>
        <th>Subject</th>        
        <th>Message</th>
        <th>Date</th>
        <th>Time</th>
        <th>ViewStatus</th>
      </tr>
    </thead>
    <tbody>
       <?php                
        $result = mysqli_query($connect, "SELECT * FROM email_notification"); 
        while($row = mysqli_fetch_assoc($result))
      {
      ?>
      <tr>
        <td><?Php echo $row['sender_admin']; ?></td>
        <td><?Php echo $row['receiver_farmer']; ?></td>
        <td><?Php echo $row['subject']; ?></td> 
        <td><?Php echo $row['message']; ?></td>
        <td><?Php echo $row['date_created']; ?></td>
        <td><?Php echo $row['time_created']; ?></td>       
        <td><?Php if($row['status'] == 0){echo"<span class='label label-danger text-center'> Unseen</span>";}else{echo"<span class='label label-success text-center'>  Seen</span>";} ?>         
        </td>                     
      </tr>         
      <?php
        }
      ?>     
    </tbody>
  </table>
</div>
    </div>      
    
 <!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>&copy; <?php echo date("Y");?> <a href="#" data-toggle="tooltip" title="Visit ZIMDEF.">Farming Advisory System.</a></p>
</footer>
</div>
</div>
<!--   Core JS Files   -->
  <script src="assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- End of JS files -->
</body>
</html>
