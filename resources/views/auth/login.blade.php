<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-status-bar" content="#01d679">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>login</title>

    <link rel="manifest" href="/manifest.json">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <link rel="apple-touch-icon" sizes="16x16" href="/pwa/icons/ios/16.png">
    <link rel="apple-touch-icon" sizes="20x20" href="/pwa/icons/ios/20.png">
    <link rel="apple-touch-icon" sizes="29x29" href="/pwa/icons/ios/29.png">
    <link rel="apple-touch-icon" sizes="32x32" href="/pwa/icons/ios/32.png">
    <link rel="apple-touch-icon" sizes="40x40" href="/pwa/icons/ios/40.png">
    <link rel="apple-touch-icon" sizes="50x50" href="/pwa/icons/ios/50.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/pwa/icons/ios/57.png">
    <link rel="apple-touch-icon" sizes="58x58" href="/pwa/icons/ios/58.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/pwa/icons/ios/60.png">
    <link rel="apple-touch-icon" sizes="64x64" href="/pwa/icons/ios/64.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/pwa/icons/ios/72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/pwa/icons/ios/76.png">
    <link rel="apple-touch-icon" sizes="80x80" href="/pwa/icons/ios/80.png">
    <link rel="apple-touch-icon" sizes="87x87" href="/pwa/icons/ios/87.png">
    <link rel="apple-touch-icon" sizes="100x100" href="/pwa/icons/ios/100.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/pwa/icons/ios/114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/pwa/icons/ios/120.png">
    <link rel="apple-touch-icon" sizes="128x128" href="/pwa/icons/ios/128.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/pwa/icons/ios/144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/pwa/icons/ios/152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/pwa/icons/ios/167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/pwa/icons/ios/180.png">
    <link rel="apple-touch-icon" sizes="192x192" href="/pwa/icons/ios/192.png">
    <link rel="apple-touch-icon" sizes="256x256" href="/pwa/icons/ios/256.png">
    <link rel="apple-touch-icon" sizes="512x512" href="/pwa/icons/ios/512.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="/pwa/icons/ios/1024.png">

    <link href="/pwa/icons/ios/1024.png" sizes="1024x1024" rel="apple-touch-startup-image">
    <link href="/pwa/icons/ios/512.png" sizes="512x512" rel="apple-touch-startup-image">
    <link href="/pwa/icons/ios/256.png" sizes="256x256" rel="apple-touch-startup-image">
    <link href="/pwa/icons/ios/192.png" sizes="192x192" rel="apple-touch-startup-image">
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
    
    @vite(['resources/js/app.js'])

  </body>
</html>