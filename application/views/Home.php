<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

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
        <img style="object-fit: cover; width: 200px; height: 200px;" class="rounded-circle" src="<?= base_url() ?>assets/img/profile.jpg" />
        <h1 class="display-4">Halo, nama saya Mahesha S.K</h1>
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
                    <h2 class="bg-white p-2 text-danger" style="border-radius: 10px">Blog</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md mb-3 justify-content-center">
                    <div class="bg-white p-2" style="border-radius: 10px">
                        <img class="w-100" style="border-radius: 10px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWfntIO6vdSMYI05AxsZfwbvJ4twz0fmwl1g&usqp=CAU" class="card-img-top" alt="Status 1" />
                        <div class="card-body">
                            <h2 class="fs-5">Jalan-jalan bareng Koizumi</h2>
                            <p class="card-text fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-3 justify-content-center">
                    <div class="bg-white p-2" style="border-radius: 10px">
                        <img class="w-100" style="border-radius: 10px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWfntIO6vdSMYI05AxsZfwbvJ4twz0fmwl1g&usqp=CAU" class="card-img-top" alt="Status 1" />
                        <div class="card-body">
                            <h2 class="fs-5">Jalan-jalan bareng Koizumi</h2>
                            <p class="card-text fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-3 justify-content-center">
                    <div class="bg-white p-2" style="border-radius: 10px">
                        <img class="w-100" style="border-radius: 10px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWfntIO6vdSMYI05AxsZfwbvJ4twz0fmwl1g&usqp=CAU" class="card-img-top" alt="Status 1" />
                        <div class="card-body">
                            <h2 class="fs-5">Jalan-jalan bareng Koizumi</h2>
                            <p class="card-text fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-3 justify-content-center">
                    <div class="bg-white p-2" style="border-radius: 10px">
                        <img class="w-100" style="border-radius: 10px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWfntIO6vdSMYI05AxsZfwbvJ4twz0fmwl1g&usqp=CAU" class="card-img-top" alt="Status 1" />
                        <div class="card-body">
                            <h2 class="fs-5">Jalan-jalan bareng Koizumi</h2>
                            <p class="card-text fs-6">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="row col-md mb-3 justify-content-center">
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
                </div> -->
                <div class="view-more text-white text-decoration-underline" style="cursor: pointer;">Lihat selengkapnya</div>
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
                <h2 class="text-center">Hubungi saya</h2>
                <div class="select-contact mt-5 d-flex justify-content-center align-items-center" style="height: 100px;">
                    <div class="whatsapp-mail d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="text-white bi bi-whatsapp w-50 h-50" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                    </div>
                    <div class="email-mail d-flex justify-content-center align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-white w-50 h-50 bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                    </div>
                </div>
                <div class="send-whatsapp closed">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Nama Anda</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3" placeholder="Apa isi pesan Anda?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim pesan</button>
                </div>
                <form action="<?= base_url() ?>/send_email" class="send-email closed">
                    <div class="mb-3">
                        <label for="Name" class="form-label">Nama Anda</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="Name" class="form-label">Email Anda</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Masukkan alamat Email Anda">
                        <div id="name" class="form-text">Alamat E-mail anda tidak akan dibagikan kepada siapapun.</div>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3" placeholder="Apa isi pesan Anda?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim pesan</button>
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

    <script>
        document.querySelector('.whatsapp-mail').addEventListener("click", () => {
            document.querySelector('.whatsapp-mail').setAttribute('style', 'border-bottom: 4px solid #03a9f4');
            document.querySelector('.email-mail').setAttribute('style', 'border-bottom: 0px solid #03a9f4');
            document.querySelector('.send-whatsapp').classList.remove('closed');
            document.querySelector('.send-email').classList.add('closed');
        });
        document.querySelector('.email-mail').addEventListener("click", () => {
            document.querySelector('.whatsapp-mail').setAttribute('style', 'border-bottom: 0px solid #03a9f4');
            document.querySelector('.email-mail').setAttribute('style', 'border-bottom: 4px solid #03a9f4');
            document.querySelector('.send-email').classList.remove('closed');
            document.querySelector('.send-whatsapp').classList.add('closed');
        });
    </script>
</body>

</html>