<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php


?>
<!DOCTYPE html>
<html>

<head>
   <title>Nhà Hàng Restaurant PSXI </title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta charset="utf-8">
   <meta name="keywords" content="Luscious a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

   <script type="application/x-javascript">
       addEventListener("load", function () {
           setTimeout(hideURLbar, 0);
       }, false);

       function hideURLbar() {
           window.scrollTo(0, 1);
       }
   </script>
   <base href="<?php echo base_url('')?>">
   <link href="<?php echo base_url('template/frontend/css/animate.css')?>" rel='stylesheet' type='text/css' />
   <link href="<?php echo base_url('template/frontend/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
   <link href="<?php echo base_url('template/frontend/css/wickedpicker.css')?>" rel="stylesheet" type='text/css' media="all" />
   <link href="<?php echo base_url('template/frontend/css/easy-responsive-tabs.css')?>" rel='stylesheet' type='text/css' />
   <link href="<?php echo base_url('template/frontend/css/style.css')?>" rel='stylesheet' type='text/css' />
   <link href="<?php echo base_url('template/frontend/css/font-awesome.css')?>" rel="stylesheet">
   <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
         rel='stylesheet' type='text/css'>
</head>

<body>
<!--Header-->
<div class="header" id="home">
   <!--/top-bar-->
   <div class="top-bar">
      <div class="header-top_w3layouts">
         <div class="forms">
            <p><span class="fa fa-map-marker" aria-hidden="true"></span><?= $list_config->address?> </p>
            <p><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com"><?= $list_config->email?> </a></p>
         </div>
         <ul class="top-right-info">
            <li><a target="_blank" href="<?= $list_config->facebook?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="<?= $list_config->gplus?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="<?= $list_config->tw?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="<?= $list_config->zala?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>

         </ul>
         <div class="search">
            <div class="cd-main-header">
               <ul class="cd-header-buttons">
                  <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
               </ul>
               <!-- cd-header-buttons -->
            </div>
            <div id="cd-search" class="cd-search">
               <form action="#" method="post">
                  <input name="Search" type="search" placeholder="Click enter after typing...">
               </form>
            </div>
         </div>
         <div class="clearfix"></div>

      </div>
      <div class="header-nav">
         <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <h1><a class="navbar-brand wow flip" href="<?php echo base_url('index.php/frontend/home/index')?>">N<span>hà Hàng Hải Hậu</span></a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
               <nav>
                  <ul class="top_nav">
                     <li><a class="scroll" href="#home" class="active">Trang chủ </a></li>
                     <li><a class="scroll" href="#about">About</a></li>
                     <li><a class="scroll" href="#services">Dịch vụ</a></li>
                     <li class="dropdown menu__item">
                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true"
                           aria-expanded="false">Danh mục <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                           <li><a class="scroll" href="#menu">Thực đơn</a></li>
                           <li><a class="scroll" href="#book">Đăt bàn</a></li>
                        </ul>
                     </li>
                     <li><a class="scroll" href="#gallery">Thư viên</a></li>
                     <li><a class="scroll" href="#mail">Liên hệ</a></li>
                  </ul>
               </nav>
            </div>
         </nav>

      </div>
   </div>
   <!--//top-bar-->
   <!-- banner-text -->
   <div class="slider">
      <div class="callbacks_container">
         <ul class="rslides callbacks callbacks1" id="slider4">
            <li>
               <div class="banner-top">
                  <div class="banner-info_agile_w3ls">
                     <h3>Slider. <span>Leave</span> happy.</h3>
                     <p>Small change,Big differences.</p>
                     <a href="#about" class="scroll">Read More <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                     <a href="#mail" class="scroll">Contact Us <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                  </div>

               </div>
            </li>
            <li>
               <div class="banner-top1">
                  <div class="banner-info_agile_w3ls">
                     <h3>Better Ingredients. <span> Better</span> Food.</h3>
                     <p>Small change,Big differences.</p>
                     <a href="#about" class="scroll">Read More <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                     <a href="#mail" class="scroll">Contact Us <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                  </div>

               </div>
            </li>
            <li>
               <div class="banner-top2">
                  <div class="banner-info_agile_w3ls">
                     <h3>Come hungry. <span>Leave</span> happy.</h3>
                     <p>Small change,Big differences.</p>
                     <a href="#about" class="scroll">Read More <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                     <a href="#mail" class="scroll">Contact Us <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                  </div>

               </div>
            </li>
            <li>
               <div class="banner-top3">
                  <div class="banner-info_agile_w3ls">
                     <h3>Better Ingredients. <span> Better</span> Food.</h3>
                     <p>Small change,Big differences.</p>
                     <a href="#about" class="scroll">Read More <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                     <a href="#mail" class="scroll">Contact Us <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                  </div>

               </div>
            </li>
         </ul>
      </div>
      <div class="clearfix"> </div>

      <!--banner Slider starts Here-->
   </div>
   <!-- //Modal1 -->
   <!--//Slider-->
</div>
<!--//Header-->
<div class="news" id="about">
   <div class="container">
      <div class="news-main_wthree_agile">
         <div class="col-md-6 news-left wow fadeInRight">
            <h2>OUR INTERESTING HISTORY</h2>
         </div>
         <div class="col-md-6 news-right">
            <p class=" wow swing"><?= $list_config->history_top?>.
            </p>
            <p class="wow bounceInLeft"><?= $list_config->history_bottom?>.
            </p>
         </div>

         <div class="clearfix"></div>
         <div class="mid_slider">
            <!-- banner -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="4" class=""></li>
               </ol>

               <div class="carousel-inner" role="listbox">
                  <?php foreach (array_chunk($list_img,4) as$key => $list ){?>
                  <div class="item <?php if($key==0){echo 'active';}?>">
                     <div class="row">
                        <?php foreach ($list as $value){?>
                           <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                              <div class="thumbnail"><img src="<?php echo base_url()?>template/frontend/images/<?php echo  $value->img ?>" alt="Image" style="max-width:100%;"></div>
                           </div>
                         <?php }?>
                     </div>
                  </div>
                  <?php }?>


               </div>
               <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                  <span class="fa fa-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                  <span class="fa fa-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
               </a>
               <!-- The Modal -->
            </div>
            <!--//banner -->

         </div>
      </div>
   </div>
</div>
<!--/services-->
<div class="work" id="services">
   <div class="container">
      <div class="work-main">
         <div class="work-top wow fadeInDown">
            <h3>dịch vụ của chúng tôi</h3>
            <p>Lorem ipsum dolor sit amet,vehicula vel sapien et</p>
         </div>

          <?php  $img = array('spoon','apple','home','calendar','child','smile-o');
            foreach ($list_service2 as $key =>$value)
                $a =  $img[$key];
          ?>
         <div class="work-bottom_w3ls_agile wow fadeInDown">
            <?php foreach (array_chunk($list_service2,3) as $key1 => $value1){?>
            <div class="work-bottom-top">
                  <?php $i=0; foreach ($value1 as $key =>$value2){ $i++;?>
               <div class="col-md-4">
                  <div class="work-bottom-left_agile_w3ls">
                     <span class="fa fa-<?= $img[$key]?>" aria-hidden="true"></span>
                     <h4><?= $value2->title?></h4>
                     <p><?= $value2->content?>. </p>
                  </div>
               </div>
                     <?php  if($i%3 ==0){

                        echo '<div class="clearfix"></div>';
                      }?>

                  <?php }?>
            </div>
            <?php } ?>

         </div>
      </div>
   </div>
</div>
<!--//services-->
<!--/about-->
<div class="about wow fadeInDown" id="about_one">
   <div class="container">
      <div class="about-main_w3_agileits">
         <div class="col-md-6 about-left">
            <img src="<?php echo base_url('template/frontend/images/chef.jpg ')?>" alt="">
         </div>
         <div class="col-md-6 about-right_agileits">
            <h3>For Goof Taste</h3>
            <p>Nulla sodales efficitur consequat. Maecenas mi diam, imperdiet consectetur ultricies nec, convallis sit amet turpis.
               Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a class="active" href="#" data-toggle="modal" data-target="#myModal">Learn more</a>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</div>
<!--//about-->
<!--/tab_section-->
<div class="tabs_section" id="menu">
   <div class="container">
      <h5>Thực đơn đặc biệt</h5>
      <div id="horizontalTab">
         <ul class="resp-tabs-list">
            <li> BỮA SÁNG</li>
            <li> BỮA TRƯA</li>
            <li> ĐẶC BIỆT TRONG NGÀY</li>
            <li> ĐỒ UỐNG</li>

         </ul>
         <div class="resp-tabs-container wow fadeInDown">

            <div class="tab1">
               <div class="recipe-grid">

                  <?php foreach (array_chunk($list_menu_havefresh,4) as $list){?>
                  <div class="col-md-6 menu-grids">
                     <?php foreach ($list as $value){?>
                     <div class="menu-text_wthree">
                        <div class="menu-text-left">
                           <div class="rep-img">
                              <img src="<?php echo base_url()?>uploads/menu/<?php echo $value->img?>" alt=" " class="img-responsive">
                           </div>
                           <div class="rep-text">
                              <h4><?=$value->name?>............</h4>
                              <h6><?=$value->description?></h6>
                           </div>

                           <div class="clearfix"> </div>
                        </div>
                        <div class="menu-text-right">
                           <h4><?=$value->price?> $ </h4>
                        </div>
                        <div class="clearfix"> </div>

                     </div>
                     <?php }?>
                  </div>
                  <?php }?>

               </div>
               <div class="clearfix"></div>
            </div>
            <div class="tab2">
               <div class="recipe-grid">

                   <?php foreach (array_chunk($list_menu_havefresh2,4) as $list){?>
                      <div class="col-md-6 menu-grids">
                          <?php foreach ($list as $value){?>
                             <div class="menu-text_wthree">
                                <div class="menu-text-left">
                                   <div class="rep-img">
                                      <img src="<?php echo base_url()?>uploads/menu/<?php echo $value->img?>" alt=" " class="img-responsive">
                                   </div>
                                   <div class="rep-text">
                                      <h4><?=$value->name?>............</h4>
                                      <h6><?=$value->description?></h6>
                                   </div>

                                   <div class="clearfix"> </div>
                                </div>
                                <div class="menu-text-right">
                                   <h4><?=$value->price?> $ </h4>
                                </div>
                                <div class="clearfix"> </div>

                             </div>
                          <?php }?>
                      </div>
                   <?php }?>

               </div>
               <div class="clearfix"></div>
            </div>
            <div class="tab3">
               <div class="recipe-grid">

                   <?php foreach (array_chunk($list_menu_havefresh3,4) as $list){?>
                      <div class="col-md-6 menu-grids">
                          <?php foreach ($list as $value){?>
                             <div class="menu-text_wthree">
                                <div class="menu-text-left">
                                   <div class="rep-img">
                                      <img src="<?php echo base_url()?>uploads/menu/<?php echo $value->img?>" alt=" " class="img-responsive">
                                   </div>
                                   <div class="rep-text">
                                      <h4><?=$value->name?>............</h4>
                                      <h6><?=$value->description?></h6>
                                   </div>

                                   <div class="clearfix"> </div>
                                </div>
                                <div class="menu-text-right">
                                   <h4><?=$value->price?> $ </h4>
                                </div>
                                <div class="clearfix"> </div>

                             </div>
                          <?php }?>
                      </div>
                   <?php }?>

               </div>
               <div class="clearfix"></div>
            </div>
            <div class="tab4">
               <div class="recipe-grid">

                   <?php foreach (array_chunk($list_menu_havefresh4,4) as $list){?>
                      <div class="col-md-6 menu-grids">
                          <?php foreach ($list as $value){?>
                             <div class="menu-text_wthree">
                                <div class="menu-text-left">
                                   <div class="rep-img">
                                      <img src="<?php echo base_url()?>uploads/menu/<?php echo $value->img?>" alt=" " class="img-responsive">
                                   </div>
                                   <div class="rep-text">
                                      <h4><?=$value->name?>............</h4>
                                      <h6><?=$value->description?></h6>
                                   </div>

                                   <div class="clearfix"> </div>
                                </div>
                                <div class="menu-text-right">
                                   <h4><?=$value->price?> $ </h4>
                                </div>
                                <div class="clearfix"> </div>

                             </div>
                          <?php }?>
                      </div>
                   <?php }?>

               </div>
               <div class="clearfix"></div>
            </div>


      </div>
   </div>
</div>
<!-- /tabs -->
<!--//tab_section-->
<!--/services-->
<div class="choose">
   <div class="container">
      <div class="choose-main">
         <div class="col-md-5 choose-left">
            <h2>DỊCH VỤ ĐẶC BIỆT</h2>
         </div>
         <div class="col-md-7 choose-right">
            <?php $i= 0; foreach ( $list_service as $value){ ?>
               <div class="col-md-6 choose-right-top">
                  <h4><?= $value->title?></h4>
                  <p><?= $value->content?>.</p>
               </div>


               <?php $i++; if($i % 2 == 0 ){
                  echo  '<div class="clearfix"></div>';}
               ?>

            <?php   }?>


         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</div>
<!--//services-->
<!--/gallery-->
<div class="gallery" id="gallery">
   <div class="container">
      <div class="gallery-main">
         <div class="gallery-top">
            <?php foreach ($list_img_eight as $value){?>
            <div class="gallery-top-img portfolio-grids">
               <a href="<?php echo base_url('template/frontend/images/gal6.jpg ')?>" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
                  <img src="<?php echo base_url()?>template/frontend/images/<?php echo $value->img?> " class="img-responsive" alt="" />
                  <div class="p-mask">
                     <h4><span>Heading here</span></h4>
                  </div>
               </a>

            </div>
      <?php }?>

            <div class="gallery-top-img">
               <h3>OUR SPECIALS</h3>
               <span> </span>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="gallery-bottom">
            <div class="col-md-6 gallery-bottom-text">
               <p><?= $list_config->left?>.</p>
            </div>
            <div class="col-md-6 gallery-bottom-text">
               <p><?= $list_config->right?>.</p>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
</div>

<!--//gallery-->
<div class="reservation" id="book">
   <div class="book-form ">
      <h4 class="wow fadeInUp">Prearrange a Table.</h4>
      <form action="<?php echo base_url()?>index.php/Frontend/orderTables/postorderTable" method="post">
         <div class="col-md-3 form-time">
            <label><i class="fa fa-clock-o" aria-hidden="true"></i></label>
            <input type="text" id="timepicker" name="Time" placeholder="Time" class="timepicker form-control hasWickedpicker" value="Time"
                   onkeypress="return false;" required="">
         </div>
         <div class="col-md-3 form-date">
            <label><i class="fa fa-calendar" aria-hidden="true"></i> </label>
            <input id="phone" name="phone" type="text" value="" placeholder="Phone .."
                   required="">
         </div>
         <div class="col-md-3 form-date">
            <label><i class="fa fa-calendar" aria-hidden="true"></i> </label>
            <input id="datepicker1" name="calendar" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
                   required="">
         </div>
         <div class="col-md-3 form-left">
            <label><i class="fa fa-users" aria-hidden="true"></i></label>
            <select name="people" class="form-control">
               <option>No.of People</option>
               <option value="1">1 Person</option>
               <option  value="2">2 People</option>
               <option  value="3">3 People</option>
               <option  value="4">4 People</option>
               <option  value="5">5 People</option>
               <option  value="X">More</option>
            </select>
         </div>

         <div class="clearfix"> </div>
         <div class="col-md-3 form-left">
            <ul>
               <li><i class="fa fa-check-square-o" aria-hidden="true"></i>Over 10,000 restaurants Worldwide</li>
               <li><i class="fa fa-check-square-o" aria-hidden="true"></i>No booking fees</li>
            </ul>
         </div>
         <div class="col-md-3 form-left-submit">
            <input type="submit" value="Book a table">
         </div>
         <div class="clearfix"> </div>
      </form>

   </div>

</div>
<!--/customer-->
<div class="comments" id="client">
   <div class="container">
      <div class="comments-main">
         <div class="comments-head wow rollIn">
            <h3>Ý KIẾN TỪ KHÁCH HÀNG </h3>
            <p>Lorem ipsum dolor sit amet,vehicula vel sapien et</p>
         </div>
         <div class="comments-top">

            <?php $i= 0; foreach ($data  as $value){
                ?>
               <div class="col-md-4 comments-bottom">
                  <div class="comments-left">
                     <span class="fa fa-quote-right"></span>
                  </div>
                  <div class="comments-right">
                     <h3><?= $value->name?></h3>
                     <p class="para1"><?= $value->job?></p>
                     <p class="para2"><?= $value->content?></p>
                  </div>
                  <div class="clearfix"></div>
               </div>
               <?php
                   $i++;
                   if($i %3 ==0 ){
                       echo ' <div class="clearfix"></div>';
                   }
                   ?>
            <?php }?>

         </div>
      </div>
   </div>
</div>

<!--//customer-->
<!--/foorer-->
<!-- mail -->
<div class="mail " id="mail">
   <div class="container">
      <h3 class=" wow zoomIn">LIÊN HỆ</h3>
      <div class="mail_grids_wthree_agile_info wow wobble">
         <div class="col-md-7 mail_grid_right_agileits_w3 wow fadeInRight">
            <h5>Vui lòng điền vào biểu mẫu này để liên hệ với chúng tôi.</h5>
             <?php
             echo "<div class='mess_error'>";
             echo "<ul>";
             if(validation_errors() != ''){
                 echo "<li>".validation_errors()."</li>";
             }
             echo "</ul>";
             echo "</div>";
             ?>

            <form action="<?php echo base_url(); ?>index.php/Frontend/Contact/postContact" method="post">




               <div class="col-md-6 col-sm-6 contact_left_grid">
                  <input type="text" name="Name" placeholder="Tên" >
                  <input type="email" name="Email" placeholder="Email" >
               </div>
               <div class="col-md-6 col-sm-6 contact_left_grid">
                  <input type="text" name="Telephone" placeholder="Số điện thoại" >
                  <input type="text" name="Subject" placeholder="Chủ đề" >
               </div>
               <div class="clearfix"> </div>
               <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nội dung...';}" required="">Nội dung...</textarea>
               <input type="submit" value="Giửi">
               <input type="reset" value="Clear">
            </form>
         </div>
         <div class="col-md-5 contact-left">
            <h5>Thông tin liên hệ</h5>
            <div class="visit">
               <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
                  <span class="fa fa-home" aria-hidden="true"></span>
               </div>
               <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
                  <h4>Địa chỉ</h4>
                  <p><?= $list_config->address?></p>
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="mail-us">
               <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
                  <span class="fa fa-envelope" aria-hidden="true"></span>
               </div>
               <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
                  <h4>Email : </h4>
                  <p><a href="mailto:info@example.com"><?= $list_config->email?></a></p>
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="call">
               <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
                  <span class="fa fa-phone" aria-hidden="true"></span>
               </div>
               <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
                  <h4>Số điện thoại</h4>
                  <p>+<?= $list_config->phone?></p>
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="visit">
               <div class="col-md-2 col-sm-2 col-xs-2 contact-icon">
                  <span class="fa fa-clock-o" aria-hidden="true"></span>
               </div>
               <div class="col-md-10 col-sm-10 col-xs-10 contact-text">
                  <h4>Giờ làm việc</h4>
                  <p><?= $list_config->time_work?></p>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
         <div class="clearfix"> </div>
      </div>
      <div class="map_w3layouts">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6147757.32442003!2d8.222917766116648!3d41.203578759977894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2sItaly!5e0!3m2!1sen!2sin!4v1512728449699"
                 frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
   </div>
</div>
<!-- //mail -->
<!-- /contact -->
<div class="copy">
   <p>&copy; 2018 Luscious. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts.</a></p>

</div>
<!--/footer -->

<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            Nhà Hàng Hải Hậu
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
         <div class="modal-body">
            <img src="<?php echo base_url('template/frontend/images/banner1.jpg ')?>" alt=" " class="img-responsive" />
            <p>Ut enim ad minima veniam, quis nostrum
               exercitationem ullam corporis suscipit laboriosam,
               nisi ut aliquid ex ea commodi consequatur? Quis autem
               vel eum iure reprehenderit qui in ea voluptate velit
               esse quam nihil molestiae consequatur, vel illum qui
               dolorem eum fugiat quo voluptas nulla pariatur.</p>
         </div>
      </div>
   </div>
</div>
<!-- //bootstrap-modal-pop-up -->

<!-- js -->
<script type="text/javascript" src="<?php echo base_url('template/frontend/js/jquery-2.2.3.min.js')?>"></script>
<!-- //js -->
<!--search-bar-->
<script src="<?php echo base_url('template/frontend/js/main.js')?>"></script>
<!--//search-bar-->

<!-- js for portfolio lightbox -->
<script src="<?php echo base_url('template/frontend/js/jquery.chocolat.js')?> "></script>
<link rel="stylesheet " href="<?php echo base_url('template/frontend/css/chocolat.css')?>" type="text/css" media="all" />
<!--light-box-files -->
<script type="text/javascript ">
    $(function () {
        $('.portfolio-grids a').Chocolat();
    });
</script>
<!-- /js for portfolio lightbox -->
<!-- Calendar -->
<link rel="stylesheet" href="<?php echo base_url('template/frontend/css/jquery-ui.css')?>" />
<script src="<?php echo base_url('template/frontend/js/jquery-ui.js')?>"></script>
<script>
    $(function () {
        $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
    });
</script>
<!-- //Calendar -->

<!-- time -->
<script type="text/javascript" src="<?php echo base_url('template/frontend/js/wickedpicker.js')?>"></script>
<script type="text/javascript">
    $('.timepicker').wickedpicker({
        twentyFour: false
    });
</script>
<!-- //time -->

<script src="<?php echo base_url('template/frontend/js/responsiveslides.min.js')?>"></script>
<script>
    $(function () {
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 1000,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<!-- script for responsive tabs -->
<script src="<?php echo base_url('template/frontend/js/easy-responsive-tabs.js')?>"></script>
<script>
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!--// script for responsive tabs -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url('template/frontend/js/move-top.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('template/frontend/js/easing.js')?>"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<!-- start-smoth-scrolling -->

<script type="text/javascript">
    $(document).ready(function () {
        /*
                                   var defaults = {
                                         containerID: 'toTop', // fading element id
                                       containerHoverID: 'toTopHover', // fading element hover id
                                       scrollSpeed: 1200,
                                       easingType: 'linear'
                                    };
                                   */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript" src="<?php echo base_url('template/frontend/js/bootstrap-3.1.1.min.js')?>"></script>

   <script type="text/javascript" src="<?php echo base_url('template/frontend/js/wow.js')?>"></script>
   <script type="text/javascript">
      new WOW().init();
   </script>
 <?php if($this->session->flashdata('message')):?>
   <script type="text/javascript"> alert('Đặn bàn thành công') ; </script>
</div>
<?php endif;?>
</body>

</html>