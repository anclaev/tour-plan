   <footer class="footer">
       <div class="container">
           <div class="footer-wrapper">
               <img src="img/vertical-logo.svg" alt="Logo: Best Tour Plan" class="logo footer__logo" />
               <div class="footer__list footer__categories">
                   <h3 class="footer__title">ALL CATEGORIES</h3>
                   <ul class="footer__ul">
                       <li class="footer__item">
                           <a href="#" class="footer__link">All Deals</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Hotels</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Activities</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Spa Packages</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Hotel Day Packages</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Restaurants</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Fitness</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Rodrigues</a>
                       </li>
                   </ul>
               </div>
               <!-- /.footer__list -->
               <div class="footer__list footer__additional">
                   <h3 class="footer__title">ADDITIONAL INFORMATION</h3>
                   <ul class="footer__ul">
                       <li class="footer__item">
                           <a href="#" class="footer__link">About Us</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Contact Us</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">How does it work?</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Frequently Asked Questions</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Deals.mu loyalty program</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Promote your Business on BTP</a>
                       </li>
                   </ul>
               </div>
               <!-- /.footer__list -->
               <div class="footer__social-network">
                   <h3 class="footer__title footer__title--inline">Social Network</h3>
                   <div class="footer__social-links">
                       <a href="#" class="footer__link"><img src="img/facebook.svg" alt="Icon: Facebook" /></a>
                       <a href="#" class="footer__link"><img src="img/youtube.svg" alt="Icon: Youtube" /></a>
                       <a href="#" class="footer__link"><img src="img/instagram.svg" alt="Icon: Instagram" /></a>
                   </div>
                   <!-- /.footer__social-links -->
               </div>
               <!-- /.footer__social-network -->
               <div class="footer__list footer__legal">
                   <h3 class="footer__title">Legal Information</h3>
                   <ul class="footer__ul">
                       <li class="footer__item">
                           <a href="#" class="footer__link">Terms & Conditions</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Disclaimer</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Cancellation policy</a>
                       </li>
                       <li class="footer__item">
                           <a href="#" class="footer__link">Privacy</a>
                       </li>
                   </ul>
               </div>
               <!-- /.footer__list -->
               <div class="footer__contact-details">
                   <h3 class="footer__title footer__title--mb-3">Contact Details</h3>
                   <p class="footer__text">
                       Feel free to contact us by phone, email or by our contact form
                   </p>
                   <ul class="footer__ul">
                       <li class="footer__item footer__item--mb-2">
                           <div class="footer__icon-wrapper">
                               <img class="footer__icon" src="img/map-marker.svg" alt="Logo: map-marker" />
                           </div>
                           9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United
                           States
                       </li>
                       <li class="footer__item footer__item--mb-2">
                           <div class="footer__icon-wrapper">
                               <img class="footer__icon" src="img/phone.svg" alt="Logo: phone" />
                           </div>
                           Tel (business hours) : 269 1500 <br />
                           Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00
                           pm) <br />
                           Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm) <br />
                       </li>
                       <li class="footer__item footer__item--mb-2">
                           <div class="footer__icon-wrapper">
                               <img class="footer__icon" src="img/email.svg" alt="Logo: email" />
                           </div>
                           cherly.lawson@example.com
                       </li>
                   </ul>
               </div>
               <!-- /.footer__contact-details -->
               <div class="footer__contact-form">
                   <h3 class="footer__title footer__title--mb-3">Send us a message</h3>
                   <form action="send.php" method="POST" class="footer__form">
                       <input type="text" class="input footer__input" placeholder="Your Full Name*" name="name" />
                       <input type="text" class="input footer__input" placeholder="Phone Number*" name="phone" />
                       <textarea class="message footer__message" placeholder="Message" name="message"></textarea>
                       <button type="submit" class="button footer__button">Send</button>
                       <span class="footer__info">* Required Fields</span>
                   </form>
               </div>
               <!-- /.footer__contact-form -->
           </div>
           <!-- /.footer-wrapper -->
       </div>
       <!-- /.container -->
   </footer>
   <div class="modal" id="booking-modal">
       <div class="modal__overlay"></div>
       <!-- /.modal__overlay -->
       <div class="modal__dialog">
           <a href="#" class="modal__close">
               <img src="img/close.svg" alt="Icon: Close" />
           </a>
           <div class="modal-form">
               <h3 class="modal__title modal__title--mb-3">Booking</h3>
               <form action="send.php" method="POST" class="modal__form">
                   <input type="text" class="input modal__input" placeholder="Your Full Name*" name="name" />
                   <input type="text" class="input modal__input" placeholder="Phone Number*" name="phone" />
                   <input type="text" class="input modal__input" placeholder="Email*" name="email" />
                   <textarea class="message modal__message" placeholder="Message" name="message"></textarea>
                   <button type="submit" class="button modal__button">Send</button>
                   <span class="modal__info">* Required Fields</span>
               </form>
           </div>
       </div>
       <!-- /.modal__dialog -->
   </div>
   <!-- /.modal -->
   <div class="modal" id="rating-modal">
       <div class="modal__overlay"></div>
       <!-- /.modal__overlay -->
       <div class="modal__dialog">
           <a href="#" class="modal__close">
               <img src="img/close.svg" alt="Icon: Close" />
           </a>
           <div class="modal-form">
               <h3 class="modal__title modal__title--mb-3">Send us a feedback</h3>
               <form action="send.php" method="POST" class="modal__form">
                   <input type="text" class="input modal__input" placeholder="Your Full Name*" name="name" />
                   <input type="text" class="input modal__input" placeholder="Phone Number*" name="phone" />
                   <input type="text" class="input modal__input" placeholder="Email*" name="email" />
                   <textarea class="message modal__message" placeholder="Message" name="message"></textarea>
                   <button type="submit" class="button modal__button">Send</button>
                   <span class="modal__info">* Required Fields</span>
               </form>
           </div>
       </div>
       <!-- /.modal__dialog -->
   </div>
   <!-- /.modal -->
   <script src="js/jquery-3.5.1.min.js"></script>
   <script src="js/swiper-bundle.min.js"></script>
   <script src="js/aos.js"></script>
   <script src="js/main.js"></script>
   </body>

   </html>