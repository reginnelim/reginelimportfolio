<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit about image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--FONT link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Allan:wght@400;700&family=Cookie&display=swap" rel="stylesheet">

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

        .bg-purple {
            background-color: #e8dff5;
        }
        .text-color-purple {
            color: #e8dff5;
        }

        .bg-pink {
            background-color: #fce1e4;
        }
        .text-color-pink {
            color: #fce1e4;
        }

        .bg-yellow {
            background-color: #ecb920;
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
            background-color: #daeaf6;
        }
        .text-color-blue {
            color: #daeaf6;
        }

        /*BUTTON HOVER*/
        .btn:hover {
            background-color: #ffd65d !important;
        }

        /*ERROR*/
        .error {
            background: #F2DEDE;
            color: #A94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
            margin: 20px auto;
        }

    </style>

  </head>
  <body>

    <!--hERO SECTION-->
    <section id="home" class="bg-pinkish-white" style="padding-top: 0;">
        <!--NAVIGATION MENU-->
        <nav class="navbar navbar-expand-lg bg-green py-3">
            <div class="container">
            <a class="navbar-brand navbar-brand-custom text-white">Welcome!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="./#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./#education-work">Education & Work Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./#graphic-works">Graphic Works</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

        <div class="container">
            <div data-aos="flip-left" class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <div class="card bg-blue">
                        <div class="card-body">
                            <h2 class="cookie-regular text-center text-color-yellow">Change About Picture</h2>
                            <h1 class="acme-regular text-center text-color-green">About Picture Upload</h1>
                            <form enctype="multipart/form-data" action="upload_about_image.php" method="post">
                                <?php if(isset($_GET['error'])){ ?>
                                    <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php }?>
                                <div class="mb-3">
                                    <label class="form-label">Upload Image</label>
                                    <input type="file" class="form-control" accept="image/*" name="my_image" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-yellow w-50 text-white" name="submit" value="Upload">Change About Picture</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <footer class="bg-green text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>My Portfolio Website</h5>
                    <p>&copy; 2024. Regine Lim All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <p>Contact us: Regine@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>