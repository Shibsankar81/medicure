<style>
        body{
            background-color: #d4e4f8;
        }
    
    .swiper {
      width: 90%;
      height: 16rem;
      /* padding-top: 3rem; */
      /* margin: -1rem 0 -1.5rem 0; */
      margin-top: 3rem;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: transparent;
      display: flex;
      justify-content: center;
      align-items: center;
      border: 1px solid rgb(0, 38, 255);
      padding: 1.3rem;
    }

    .message-box{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        /* padding: 1rem 1rem 2rem 1rem; */
    }
    .message-img img{
        height:6rem;
        width:6rem;
        margin-top: 1rem;
        /* margin-bottom: .5rem; */
        border-radius: 50%;
    }
    .rating{
        font-size: 16px;
        display: flex;
        flex-direction: row;
        /* margin-block: .5rem; */
    }
    .rating img{
        height: 25px;
        width: 25px;  
        margin-block: auto;
    }
    .message-text{
        font-size: 14px;
        text-align: center;
        /* padding: 0px 5px 0px 10px; */
    }
.name{
    color: rgb(0, 119, 255);
    font-size: 16px;
}


@media(max-width:512px){

}

</style>

<div style="background-color: #d4e4f8; height:18rem;">
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="message-box">
                <div class="message-img">
                    <img src="images/doctor.jpg" alt="">
                </div>
                <div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div style="display: flex; flex-direction: column; align-items:center; justify-content:center;">
                        <span class="name">A...B....c</span>
                        <span class="rating" id="starRating1"></span>
                    </div>
                    <div>
                        <p class="message-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime delectus excepturi aspernatur accusamus debitis fugit ipsum tempore odio, eius natus dolores repellat nam, necessitatibus commodi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="message-box">
                <div class="message-img">
                    <img src="images/d-w-b.png" alt="">
                </div>
                <div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div style="display: flex; flex-direction: column; align-items:center; justify-content:center;">
                        <span class="name">x...y...z</span>
                        <span class="rating" id="starRating2"></span>
                    </div>
                    <div>
                        <p class="message-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime delectus excepturi aspernatur accusamus debitis fugit ipsum tempore odio, eius natus dolores repellat nam, necessitatibus commodi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="message-box">
                <div class="message-img">
                    <img src="images/patient.jpg" alt="">
                </div>
                <div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div style="display: flex; flex-direction: column; align-items:center; justify-content:center;">
                        <span class="name">p...q...r</span>
                        <span class="rating" id="starRating3"></span>
                    </div>
                    <div>
                        <p class="message-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime delectus excepturi aspernatur accusamus debitis fugit ipsum tempore odio, eius natus dolores repellat nam, necessitatibus commodi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="message-box">
                <div class="message-img">
                    <img src="images/doctor-5.jpg" alt="">
                </div>
                <div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div style="display: flex; flex-direction: column; align-items:center; justify-content:center;">
                        <span class="name">P...s...t</span>
                        <span class="rating" id="starRating4"></span>
                    </div>
                    <div>
                        <p class="message-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime delectus excepturi aspernatur accusamus debitis fugit ipsum tempore odio, eius natus dolores repellat nam, necessitatibus commodi.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="message-box">
                <div class="message-img">
                    <img src="images/w-d-p-1.png" alt="">
                </div>
                <div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div style="display: flex; flex-direction: column; align-items:center; justify-content:center;">
                        <span class="name">S...t...u</span>
                        <span class="rating" id="starRating5"></span>
                    </div>
                    <div>
                        <p class="message-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime delectus excepturi aspernatur accusamus debitis fugit ipsum tempore odio, eius natus dolores repellat nam, necessitatibus commodi.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide">
            <div class="message-box">
                <div class="message-img">
                    <img src="images/w-d-p-1.png" alt="">
                </div>
                <div style="display:flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div style="display: flex; flex-direction: column; align-items:center; justify-content:center;">
                        <span class="name">S...t...u</span>
                        <span class="rating" id="starRating5"></span>
                    </div>
                    <div>
                        <p class="message-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime delectus excepturi aspernatur accusamus debitis fugit ipsum tempore odio, eius natus dolores repellat nam, necessitatibus commodi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div> --}}
</div>
</div>




  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      breakpoints: {
                0: { // when window width is 0px or larger
                    slidesPerView: 1,
                },
                768: { // when window width is 768px or larger
                    slidesPerView: 3,
                }
            },
    });
  </script>

<script>
    function displayStarRating(elementId, rating) {
        const starContainer = document.getElementById(elementId);
        const maxStars = 5;
        const starImage = 'images/star2.png';

        // Clear any existing stars
        starContainer.innerHTML = '';

        // Ensure the rating is within 0 to 5
        const validRating = Math.max(0, Math.min(rating, 5));

        // Append stars based on the rating
        for (let i = 0; i < maxStars; i++) {
            const img = document.createElement('img');
            img.src = starImage;
            img.alt = 'Star';
            img.className = 'star';
            img.style.opacity = i < validRating ? '1' : '0.3';
            starContainer.appendChild(img);
        }

        // Append rating value
        const ratingValue = document.createElement('span');
        ratingValue.textContent = rating.toFixed(1);
        // starContainer.appendChild(ratingValue);
    }

    // Example usage
    displayStarRating('starRating1', 4.5);
    displayStarRating('starRating2', 3);
    displayStarRating('starRating3', 5);
    displayStarRating('starRating4', 2.5);
    displayStarRating('starRating5', 4);
</script>