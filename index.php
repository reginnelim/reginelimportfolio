<!doctype html>
<?php
    session_start();
    $_SESSION['loggedin'] = false;
    
    require_once('db.php');
    $query = "select * from about";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);

    $querywork = "select * from work";
    $resultwork = mysqli_query($conn,$querywork);
    $rowwork = mysqli_fetch_assoc($resultwork);

    $queryeduc = "select * from educ";
    $resulteduc = mysqli_query($conn,$queryeduc);
    $roweduc = mysqli_fetch_assoc($resulteduc);

    $queryeduc2 = "select * from educ where educnum=2";
    $resulteduc2 = mysqli_query($conn,$queryeduc2);
    $roweduc2 = mysqli_fetch_assoc($resulteduc2);

    $querycont = "select * from contacts";
    $resultcont = mysqli_query($conn,$querycont);
    $rowcont = mysqli_fetch_assoc($resultcont);

    $querygallery = "select * from gallerydb";
    $resultgallery = mysqli_query($conn,$querygallery);
    $rowgallery = mysqli_fetch_assoc($resultgallery);
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Portfolio Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--FONT link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Allan:wght@400;700&family=Cookie&display=swap"
        rel="stylesheet">

    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /*SECTION*/
        section {
            height: 100dvh;
            padding-top: 30px;
            padding-bottom: 30px;
        }

        /*FONTS*/

        /*title*/
        .eras-bold-itc {
            font-family: "Arial Black", sans-serif;
            font-weight: 500;
            font-style: bold;
        }

        .bookman-old-style {
            font-family: "Bookman Old Style", cursive;
            font-weight: 500;
            font-style: italic;
        }
        .acme-regular {
            font-family: "Acme", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        /*subtitle*/
        .cookie-regular {
            font-family: "Cookie", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .navbar-brand-custom:hover {
            cursor: default;
        }

        .centered-div {
            position: relative;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border-radius: 10px;
        }

        /*COLOR PALETTE*/
        .bg-pinkish-white {
            background-color: #fff7f8;
        }

        .bg-light-green {
            background-color: #c0eee5;
        }

        .bg-purple {
            background-color: #e8dff5;
        }

        .text-color-purple {
            color: #e8dff5;
        }

        .bg-pink {
            background-color: #ffd5d4;
        }

        .text-color-pink {
            color: #fce1e4;
        }

        .bg-yellow {
            background-color: #fdfbd4;
        }

        .text-color-yellow {
            color: #ecb920;
        }

        .bg-green {
            background-color: #25b399;
        }

        .text-color-green {
            color: #25b399;
        }

        .bg-blue {
            background-color: #b3ebf2;
        }

        .text-color-blue {
            color: #daeaf6;
        }

        /*GALLERY STYLING*/
        img {
            max-width: 100%;
        }
		
		.container img {
			height: 100%;
			width: 100%
			padding-bottom: 15px;
		}
		
        .gallery {
            background-color: #dbddf1;
            padding: 80px 0;
        }

        .gallery img {
            background-color: #ffffff;
            padding: 15px;
            width: 100%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }

        #gallery-modal .modal-img {
            width: 100%;
        }

        /*BUTTON HOVER*/
        .btn:hover {
            background-color: #ffd65d !important;
        }

        section {
            min-height: 100vh; /* minus the height of the footer */
        }
		
		

  
}

    </style>

</head>

<body>

    <!--hERO SECTION-->
    <section id="home" class="bg-pinkish-white" style="padding-top: 0; height: auto;">
        <!--NAVIGATION MENU-->
        <nav class="navbar navbar-expand-lg bg-green py-3">
            <div class="container">
                <a class="navbar-brand navbar-brand-custom text-white fw-bold">Welcome!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about">About Me</a>
                        </li> 
						<li class="nav-item">
                            <a class="nav-link text-white" href="#industry">Industry Visit Experiences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#education-work">Education & Work Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#graphic-works">Certifications</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="d-flex justify-content-center custom-div align-items-center"
            style="padding-top: 5%; margin-bottom: 10%;">
            <div class="text-center">  
                <h1 class="text-color-yellow bookman-old-style">Hi, I'm Regine</h1>
                <h4 class="text-color-green"><?php echo $row["email"] ?> | <?php echo $row["contactnum"] ?></h4>
				<img src="admin_area/assets/intro.png ?>" alt="user profile" class="container">
			</div>
        </div>

    </section>

    <!--ABOUT SECTION-->
    <section style="height: auto;" id="about" class="bg-yellow">
        <div class="container">
            <h1 data-aos="fade-left" class="acme-regular display-6 text-color-green text-center">About Me</h1>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">

                <!--ABOUT TEXT-->
                <div class="col">
                    <div data-aos="fade-right">
                        <div class="text-center">
                            <h2 class="cookie-regular text-color-yellow">hey there!</h2>
                            <h1 class="acme-regular text-color-green">I'm <?php echo $row["name"] ?></h1>
                        </div>
                        <hr>
                        <div>
                            <p><?php echo $row["intro"] ?></p>
                        </div>
                    </div>
                </div>

                <!--ABOUT IMAGE-->
                <div data-aos="fade-up" class="col">
                    <img class="img-fluid ms-5 d-none d-md-block" src="admin_area/assets/Me.png ?>" style="height: 630px;"
                        alt="about image">
                </div>

            </div>
            <a href="#education-work" class="text-color-yellow"><i class="bi bi-caret-down-fill fs-1"></i></a>
        </div>
    </section>
	
	<!--INDUSTRY SECTION-->
    <section style="height: auto;" id="industry" class="bg-pink">
        <div class="container">
            <h1 data-aos="fade-left" class="acme-regular display-6 text-color-green text-center">Industry Visit Experience</h1>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">

                <!--INDUSTRY TEXT-->
                <div class="col">
                    <div data-aos="fade-right">
                        <div class="text-center">
                            <h1 class="cookie-regular text-color-green"></br>✈️ Day 1: Touchdown in Manila</h1>
                        </div>
                        <hr>
                        <div>
                            <p>Our OJT journey officially began with an early morning flight from <b>Zamboanga to Manila</b>. The moment we landed, the excitement 
							kicked in and we were finally stepping into the first leg of our internship adventure. After settling in, we had lunch together to
							fuel up for the day ahead. By 1:00 PM, we kicked off our <b>Manila tour</b>, starting with one of the most iconic spots in the city which is Rizal
							Park. It was more than just sightseeing, standing in a place so rich with history reminded us of how far we’ve come and how much 
							we were about to experience.</br></br> From there, we continued exploring, taking in the energy of the capital city and preparing ourselves for the busy yet meaningful days ahead.</p>
                        </div>
                    </div>
                </div>

                <!--INDUSTRY IMAGE-->
                <div data-aos="fade-up" class="col">
                    <img class="img-fluid ms-5 d-none d-md-block" src="admin_area/assets/day1.png ?>" style="height: 630px;"
                        alt="about image">
                </div>

            </div>
			
			<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">
			
				<!--INDUSTRY IMAGE-->
                <div data-aos="fade-up" class="col">
                    <img class="img-fluid ms-5 d-none d-md-block" src="admin_area/assets/day2.png ?>" style="height: 630px; padding-right: 7%;""
                        alt="about image">
                </div>
				
                <!--INDUSTRY TEXT-->
                <div class="col">
                    <div data-aos="fade-left">
                        <div class="text-center">
                            <h1 class="cookie-regular text-color-green"></br>🌊 Day 2: Exploring Subic</h1>
                        </div>
                        <hr>
                        <div>
                            <p>On our second day, we traveled to <b>Subic Bay Freeport Zone</b>, a place known for its mix of natural beauty and industrial progress. 
							The fresh air, clean surroundings, and organized layout of the area made it feel completely different from the busy city life we experienced in Manila.
							We also visited the <b>Subic Bay Metropolitan Authority (SBMA)</b>, where we learned about how the Freeport Zone is managed and maintained. 
							One of the highlights was discovering how technology plays a big role in their operations. SBMA uses various IT systems for logistics, 
							traffic management, port monitoring, and environmental regulation. These innovations help ensure the area runs efficiently, securely, 
							and supporting both local and international businesses. It was inspiring to see how digital tools and strategic 
							planning can come together to transform a former military base into a model of smart governance and development.</br> </br>
							This day was both relaxing and eye-opening, showing us how nature, business, and technology can thrive in harmony.</br></p>
                        </div>
                    </div>
                </div>

            </div>
			
			<!--copy-->
			<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">

                <!--INDUSTRY TEXT-->
                <div class="col">
                    <div data-aos="fade-right">
                        <div class="text-center">
                            <h1 class="cookie-regular text-color-green"></br>🏛️ Day 3: A Walk Through History</h1>
                        </div>
                        <hr>
                        <div>
                            <p>Our third day was all about culture, heritage, and national pride. We started with a visit to the <b>National Museum of Natural History</b>,
							where we marveled at exhibits showcasing the Philippines' rich biodiversity. From towering tree replicas to preserved native species, 
							it was a fascinating mix of science and storytelling that reminded us how beautiful and unique our country truly is. Next, we headed to 
							the <b>Museo ni Manuel Quezon</b>, where we learned about the life and legacy of one of the most influential presidents in Philippine history. 
							Walking through the halls filled with historical artifacts and personal items gave us a deeper appreciation for his contributions to the nation.
							To wrap up the day, we explored the <b>Presidential Car Museum</b>, a hidden gem that showcased the official vehicles used by past Philippine
							presidents. It felt like stepping into a moving timeline, with each car telling its own story and representing different eras of leadership and style.</br></br>
							This day wasn’t just educational. It was inspiring and reminded us of our roots and the leaders who shaped the path we walk on today.</p>
                        </div>
                    </div>
                </div>

                <!--INDUSTRY IMAGE-->
                <div data-aos="fade-up" class="col">
                    <img class="img-fluid ms-5 d-none d-md-block" src="admin_area/assets/day3.png ?>" style="height: 630px;"
                        alt="about image">
                </div>

            </div>
			
			
			<!--copy-->
			<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">
			
                <div data-aos="fade-up" class="col">
                    <img class="img-fluid ms-5 d-none d-md-block" src="admin_area/assets/day4.png ?>" style="height: 630px; padding-right: 7%;""
                        alt="about image">
                </div>
				
                <div class="col">
                    <div data-aos="fade-left">
                        <div class="text-center">
                            <h1 class="cookie-regular text-color-green"></br>🏭💵 Day 4: Power and Currency</h1>
                        </div>
                        <hr>
                        <div>
                            <p>Day 4 was a deep dive into two very different but equally important industries: technology and finance.
							Our first stop was at <b>Hytec Power Inc.</b>, where we were introduced to the company’s role in providing advanced technical and industrial 
							equipment to schools and institutions across the country. We saw how their machines are used for training in engineering and automation, 
							giving students hands-on experience with industry-grade tools. It was exciting to see how technology is being used to improve education 
							and prepare the future workforce. In the afternoon, we visited the <b>Bangko Sentral ng Pilipinas (BSP)</b>. This was one of the most fascinating
							parts of our trip so far. We were given a behind-the-scenes look at how Philippine banknotes are designed and produced, from security
							features to printing processes. It was impressive to learn how much technology, precision, and care go into making something we use every day.</br> </br>
							This day opened our eyes to how power and value, both literally and economically, are built and protected through innovation, discipline, and smart systems.</br></p>
                        </div>
                    </div>
                </div>

            </div>
			
			<!--copy-->
			<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">

                <!--INDUSTRY TEXT-->
                <div class="col">
                    <div data-aos="fade-right">
                        <div class="text-center">
                            <h1 class="cookie-regular text-color-green"></br>🚦🚈 Day 5: Systems That Keep the City Moving</h1>
                        </div>
                        <hr>
                        <div>
                            <p>Day 5 gave us a closer look at the systems that keep a city as busy as Metro Manila organized and moving.
							Our first stop was the <b>Metropolitan Manila Development Authority (MMDA)</b>. We learned how they manage traffic flow, 
							urban planning, and public safety across the metro. Their command center was especially impressive, equipped with 
							real-time monitoring screens, surveillance feeds, and traffic data analytics. It showed us how technology is used 
							to make quick decisions during emergencies, manage congestion, and coordinate across different government units.
							Next, we visited the <b>Light Rail Transit (LRT) system</b>. There, we saw how public transportation is secured and maintained. 
							We were introduced to the security protocols in place, such as surveillance systems, access control, and emergency response 
							procedures. We also learned about the technology behind train operations, including signaling systems and power controls.</br></br>
							It was eye-opening to see how coordination, innovation, and technology come together to keep a large city running smoothly and safely</p>
                        </div>
                    </div>
                </div>

                <!--INDUSTRY IMAGE-->
                <div data-aos="fade-up" class="col">
                    <img class="img-fluid ms-5 d-none d-md-block" src="admin_area/assets/day5.png ?>" style="height: 630px;"
                        alt="about image">
                </div>
            </div>
			
			<!--copy-->
			<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">
			
                <div data-aos="fade-up" class="col">
                    <img class="img-fluid ms-5 d-none d-md-block" src="admin_area/assets/day6.png ?>" style="height: 630px; padding-right: 7%;""
                        alt="about image">
                </div>
				
                <div class="col">
                    <div data-aos="fade-left">
                        <div class="text-center">
                            <h1 class="cookie-regular text-color-green"></br>🏞️ Day 6: Baguio City Highlights</h1>
                        </div>
                        <hr>
                        <div>
                            <p>Day 6 took us to the cool and scenic landscapes of <b>Baguio City</b>, a refreshing change from the hustle and heat of the lowlands.
							We began our tour with a visit to the prestigious <b>Philippine Military Academy (PMA)</b>. Walking around the campus gave us a glimpse 
							of the discipline, structure, and dedication it takes to serve in the military. The wide open grounds and historical displays made 
							the experience both peaceful and inspiring. Next, we headed to <b>Mines View Park</b>, where we enjoyed breathtaking views of the mountains 
							and valleys. It was the perfect spot for photos, souvenirs, and a bit of local culture. Then we stopped by the <b>Bell Church</b>, a serene 
							and beautifully designed place that reflects the city's Chinese-Filipino heritage. The rest of the day was spent roaming around the city, 
							enjoying the cool breeze, local food, and relaxed atmosphere that Baguio is known for. </br> </br>
							 It was the perfect way to unwind and appreciate the cultural and natural beauty of Baguio city.</br></p>
                        </div>
                    </div>
                </div>
            </div>
			
			<!--copy-->
			<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">

                <!--INDUSTRY TEXT-->
                <div class="col">
                    <div data-aos="fade-right">
                        <div class="text-center">
                            <h1 class="cookie-regular text-color-green"></br>☕🚐 Day 7: A Bittersweet Farewell</h1>
                        </div>
                        <hr>
                        <div>
                            <p>Our final day began with a calm and cozy morning in <b>Baguio City</b>. We visited a local café, enjoying hot drinks and light 
							conversations while taking in the chilly breeze one last time. It was the perfect setting to relax, reflect, and soak in the 
							last few hours of our unforgettable journey. In the afternoon, we packed up and began our ride back home to <b>Zamboanga City</b>. The long drive gave 
							us time to rest, revisit our favorite memories, and appreciate everything we had experienced throughout the tour.</br></br>
							Though we were leaving the places behind, we carried home valuable lessons, new friendships, and memories that will last far beyond this OJT journey.</p>
                        </div>
                    </div>
                </div>

                <!--INDUSTRY IMAGE-->
                <div data-aos="fade-up" class="col">
                    <img class="img-fluid ms-5 d-none d-md-block" src="admin_area/assets/day7.png ?>" style="height: 630px;"
                        alt="about image">
                </div>
            </div>
			
            <a href="#education-work" class="text-color-yellow"><i class="bi bi-caret-down-fill fs-1"></i></a>
        </div>
    </section>


    <!--EDUCATION & WORK EXPERIENCE SECTION-->
    <section id="education-work" class="bg-purple" style="height: auto;">
        <div class="container mb-5">
            <div data-aos="fade-right" class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 pt-2">
                <div class="col">
                    <div>
                        <div class="text-center">
                            <h1 class="acme-regular display-6 text-color-green">Education</h1>
                        </div>
                        <hr>
                        <h2 class="acme-regular text-color-yellow">Tertiary Education</h2>
                        <div>
                            <p><?php echo $roweduc["descrip"] ?></p>
                            <p><?php echo $roweduc["school"] ?></p>
                            <p><?php echo $roweduc["address"] ?></p>
                            <p>Year Graduated <span><?php echo $roweduc["year"] ?></span></p>
                        </div>

                        <!--SECONDAR EDUCATION-->
                        <h2 class="acme-regular text-color-yellow mt-4">Secondary Education</h2>
                        <div class="mb-5">
                            <p><?php echo $roweduc2["school"] ?></p>
                            <p><?php echo $roweduc2["address"] ?></p>
                            <p>Year Graduated <span><?php echo $roweduc2["year"] ?></span></p>
                        </div>

                    </div>
                </div>

                <!--WORK EXPERIENCES-->
                <div class="col">
                    <div>
                        <div class="text-center">
                            <div>
                                <h1 class="acme-regular display-6 text-color-green">Work Experiences</h1>
                            </div>
                        </div>
                        <hr>      
                        <?php     
                             while ($row = mysqli_fetch_assoc($resultwork)) { 
                                 // code...
                                echo "<div>";
                                    $row['worknum'];
                                    echo "<p class='fw-bold fs-4 text-color-yellow'>".($row['jobtitle'])."</p>";
                                    echo "<p>".($row['title'])."</p>";
                                    echo "<p>".($row['address'])."</p>";
                                    echo "<p>".($row['year'])."</p>";
                                echo "</div>";
                                echo "<hr>";
                             }       
                        ?>
                        
                         <!--
                        <div>
                            <p class="fw-bold fs-4 text-color-yellow">Graphic Designer</p>
                            <p>Gateway Mall</p>
                            <p>Zamboanga City, Philippines 7000.</p>
                            <p>Febuary 2020-August 2022</p>
                        </div>
                        <hr>
                        <div>
                            <p class="fw-bold fs-4 text-color-yellow">Graphic Designer</p>
                            <p>Southway Mall</p>
                            <p>Zamboanga City, Philippines 7000.</p>
                            <p>November 2022-September 2023</p>
                        </div>
                        -->
                        
                    </div>
                </div>

            </div>
            <a href="#graphic-works" class="text-color-yellow"><i class="bi bi-caret-down-fill fs-1"></i></a>
        </div>
    </section>

    <!--GRAPHIC WORKS SECTION-->
    <section id="graphic-works" class="bg-blue" style="height: auto;">
        <div class="container mb-5">
            <div data-aos="fade-up" class="text-center mb-3">
                <!--<h2 class="cookie-regular text-color-yellow">Here are some of My Works</h2>-->
                <h1 class="acme-regular text-color-green">Certifications</h1>
            </div>
            <div data-aos="fade-right" class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/assets/cscprof.png" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/assets/cscsub.jpg" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/assets/cert1.png" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/assets/cert2.png" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/assets/cert3.jpg" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <img src="admin_area/assets/cert4.jpg" class="gallery-item" alt="gallery">
                        </div>
                    </div>
                </div>
            </div>
            <a href="#contact" class="text-color-yellow"><i class="bi bi-caret-down-fill fs-1"></i></a>
        </div>
    </section>

    <!--CARD IMAGE Modal -->
    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="img/1.jpg" class="modal-img" alt="modal img">
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    <footer class="bg-green text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php
                        $query = "select * from about";
                        $result = mysqli_query($conn,$query);
                        $row = mysqli_fetch_assoc($result);
                    ?>
                    <h5>My Portfolio Website</h5>
                    <p>&copy; 2025. <?php echo $row["name"] ?> All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <p>Contact us: <?php echo $row["email"] ?></p>
                </div>
            </div>
        </div>
    </footer>

    <!--CARD IMAGE WHEN CLICKED-->
    <script>
        document.addEventListener("click", function (e) {
            if (e.target.classList.contains("gallery-item")) {
                const src = e.target.getAttribute("src");
                document.querySelector(".modal-img").src = src;
                const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
                myModal.show();
            }
        })
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>