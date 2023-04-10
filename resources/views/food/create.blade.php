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
        <form action="{{ route('foods.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="container text-center">
                <p class="lead fw-bold mb-0 mx-3 me-3" style="color: #cc080b; font-family: 'Bebas'; font-size: 38px;"">Food input</p>
            </div>
            <br>
            <div class="container">
                <div class="form-group">
                    <label class="form-label"  >Nama makanan</label>
                    <input type="text"   class="form-control form-control-lg" name="nama" placeholder="Masukkan nama makanan"/>
                </div>
                <div class="form-group">
                    <label class="form-label"  >Harga</label>
                    <input type="text"   class="form-control form-control-lg" name="harga" placeholder="Masukkan harga makanan"/>
                </div>
                <div class="form-group">
                    <label class="form-label"  >Rasa</label>
                    <input type="text"   class="form-control form-control-lg" name="rasa" placeholder="Masukkan rasa makanan"/>
                </div>
                <div class="form-group">
                    <label class="form-label"  >Lokasi</label>
                    <input type="text"   class="form-control form-control-lg" name="lokasi" placeholder="Masukkan lokasi tempat makanan"/>
                </div>
                <div class="form-group">
                    <label class="form-label"  >Deskripsi</label>
                    <input type="text"   class="form-control form-control-lg" name="deskripsi" placeholder="Masukkan deskripsi makanan"/>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Foto makanan</label>
                    <br>
                    <input type="file" class="form-control-file" name="foto">
                </div>
                <!-- <div class="text-center text-lg-start mt-4">
                    <button type="button" class="btn btn-lg text-light text-center"
                    style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: #cc080b;">Input</button>
                </div> -->
                <br>
                <button type="submit" class="btn btn-md text-light" style="background-color: #cc080b;">SIMPAN</button>
                
            </div>
        </form>
          
          
        

        <!-- Footer-->
        <footer class="py-5" style="background-color: #cc080b;">
            <div class="container"><p class="m-0 text-center" style="color: #f1ac18;">Copyright &copy; BM apa 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <!-- <script>
            CKEDITOR.replace( 'content' );
        </script> -->
    </body>
</html>
