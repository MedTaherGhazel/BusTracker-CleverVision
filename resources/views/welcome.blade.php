<html>
<title> CleverVision </title>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('css/home.css') }}">
    <link rel="stylesheet" href="/webjars/bootstrap/5.1.3/css/bootstrap.min.css">
    <script src="/webjars/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</head>

<body>

<!--Navigation Bar-->
<div class="logo">
    <h1> CleverVision </h1>
</div>
<span id="close"> <img style="width: 25px;" src="http://www.pvhc.net/img5/onbbqnqzkjrtvirmiqnp.png" alt="CLOSE"> </img> </span>
<span id="menu"> <img style="width: 25px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR11WXR-a18XfNZknL7S4lu0lLyC4aWZPY4sLd4wNHUNv9So2gd" alt="MENU"> </span>
<nav>
    <ul>
        <li> <a href=""> HOME </a> </li>
        <li> <a href="/login"> LOGIN </a> </li>
        <li> <a href="#about"> ABOUT </a> </li>
        <li> <a href="#"> CONTACT </a> </li>
    </ul>

</nav>
<!--Navigation Bar-->
<!--Hero Image-->
<header>
    <div class="header-text">
        <h1> WE LOVE <br><span id="photography"> CODING </span></h1>
        <p class="typing animate"> We are here to represent to you our web application which help ISETB's students to track bus in realtime</p>
        <button onclick="location.href = '/register';"> Register Here</button>
    </div>
</header>
<div  class="about">
     <h1 class="title">Our Features:</h1>
    <br>
    <br>
    <div class="features">
        <div class="features__item">
            <svg class="features__icon" viewBox="0 0 448 512" width="100" title="lock">
                <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z" />
            </svg>
            <h2 id="about" class="features__title">Realtime location updates</h2>
            <p class="features__description">
                In the context of bus tracking, it means that the location of the bus is transmitted to a central server in real-time as the bus moves along its route</p>
        </div>

        <div class="features__item">
            <svg class="features__icon" viewBox="0 0 512 512" width="100" title="chart-bar">
                <path d="M332.8 320h38.4c6.4 0 12.8-6.4 12.8-12.8V172.8c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v134.4c0 6.4 6.4 12.8 12.8 12.8zm96 0h38.4c6.4 0 12.8-6.4 12.8-12.8V76.8c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v230.4c0 6.4 6.4 12.8 12.8 12.8zm-288 0h38.4c6.4 0 12.8-6.4 12.8-12.8v-70.4c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v70.4c0 6.4 6.4 12.8 12.8 12.8zm96 0h38.4c6.4 0 12.8-6.4 12.8-12.8V108.8c0-6.4-6.4-12.8-12.8-12.8h-38.4c-6.4 0-12.8 6.4-12.8 12.8v198.4c0 6.4 6.4 12.8 12.8 12.8zM496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z" />
            </svg>
            <h2 class="features__title">Increase in resource efficienty</h2>
            <p class="features__description">Improving production processes: By optimizing production processes, reducing waste, and using energy-efficient equipment, less energy and materials are needed to produce the same output.</p>
        </div>

        <div class="features__item">
            <svg class="features__icon" viewBox="0 0 640 512" width="100" title="user-shield">
                <path d="M622.3 271.1l-115.2-45c-4.1-1.6-12.6-3.7-22.2 0l-115.2 45c-10.7 4.2-17.7 14-17.7 24.9 0 111.6 68.7 188.8 132.9 213.9 9.6 3.7 18 1.6 22.2 0C558.4 489.9 640 420.5 640 296c0-10.9-7-20.7-17.7-24.9zM496 462.4V273.3l95.5 37.3c-5.6 87.1-60.9 135.4-95.5 151.8zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm96 40c0-2.5.8-4.8 1.1-7.2-2.5-.1-4.9-.8-7.5-.8h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c6.8 0 13.3-1.5 19.2-4-54-42.9-99.2-116.7-99.2-212z" />
            </svg>
            <h2 class="features__title">Improved attendance</h2>
            <p class="features__description">With bus tracking, students are more likely to arrive at school on time, reducing absenteeism and improving academic performance.</p>
        </div>
    </div>
</div>
<!--Hero Image-->
<!-- Site footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">CleverVision <i>CODE WANTS TO BE SIMPLE </i> e code. CleverVision focuses on providing the most efficient code or snippets as the code wants to be simple. We are programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Categories</h6>
                <ul class="footer-links">
                    <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                    <li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
                    <li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
                    <li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
                    <li><a href="http://scanfcode.com/category/android/">Android</a></li>
                    <li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="http://scanfcode.com/about/">About Us</a></li>
                    <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                    <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
                    <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
                    <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by
                    <a href="#">CleverVision</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
 
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>
