

<?php
include "header.php";
 include "menu.php";
 


?>

        <section class="data_insert">
             <div class="container">
                <div class="row">
                      <div class="col-xl-12">
                          <?php
                          
                          $sql = "SELECT * FROM sliderInfoTable";

                          $result = $conn->query($sql);

                          if($result->num_rows > 0){

                                while($row = $result->fetch_object()){
                                    echo "<pre>";
                                    print_r($row);
                                    echo "</pre>";
                                }
            
                                
            
                            }else{
            
                                echo "No Data found";
            
                            }
                          
                          
                          ?>
                      </div>
                </div>
             </div>
        </section>


        <!-- new
     -->

     
 
    <?php
include "header.php"
?>

<!-- slider -->
    <!-- slider start -->
    <section class="slider">
        <!-- animation -->
        <div class="slider-container">
            <div class="row">
                <div class="col-xl-12">
               <h3>Hi. i am <span class="text-red ">Aisha</span> </h3> <br>
                </div>
            </div>
            <p class="typewriter">I'm a
                <span data-text="web developer., web designer., freelancer."></span>
            </p>
        </div>
    </section>
    <!-- slider end -->

     


  
<section class="banner d-flex " href="about.php" bg-"grey">

<div class="container">

     <div class="row">

        <div class="col-xl-12 about-h1">
            <h1 class="text-center">About Us</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-6 img-left img1">
            <img class="edu-img" src="img/ban60.jpg " alt="">
            <!--  -->

            <div class="content-right">
            <h1>hi I'm <span>AISHA</span> i'm a fullstack <br> <span>Web developer</span></h1>
          <h2> &  <span>php expert.</span></h2> 

            <p class="color-white w-300"> I have two years of professional experience as a <span class="color-red"> full-stack developer  </span> in the web development sector. I like coding. Using HTML, CSS, JavaScript, JQuery, Bootstrap, PHP, and SQL, I create amazing websites. I have completed a number of projects in my <span class="color-red">professional career</span> . I'll make a enough attempt to satisfy my clients' needs. I place a lot of value on the quality of my work and devote a lot of time to developing the application. I utilize HTML5, CSS3, Bootstrap, Java Script, and JQuery for front-end programming. My preference for backend development is PHP or SQL databases.</p>

           

        </div>
        </div>
            <!--  -->
             <!-- <button class="btn btn-dark img-btn">Click to see</button> -->

             <div class="education-details">
                <h3>STUDIED BSC  ENGINEERING AT NORTH SOUTH UNIVERSITY</h3>
            </div>


        <div class="col-xl-6 btn_effect">

        <!-- <div class="icon">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-linkedin" aria-hidden="true"></i>


            </div> -->
        <button class="btn btn-dark img-btn">Click to see</button>

        </div>




       
    </div>

</div>
</div>



</section>



 
 
<section class="banner single-banner service" href="service.html">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-xl-12  upper-about">
                    <span>FEATURES</span>
                    <h1 class="color-white">WHAT I DO</h1>
                </div>
            </div>

            <div class="row mt-5 py-5 allbox" >
                <div class="col-xl-4 box s-img">
                    <div class="s-box">
                        <h2 class="">Web Design </h2>
                        <p class="color-white" id="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque dolores excepturi eius aut tempore, eaque voluptate error accusantium beatae impedit quaerat soluta provident laborum odio illum </p>
                    </div>
                    </div>
                    


                <div class="col-xl-4 box s-img">
                    <div class="s-box active_box">

                        <h2>Web Development </h2>
                        <p class="color-white" id="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque dolores excepturi eius aut tempore, eaque voluptate error accusantium beatae impedit quaerat soluta!</p>
                    </div>
                    </div>


 
                <div class="col-xl-4 box s-img">
                    <div class="s-box">
                        <h2>Database Mysql </h2>
                        <p class="color-white " id="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque dolores excepturi eius aut tempore, eaque voluptate error accusantium beatae impedit quaera !</p>
                    </div>
                    </div>


 
                 
            </div>
             <!-- all box -->
        </div>
    </section>


    <!-- laptop -->
    <section class="img-box service ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 about-h1">
                    <h1 class="text-center">Service </h1>
                </div>
                <div class="row">
                    <div class="col-xl-4 all-img-box">
                        <div class="img-s-box">
                            <img src="img/img3.jpg" alt="">
                            <div class="img-content">
                                <h5> Frontend dDesign</h5>
                                <h3>Thea Service Provide for Only design</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 all-img-box">
                        <div class="img-s-box">
                            <img src="img/img2.jpg" alt="">
                            <div class="img-content">
                                <h5> Backend Developer</h5>
                                <h3>Thea Service Provide for Only development</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 all-img-box">
                        <div class="img-s-box">
                            <img src="img/img5.jpg" alt="">
                            <div class="img-content">
                                <h5>Full-stack Developer</h5>
                                <h3>Thea Service Provide for both Frontend & Backend development </h3>
                            </div>
                        </div>
                    </div>
                </div>


               



    </section>

    


 
    <section class="skill_sec" href="skill.html">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="skill_des">
                        <p> <h3 class="text-danger">Good day.</h3>

I appreciate you coming to my gig. You've come to the correct place if you're seeking for someone who can design a completely functional, needs-based website.



I'm a full-stack web developer named <b  class="text-green">Aisha</b>  . I using HTML5, CSS3, Bootstrap, JavaScript, JQuery, PHP, and Database Mysql to build modern websites. I've created numerous websites using a range of both front-end & backend web development methods and approaches. I can design a responsive website for you that will look fantastic on both little and big screens.
</p>
                    </div>

                    <!-- <div class="contactMain">
                        <li> <i class="fa fa-phone" aria-hidden="true"></i> 0123456789</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> freelanceraisha787@gmail.com</li>
                        <li><i class="fa fa-home" aria-hidden="true"></i>Dhaka,Bangladesh
                        </li>
                    </div> -->
                </div>

                <div class="col-xl-6">
                    <div class="skill">
                        <div class="skill-head">
                            <h1 class="text-danger text-center">SKILL</h1>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 98%" aria-valuenow="98%" aria-valuemin="98%" aria-valuemax="100">98% html</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 98%" aria-valuenow="90%" aria-valuemin="98%" aria-valuemax="100">98% css</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80%" aria-valuemin="80%" aria-valuemax="100">80% javascript</div>
                        </div>

                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="70%" aria-valuemin="90%" aria-valuemax="100">90% sql</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="75%" aria-valuemin="70%" aria-valuemax="100">70% jquery</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="75%" aria-valuemin="85%" aria-valuemax="100">85% php</div>
                        </div>

                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%" aria-valuenow="85%" aria-valuemin="85%" aria-valuemax="100">85% sql</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

 
<section class="team-sec demo-website">

<div class="container">

    <div class="row">
        <div class="col-xl-12">
            <div class="choose-title text-center">
                <h1 class="text-center text-danger font-weight-bold">Demo Website </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="single-box-team">
                <div class="main">
                    <div class="single-img-team">
                        <img src="img/Screenshot_2.png" alt="">

                    </div>

                    <div class="box-p team-con">
                        <h4 class="text-center  font-weight-bold">PERSONAL WEBSITE </h4>
                        <h5>Co-Founder</h5>
                        <p>adipisicing elid tempor in dolore magna alua. Ut brand enim ad minim veniamexercitation llamco laboris nisi ut aliqui.
                        </p>
                        <div class="team-icon">
                            <li> <a href="#" class="text-white"><i class="fa fa-facebook" aria-hidden="true"></i>
                        </a></li>
                            <li> <a href="#" class="text-white"><i class="fa fa-twitter" aria-hidden="true"></i>

                        </a></li>
                            <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>

                        </a></li>
                            <li> <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i>

                        </a></li>


                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-xl-4">
            <div class="single-box-team">
                <div class="main">
                    <div class="single-img-team">
                        <img src="img/Leadpages-Landing-Page-Builder.png" alt="">

                    </div>

                    <div class="box-p team-con">
                        <h4 class="text-center font-weight-bold">BLOG WEBSITE Devid</h4>
                        <h5>Co-Founder</h5>
                        <p>adipisicing elid tempor in dolore magna alua. Ut brand enim ad minim veniamexercitation llamco laboris nisi ut aliqui.
                        </p>
                        <div class="team-icon">
                            <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                                </a></li>
                            <li> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>

                                </a></li>
                            <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>

                                </a></li>
                            <li> <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i>

                                </a></li>


                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-xl-4">
            <div class="single-box-team">
                <div class="main">
                    <div class="single-img-team">
                        <img src="img/gig400.png" alt="">

                    </div>

                    <div class="box-p team-con">
                        <h4 class="text-center  font-weight-bold">BUSINESS & COMPANY WEBSITE</h4>
                        <h5>Co-Founder</h5>
                        <p>adipisicing elid tempor in dolore magna alua. Ut brand enim ad minim veniamexercitation llamco laboris nisi ut aliqui.
                        </p>
                        <div class="team-icon">
                            <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a></li>
                            <li> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
        
                                        </a></li>
                            <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
        
                                        </a></li>
                            <li> <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i>
        
                                        </a></li>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
</section> -->




<!-- css -->
.banner {
        width: 100%;
        height: 708px;
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        margin-top: -14px;
        margin-bottom: 43px;
        padding: -85px 20px;
        background: #37313133;
    }
    .img-left img {
        width: 210%;
        height: 600px;
        margin-left: 1px;
        border-radius: 6px;
        margin: -22px -615px;
        transform: translateX(-191px);
        /* padding: 12px 13px; */
    }
    .content-right {
        position: absolute;
        top: 47px;
        left: -698px;
        z-index: 1;
        /* width: 300px; */
        /* text-align: center; */
    }
    #service {
        height: 782px;
    }
    .s-box {
        /* border: 1px solid black; */
        width: 291px;
        margin: 10px 13px;
        padding: 11px 24px;
        height: 276px;
        box-shadow: 0px 3px 10px #00000063;
        transform: translateY(61px);
        text-align: center;
        cursor: pointer;
    }
    .allbox {
        padding: 20px 89px;
        margin: -105px;
    }