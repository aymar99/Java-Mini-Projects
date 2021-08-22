<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/con_style.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
              </ul>
          </div>
    </nav>
    <section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <h2 id="cont">Contact Us</h2>
              <br><br><br>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form action="feedback.php" class="form-horizontal">
                    <div class="form-group">
                      <label for="exampleInputName2">Name</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Your Message</label>
                      <textarea  class="form-control" placeholder="Description"></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">Send Message</button>
                  </form>

                  <hr>
                    <h3>Our Social Sites</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-youtube-play"> <span class="network-name">Youtube</span></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </section>
</body>
</html>