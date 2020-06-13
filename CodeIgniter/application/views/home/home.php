
      
    <div class="container">
      <div class="content-wrapper">
        <div class="portfolio-items-wrapper">
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/CeilInn2.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="logo-wrapper">
                <img src="#" alt="" />
              </div>
              <div class="subtitle">
                <a href="home"
                  >You will find comfort and convenience at the Ceil Inn</a
                >
              </div>
            </div>
          </div>
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/CeilInn.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="subtitle">
                <a href="booking">Book a Room With Us Today</a>
              </div>
            </div>
          </div>
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/Employees.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="subtitle">
                <a href="employees">Employees Only</a>
              </div>
            </div>
          </div>
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/CeilHood.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="subtitle">
                <a href="customers">New Customer Registration</a>
              </div>
            </div>
          </div>
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/CeilWind.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="subtitle">
                Ceil Inn at it's Best
              </div>
            </div>
          </div>
          <div class="portfolio-item-wrapper">
            <div
              class="portfolio-img-background"
              style="background-image: url(Images/bedroom.jpg);"
            ></div>
            <div class="img-text-wrapper">
              <div class="logo-wrapper">
                <img src="Images/LogoMakr_9Bv3nz.png" alt="" />
              </div>
              <div class="subtitle">
                <a href="rooms">Chec Out Our Luxurious Rooms</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
      
    </div>
  </body>
  <script>
    const portfolioItems = document.querySelectorAll(".portfolio-item-wrapper");

    portfolioItems.forEach((portfolioItem) => {
      portfolioItem.addEventListener("mouseover", () => {
        portfolioItem.childNodes[1].classList.add("img-darken");
      });
      portfolioItem.addEventListener("mouseout", () => {
        portfolioItem.childNodes[1].classList.remove("img-darken");
      });
    });
  </script>