<!-- footer -->
<footer class="footer_style_2">
    <div class="container-fuild">
      <div class="row">
        <div class="map_section">
          <div id="map"></div>
        </div>
        <div class="footer_blog">
          <div class="row">
            <div class="col-md-6">
              <div class="main-heading left_text">
                <h2>Game-Copilot</h2>
              </div>
              <p>Game-Copilot was founded in {{ date('Y') }}.</p>
              <ul class="social_icons">
                <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="social-icon tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="social-icon gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="main-heading left_text">
                <h2>Additional links</h2>
              </div>
              <ul class="footer-menu">
                <li><a href="{{ env('APP_URL') }}about-us"><i class="fa fa-angle-right"></i> About us</a></li>
                <li><a href="{{ env('APP_URL') }}products/equipment"><i class="fa fa-angle-right"></i> Equipment</a></li>
                <li><a href="{{ env('APP_URL') }}products/games"><i class="fa fa-angle-right"></i> Games</a></li>
                <li><a href="{{ env('APP_URL') }}news/index"><i class="fa fa-angle-right"></i> News</a></li>
                <li><a href="{{ env('APP_URL') }}blog/index"><i class="fa fa-angle-right"></i> Blog</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="main-heading left_text">
                <h2>Services</h2>
              </div>
              <ul class="footer-menu">
                <li><a href="it_data_recovery.html"><i class="fa fa-angle-right"></i> Data recovery</a></li>
                <li><a href="it_computer_repair.html"><i class="fa fa-angle-right"></i> Computer repair</a></li>
                <li><a href="it_mobile_service.html"><i class="fa fa-angle-right"></i> Mobile service</a></li>
                <li><a href="it_network_solution.html"><i class="fa fa-angle-right"></i> Network solutions</a></li>
                <li><a href="it_techn_support.html"><i class="fa fa-angle-right"></i> Technical support</a></li>
              </ul>
            </div>
            <div class="col-md-6">
              <div class="main-heading left_text">
                <h2>Contact us</h2>
              </div>
              <p>Pere Perića Street 1<br>
                31000,Osijek<br>
                <span style="font-size:18px;"><a href="tel:+9876543210">+987 654 3210</a></span></p>
              <div class="footer_mail-section">
                <form>
                  <fieldset>
                  <div class="field">
                    <input placeholder="Email" type="text">
                    <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="cprt">
          <p>Game-Copilot © Copyrights {{ date('Y') }}</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- end footer -->