<?php $ptitle='Cabot Cruises';include '_header.php';?>
      <div class="Slider">
        <picture>
          <source
            media="(max-width: 350px)"
            srcset="images/tropical_beach_slider_small.jpg"
          />
          <img
            src="images/tropical_beach_slider_medium-large.jpg"
            alt="image"
          />
        </picture>
        <picture>
          <source
            media="(max-width: 350px)"
            srcset="images/tropical_dining_slider_small.jpg"
          />
          <img
            src="images/tropical_dining_slider_medium-large.jpg"
            alt="image"
          />
        </picture>
        <picture>
          <source
            media="(max-width: 350px)"
            srcset="images/tropical_excursion_slider_small.jpg"
          />
          <img
            src="images/tropical_excursion_slider_medium-large.jpg"
            alt="image"
          />
        </picture>
        <picture>
          <source
            media="(max-width: 350px)"
            srcset="images/tropical_sleep_slider_small.jpg"
          />
          <img
            src="images/tropical_sleep_slider_medium-large.jpg"
            alt="image"
          />
        </picture>
      </div>
      <!--end slider div-->
      <div class="articleDiv">
        <h2>Recent Blog Articles</h2>
        <div class="cards">
          <div class="card1">
            <a href="#">
              <div>
                <img src="./images/article1.jpg" alt="blog" />
                <h2>Turtle Excursions</h2>
                <h3>May 1st, 2018</h3>
              </div>
            </a>
          </div>
          <!-- end card1 div-->
          <div class="card2">
            <a href="#">
              <div>
                <img src="./images/article2.jpg" alt="blog" />
                <h2>Best Beaches</h2>
                <h3>May 1st, 2018</h3>
              </div>
            </a>
          </div>
          <!-- end card2 div-->
          <div class="card3">
            <a href="#">
              <div>
                <img src="./images/article3.jpg" alt="blog" />
                <h2>Swim with Dolphins</h2>
                <h3>May 1st, 2018</h3>
              </div>
            </a>
          </div>
          <!-- end card3 div-->
          <div class="card4">
            <a href="#">
              <div>
                <img src="./images/article4.jpg" alt="blog" />
                <h2>Scuba Diving</h2>
                <h3>May 1st, 2018</h3>
              </div>
            </a>
          </div>
          <!-- end card4 div-->
        </div>
        <!--end cards div-->
      </div>
      <!-- end article div -->
      
        <?php include '_footer.php';?>