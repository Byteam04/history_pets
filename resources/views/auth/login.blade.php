<x-guest-layout>
    <!-- Login 8 - Bootstrap Brain Component -->
  <section class="bg-light  p-3 p-md-4 p-xl-5">
    <div class="row justify-content-center">
      <div class="col-12 col-xxl-11">
        <div class="card border-light-subtle shadow-sm">
          <div class="row g-0">
            <div class="col-12 col-md-6" loading="lazy" style="background: url({{ asset('img/animals.jpg') }}) no-repeat center center / cover;"></div>
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
              <div class="col-12 col-lg-11 col-xl-10">
                <div class="card-body p-3 p-md-4 p-xl-5">
                  <div class="row">
                    <div class="col-12">
                      <div class="mb-5">
                        <div class="d-flex justify-center text-center mb-4">
                          <x-authentication-card-logo />
                        </div>
                        <x-validation-errors class="mb-4" />
                        <h1 class="text-center fw-semibold">{{ __('Sign In') }}</h1>
                        <h4 class="text-center">{{ __('Enter your email and password to sign in') }}</h4>
                      </div>
                    </div>
                  </div>
                  <form role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row gy-3 overflow-hidden">
                      <div class="col-12">
                        <div class="form-floating mb-3">
                          <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('Email') }}" :value="old('email')" required autofocus autocomplete="username">
                          <label for="email" class="form-label">{{ __('Email') }}</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" name="password" id="password" value="" placeholder="{{ __('Password') }}" required autocomplete="current-password">
                          <label for="password" class="form-label">{{ __('Password') }}</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                          <label class="form-check-label text-secondary" for="remember_me">
                            {{ __('Remember me') }}
                          </label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-grid">
                          <button class="btn btn-dark btn-lg" type="submit">{{ __('Sign In') }}</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="row">
                    <div class="col-12">
                      <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-5">
                        <p class="mx-auto leading-normal text-sm">{{ __('Don’t have an account?') }}<a href="{{ route('register') }}" class="link-secondary text-decoration-none"> {{ __('Register') }}</a></p>
                        @if (Route::has('password.request'))
                          <a href="{{ route('password.request') }}" class="link-secondary text-decoration-none text-sm">{{ __('Forgot your password?') }}</a>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>
