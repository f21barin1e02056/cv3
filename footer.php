
    <div class="footer bg-black pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2 class="title text-white">About us</h2>
            <p class="title1" style="color: #78787f;font-size: .875rem;line-height: 1.6;">Since 2018, we have been
              strongly committed to providing our customers with the highest level of service in the building and
              construction markets.</p>
          </div>
          <div class="col-md-4">
            <h2 class="title text-white">Our Address</h2>
            <p class="title1" style="color: #78787f;font-size: .875rem;line-height: 1.6;">Building No. 8616, King Fahd
              Road Cross of Prince Naif Road, Ar Rawdah Dist.,<br>
              Dammam City K.S.A</p>
            <p class="title2" style="color: #78787f;font-size: .875rem;line-height: 1.6;"> Email: <a
                href="mailto:info@redcirlectc.co">info@redcirclectc.com</a></p>

            <p class="title1 pb-5" style="color: #78787f;font-size: .875rem;line-height: 1.6;">Phone Number: (+966) 535890090
            </p>

          </div>
          <div class="col-md-4">
            <h2 class="title text-white">Follow Us</h2>
            <p class="title1" style="color: #78787f;font-size: .875rem;line-height: 1.6;">Stay in touch with us
            <div class="icon pt-2">
              <a href="https://facebook.com/"><i class="fa-brands fa-facebook fa-1x" style="color:#1877f2 ;"></a></i>
              <a href="https://twitter.com/"><i class="fa-brands fa-twitter" style="color:#1da1f2;"></a></i>
              <a href="http://instagram.com/"><i class="fa-brands fa-instagram" style="color:#c22b3e ;"></a></i>
            </div>
            </p>
          </div>
        </div>
      </div>
      <div class="site-footer-separator"></div>
     
        <p class="title1 text-center pt-3 pb-3" style="color: #78787f;font-size: .875rem;line-height: 1.6;">Copyright © 2021 All rights reserved. | Design and Development by <a href="https://getsmartsol.com/" target="_blank">Getsmartsol.</a></p>
        
      </div>
    </div>

















    <script src="bootstrap/js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      $(document).ready(function () {
        /* Every time the window is scrolled ... */
        $('.navbar').addClass('black');
        $(window).scroll(function () {
          $('.navbar').addClass('black');
        });
        $(window).scroll(function () {
          /* Check the location of each desired element */
          $('.arabic').each(function (i) {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if (bottom_of_window > bottom_of_object) {
              $(this).addClass(' animate__fadeInLeft');
              $(this).removeClass('hide');

            }
          });
        });
      });
    </script>
    <script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "<i class='fa-solid fa-pause'></i>";
  } else {
    video.pause();
    btn.innerHTML = "<i class='fa-solid fa-play'></i>";
  }
}
</script>
    <script>
      $(document).ready(function () {
        /* Every time the window is scrolled ... */
        $(window).scroll(function () {
          /* Check the location of each desired element */
          $('.title').each(function (i) {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if (bottom_of_window > bottom_of_object) {
              $(this).addClass(' animate__zoomIn');
            }
          });
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        /* Every time the window is scrolled ... */
        $(window).scroll(function () {
          /* Check the location of each desired element */
          $('.aboutimg').each(function (i) {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if (bottom_of_window > bottom_of_object) {
              $(this).addClass(' animate__fadeInRight');
              $(this).removeClass('hide');
            }
          });
        });
      });
    </script>
    <script>
      // inViewport jQuery plugin
      // http://stackoverflow.com/a/26831113/383904
      // Based on Fiddle: https://jsfiddle.net/2v3mq3nh/4/
      // From this Answer: http://stackoverflow.com/a/36980280
      $(function ($, win) {
        $.fn.inViewport = function (cb) {
          return this.each(function (i, el) {
            function visPx() {
              var H = $(this).height(),
                r = el.getBoundingClientRect(),
                t = r.top,
                b = r.bottom;
              return cb.call(el, Math.max(0, t > 0 ? H - t : (b < H ? b : H)));
            }
            visPx();
            $(win).on("resize scroll", visPx);
          });
        };
      }
        (jQuery, window));

      jQuery(function ($) { // DOM ready and $ in scope

        $(".Count").inViewport(function (px) { // Make use of the `px` argument!!!
          // if element entered V.port ( px>0 ) and
          // if prop initNumAnim flag is not yet set
          //  = Animate numbers
          if (px > 0 && !this.initNumAnim) {
            this.initNumAnim = true; // Set flag to true to prevent re-running the same animation
            $(this).prop('Counter', 0).animate({
              Counter: $(this).text()
            }, {
              duration: 4000,
              easing: 'swing',
              step: function (now) {
                $(this).text(Math.ceil(now));
              }
            });
          }
        });

      });
      
    </script>
    <script>
      
      </script>
    

</body>

</html>