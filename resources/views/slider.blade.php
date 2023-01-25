    <div class="containers">
        <div class="content-slide">
            <div class="imgslide fade">
                <div class="numberslide"></div>
                <a href="/"><img class="images" src="/img/cu4.jpg" alt=""></a>
                <div class="text"></div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide"></div>
                <a href="/"><img class="images" src="/img/valo.jpg" alt=""></a>
                <div class="text"></div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide"></div>
                <a href="/"><img class="images" src="/img/aot.jpg" alt=""></a>
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