@extends('Layout.secondary')
@section('title', '- FAQ')
@section('content')
<body>
    <section id="Faq">
        <div class="container py-5">
            <h3 class="fw-bold my-5">FAQ</h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Apa itu Kotakita?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Sistem informasi pelaporan pengembangan kota yang digunakan untuk mengukur dan melaporkan pengembangan pada masing masing daerah. selain itu, website ini dapat memberikan transparansi atas progress dengan adanya fitur Tracking Progress Pengembangan. Diharapkan juga dapat memudahkan pemerintah dan penyedia jasa untuk melaporkan progress dari tiap proyek yang ada di kota tersebut.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Fitur apa saja yang dimiliki Kotakita?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <li>Transparansi terkait proyek yang ada</li>
                        <li>Fasilitas yang ada di suatu daerah</li>
                        <li>Proyek apa saja yang berjalan di suatu daerah</li>
                        <li>Tracking progres terhadap proyek yang sedang berjalan</li>
                        <li>Feedback Proyek</li>
                        <li>Aduan Masyarakat</li>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Platform apa saja yang bisa digunakan untuk mengakses Kotakita?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Sampai saat ini hanya bisa diakses melalui website saja , namun sedang dalam tahap pengembangan untuk dapat diakses melalui android dan IOS
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Apakah harus memiliki akun terlebih dahulu untuk dapat melakukan fitur yang tersedia pada Kotakita?
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                            Ya, untuk memiliki akses menggunakan fitur yang ada perlu melakukan registrasi terlebih dahulu.
                      </div>
                    </div>
                  </div>
              </div>
        </div>
    </section>
@endsection
