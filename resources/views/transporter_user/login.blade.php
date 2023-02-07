<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kago Client</title>
    <link rel="stylesheet" href="{{ asset('theme/css/tabler.min.css?1668287865') }}" />
  <link rel="stylesheet" href="{{ asset('theme/css/tabler-flags.min.css?1668287865') }}" />
  <link rel="stylesheet" href="{{ asset('theme/css/tabler-payments.min.css?1668287865') }}" />
  <link rel="stylesheet" href="{{ asset('theme/css/tabler-vendors.min.css?1668287865') }}" />
  <link rel="stylesheet" href="{{ asset('theme/css/demo.min.css?1668287865') }}" />
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }
  </style>
</head>
<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container container-tight py-4">
          <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
          </div>
          <div class="card card-md">
            <div class="card-body">
              <h2 class="h2 text-center mb-4">Login to your account</h2>
              <form action="./" method="get" autocomplete="off" novalidate>
                <div class="mb-3">
                  <label class="form-label">Email address</label>
                  <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off">
                </div>
                <div class="mb-2">
                  <label class="form-label">
                    Password
                  </label>
                  <div class="input-group input-group-flat">
                    <input type="password" class="form-control"  placeholder="Your password"  autocomplete="off">
                    <span class="input-group-text">
                      <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                      </a>
                    </span>
                  </div>
                </div>
                
                <div class="form-footer">
                  <button type="submit" class="btn btn-primary w-100">
                    <a class="text-white" href="{{ route('admin-dashboard') }}">Log In</a>
                    </button>
                </div>
              </form>
            </div>
           
          </div>
          
        </div>
      </div>
</body>
</html>
