<section class="hotel">
    <div class="container">
        <div class="hotel-info">
            <div class="hotel-info__text">
                <div class="hotel-wrapper">
                    <div class="stars">
                        <img src="img/star.svg" alt="Star" />
                        <img src="img/star.svg" alt="Star" />
                        <img src="img/star.svg" alt="Star" />
                        <img src="img/star.svg" alt="Star" />
                        <img src="img/star.svg" alt="Star" />
                    </div>
                    <!-- /.stars -->
                    <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
                    <span class="offer hotel-info__offer">Flash Offer</span>
                </div>
                <p class="hotel-description hotel-info__description">
                    Half-Board/ All Inclusive + Complimentary Activities + Child Stays
                    Free
                </p>
            </div>
            <!-- /.hotel-info__left -->
            <div data-toggle="modal" data-href="#rating-modal" class="rating hotel-info__rating">
                <span class="rating__text">User Rattings</span>
                <span class="rating__counter">4.5/5</span>
            </div>
            <!-- /.hotel-info__right -->
        </div>
        <!-- /.hotel-info -->
        <div class="hotel-grid">
            <div class="swiper-container hotel-slider hotel__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide hotel-slider__item">
                        <img class="swiper-slide__image" src="img/slide.jpg" alt="Slide" />
                    </div>
                    <!-- /.swiper-slide -->
                    <div class="swiper-slide hotel-slider__item">
                        <img class="swiper-slide__image" src="img/slide.jpg" alt="Slide" />
                    </div>
                    <!-- /.swiper-slide -->
                    <div class="swiper-slide hotel-slider__item">
                        <img class="swiper-slide__image" src="img/slide.jpg" alt="Slide" />
                    </div>
                    <!-- /.swiper-slide -->
                </div>
                <!-- /.swiper-wrapper -->
                <button class="hotel-slider__button hotel-slider__button--prev"></button>
                <button class="hotel-slider__button hotel-slider__button--next"></button>
            </div>
            <!-- /.swiper-container -->

            <div class="hotel-right">
                <div class="booking">
                    <div class="booking__info">
                        <div class="booking__price">
                            <span class="booking__start">price start as</span>
                            <strong class="booking__pricetag">$ 8,500</strong>
                            <span class="booking__per-room">per room / night</span>
                        </div>
                        <!-- /.booking__price -->
                        <div class="booking__room">
                            <div class="booking__text">
                                <img src="img/user.svg" alt="Icon: user" class="booking__icon" />
                                <span class="booking__description">2 x Guests</span>
                            </div>
                            <!-- /.booking__text -->
                            <div class="booking__text">
                                <img src="img/home.svg" alt="Icon: home" class="booking__icon" />
                                <span class="booking__description">1 x Room</span>
                            </div>
                            <!-- /.booking__text -->
                        </div>
                        <!-- /.booking__room -->
                    </div>
                    <!-- /.booking__info -->
                    <div class="booking__call-center">
                        <span class="booking__heading">Quick Booking</span>
                        <a class="booking__number" href="tel:12100">
                            <img src="img/phone-call.svg" alt="Icon: phone" />
                            <span class="booking__num">12100</span>
                        </a>
                    </div>
                    <!-- /.booking__call-center -->
                    <button data-toggle="modal" data-href="#booking-modal" class="button booking__button">View Other Options</button>
                </div>
                <!-- /.booking -->
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.0413263625387!2d98.29254741471124!3d7.890745494315328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30503b7bfcd9f903%3A0xf7065fac1e3d7c48!2sDoubleTree%20by%20Hilton%20Phuket%20Banthai%20Resort!5e0!3m2!1sru!2sru!4v1601360858849!5m2!1sru!2sru" width="100%" height="213px" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <!-- /.map -->
            </div>
            <!-- /.hotel-right -->
        </div>
        <!-- /.hotel-grid -->
    </div>
    <!-- /.container -->
</section>
<section class="newsletter">
    <div class="newsletter-wrapper" data-aos="fade-right">
        <h2 class="newsletter-title newsletter__title">
            subscribe to our
            <span class="newsletter-title__strong">Newsletter</span>
        </h2>
        <form action="send.php" method="POST" class="subscribe">
            <input type="text" class="subscribe__input" placeholder="Your email address" name="email" />
            <button class="subscribe__button">Send</button>
        </form>
    </div>
</section>
<section class="reviews">
    <div class="container">
        <h2 class="reviews__title">What people think about us</h2>
        <div class="swiper-container reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="reviews-slider__item">
                        <div class="reviews-slider__profile">
                            <img src="img/reviews-avatar.jpg" alt="Photo: Megan Fox" class="reviews-slider__avatar" />
                            <h3 class="reviews-slider__username">Megan Fox</h3>
                            <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                            <div class="reviews-slider__rating">
                                <img src="img/star.svg" alt="Star" />
                                <img src="img/star.svg" alt="Star" />
                                <img src="img/star.svg" alt="Star" />
                                <img src="img/star.svg" alt="Star" />
                                <img src="img/star.svg" alt="Star" />
                            </div>
                            <!-- /.reviews-slider__rating -->
                        </div>
                        <!-- /.reviews-slider__profile -->
                        <p class="reviews-slider__text">
                            It was very nice hotel with cleanliness. Staff behavior was
                            good and polite. They welcome us very well. Issue was only
                            that Lift was not in working and we were allotted to 3rd floor
                            and amenities articles were in corner of gallery which were
                            giving bad feeling. Breakfast was good and support of the
                            staff was also very nice. Location is not good as per
                            atmosphere, it is very nearby most of the popular places but
                            self location in a narrow street is not good. Overall it was a
                            good experience and could recommend.
                        </p>
                    </div>
                    <!-- /.reviews-slider__item -->
                </div>
                <!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="reviews-slider__item">
                        <div class="reviews-slider__profile">
                            <img src="img/reviews-avatar-2.jpg" alt="Photo: Robert Johnson" class="reviews-slider__avatar" />
                            <h3 class="reviews-slider__username">Robert Johnson</h3>
                            <span class="reviews-slider__date">Stayed 20 Jan, 2020</span>
                            <div class="reviews-slider__rating">
                                <img src="img/star.svg" alt="Star" />
                                <img src="img/star.svg" alt="Star" />
                                <img src="img/star.svg" alt="Star" />
                            </div>
                            <!-- /.reviews-slider__rating -->
                        </div>
                        <!-- /.reviews-slider__profile -->
                        <p class="reviews-slider__text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Repellat qui odit magni! Soluta incidunt vel, quam ratione
                            dolorem cum facere reiciendis qui accusantium tenetur, eum
                            temporibus voluptatibus atque. Voluptatem, vitae. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit. Debitis voluptas
                            dignissimos nulla facilis. Cumque velit officiis, similique,
                            possimus minus officia facilis quibusdam nisi explicabo
                            praesentium, dolor voluptatum exercitationem deleniti tempora.
                        </p>
                    </div>
                    <!-- /.reviews-slider__item -->
                </div>
                <!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="reviews-slider__item">
                        <div class="reviews-slider__profile">
                            <img src="img/reviews-avatar-3.jpg" alt="Photo: Lionel Axelrod" class="reviews-slider__avatar" />
                            <h3 class="reviews-slider__username">Lionel Axelrod</h3>
                            <span class="reviews-slider__date">Stayed 04 May, 2020</span>
                            <div class="reviews-slider__rating">
                                <img src="img/star.svg" alt="Star" />
                                <img src="img/star.svg" alt="Star" />
                                <img src="img/star.svg" alt="Star" />
                                <img src="img/star.svg" alt="Star" />
                            </div>
                            <!-- /.reviews-slider__rating -->
                        </div>
                        <!-- /.reviews-slider__profile -->
                        <p class="reviews-slider__text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Repellat qui odit magni! Soluta incidunt vel, quam ratione
                            dolorem cum facere reiciendis qui accusantium tenetur, eum
                            temporibus voluptatibus atque. Voluptatem, vitae. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit. Debitis voluptas
                            dignissimos nulla facilis. Cumque velit officiis, similique,
                            possimus minus officia facilis quibusdam nisi explicabo
                            praesentium, dolor voluptatum exercitationem deleniti tempora.
                        </p>
                    </div>
                    <!-- /.reviews-slider__item -->
                </div>
                <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
            <button class="reviews-slider__button reviews-slider__button--prev"></button>
            <button class="reviews-slider__button reviews-slider__button--next"></button>
        </div>
        <!-- /.reviews-slider -->
    </div>
    <!-- /.container -->
</section>
<section class="activities">
    <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
            <div class="card activities__card" data-aos="fade-down" data-aos-delay="100">
                <img src="img/activity-1.jpg" alt="The curious corner of chamarel" class="card__image" />
                <h3 class="card__title">The curious corner of chamarel</h3>
                <button class="card__button">Book Now</button>
            </div>
            <!-- /.card -->
            <div class="card activities__card" data-aos="fade-down" data-aos-delay="300">
                <img src="img/activity-2.jpg" alt="Gymkhana club golf course" class="card__image" />
                <h3 class="card__title">Gymkhana club golf course</h3>
                <button class="card__button">Book Now</button>
            </div>
            <!-- /.card -->
            <div class="card activities__card" data-aos="fade-down" data-aos-delay="500">
                <img src="img/activity-3.jpg" alt="Tamarind falls hiking trip - full day" class="card__image" />
                <h3 class="card__title">Tamarind falls hiking trip - full day</h3>
                <button class="card__button">Book Now</button>
            </div>
            <!-- /.card -->
            <div class="card activities__card" data-aos="fade-down" data-aos-delay="700">
                <img src="img/activity-4.jpg" alt="The blue marine discovery quest" class="card__image" />
                <h3 class="card__title">The blue marine discovery quest</h3>
                <button class="card__button">Book Now</button>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.activities-wrapper -->
    </div>
    <!-- /.container -->
</section>