<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OKE Garden</title>
    <!-- Bootstrap CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Import CSS -->
    <link rel="stylesheet" href="/assets/css/styles.css">

    <!-- Import Calendar -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

    <!-- Time & Date picker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
</head>

<body class="bg-light">
    <!-- NAVBAR SECTION BEGIN -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../assets/img/oke.png" alt="OKE-garden logo" class="img-fluid img-responsive"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-sm-center me-5 fs-5" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-secondary" aria-current="page" aria-expanded="false" href="">Beranda</a>
                    </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Blog
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Mitra
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
        <img src="assets/img/nfl.jpg" class="account rounded-circle"  alt="account photos">
            </nav>
    <!-- NAVBAR SECTION END -->

    <!-- HERO SECTION START -->
    <div class="hero mt-4">
        <div class="container-fluid mt-4 d-grid justify-content-center">
            <h1 class="text-center mt-4">Konsultasi Taman</h1>
            <p class="text-center mb-4">Klik link dibawah ini untuk memilih tanggal & waktu yang tersedia untuk memanggil konsultan kami</p>
        </div>
        
    <div class="container-fluid mt-4" style="width: 80vw; ">
        <div class="row">
            <div class="col-sm-6 my-3">
                <div class="card ms-3">
                    <div class="card-body" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="calendar calendar-first" id="calendar_first">
                                <div class="calendar_header">
                                    <button class="switch-month switch-left"><i class="fa fa-chevron-left"></i></button>
                                    <h2></h2>
                                    <button class="switch-month switch-right"> <i class="fa fa-chevron-right"></i></button>
                                </div>
                                <div class="calendar_weekdays"></div>
                                <div class="calendar_content"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 my-3">
                <div class="card">
                    <div class="card-body" style="height: 470px;" >
                        <div class="container-fluid px-0 px-sm-4 mx-auto">
                            <div class="row justify-content-center mx-0">
                                <div class="col-lg-10">
                                <div class="card border-0">
                                    <form autocomplete="off">
                                    <div class="card-header bg-dark">
                                        <div class="mx-0 mb-0 row justify-content-sm-center justify-content-start px-1">
                                        <input type="text" id="dp1" class="datepicker" placeholder="Pick Date" name="date" readonly><span class="fa fa-calendar"></span>
                                        </div>
                                    </div>
                                    <div class="card-body p-sm-2">
                                        <h5>Pilih Waktu</h5>
                                        <p>Durasi Konsultasi 30 Menit</p>
                                        <div class="row text-center mx-0">
                                        <div class="col py-2"><div class="cell py-1 rounded">9:00</div></div>
                                        <div class="col py-2"><div class="cell py-1 rounded">13:00</div></div>
                                        </div>
                                    <div class="row text-center mx-0">
                                        <div class="col py-2"><div class="cell py-1 rounded">10:00</div></div>
                                        <div class="col py-2"><div class="cell py-1 rounded">14:00</div></div>
                                    </div>
                                    <div class="row text-center mx-0">
                                        <div class="col py-2"><div class="cell py-1 rounded">11:00</div></div>
                                        <div class="col py-2"><div class="cell py-1 rounded">15:00</div></div>
                                    </div>
                                    <div class="row text-center mx-0">
                                        <div class="col py-2"><div class="cell py-1 rounded">12:00</div></div>
                                        <div class="col py-2"><div class="cell py-1 rounded">16:00</div></div>
                                    </div>
                                    </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- HERO SECTION ENDS -->

<!-- MAIN SECTION START -->
<div class="main mt-4">
    <div class="container-fluid" style="width: 80vw;">
        <div class="card" style="width: 80vw;">
            <div class="card-body">
                <h4 class="text-dark mx-4 mt-4">Informasi Data Diri</h4>
                <div class="row g-4 col-sm-8 d-flex justify-content-center mx-3">
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label text-dark fluid">Nama Lengkap</label>
                        <input class="form-control form-control-md" type="text" placeholder="Naufal Hanafi N" aria-label=".form-control-lg example">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1" class="form-label text-dark">No HP</label>
                        <input class="form-control form-control-md" type="tel" placeholder="+62 813 4093 1234" aria-label="No HP">
                    </div>
                    <div class="container-fluid d-flex justify-content-between">
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label text-dark ms-3">Alamat</label>
                                <div class="card border-success ms-3">
                                    <div class="card-body">
                                        <p class="card-text">Jl. Serangkai 1 Perum. Bumi Jaya blok A No.12 Kelurahan samping,
                                            Kecamatan Baru, Kota Tanjungpinang, Kepulauan Riau 29125, Indonesia.
                                        </p>
                                        <div class="d-flex flex-row-reverse bd-highlight">
                                            <div class="p-2 bd-highlight"><a href="#" class=" text-success" >Tambah Alamat Baru</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- MAIN SECTION ENDS -->

<!-- SUBMAIN SECTION START -->
<div class="submain">
    <div class="container-fluid" style="width: 80vw;">
        <div class="card" style="width: 80vw;">
            <div class="krtu card-body">
                <h4 class="text-dark mx-4 mt-4">Informasi Konsultan Taman</h4>
                <div class="row g-4 col-sm-8 d-flex justify-content-center mx-3">
                    <div class="col">
                        <h5>Lahan Taman</h5>
                        <p>Pilih jumlah lahan taman yang akan dibuat</p>
                        <div class="col mx-auto my-auto" id="myDIV2">
                            <button type="button" class="btn btn-outline-success me-2 ms-2">1 Lahan Taman</button>
                            <button type="button" class="btn btn-outline-success mx-2">2 Lahan Taman</button>
                            <button type="button" class="btn btn-outline-success ms-2">Lebih dari 2 Lahan Taman</button>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4 col-sm-8 d-flex justify-content-center mx-3 mt-2">
                    <div class="col">
                        <h5>Tema Taman</h5>
                        <p>Pilih jumlah tema taman yang akan dibuat</p>
                        <div class="card w-75">
                            <div class="note card-body rounded-lg mw-50">
                                <p>Catatan: Jika anda belum memiliki inspirasi tema taman maka anda bisa melewati tahap ini, konsultan kami
                                    akan memberikan rekomendasi terbaik untuk taman anda.</p>
                                </div>
                        </div>
                    </div>
                </div>
                
                <div class="container d-flex justify-content-around my-4 mx-auto gap-2">
                    <div class="row">
                        <div class="col">
                            <div class="card-group">
                                <div class="card cardim rounded mx-3">
                                    <img src="assets/img/minimalis.png" class="card-img-top img-fluid img-responsive rounded" alt="foto taman minimalis" style="height: 25rem;">
                                    <!-- Source pinterest https://pin.it/7tiSNWZ -->
                                    <div class="card-body">
                                        <h5 class="card-title">Taman Minimalis</h5>
                                        <p class="card-text cart">Taman yang indah dilahan yang sempit.</p>
                                        <div class="position-relative">
                                            <div class="text-end">
                                                <br><a href="#" class="text-success">Pilih</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card cardim rounded mx-3">
                                    <img src="assets/img/kering.png" class="card-img-top rounded" alt="foto taman kering" style="height: 25rem;">
                                    <!-- Source pinterest https://pin.it/6NWMo0E -->
                                    <div class="card-body">
                                        <h5 class="card-title">Taman Kering</h5>
                                        <p class="card-text cart">Taman yang dirancang untuk menghasilkan suasana alam didalam dan diluar rumah</p>
                                        <div class="text-end">
                                            <a href="#" class="text-success">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card cardim rounded mx-3">
                                    <img src="assets/img/tropis.jfif" class="card-img-top rounded" alt="foto taman tropis" style="height: 25rem;">
                                    <!-- Source pinterest https://pin.it/3LahDT1 -->
                                    <div class="card-body">
                                        <h5 class="card-title">Taman Tropis</h5>
                                        <p class="card-text cart">Taman yang paling sesuai dengan iklim di Indonesia</p>
                                        <div class="text-end">
                                            <a href="#" class="text-success">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row g-4 col-sm-8 d-flex justify-content-center mx-0 mt-2">
                    <div class="col">
                        <h5>Estimasi Ukuran Taman</h5>
                        <div class="container">
                        <div class="row d-flex justify-content-evenly mt-3 g-2">
                            <div class="col mx-auto my-auto" id="myDIV" >
                                <button type="button" class="btn active btn-outline-success ms-2"> <10m2 </button>
                                <button type="button" class="btn btn-outline-success ms-3"> 11-20m2 </button>
                                <button type="button" class="btn btn-outline-success ms-3"> 21-30m2 </button>
                                <button type="button" class="btn btn-outline-success ms-3"> 31-40m2 </button>
                                <button type="button" class="btn btn-outline-success ms-3"> 41-50m2 </button>
                                <button type="button" class="btn btn-outline-success ms-3"> 51-60m2 </button>
                                <button type="button" class="btn btn-outline-success ms-3"> >100m2 </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-row-reverse bd-highlight">
                    <div class="p-2 bd-highlight"><button type="button" class="btn btn-outline-success bg-success text-white mt-4"> OKE </button></div>
                    <div class="p-2 bd-highlight"><button type="button" class="btn btn-outline-light bg-light text-success mt-4"> Batal </button></div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <br> <br>
        </div>
    </div>
</div>

<!-- SUBMAIN SECTION ENDS -->
<script> 
// Get the container element
var btnContainer = document.getElementById("myDIV");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
}
</script>

<script> 
// Get the container element
var btnContainer = document.getElementById("myDIV2");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("btn");

// Loop through the buttons and add the bg-success class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("bg-success text-white");
    current[0].className = current[0].className.replace("bg-success text-white", "");
    this.className += " bg-success text-white";
    });
}
</script>

<script src="js/jquery.min.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
