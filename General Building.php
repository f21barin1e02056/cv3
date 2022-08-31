
<?php include("header.php"); ?>
  <div class="about pt-5 pb-5">
    <h1 class="intro text-center text-white"><b>Our Services</b></h1>
  </div>
  <div class="building pt-5 pb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
         
            <h2 class="us text-black pt-2 pb-3"> <b>General Building</b></h2>
          <p class="since pb-5 animate__animated animate__fadeInLeft">Red Circle undertake all aspects of General Building and private sectors villas. Our building maintenance service covers everything that makes a building work and keeps its occupants’ content and productive. We cover most trades that would be required: civil, MEP and Finishing stage.</p>
            
        </div>
        <div class="col-md-3">
          <div class="img3 animate__animated animate__fadeInRight">
          <img src="images/1inf.jpg" width="100%" alt="">
        </div>
        </div>
        <div class="col-md-1"></div>
      
      </div>
    </div>
  </div>
  <a href="#" class="prev">&lt;</a>
	<a href="#" class="next">&gt;</a>
	<main class="container-1">
		<div class="row">
   
		<div class='col-md-3'><img src="images/22-1.jpg" alt=""></div>
		<div class='col-md-3'><img src="images/22-1-1.jpg" alt=""></div>
		<div class='col-md-3'><img src="images/22-2.jpg" alt=""></div>
		<div class='col-md-3'><img src="images/22-3.jpg" alt=""></div>
		<div class='col-md-3 pt-3'><img src="images/22-4.jpg" alt=""></div>

    </div>
	</main>
  <?php include("footer.php"); ?>
  <script>
      // TODO: touch events

const divs = document.querySelectorAll('.container-1 .row div');
const body = document.body;
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');

checkPrev = () => document.querySelector('.container-1 .row div:first-child').classList.contains('show') ? prev.style.display = 'none' : prev.style.display = 'flex';

checkNext = () => document.querySelector('.container-1 .row div :last-child').classList.contains('show') ? next.style.display = 'none' : next.style.display = 'flex';
			
Array.prototype.slice.call(divs).forEach(function (el) {
			el.addEventListener('click', function () {
				this.classList.toggle('show');
				body.classList.toggle('active');
				checkNext();
				checkPrev();
			});
});

prev.addEventListener('click', function() {
			const show = document.querySelector('.show');
			const event = document.createEvent('HTMLEvents');
			event.initEvent('click', true, false);

			show.previousElementSibling.dispatchEvent(event);
			show.classList.remove('show');
			body.classList.toggle('active');
			checkNext();
});

next.addEventListener('click', function() {
			const show = document.querySelector('.show');
			const event = document.createEvent('HTMLEvents');
			event.initEvent('click', true, false);

			show.nextElementSibling.dispatchEvent(event);
			show.classList.remove('show');
			body.classList.toggle('active');
			checkPrev();
});
    </script>