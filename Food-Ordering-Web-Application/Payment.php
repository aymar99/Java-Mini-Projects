<!DOCTYPE html>
<html>
<head>
  <title>Payment </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Playfair+Display" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">  
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/update.js"></script>
  
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
                    <a class="nav-link" href="About.php">About us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Order.php">Order</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
              </ul>
          </div>
    </nav>
    <div class="payment_head">
      <h2>Confirm Items</h2>
      <form action="card.php" method="post">
       <input type="submit" style="height: 40px; width: 250px; position: fixed; " value="Make Payment" class="cart" >
    </div>
    <div class="order_table">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Item</th>
      <th scope="col">Quantity</th>
      <th scope="col">Cost</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    
    <?php 
          $sum=0;
          include("config.php");
          $sql="select id,name,cost,quant,amt from items";
          $sql_result = mysqli_query ($conn,$sql ) or die ('request "Could not execute SQL query" '.$sql);
          if ($sql_result->num_rows > 0) {
          while($row = $sql_result->fetch_assoc()) {
              echo "<tr><td>" . $row["id"]. "</td>";
              echo "<td>" . $row["name"]. "</td>";
              echo "<td>" . $row["quant"]. "</td>";
              echo "<td>" . $row["cost"]. "</td>";
              echo "<td>" . $row["amt"]. "</td></td>";
              $sum=$sum+$row["amt"];
    }}?>
  </tbody>
</table>
     <input type="Number" class="form-control"  name="Amount"  value="<?=$sum;?>"  readonly style="width: 300px;position: relative;left: 78%;top:10px; text-align: center;" >
    </form>                                  
  
    </div>
   
</body>
</html>
