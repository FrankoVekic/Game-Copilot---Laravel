<x-app>
<div class="section padding_layout_1">
    <div class="container">
      <div class="row">
      <div class="col-xs-12 col-md-12"></div>
      <div class="col-xs-12 col-md-12">
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
                  <div class="payment-form">
                <h2 class="text_align_center">Log In Form</h2>
                <div class="form_section">
                  <form class="form_contant" method="POST" action="{{ env('APP_URL') }}users/authenticate">
                    @csrf
                    <fieldset>
                    <div class="row">
                      <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input class="field_custom" value="{{ old('email') }}" name="email" placeholder="Email adress" type="email">
                        @error('email')
                        <p style="color: red; font-size:14px; margin-left:8px;">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <input class="field_custom" value="{{ old('password') }}" name="password" placeholder="Password" type="password">
                        @error('password')
                        <p  style="color: red; font-size:14px; margin-left:8px;">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="center"><a href="/register">Don't have an account?</a></div>
                      <div class="center"><button class="btn main_bt" type="submit">Log In</button></div>
                    </div>
                    </fieldset>
                  </form>
                </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app>