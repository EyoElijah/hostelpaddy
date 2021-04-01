@extends('layouts.home')

@section('content')
  <!-- Countdown container -->
  <div class="countdown-container">
    <div class="container">
      <div class="row">
        <div class="col-6 col-sm-6 col-lg-3">
          <div class="count-down">
            <h4 class="heading-text" id="countDay"></h4>
            <span class="desc-text">DAYS</span>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-lg-3">
          <div class="count-down">
            <h4 class="heading-text" id="countHrs"></h4>
            <span class="desc-text">HOURS</span>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-lg-3">
          <div class="count-down">
            <h4 class="heading-text" id="countMin"></h4>
            <span class="desc-text">MINUTES</span>
          </div>
        </div>

        <div class="col-6 col-sm-6 col-lg-3">
          <div class="count-down">
            <h4 class="heading-text" id="countSec"></h4>
            <span class="desc-text">SECONDS</span>
          </div>
        </div>


      </div>
    </div>
  </div>
  <!-- /Countdown container -->

  <!-- Coming soon content -->
  <div class="coming-soon-content">
    <div class="container">
      <div class="row">

        <!-- Coming soon content text -->
        <div class="col-12 col-md-8 col-lg-8">
          <div class="website">
            WEBSITE
          </div>
          <div class="launching-soon">
            LAUNCHING SOON
          </div>

          <div class="newsletter-container">
            <div class="newsletter-description">
              Get an apartment early by signing up to our mailing list
            </div>
            <div class="input-field-area">
              <form action="https://data.hostelpaddy.com/data/email.php" method="post" class="form-control">
                <input class="input" type="email" name="email" placeholder="Enter your email address here">
                <button class="submit">
                  <img class="bell" src="{{ asset('files/assets/Bell.svg') }}" alt="bell icon"> notify me
                </button>
              </form>
            </div>
          </div>
        </div>
        <!-- /Coming soon content text -->

        <!-- Coming soon content image -->
        <div class="col-12 col-md-4 col-lg-4 coming-soon-image">
          <img src="{{ asset('files/assets/side-image.svg') }}" alt="lodges">
        </div>
        <!-- /Coming soon content image -->

      </div>
    </div>
  </div>
  <!-- /Coming soon content -->

  <!-- Social icons -->
  <div class="container">
    <div class="row">
      <div class="social-icons">
        <div class="social-icon">
          <a href="https://facebook.com/Hostel-Paddy-111950534317618/?_rdc=1&_rdr">
            <img src="{{ asset('files/assets/Facebook.svg') }}" alt="Facebook">
          </a>
        </div>

        <div class="social-icon">
          <a href="https://twitter.com/hostelpaddy">
            <img src="{{ asset('files/assets/Twitter.svg') }}" alt="Twitter">
          </a>
        </div>

        <div class="social-icon">
          <a href="https://instagram.com/hostelpaddy">
            <img src="{{ asset('files/assets/Instagram.svg') }}" alt="Instagram">
          </a>
        </div>

      </div>
    </div>
  </div>
  <!-- /Social icons -->


  <!-- Copyright area -->
  <div class="container">
    <div class="row text-center">
      <div class="copyright-area">
        &copy; CHERNOBYL, <span id="copyright"></span>
      </div>
    </div>
  </div>
  <!-- /Copyright area -->
@endsection
