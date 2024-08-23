<x-guest-layout>
    <!-- Login 8 - Bootstrap Brain Component -->
  <section class="bg-light  p-3 p-md-4 p-xl-5">
    <div class="row justify-content-center">
      <div class="col-12 col-xxl-11">
        <div class="card border-light-subtle shadow-sm">
          <div class="row g-0">            
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
                        <h1 class="text-center fw-semibold">{{ __('Register') }}</h1>
                        <h4 class="text-center">{{ __('Welcome to!') }} History Pets.</h4>
                      </div>
                    </div>
                  </div>
                  <form role="form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row gy-3 overflow-hidden">
                      <div class="col-12">
                        <div class="form-floating mb-3">
                          <input type="text"  class="form-control" name="name" id="name" placeholder="{{ __('Name') }}" :value="old('name')" required autofocus autocomplete="name">
                          <label for="email" class="form-label">{{ __('Name') }}</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating mb-3">
                          <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('Email') }}" :value="old('email')" required autofocus autocomplete="username">
                          <label for="email" class="form-label">{{ __('Email') }}</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" name="password" id="password" value="" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                          <label for="password" class="form-label">{{ __('Password') }}</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="" placeholder="{{ __('password confirmation') }}" required autocomplete="new-password">
                          <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                        </div>
                      </div>
                      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="col-12">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" name="terms" id="terms">
                              <label class="form-check-label text-secondary" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                              </label>
                            </div>
                        </div>                        
                      @endif
                        <div class="row">
                          <div class="col-12">
                            <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center">
                              <p class="mx-auto mb-6 mt-2 leading-normal">{{ __('Already registered?') }}<a href="{{ route('login') }}" class="link-secondary text-decoration-none"> {{ __('Login') }}</a></p>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button class="btn btn-dark btn-lg">{{ __('Register') }}</button>
                            </div>
                          </div>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6" loading="lazy" style="background: url({{ asset('img/cat-dog-3.jpg') }}) no-repeat center center / cover;"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>