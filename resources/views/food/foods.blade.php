<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BM Apa</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="resources/views/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #cc080b;">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!" style="color: #f1ac18; font-family: 'Bebas'; font-size: 36px;">BM APA</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mr-4">
                        <div class="container">
                            <a class="nav-link" href="#" style="color: #f1ac18;">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5" style="background-image: url('https://i.ibb.co/Tmjv4hY/burgernih.jpg'); background-size: cover; background-position: center;">
            <div class="container px-4 px-lg-5 my-5">
              <div class="text-center text-light">
                <h1 class="display-4 fw-bolder">Welcome to BM apa!</h1>
                <!-- <h3>Ada makanan baru di telyu?</h3> -->
                <br>
                <a href="{{ route('foods.create') }}" class="btn" style="background-color: #cc080b; color:#f1ac18;">Tambah makanan baru!</a>
                <!-- <button type="button" class="btn" style="background-color: #cc080b; color:#f1ac18;">Tambah makanan baru!</button> -->
              </div>
            </div>
        </header>               
          
          
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    {{-- Foreach untuk ngeprint card sama isinyaa --}}
                    @foreach($foods as $foods)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ Storage::url('public/foods/').$foods->foto }}" alt="Ini foto" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" style="color: #cc080b;">{{ $foods->nama }}</h5>
                                    <!-- Product price-->
                                    Harga: Rp.{{ $foods->harga }}
                                    <br>
                                    Rasa: {{ $foods->rasa }}
                                    <br>
                                    Lokasi : {{ $foods->lokasi }}
                                    <br>
                                    Deskripsi : {{ $foods->deskripsi }}
                                </div>
                            </div>
            
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="row row-cols-2">
                                      <div class="col">
                                        <button type="button" class="btn text-light" href="#" style="background-color: #cc080b;">Hapus</button>
                                      </div>
                                      <div class="col">
                                        <button type="button" class="btn text-light" href="#" style="background-color: #79a33d;;">Edit</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                    {{-- <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" style="color: #cc080b;">Ayam Geprek</h5>
                                    <!-- Product price-->
                                    Harga: Rp12.000
                                    <br>
                                    Rasa: Pedas
                                    <br>
                                    Lokasi : Kantin Munjul
                                    <br>
                                    Deskripsi : Enak deh
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="row row-cols-2">
                                        <div class="col">
                                          <button type="button" class="btn text-light" href="#" style="background-color: #cc080b;">Hapus</button>
                                        </div>
                                        <div class="col">
                                          <button type="button" class="btn text-light" href="#" style="background-color: #79a33d;;">Edit</button>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" style="color: #cc080b;">Ayam Geprek</h5>
                                    <!-- Product price-->
                                    Harga: Rp12.000
                                    <br>
                                    Rasa: Pedas
                                    <br>
                                    Lokasi : Kantin Munjul
                                    <br>
                                    Deskripsi : Enak deh
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="row row-cols-2">
                                        <div class="col">
                                          <button type="button" class="btn text-light" href="#" style="background-color: #cc080b;">Hapus</button>
                                        </div>
                                        <div class="col">
                                          <button type="button" class="btn text-light" href="#" style="background-color: #79a33d;;">Edit</button>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                        </div>
                    </div> --}}
                    
                    {{-- <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder" style="color: #cc080b;">Ayam Geprek</h5>
                                    <!-- Product price-->
                                    Harga: Rp12.000
                                    <br>
                                    Rasa: Pedas
                                    <br>
                                    Lokasi : Kantin Munjul
                                    <br>
                                    Deskripsi : Enak deh
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="row row-cols-2">
                                        <div class="col">
                                          <button type="button" class="btn text-light" href="#" style="background-color: #cc080b;">Hapus</button>
                                        </div>
                                        <div class="col">
                                          <button type="button" class="btn text-light" href="#" style="background-color: #79a33d;;">Edit</button>
                                        </div>
                                      </div>
                                  </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5" style="background-color: #cc080b;">
            <div class="container"><p class="m-0 text-center" style="color: #f1ac18;">Copyright &copy; BM apa 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
