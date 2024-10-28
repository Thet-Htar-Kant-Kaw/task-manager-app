<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4 vh-100 d-flex align-items-center">
          <div class="card w-100 shadow">
            <div class="card-header">
              <h4 class="card-title">Login</h4>
            </div>
            <div class="card-body">
              <form id="login_form" action="{{ route('login.store') }}" method="POST"> 
                @csrf
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" />
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>                      
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="{{ old('password') }}" class="form-control" />
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>                      
                    @enderror
                </div>
                <button type="submit" class="btn btn-block btn-primary">Login</button>
                <p class="mt-2">
                    Don't have an account? Register <a href="/register">here</a>
                </p>
              </form>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>    

    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <!-- Link to the custom validation file -->
    <script src="{{ asset('js/login.js') }}"></script>

  </body>
</html>