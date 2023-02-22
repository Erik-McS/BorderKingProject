<?php
    ini_set('display_errors',0);
    session_start();
    // header("refresh: 3")
?>


<!DOCTYPE html>
<html lang="en">
    <!--Student name: Erik McSeveney-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META HTTP-EQUIV=”refresh” CONTENT=”3″>
    <!--Importing Bootstrap-->
     <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> 

    <!--Icons library called Font Awesome 5-->
    <script src="https://kit.fontawesome.com/9edb04f5e9.js" crossorigin="anonymous"></script>

    <!--Importing Lato fonts from Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap" rel="stylesheet">

    <!--Linking the CSS file-->
    <link rel="stylesheet" href="style/style.css">

    <title>Border King</title>
</head>

<!-- the navigation bar buttons will be added by a function called by the onload event-->
<!-- the php script change the navbar depending if a user is logged or not -->

<?php
if(!$_SESSION['id']){?>
<body onload="addButtons()">
<?php }
else {?>
<body onload="addLoggedButtons()">
<?php } ?>


<!--Header section-->
    <!--
        The header is a row, containing 3 columns: 3-6-3 
        first column contains the site logo image
        second colums contains the shop name image
        third will containt the login page
    -->
<header class="container-fluid bg-white d-flex flex-column">
    <!-- Bootstrap row container-->
    <div class="row bg-white" id="header">
        <!--First column-->
        <div class="col-md-3">
            <img src="images/bike_logo2.png" class="logoBBK" alt="Logo">
        </div>
        <!--Second column-->
        <div class="col-md-7 logoTextBBK">
            <img src="images/bike_text_logo.png" class="img-fluid" alt="Logo">
        </div>
        <!--Third column-->
        <div class="col-md-2" id="loginSpace">
        <!--
        <iframe src="pages/login.html" frameborder="0"></iframe>
        -->
        <?php
            if(!$_SESSION['id']){?>
                <object type="text/html" data="pages/login.html" height="517" style="overflow:auto">
            <?php }
            else {?>
            <object type="text/html" data="php/useraccount.php" height="517" style="overflow:auto">
            <?php } ?>
    </object>
        </div>
    </div>
</header>

<!--
    The main body of the website will contain 3 columns
    the navigation bar on the left
    the main content on the middle, this is where the other pages will load
    an image on the left
-->
<section class="container-fluid d-flex flex-column">
    <!-- The main section is contained in a bootstrap row
    columns will be divided as 3-6-3 -->

    <div class="row bodyBBK">
        <!-- 
            Start of the first row
            the first row is the navigation bar
        -->   
        <div class="col-md-3 flex-column" id="navBar">
            <!--This container will have the navigation button assigned with JavaScript
                the script will be executed with the Onload event-->
            <!-- Each button is styled in CSS-->

        </div>
        <!-- 
            Second section is the main content container
            the other pages will be displayed in this container using JS
        -->
        
        <div class="col-md-6 flex-fill d-flex" id="mainText"> 

            <!--Empty header, text added on the onload event-->
            <div><h2 class="textWhite" id="WelcomeText"></h2><br></div>
              <br>
            <!--Just a paragraph to filll the main area-->
                <p class="textWhite">      
                    
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin porta quis sapien et pellentesque. Fusce ipsum elit, aliquet eu vestibulum a, vestibulum a ante. 
                    Nam iaculis magna vel semper suscipit. Vivamus volutpat cursus orci nec ultrices. Morbi sodales finibus urna in facilisis. Morbi sodales nibh tincidunt libero condimentum hendrerit. 
                    Praesent velit nulla, dignissim eget nisl sit amet, volutpat auctor dolor. Maecenas a tortor nulla. Cras laoreet, erat bibendum tristique varius, neque metus accumsan velit, elementum interdum massa erat et mi. 
                    Vestibulum dignissim nisi mauris, et dignissim nunc viverra vel. Suspendisse tempor egestas felis sed pharetra.
                    <br><br>
                    Nam ullamcorper, lectus blandit cursus euismod, turpis tellus malesuada tortor, vitae tempus turpis lorem in tellus. Nullam non urna id erat gravida convallis quis non enim. 
                    Duis vitae magna non ipsum lobortis aliquet. Nam ac leo in tellus sagittis dictum. Duis ac ex fermentum nunc mattis blandit. Nulla leo nisl, pretium sed dui et, posuere scelerisque diam. 
                    Phasellus luctus a nibh vitae pulvinar.
                    Pellentesque ullamcorper rutrum facilisis. Proin porta cursus neque, vitae porta nibh eleifend at. Fusce a mattis odio. Nullam porta elementum porta. 
                    Suspendisse lobortis leo magna, sit amet malesuada leo varius sit amet. Vivamus a sodales lacus, ac eleifend nunc. Nunc vitae velit id arcu mollis finibus eget ac odio. Curabitur eget tortor vel ex accumsan hendrerit.
                    Aenean auctor, quam eu efficitur finibus, est nisi facilisis arcu, sagittis luctus justo neque sed orci. 
                    <br><br>
                    Etiam a mauris at lectus fringilla molestie. 
                    Maecenas et libero auctor, pretium massa sed, lacinia justo. Aliquam commodo vestibulum augue in sodales. Sed magna dui, feugiat id pretium vitae, pellentesque sed metus. 
                    Mauris iaculis est a purus sagittis laoreet. Vestibulum venenatis neque in neque ultricies, sit amet accumsan dui pharetra. Duis et turpis convallis, bibendum dolor vitae, finibus elit. Nulla feugiat quis mi nec aliquet.
                    Nunc non vulputate tortor. Nam non dolor ut velit finibus posuere. Aliquam aliquam gravida lorem, lacinia egestas sapien dapibus eget. Phasellus non malesuada libero. 
                    Aliquam dignissim nec lorem quis laoreet. Ut purus elit, vestibulum eget fringilla ut, blandit ut sem. 
                    <br><br>
                    Donec hendrerit risus quis pellentesque pretium. 
                    </p>
                </p>
        </div>
        <!--
            last colum is a persistent image
        -->
        <div class="mh-100 col-md-3 flex-fill d-flex h-100">
            <img src="images/bike_pic2a.jpg" alt="Biking image" class="BikingImage">
           
        </div>
    </div>

<!--
    last section will be the shop address, contact details and opening hours
    column format 3-6-3
-->

    <div class="row body2BBK">

        <div class="col-md-3 textWhite">
            <b>
                Bike King Borders <br>
                177 Marik Lane <br>
                G22 UMM Glasgow <br>
                Tel: 0141 542 44 55
            </b>
        </div>
        <div class="col-md-6"></div>
        <div class="col-md-3 textWhite">
            <b>
                Opening hours: <br>
                Monday to Saturday: 9h-20h <br>
                Sunday: 10h30-17h
            </b>
        </div>



    </div>


</section>
    
<!-- Loading the JavaScript file-->
<script type="text/javascript" src="scripts/scripts.js"></script>   
</body>
</html>