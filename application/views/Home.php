<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css" />

    <title>Playground Isekai Yokai</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Playground Isekai Yokai</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log in</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center mb-5">
        <img style="object-fit: cover; width: 200px; height: 200px;" class="rounded-circle" src="<?= base_url() ?>assets/img/4.jpg" />
        <h1 class="display-4">Hello, my name is Mahesha S.K</h1>
        <p class="lead">Webmaster | Programmer</p>
        <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f84d4d" fill-opacity="1" d="M0,160L80,144C160,128,320,96,480,117.3C640,139,800,213,960,213.3C1120,213,1280,139,1360,101.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg> -->
    </section>
    <!-- End Jumbotron -->

    <!-- About -->
    <section id="about" class="mt-5">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Tentang saya</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p>Nama saya Mahesha Satria Kurunanda Tinggal di Kalimantan Timur , Bontang Utara.
                    </p>
                </div>
                <div class="col-md-4">
                    <img style="width: 240px; height: 240px; object-fit: cover; border-radius: 20px" src="<?= base_url() ?>assets/img/1.jpg" alt="">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f84d4d" fill-opacity="1" d="M0,64L48,58.7C96,53,192,43,288,42.7C384,43,480,53,576,85.3C672,117,768,171,864,160C960,149,1056,75,1152,58.7C1248,43,1344,85,1392,106.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>

    <!-- End About -->

    <!-- Status -->
    <section id="status">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2 class="bg-white pt-1 pb-1 text-danger" style="border-radius: 20px">Hobi</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="row col-md mb-3 justify-content-center">
                    <div class="bg-white p-2" style="border-radius: 20px">
                        <img class="w-100" style="border-radius: 20px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWfntIO6vdSMYI05AxsZfwbvJ4twz0fmwl1g&usqp=CAU" class="card-img-top" alt="Status 1" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="row col-md mb-3 justify-content-center">
                    <div class="bg-white p-2" style="border-radius: 20px">
                        <img class="w-100" style="border-radius: 20px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWfntIO6vdSMYI05AxsZfwbvJ4twz0fmwl1g&usqp=CAU" class="card-img-top" alt="Status 1" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="row col-md mb-3 justify-content-center">
                    <div class="card" style="width: 18rem">
                        <img src="https://pashalovarian.net/wp-content/uploads/2018/03/ms-koizumi-loves-ramen-noodles-8668-1.jpg" class="card-img-top" alt="Status 2" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="row col-md mb-3 justify-content-center">
                    <div class="card" style="width: 18rem">
                        <img src="https://cdn.worldcosplay.net/53721/hrjmdjfzejhadlhzyfaxyihxokxyhfsbmsmdfpqa-740.jpg" class="card-img-top" alt="Status  3" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffff" fill-opacity="1" d="M0,32L26.7,42.7C53.3,53,107,75,160,101.3C213.3,128,267,160,320,170.7C373.3,181,427,171,480,154.7C533.3,139,587,117,640,112C693.3,107,747,117,800,106.7C853.3,96,907,64,960,58.7C1013.3,53,1067,75,1120,80C1173.3,85,1227,75,1280,64C1333.3,53,1387,43,1413,37.3L1440,32L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
        </svg>
    </section>

    <!-- End Status -->

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="col-6 m-auto">
                <h2 class="text-center">Contact Me</h2>
                <form>
                    <div class="mb-3">
                        <label for="Name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name" />
                        <div id="name" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email" />
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f84d4d" fill-opacity="1" d="M0,64L30,85.3C60,107,120,149,180,181.3C240,213,300,235,360,224C420,213,480,171,540,144C600,117,660,107,720,122.7C780,139,840,181,900,181.3C960,181,1020,139,1080,149.3C1140,160,1200,224,1260,208C1320,192,1380,96,1410,48L1440,0L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>
    </section>

    <!-- End Contact -->

    <!-- footer -->
    <footer class="bg-danger text-white text-center">
        <div>Created by Rusha <a href="https://getbootstrap.com/" class="text-white fw-bold">Powered by Boostrap 5</a></div>
    </footer>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>