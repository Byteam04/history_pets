<x-guest-layout>
    <section class="text-center">
      <div class="p-5 bg-image" style="background: url({{ asset('img/cat-dog.jpg') }}) no-repeat center center / cover; height: 300px;">
         <div class="d-flex justify-center text-center mb-4">
            <x-authentication-card-logo />
         </div>
      </div>
      <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary bg-opacity-25" style="margin-top: -100px;">
        <div class="card-body py-5 px-md-5">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-7">             
              <h2 class="fw-bold mb-5">{{ __('Forgot your password?') }}</h2>
              <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
              </div>
              @if (session('status'))
                  <div class="mb-4 font-medium text-sm text-green-600">
                      {{ session('status') }}
                  </div>
              @endif

              <x-validation-errors class="mb-4" />
              <form  method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="row d-flex justify-content-center">
                  <div class="col-md-6">
                    <div data-mdb-input-init class="form-outline">
                      <input class="form-control" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"/>
                      <label class="form-label" for="email" value="{{ __('Email') }}"></label>
                    </div>
                  </div>
                </div>
                <!-- Submit button -->
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                   {{ __('Email Password Reset Link') }}
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Section: Design Block -->
</x-guest-layout>
