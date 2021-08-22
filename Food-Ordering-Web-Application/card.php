<?php
if (isset($_POST['Confirm']))
{
  $cardNumber=$_POST['cardNumber'];
  $cardCVC=$_POST['cardCVC'];
  $cardExpiry=$_POST['cardExpiry'];
  $Amount=$_POST['Amount'];
  $sql="use foodies";
              $conn = mysqli_connect("localhost","root","root");
              if(mysqli_query($conn, $sql))
                  {
                    $sql2="select * from card where no='$cardNumber' and cvv='$cardCVC' and expiry='$cardExpiry';";
                    $result=mysqli_query($conn,$sql2);
                        if($result->num_rows>0)
                          {
                           $row = $result->fetch_assoc();
                            if($Amount>$row['amt']) 
                              echo "<script type='text/javascript'>alert('You dont have sufficient Money');</script>";
                           else{
                              $Amount=$row['amt']-$Amount;
                              $sql3="update card set amt='$Amount' where no='$cardNumber';";
                              if(mysqli_query($conn,$sql3)){
                                header('location: Succesful.php');    }
                              else
                                echo "<script type='text/javascript'>alert('Sorry could not place order');</script>"; 

                          }
                          }
                        else
                          echo "<script type='text/javascript'>alert('Invalid card ');</script>";
        }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome Foood</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Playfair+Display" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="#">Ramya.L</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Order.php">Order</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact</a>
                  </li>
              </ul>
          </div>
    </nav>
            
                    <form role="form" id="payment-form" method="post" action="card.php" style="color: white;position: absolute;left: 30%;right: 30%;width: 40%;top:20%;bottom: 20%;height: 60%;border-radius: 25px;
  background: rgba(255, 255, 255, 0.1); border: 1px solid black;padding: 40px;">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="Amount">Amount</label>
                                    <div class="input-group">
                                        <input 
                                        style="text-align: center;"
                                            type="Number"
                                            class="form-control"
                                            name="Amount"
                                            value="<?php $amt=$_POST['Amount'];echo $amt;?>"
                                            readonly 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="subscribe btn btn-success btn-lg btn-block" name="Confirm" type="button">Confirm</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
               

</body>
</html>