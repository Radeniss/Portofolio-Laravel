<x-layout>

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <h2 class="display-6 pt-5 mt-5 font-monospace text-secondary">Hello, I'm</h2>
      <h1 class="display-6 fw-bold text-judul">Sayid Muhammad Jundullah</h1>
      <p class="lead text-dark fw-light"><span class="text-dark fw-lighter">Interest in </span>Data Science <span class="text-secondary fw-lighter">|</span> Data Analytics <span class="text-secondary fw-lighter">|</span> Web Development</p>

      <!-- get sayid's resume -->
      {{-- <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary"><a class="icon-link icon-link-hover" style="color: aliceblue; text-decoration: none;" href="https://drive.google.com/file/d/1lwsONfgXmJMU714ltBliS5EJn3D04Nzi/view?usp=share_link" target="_blank">Get Sayid's CV &raquo</a></button>
        <!-- <button type="button" class="btn btn-success"><a class="icon-link icon-link-hover" style="color: aliceblue; text-decoration: none;" href="https://api.whatsapp.com/send?phone=6285766267769&text=Halo,%20apakah%20bisa%20membuat%20wesite%20untuk%20saya%20?">Whatsapp</a></button> -->
      </div> --}}

      <!-- akhir get sayid's resume -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="pt-5 mt-5">
        <path
          fill="#f8f9fa"
          fill-opacity="1"
          d="M0,96L48,90.7C96,85,192,75,288,85.3C384,96,480,128,576,165.3C672,203,768,245,864,245.3C960,245,1056,203,1152,181.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About Me -->
    <section id="about" class="section-hidden bg-light">
      <div class="container">
        <div class="row text-center mb-3 mt-5">
          <div class="col fw-light">
            <h1 class="font-judul fw-light">About Me</h1>
          </div>
        </div>
        <div class="row text-center fs-5 justify-content-around mb-5">
          <div class="col-md-10 fw-light">
               <p class="fs-6">
                  Saya mahasiswa  semester 5 jurusan Teknik Informatika di Universitas Malikussaleh dengan IPK 3,56 / 4.00, saya sangat tertarik mempelajari hal baru terkakit teknologi, terutama dalam bidang data dan pengembangan web. Saya senang belajar secara otodidak dari sumber terbuka seperti youtube, artikel dsb.   
                  <span class="more" style="display: none">Saya juga aktif mengikuti beberapa course bersertifikat, untuk meningkatkan pemahaman, pengetahuan dan skill saya dalam pengolahan data dan pengembangan web. Untuk melatih kemampuan saya dalam hal tersebut saya memiliki beberapa proyek yang saya kerjakan, seperti tugas web sederhana di perkuliahan dan berkontribusi untuk mencari solusi permasalahan bisnis di situs kaggle.com berdasarkan data yang disediakan secara tebuka. Saya bersedia untuk berkolaborasi untuk menyelesaikan permasalahan di bidang data dan pengembangan web. Saat ini, saya mencari kesempatan magang untuk mengembangkan kemampuan dan menambah pengalaman saya di bidang data untuk posisi seperti Data Analyst, Data Scientist atau pengembangan web seperti Front End Web Developer, Back End Web Developer khususnya Laravel di lingkungan professional. Jika Anda membutuhkan informasi lebih lanjut atau ingin mendiskusikan peluang kerja sama, jangan ragu untuk menghubungi saya. Saya dengan senang hati akan menjawab pertanyaan atau memberikan informasi tambahan yang Anda perlukan. Anda dapat menghubungi saya melalui sosial media saya di bawah ini.</span>
                  <a href="#" id="read-more" onclick="toggleText(event)">Read More...</a>
              </p>
            <!-- Instagram -->
            <a class="sosmed" href="https://instagram.com/saed.m_" target="_blank"><img src="images/instagram.svg" alt="instagram" style="height: 30px; margin: 5%" /></a>
            <!-- twitter -->
            <a class="sosmed" href="https://sayidmuhammad15@gmail.com" target="_blank"><img src="images/mail.svg" alt="Email" style="height: 30px; margin: 5%" /></a>
            <!-- github -->
            <a class="sosmed" href="https://github.com/muhammadjundullah" target="_blank"><img src="images/github.svg" alt="github" style="height: 30px; margin: 5%" /></a>
            <!-- linkedin -->
            <a class="sosmed" href="https://linkedin.com/in/sayidm" target="_blank"><img src="images/linkedin.svg" alt="linkedin" style="height: 30px; margin: 5%" /></a>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,32L40,74.7C80,117,160,203,240,208C320,213,400,139,480,96C560,53,640,43,720,64C800,85,880,139,960,160C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Project -->
    <section id="projects" class="section-hidden">
      <div class="container" style="padding-bottom: 10rem">

          <div class="row text-center mt-5">
            <div class="col">
              <h1 class="font-judul fw-light">My Projects</h1>
            </div>
          </div>

        <div class="container mt-4">
          <div class="row g-3">
            @foreach ($projects as $project)

            <!-- Card Projects -->

                  <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                      <div class="card animate">
                          <div class="card-body" >
                              <h5 class="card-title fw-light">{{ $project->judul }}</h5>
                              <p class="card-text fw-lighter text-0secondary">{{ $project->category }}.</p>
                              <a class="text-success custom-link" href="/{{ $project->categoryslug }}/{{ $project->slug }}">Details &raquo;</a>                          
                          </div>
                      </div>
                  </div>

            <!-- Card Projects -->

            @endforeach
          </div>
        </div>
      </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path
            fill="#f8f9fa"
            fill-opacity="1"
            d="M0,192L48,202.7C96,213,192,235,288,240C384,245,480,235,576,208C672,181,768,139,864,128C960,117,1056,139,1152,149.3C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>

    </section>

    <!-- Certificate Section -->
    <section id="certificate" class="section-hidden bg-light">
      <div class="container" style="padding-bottom: 10rem">
        <div class="row text-center mt-5 mb-3">
          <div class="col">
            <h1 class="font-judul fw-light">Certification</h1>
          </div>
        </div>

        <!-- items -->
        <div class="row ">

          @foreach ($certificates as $index => $certificate)  <!-- Tambahkan index untuk memberikan ID unik -->

              <!-- Modal -->
              <div class="modal fade" id="imageModal{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{ $index }}" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-body">
                              <img src="images/Certificate/{{ $certificate->name }}" class="img-fluid card-img-top" alt="Image">
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="mx-auto animate mb-3 " style="width: 18rem;">
                      <img class="card"  src="images/Certificate/{{ $certificate->name }}" alt="Image" data-toggle="modal" data-target="#imageModal{{ $index }}" style="width: 286px; cursor: pointer;">
                      <div class="card-body mt-3 mb-5">                    
                        <a class=" text-dark custom-link" href="{{ $certificate->site }}"><p class="card-text fw-light">{{ $certificate->desc }}</a> - <span class="text-secondary fst-italic">{{ $certificate->date }}</span>                    
                      </div>
                  </div>
              </div>

          @endforeach


        </div>
        <!-- akhir items -->

      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,32L40,74.7C80,117,160,203,240,208C320,213,400,139,480,96C560,53,640,43,720,64C800,85,880,139,960,160C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir certificate -->

    <!-- Education -->
    <section id="education" class="section-hidden">
      <div class="container" style="padding-bottom: 10rem">
        <div class="row text-center mb-3">
          <div class="col">
            <h1 class="font-judul fw-light">Education</h1>
          </div>
        </div>
          <div class="row justify-content-center">

            @foreach ( $educations as $education )

            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <div class="mx-auto animate mb-3" style="width: 18rem;">
                <img src="images/Education/{{ $education->name }}" class="card-img-top" alt="Dqlab Certificate">
                <div class="card-body">
                  <hr>
                  <p class="fw-bold">{{ $education->school }}</p>
                  <p class="fst-italic">{{ $education->major }}</p>
                  <p class="fw-light">{{ $education->date }}</p>
                </div>
              </div>
            </div>

            @endforeach

          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Education -->

    <p style="margin:10px;" class="fs-6 fw-lighter text-secondary text-center"><i>*This portfolio was last updated {{ $lastupdate->created_at->format('F j, Y, \a\t g:i A') }}.</i></p>    

</x-layout>
