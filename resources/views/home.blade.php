@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="/css/landing.css">

@section('container')
<!-- slider event -->
<div class="cont-event">
        <div class="content-slide-event">
            <div class="imgslide-event fade">
                <div class="numberslide"></div>
                <a href="/"><img src="/img/cu4.jpg" alt=""></a>
                <div class="text"></div>
            </div>

            <div class="imgslide-event fade">
                <div class="numberslide"></div>
                <a href="/"><img src="/img/valo.jpg" alt=""></a>
                <div class="text"></div>
            </div>

            <div class="imgslide-event fade">
                <div class="numberslide"></div>
                <a href="/"><img src="/img/aot.jpg" alt=""></a>
                <div class="text"></div>
            </div>

            <a class="prev-event" onClick="nextslide_event(-1)">&#10094;</a>
            <a class="next-event" onClick="nextslide_event(1)">&#10095;</a> 
        </div>
<!-- 
        <div class="page-event">
            <span class="dot-event" onClick="dotslide_event(1)"></span>
            <span class="dot-event" onClick="dotslide_event(2)"></span>
            <span class="dot-event" onClick="dotslide_event(3)"></span>
        </div> -->

    </div>

    <script>
        var slideIndex_event = 1;
            showSlide_event(slideIndex_event);

        function nextslide_event(n){
            showSlide_event(slideIndex_event += n);
        }

        function dotslide_event(n){
            showSlide_event(slideIndex_event = n);
        }

        function showSlide_event(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide-event");
            // var dot = document.getElementsByClassName("dot-event");
            
            if (n > slides.length) {
                slideIndex_event = 1;
            }
            if (n < 1) {
                slideIndex_event = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            // for (i = 0; i < slides.length; i++) {
            //     dot[i].className = dot[i].className.replace(" active", "");
            // }
            slides[slideIndex_event - 1].style.display = "block";
            // dot[slideIndex_event - 1].className += " active";

        }
    </script>

    <!-- end of slider event -->
    <section class="kabinet">
      <h1 class="judul-kabinet">Kabinet Bersatu Maju</h1>
      <!-- ketua dan juga visi -->
      <div class="row1">
        <div class="ketua">
          <img src="img/jennie.png" alt="jennie" width="200px" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Ketua Himpunan</p>
          </div>
        </div>
        <div class="visi">
          <h2 class="judul-visi">Visi</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
            et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
            Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
            maecenas ultricies. Habitant morbi tristique senectus et netus et
            malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
            orci nulla pellentesque dignissim enim sit amet.
          </p>
        </div>
      </div>
      <!-- end ketua dan visi -->

      <!-- wakil dan misi -->
      <div class="row2">
        <div class="misi">
          <h2 class="judul-misi">Misi</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
            et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
            Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
            maecenas ultricies. Habitant morbi tristique senectus et netus et
            malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
            orci nulla pellentesque dignissim enim sit amet.
          </p>
        </div>
        <div class="wakil">
          <img src="img/jennie.png" alt="jennie" width="200px" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Wakil Ketua Himpunan</p>
          </div>
        </div>
      </div>
      <!-- end wakil dan misi -->

      <!-- bph -->
      <div class="bph-row">
        <div class="bph">
          <img src="img/blackpink.png" alt="blackpink" width="400px" />
          <h2>Badan Pengurus Harian</h2>
        </div>
        
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
          et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
          Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
          maecenas ultricies. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
          orci nulla pellentesque dignissim enim sit amet.
        </p>
      </div>
      <!-- end bph -->

      <!-- wave di bagian bawah -->
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,224L80,208C160,192,320,160,480,176C640,192,800,256,960,266.7C1120,
        277,1280,235,1360,213.3L1440,192L1440,320L1360,320C1280,320,1120,320,960,
        320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
        ></path>
      </svg>
      <!-- end wave -->
    </section>

    <!-- internal -->
    <section class="internal">
      <h1 class="judul-internal">Departemen Internal</h1>

      <div class="container">
        <div class="kadept-internal">
          <img src="img/jennie.png" alt="jennie" width="110%" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Kepala Departemen Internal</p>
          </div>
        </div>

        <p class="desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
          et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
          Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
          maecenas ultricies. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
          orci nulla pellentesque dignissim enim sit amet.
        </p>

        <div class="anggota-internal">
          <img src="img/blackpink.png" alt="blackpink" width="100%" />
          <h4>Anggota Departemen Internal</h4>
        </div>
      </div>
    </section>
    
    <!-- end internal -->
    
    <!-- slider event -->
   
   <!-- end of slider event -->
    <!-- proker internal -->
    <div class="cont">
        <div class="content-slide">
            <div class="imgslide fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja1</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja2</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja3</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja4</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja5</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja6</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja7</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja8</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja9</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja10</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja11</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja12</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <a class="prev" onClick="nextslide(-1)">&#10094;</a>
            <a class="next" onClick="nextslide(1)">&#10095;</a> 
        </div>

        <div class="page">
            <span class="dot" onClick="dotslide(1)"></span>
            <span class="dot" onClick="dotslide(2)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
        </div>

    </div>

    <script>
        var slideIndex = 1;
            showSlide(slideIndex);

        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");
            
            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                dot[i].className = dot[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dot[slideIndex - 1].className += " active";

        }
    </script>
    <!-- external -->
    <section class="eksternal">
      <h1>Departemen Eksternal</h1>

      <div class="container">
        <div class="anggota-eksternal">
          <img src="img/blackpink.png" alt="blackpink" width="100%" />
          <h4>Anggota Departemen Eksternal</h4>
        </div>

        <p class="desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
          et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
          Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
          maecenas ultricies. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
          orci nulla pellentesque dignissim enim sit amet.
        </p>

        <div class="kadept-eksternal">
          <img src="img/jennie.png" alt="jennie" width="110%" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Kepala Departemen Eksternal</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end external -->

    <!-- proker eksternal -->
    <div class="cont2">
        <div class="content-slide2">
            <div class="imgslide2 fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja13</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja14</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja15</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja16</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <div class="imgslide2 fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja17</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja18</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja19</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja20</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <div class="imgslide2 fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja21</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja22</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja23</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja24</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <a class="prev2" onClick="nextslide2(-1)">&#10094;</a>
            <a class="next2" onClick="nextslide2(1)">&#10095;</a> 
        </div>

        <div class="page2">
            <span class="dot2" onClick="dotslide2(1)"></span>
            <span class="dot2" onClick="dotslide2(2)"></span>
            <span class="dot2" onClick="dotslide2(3)"></span>
        </div>

    </div>

    <script>
        var slideIndex2 = 1;
            showSlide2(slideIndex2);

        function nextslide2(n){
            showSlide2(slideIndex2 += n);
        }

        function dotslide2(n){
            showSlide2(slideIndex4 = n);
        }

        function showSlide2(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide2");
            var dot = document.getElementsByClassName("dot2");
            
            if (n > slides.length) {
                slideIndex2 = 1;
            }
            if (n < 1) {
                slideIndex2 = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                dot[i].className = dot[i].className.replace(" active", "");
            }
            slides[slideIndex2 - 1].style.display = "block";
            dot[slideIndex2 - 1].className += " active";

        }
    </script>

    <!-- pendidikan it -->
    <section class="it">
      <h1 class="judul-it">Departemen Pendidikan IT</h1>

      <div class="container">
        <div class="kadept-it">
          <img src="img/jennie.png" alt="jennie" width="110%" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Kepala Departemen Pendidikan IT</p>
          </div>
        </div>

        <p class="desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
          et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
          Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
          maecenas ultricies. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
          orci nulla pellentesque dignissim enim sit amet.
        </p>

        <div class="anggota-it">
          <img src="img/blackpink.png" alt="blackpink" width="100%" />
          <h4>Anggota Departemen Pendidikan IT</h4>
        </div>
      </div>
    </section>
    <!-- end pendidikan it -->

    <!-- proker pendidikan it -->
    <div class="cont3">
        <div class="content-slide3">
            <div class="imgslide3 fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja25</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja26</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja27</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja28</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <div class="imgslide3 fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja29</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja30</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja31</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja32</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <div class="imgslide3 fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja33</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja34</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja35</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja36</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <a class="prev3" onClick="nextslide3(-1)">&#10094;</a>
            <a class="next3" onClick="nextslide3(1)">&#10095;</a> 
        </div>

        <div class="page3">
            <span class="dot3" onClick="dotslide3(1)"></span>
            <span class="dot3" onClick="dotslide3(2)"></span>
            <span class="dot3" onClick="dotslide3(3)"></span>
        </div>

    </div>

    <script>
        var slideIndex3 = 1;
            showSlide3(slideIndex3);

        function nextslide3(n){
            showSlide3(slideIndex3 += n);
        }

        function dotslide3(n){
            showSlide3(slideIndex3 = n);
        }

        function showSlide3(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide3");
            var dot = document.getElementsByClassName("dot3");
            
            if (n > slides.length) {
                slideIndex3 = 1;
            }
            if (n < 1) {
                slideIndex3 = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                dot[i].className = dot[i].className.replace(" active", "");
            }
            slides[slideIndex3 - 1].style.display = "block";
            dot[slideIndex3 - 1].className += " active";

        }
    </script>

    <!-- pubdok -->
    <section class="pubdok">
      <h1>Departemen Publikasi dan Dokumentasi</h1>

      <div class="container">
        <div class="anggota-pubdok">
          <img src="img/blackpink.png" alt="blackpink" width="100%" />
          <h4>Anggota Departemen Publikasi dan Dokumentasi</h4>
        </div>

        <p class="desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus
          et malesuada fames ac turpis. Sem viverra aliquet eget sit amet.
          Bibendum est ultricies integer quis auctor elit sed. Aliquam id diam
          maecenas ultricies. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Vestibulum lectus mauris ultrices eros. Placerat
          orci nulla pellentesque dignissim enim sit amet.
        </p>

        <div class="kadept-pubdok">
          <img src="img/jennie.png" alt="jennie" width="110%" />
          <div class="nama">
            <h4>Jennie Kim</h4>
            <p>Kepala Departemen Publikasi dan Dokumentasi</p>
          </div>
        </div>
      </div>
    </section>
    <!-- end pubdok -->

    <!-- proker pubdok -->
    <div class="cont4">
        <div class="content-slide4">
            <div class="imgslide4 fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja37</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja38</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja39</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja40</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <div class="imgslide4 fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja41</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja42</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja43</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja44</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <div class="imgslide4 fade">
                <div class="numberslide"></div>
                <div class="box-container">
                    <div class="box">
                        <a href="">ProgramKerja45</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja46</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja47</a>
                   </div>
            
                   <div class="box">
                        <a href="">ProgramKerja48</a>
                   </div>
                </div>
                <div class="text"></div>
            </div>

            <a class="prev4" onClick="nextslide4(-1)">&#10094;</a>
            <a class="next4" onClick="nextslide4(1)">&#10095;</a> 
        </div>

        <div class="page4">
            <span class="dot4" onClick="dotslide4(1)"></span>
            <span class="dot4" onClick="dotslide4(2)"></span>
            <span class="dot4" onClick="dotslide4(3)"></span>
        </div>

    </div>

    <script>
        var slideIndex4 = 1;
            showSlide4(slideIndex4);

        function nextslide4(n){
            showSlide4(slideIndex4 += n);
        }

        function dotslide4(n){
            showSlide4(slideIndex4 = n);
        }

        function showSlide4(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide4");
            var dot = document.getElementsByClassName("dot4");
            
            if (n > slides.length) {
                slideIndex4 = 1;
            }
            if (n < 1) {
                slideIndex4 = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                dot[i].className = dot[i].className.replace(" active", "");
            }
            slides[slideIndex4 - 1].style.display = "block";
            dot[slideIndex4 - 1].className += " active";

        }
    </script>
@endsection
