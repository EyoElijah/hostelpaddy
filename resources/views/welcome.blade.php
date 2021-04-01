@extends('layouts.home')

@section('content')

  @include('compo.countdown')

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

  @include('compo.social')

  @include('compo.copyright')
@endsection
