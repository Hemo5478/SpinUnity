<section class=" slider_section position-relative">
      <div class="jet_box">
        <hr>
        <h6>
          jetcycle
        </h6>
        <hr>
      </div>
      <ol class="carousel-indicators indicator-2">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active indicator-li-1">01</li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
      </ol>
      <div class="container-fluid h-100">
        <div class="row">
          <div class="col-md-4 offset-md-1">
            <div class="detail-box">
              <h1>
                Racing <br>
                <span>
                  Man cycle
                </span>
              </h1>
              <p>
                There are many variations of passages of Lorem Ipsum available.
              </p>
              <div class="btn-box">
                <a href="" class="btn-1">
                  Shop Now
                </a>
                <a href="" class="btn-2">
                  Get A Quote
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-7 px-0 h-100">
            <div class="img_container h-100">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators indicator-1">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active indicator-li-1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <section class="section-transform-top section-custom-1">
        <div class="container">
          <div class="box-countdown-dark">
            <div
              class="cross-wrap cross-2 cross-firefox-fix"
              data-parallax-scroll='{"y": -20, "x": 30,  "smoothness": 40 }'
              style="
                transform: translate3d(26.752px, -17.795px, 0px) rotateX(0deg)
                  rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
                -webkit-transform: translate3d(26.752px, -17.795px, 0px)
                  rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1)
                  scaleZ(1);
              "
            >
              <div class="cross">
                <span></span><span></span><span></span><span></span>
              </div>
            </div>
            <div
              class="cross-wrap cross-3 cross-firefox-fix"
              data-parallax-scroll='{"y": 20, "x": -30,  "smoothness": 40 }'
              style="
                transform: translate3d(-26.712px, 17.835px, 0px) rotateX(0deg)
                  rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
                -webkit-transform: translate3d(-26.712px, 17.835px, 0px)
                  rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1)
                  scaleZ(1);
              "
            >
              <div class="cross">
                <span></span><span></span><span></span><span></span>
              </div>
            </div>
            <div
              class="row row-30 align-items-center justify-content-xl-between"
            >
              <div class="col-lg-3 col-xl text-center text-lg-left">
                <h3>Next Ride</h3>
                <p class="text-opacity-80">
                  Feel free to take part in our upcoming bike ride!
                </p>
              </div>
              <div class="col-lg-6 col-xl-7">
                <div
                  class="countdown is-countdown"
                  data-type="until"
                  data-time="17 Oct 2019 16:00"
                  data-format="dhms"
                >
                  <span class="countdown-row countdown-show4"
                    ><span class="countdown-section"
                      ><span id="days" class="countdown-amount"></span
                      ><span class="countdown-period">Days</span></span
                    ><span class="countdown-section"
                      ><span id="hours" class="countdown-amount"></span
                      ><span class="countdown-period">Hours</span></span
                    ><span class="countdown-section"
                      ><span id="minutes" class="countdown-amount"></span
                      ><span class="countdown-period">Minutes</span></span
                    ><span class="countdown-section"
                      ><span  id="seconds" class="countdown-amount"></span
                      ><span class="countdown-period">Seconds</span></span
                    ></span>
                </div>
              </div>
              <div class="col-lg-3 col-xl">
                <a class="button button-primary button-lg button-block" href="{{route('register')}}"
                  >Register</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
  <!-- about section -->

  <script>
      (function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy ,
      dayMonth = "12/25/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

      }, 0)
  }());
  </script>