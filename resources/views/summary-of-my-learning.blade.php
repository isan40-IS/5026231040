<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hizkia Belajar Web</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSS Custom --}}
    <link rel="stylesheet" href="css/summary.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (tambahkan sebelum </body>) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">

    {{-- font --}}
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg sticky-top px-4 py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hizkia Crisantino</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav nav-custom">
                <a class="nav-link active" aria-current="page" href="#">Article</a>
                <a class="nav-link" href="#">Shop</a>
                <a class="nav-link" href="#">linktree</a>
                <a class="nav-link" href="#">Form</a>
            </div>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>


    {{-- Article --}}
    <div class="container mt-5" id="Article">
        <p>
        <a href="https://www.its.ac.id" class="text-reset text-decoration-none">Web ITS</a> |
        <a href="https://google.co.id" class="text-reset text-decoration-none" target="_blank">Google</a> |
        <a href="https://kompas.tv" class="text-reset text-decoration-none" target="_self">Kompas TV</a> |
        <a href="#" class="text-reset text-decoration-none">Di halaman ini</a>
        </p>

        <h2>Bantu Adaptasi Mahasiswa Baru, ITS Gelar Mentoring Agama Islam</h2>

        <h6>Oleh : itsash <i>|</i> 18 <i>|</i> Source : ITS Online</h6>
        <img
        src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2025/02/IMG_20250223_084851-1536x864.jpg"
        class="w-100"/>

        <p class="kalimatpembuka">
        Kampus ITS, ITS News — Institut Teknologi Sepuluh Nopember (ITS) kembali
        menggelar Mentoring Agama Islam Semester Genap 2024/2025 dengan berbagai
        rangkaian kegiatan. Kegiatan ini bertujuan membentuk karakter mahasiswa
        baru (maba) muslim berbasis nilai-nilai Islam. Acara yang resmi dibuka
        dalam kuliah umum ini berlangsung di Masjid Manarul Ilmi ITS, Sabtu
        (22/02).
        </p>

        <p>
        Dalam pembukaan acara, Ketua Tim Pembina Kerohanian Islam (TPKI) ITS Prof
        Dr Muhammad Mashuri MT menyampaikan bahwa mentoring merupakan sarana
        pencarian ilmu bagi mahasiswa. “Kegiatan mentoring ini untuk mempersiapkan
        generasi emas di 2045 yang perlu dibekali dengan segudang ilmu, termasuk
        keilmuan Islam,” ujarnya.
        </p>

        <p>
        Lebih lanjut, dosen yang akrab disapa Mashuri ini menjelaskan, kegiatan
        mentoring ini terdiri dari beberapa rangkaian acara. Adapun diawali dengan
        dengan kuliah umum yang menghadirkan empat materi utama dari dosen-dosen
        agama Islam ITS sebagai pondasi awal. Setelah mendapatkan pemahaman dasar,
        mahasiswa mengikuti kelas pendalaman dalam enam sesi yang mencakup diskusi
        dan ujian untuk menguji pemahaman mereka.
        </p>
        <img src="img/pakadi.jpg" class="w-100 py-3" alt="Dosen agama islam ITS" />
        <p>Dosen agama islam ITS Prof Dr Ir Adi Soeprijanto MT saat memberikan materi sirah nabawi pada Kuliah Umum Mentoring Agama Islam Semester Genap 2024/2025</p>
        <p>Tak berhenti di situ, kegiatan ini kemudian diperkuat melalui kegiatan Ramadhan di Kampus (RDK) 46. Pada kegiatan ini, maba mengikuti kajian inspiratif, kajian rutin Subuh, dan Tarawih selama bulan Ramadhan guna memperdalam pemahaman keislaman secara aplikatif. “Melalui mentoring ini, mahasiswa mampu mengamalkannya ilmu keislaman dalam kehidupan sehari-hari,” tambah Dosen Statistika ITS tersebut. </p>
        <p>Selaras dengan Mashuri, Ketua Pelaksana Mentoring Agama Islam Semester Genap 2024/2025 Fathan Hidayatulloh menjelaskan bahwa format mentoring terus berkembang. Perubahan kurikulum menyebabkan mata kuliah Agama Islam dialihkan ke semester atas. Maka, peran mentoring bagi maba menjadi garda utama dalam memberikan arahan agar siap menghadapi perkuliahan.</p>
        <p>Fathan menyoroti bahwa kurikulum mentoring kini lebih berfokus pada tiga materi utama yaitu Tauhid, Ibadah, dan Akhlak. Disertai dengan pendekatan yang lebih relevan terhadap kehidupan mahasiswa, ketiga materi tersebut juga berisi isu akademik, hubungan mahasiswa dengan dosen, hingga tantangan sosial di era digital. “Materi tersebut didukung dengan pemberian penugasan kepada peserta guna mencapai tujuan kegiatan,” ungkapnya.</p>
        <img src="img/mahasiswa.jpg" class="w-100 py-3" alt="Kegiatan Mahasiswa">
        <p>Menilik terlaksananya mentoring, ia berharap program ini bisa terus berkembang dan lebih terstruktur ke depannya. Mentoring ini bukan sekadar formalitas, tetapi wadah untuk memperbaiki diri dan menjadi pribadi muslim yang lebih baik. Mahasiwa yang tidak hanya cerdas secara intelektual, tetapi juga memiliki pondasi moral dan spiritual yang kuat.</p>
        <p>Dengan adanya program mentoring ini, ITS berharap dapat mencetak generasi muda tidak hanya unggul secara akademik tetapi juga memiliki karakter yang kuat dan berlandaskan nilai-nilai Islam. “Pastinya untuk dapat menghadapi tantangan yang lebih besar di masa depan,” tutup Fathan optimis. (*)</p>

        <h6>Reporter: Lathifah Sahda</h6>
        <h6>Redaktur: Rayinda Santriana</h6>
    </div>

    {{-- Transisi --}}
    {{-- Shop --}}
        <header id="shop">
        <img class="border" src="{{ asset('img/Logo CekDong 1.png') }}" alt="Logo Cekdong" />
        </header>
        <div class="container-fluid">
            <div class="equipment-title">
            <h3>Equipment</h3>
            </div>
            <p class="equipment-description">
            All list of goods, please tap the goods for start booking
            </p>
        </div>
<div class="container d-flex position-relative">
    <main class="container mt-3">
            <!-- Row 1 -->
            <div class="row g-0">
            <!-- Item 1 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: visible"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Lighting Set Sonny</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Canon Lens EFS 18-135mm</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: visible"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/4.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Canon EOS 4000</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Row 2 -->
            <div class="row g-0">
            <!-- Item 1 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: visible"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Lighting Set Sonny</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Canon Lens EFS 18-135mm</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/4.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Canon EOS 4000</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Row 3 -->

            <div class="row g-0">
            <!-- Item 1 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Lighting Set Sonny</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Canon Lens EFS 18-135mm</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/4.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Canon EOS 4000</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Row 4 -->
            <div class="row g-0">
            <!-- Item 1 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Lighting Set Sonny</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: visible"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Canon Lens EFS 18-135mm</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-3">
                <div class="item-box">
                <span class="mostly-borrowed" style="visibility: hidden"
                    >Mostly Borrowed</span
                >
                <div class="content-box">
                    <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                    <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                    <div class="availability">
                    <span></span>
                    <p class="m-0">Available</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </main>

    {{-- Pills --}}
  <div class="oval-menu position-sticky translate-middle-y">
    <div class="menu-btn text-center">
      <i class="fa-solid fa-user fa-lg mb-1"></i>
      <div>Profile</div>
    </div>
    <div class="menu-btn text-center">
      <i class="fa-solid fa-bars fa-lg mb-1"></i>
      <div>Menu</div>
    </div>
    <div class="menu-btn text-center">
      <i class="fa-solid fa-clock-rotate-left fa-lg mb-1"></i>
      <div>Riwayat</div>
    </div>
    <div class="menu-btn text-center">
      <i class="fa-solid fa-toolbox fa-lg mb-1"></i>
      <div>Equipment</div>
    </div>
  </div>

</div>
        <div class="button-container">
        <button class="btn-custom">Book Now!</button>
        </div>

    {{-- linktree --}}
    {{-- Form --}}

</body>
</html>
