<?php 
$order_no=0;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
              $order_no=$order_no+1;

              $q1=$_POST['q1'];
              $c1=$_POST['c1'];
              $t1=$_POST['t1'];
              $name1="Burger";

              $q2=$_POST['q2'];
              $c2=$_POST['c2'];
              $t2=$_POST['t2'];
              $name2="Beef";

              $q3=$_POST['q3'];
              $c3=$_POST['c3'];
              $t3=$_POST['t3'];
              $name3="Hotdog";

              $q4=$_POST['q4'];
              $c4=$_POST['c4'];
              $t4=$_POST['t4'];
              $name4="Pizza";

              $q5=$_POST['q5'];
              $c5=$_POST['c5'];
              $t5=$_POST['t5'];
              $name5="Fries";

              $q6=$_POST['q6'];
              $c6=$_POST['c6'];
              $t6=$_POST['t6'];
              $name6="Softie";

              $q7=$_POST['q7'];
              $c7=$_POST['c7'];
              $t7=$_POST['t7'];
              $name7="Pasta";

              $q8=$_POST['q8'];
              $c8=$_POST['c8'];
              $t8=$_POST['t8'];
              $name8="Cake";

              $q9=$_POST['q9'];
              $c9=$_POST['c9'];
              $t9=$_POST['t9'];
              $name9="Brownie";

              $q10=$_POST['q10'];
              $c10=$_POST['c10'];
              $t10=$_POST['t10'];
              $name10="Prawn";

              $q11=$_POST['q11'];
              $c11=$_POST['c11'];
              $t11=$_POST['t11'];
              $name11="Pan Pizza";

              $q12=$_POST['q12'];
              $c12=$_POST['c12'];
              $t12=$_POST['t12'];
              $name12="Bread";

              $sql="use foodies";
              $conn = mysqli_connect("localhost","root","root");
              if(mysqli_query($conn, $sql))
                  {
                    $sql1="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name1','$c1','$q1','$t1');";
                    $sql2="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name2','$c2','$q2','$t2');";
                    $sql3="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name3','$c3','$q3','$t3');";
                    $sql4="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name4','$c4','$q4','$t4');";
                    $sql5="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name5','$c5','$q5','$t5');";
                    $sql6="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name6','$c6','$q6','$t6');";
                    $sql7="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name7','$c7','$q7','$t7');";
                    $sql8="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name8','$c8','$q8','$t8');";
                    $sql9="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name9','$c9','$q9','$t9');";
                    $sql10="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name10','$c10','$q10','$t10');";
                    $sql11="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name11','$c11','$q11','$t11');";
                    $sql12="INSERT INTO items(order_no,name,cost,quant,amt)values('$order_no','$name12','$c12','$q12','$t12');";
                    mysqli_query($conn,$sql2);mysqli_query($conn,$sql1);mysqli_query($conn,$sql3);
                    mysqli_query($conn,$sql4);mysqli_query($conn,$sql5);mysqli_query($conn,$sql6);
                    mysqli_query($conn,$sql7);mysqli_query($conn,$sql8);mysqli_query($conn,$sql9);
                    mysqli_query($conn,$sql10);mysqli_query($conn,$sql11);mysqli_query($conn,$sql12);
                    header('location: Payment.php');    
                        //echo "<script type='text/javascript'>alert('placed order');</script>";

        }
      }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order food</title>
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
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Order</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact</a>
                  </li>
              </ul>
          </div>
    </nav>
    <div class="menu">
    <div class="nav_bar2_div">
          <ul class="nav_bar2">
            <li class="nav_bar2_li"><a class="nav_bar2_a active" href="#home">American</a></li>
            <li class="nav_bar2_li"><a class="nav_bar2_a" href="#news">Chinese</a></li>
            <li class="nav_bar2_li"><a class="nav_bar2_a" href="#contact">Indian</a></li>
            <li class="nav_bar2_li"><a class="nav_bar2_a" href="#contact">Italian</a></li>
            <li class="nav_bar2_li"><a class="nav_bar2_a" href="#contact">Greek</a></li>
            <li class="nav_bar2_li"><a class="nav_bar2_a" href="#contact">Mexican</a></li>
          </ul>
    </div>
    <div class="nav_bar3_div">
      <ul class="nav_bar3">
      <li><a href="#">Starter</a></li>
      <li><a class="active" href="#news">Main-Course</a></li>
      <li><a href="#contact">Dessert</a></li>
    </div>
    <form action="Order.php" method="post">
    <div class="add">
      <input type="submit" value="Add to Cart"  name="submit" class="cart">
     </div> 

    <div class="items">
          <div class="card-deck">
                    <div class="card">
                    <img class="card-img-top" src="images/1.jpg" alt="Card image cap" >
                            <div class="card-body">
                                  <h5 class="card-title">Burger</h5>
                                  <input class="cost" type="text" name="c1" placeholder="cost" value="60" readonly id="c1" id="c1"><br><br>
                                  <input class="quantity" type="number" name="q1" placeholder="no" id="q1" onchange="update1()" >
                                  <input class="sub_total" type="text" name="t1" placeholder="total" readonly id="t1" >
                                </div>
 
                    </div>
                    <div class="card">
                    <img class="card-img-top" src="images/2.jpg" alt="Card image cap">
                            <div class="card-body">
                                  <h5 class="card-title">Beef</h5>
                                  <input class="cost" type="text" name="c2" placeholder="cost" value="80" readonly id="c2"><br><br>
                                  <input class="quantity" type="number" name="q2" placeholder="no" id="q2" onchange="update2()">
                                  <input class="sub_total" type="text" name="t2" placeholder="total" readonly id="t2">
                                </div>
                    </div>
                    <div class="card">
                    <img class="card-img-top" src="images/3.jpg" alt="Card image cap">
                            <div class="card-body">
                                  <h5 class="card-title">Hotdog</h5>
                                  <input class="cost" type="text" name="c3" placeholder="cost" value="50" readonly id="c3"><br><br>
                                  <input class="quantity" type="number" name="q3" placeholder="no" id="q3" onchange="update3()">
                                  <input class="sub_total" type="text" name="t3" placeholder="total" readonly id="t3">
                            </div>
                    </div>
                    <div class="card">
                    <img class="card-img-top" src="images/4.jpg" alt="Card image cap">
                            <div class="card-body">
                                  <h5 class="card-title">Pizza</h5>
                                  <input class="cost" type="text" name="c4" placeholder="cost" value="55" readonly id="c4"><br><br>
                                  <input class="quantity" type="number" name="q4" placeholder="no" id="q4" onchange="update4()">
                                  <input class="sub_total" type="text" name="t4" placeholder="total" readonly id="t4">
                            </div>
                    </div>
            </div><br>
            <div class="card-deck">
                    <div class="card">
                    <img class="card-img-top" src="images/5.jpg" alt="Card image cap" >
                            <div class="card-body">
                                  <h5 class="card-title">Fries</h5>
                                  <input class="cost" type="text" name="c5" placeholder="cost" value="30" readonly id="c5"><br><br>
                                  <input class="quantity" type="number" name="q5" placeholder="no" id="q5" onchange="update5()">
                                  <input class="sub_total" type="text" name="t5" placeholder="total" readonly id="t5">
                            </div>
 
                    </div>
                    <div class="card">
                    <img class="card-img-top" src="images/6.jpg" alt="Card image cap">
                            <div class="card-body">
                                  <h5 class="card-title">Softie</h5>
                                  <input class="cost" type="text" name="c6" placeholder="cost" value="70" readonly id="c6"><br><br>
                                  <input class="quantity" type="number" name="q6" placeholder="no" id="q6" onchange="update6()">
                                  <input class="sub_total" type="text" name="t6" placeholder="total" readonly id="t6">
                            </div>
                    </div>
                    <div class="card">
                    <img class="card-img-top" src="images/7.jpg" alt="Card image cap">
                            <div class="card-body">
                                  <h5 class="card-title">Pasta</h5>
                                  <input class="cost" type="text" name="c7" placeholder="cost" value="60" readonly id="c7"><br><br>
                                  <input class="quantity" type="number" name="q7" placeholder="no" id="q7" onchange="update7()">
                                  <input class="sub_total" type="text" name="t7" placeholder="total" readonly id="t7">
                            </div>
                    </div>
                    <div class="card">
                    <img class="card-img-top" src="images/8.jpg" alt="Card image cap">
                            <div class="card-body">
                                  <h5 class="card-title">Cake</h5>
                                  <input class="cost" type="text" name="c8" placeholder="cost" value="55" readonly id="c8"><br><br>
                                  <input class="quantity" type="number" name="q8" placeholder="no" id="q8" onchange="update8()">
                                  <input class="sub_total" type="text" name="t8" placeholder="total" readonly id="t8">
                            </div>
                    </div>
            </div><br>
            <div class="card-deck">
                    <div class="card">
                    <img class="card-img-top" src="images/9.jpg" alt="Card image cap">
                            <div class="card-body">
                                  <h5 class="card-title">Brownie</h5>
                                  <input class="cost" type="text" name="c9" placeholder="cost" value="65" readonly id="c9"><br><br>
                                  <input class="quantity" type="number" name="q9" placeholder="no" id="q9" onchange="update9()">
                                  <input class="sub_total" type="text" name="t9" placeholder="total" readonly id="t9">
                            </div>

                    </div>
                    <div class="card">
                    <img class="card-img-top" src="images/10.jpg" alt="Card image cap">
                            <div class="card-body">
                                  <h5 class="card-title">Prawn</h5>
                                  <input class="cost" type="text" name="c10" placeholder="cost" value="90" readonly id="c10""><br><br>
                                  <input class="quantity" type="number" name="q10" placeholder="no" id="q10" onchange="update10()">
                                  <input class="sub_total" type="text" name="t10" placeholder="total" readonly id="t10">
                            </div>

                    </div>
                    <div class="card">
                    <img class="card-img-top" src="images/11.jpg" alt="Card image cap">
                            <div class="card-body">
                                  <h5 class="card-title">Pan Pizza</h5>
                                  <input class="cost" type="text" name="c11" placeholder="cost" value="50" readonly id="c11"><br><br>
                                  <input class="quantity" type="number" name="q11" placeholder="no" id="q11" onchange="update11()">
                                  <input class="sub_total" type="text" name="t11" placeholder="total" readonly id="t11">
                            </div>
                    </div>
                    <div class="card">
                    <img class="card-img-top" src="images/12.jpg" alt="Card image cap">
                            <div class="card-body">
                                  <h5 class="card-title">Bread</h5>
                                  <input class="cost" type="text" name="c12" placeholder="cost" value="40" readonly id="c12"><br><br>
                                  <input class="quantity" type="number" name="q12" placeholder="no" id="q12" onchange="update12()">
                                  <input class="sub_total" type="text" name="t12" placeholder="total" readonly id="t12">
                            </div>  
                    </div>
            </div>
    </div>
  </form>
  </div>

</body>
</html>