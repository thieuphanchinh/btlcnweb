<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/fav.png" type="image/x-icon"/>
    
    <title>Ôn thi giữa kì môn công nghệ Web</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/mestyles.css">
    <link rel="stylesheet" href="./assets/fonts/ionicons.min.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <link href="./assets/css/aos.css" rel="stylesheet">
    <script src="assets/js/aos.js"></script>

    <script src="assets/js/chinh.js"></script>

    <link rel="stylesheet" href="./assets/css/indexchinh.css">

    <link rel="stylesheet" href="./assets/css/indexloginchinh.css">
    <?php if(@$_GET['w'])
    {echo'<script>alert("'.@$_GET['w'].'");</script>';}
    ?>
    
</head>

<body>

    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#">Thi </a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Trang chủ</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Các bộ đề</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Tiện ích </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                        </li>
                    </ul><span class="navbar-text actions"> <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Đăng nhập</b></span></a>
                    <a class="btn btn-light action-button" role="button" href="#">Đăng kí</a></span></div>
            </div>
        </nav>
    </div>
    <!-- <marquee>Cùng ôn thi giữa kì môn Công nghệ Web</marquee> -->
    <!--sign in modal start-->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content title1">
        <div class="modal-header">
        <!-- <h1 style="color:orange"><span><span>Đóng</h1> -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title title1"><span style="color:orange"></span></h4>
        </div>


          <div class="modal-body">
              <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                  <fieldset>


                      <!-- Text input-->
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="email"></label>
                          <div class="col-md-6">
                              <input id="email" name="email" placeholder="Nhập email:" class="form-control input-md" type="email">

                          </div>
                      </div>


                      <!-- Password input-->
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="password"></label>
                          <div class="col-md-6">
                              <input id="password" name="password" placeholder="Nhập mật khẩu" class="form-control input-md" type="password">

                          </div>
                      </div>

          </div>
          <div class="modal-footer">
<!--              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
              <button type="submit" class="btn btn-primary">Đăng nhập</button>
              </fieldset>
              </form>
          </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
    <!--sign in modal closed-->

    </div><!--header row closed-->
    </div>












  
 <!--- Start Slider --->
<Section id="slider">
<div class="slider-container">
<!-- Start Slides -->
<div id="slides">
<div class="slide">
<img class="imgs" src="./assets/images/slider1.jpg" alt="slide one">
<div class="caption">
<p>
  HTML CSS
</p>
</div>
</div>
<div class="slide">
<img class="imgs" src="./assets/images/slider2.jpg" alt="slide two">
<div class="caption">
<p>
  PHP
</p>
</div>
</div>
<div class="slide">
<img class="imgs" src="./assets/images/slider3.jpg" alt="slide three">
<div class="caption">
<p>
  JavaScript
</p>
</div>
</div>
</div>
<!-- End Slides -->
                
<!-- Start Timeline -->
<span class="timeline"></span>
<!-- End Timeline -->
</div>
</Section>
<!--- End Slider --->












  <div data-aos="fade-up">

  <div class="team-boxed">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Đội ngũ </h2>
                <p class="text-center">Thiết kế & Phát triển</p>
            </div>
            <div class="row people">

                <div class="col-md-6 col-lg-6 item" data-aos="fade-left">
                    <div class="box"><img class="rounded-circle" src="assets/images/hieu.jpg">
                        <h3 class="name">Hiếu</h3>
                        <p class="title">Thiết kế</p>
                        <p class="description"></p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 item " data-aos="fade-right">
                    <div class="box"><img class="rounded-circle" src="assets/images/chinh.jpg">
                        <h3 class="name">Chính</h3>
                        <p class="title">Phát triển</p>
                        <p class="description"></p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                
                
                <!-- <div class="col-md-6 col-lg-4 item">
                    <div class="box"><img class="rounded-circle" src="assets/img/3.jpg">
                        <h3 class="name">Carl Kent</h3>
                        <p class="title">Stylist</p>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    </div>
  <div class="footer-basic" data-aos="zoom-in">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Trang chủ</a></li>
                <li class="list-inline-item"><a href="#">Hỗ trợ</a></li>
                <li class="list-inline-item"><a href="#">Giới thiệu</a></li>
                <li class="list-inline-item"><a href="#">Điều kiện</a></li>
                <li class="list-inline-item"><a href="#">Chính sách</a></li>
            </ul>
            <p class="copyright">Bài tập lớn Công nghệ Web © 2018</p>
        </footer>
    </div>

    <script>AOS.init();</script>
    <script src="assets/js/indexchinh.js"></script>
</body>
</html>