<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kago</title>
  {{-- style sheets --}}

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

<body>
  <div class="page">

    <div class="page-wrapper">
      <!-- Page header -->
      <div class="page-header d-print-none">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <h2 class="page-title">
                Kago | Admin User Page
              </h2>
            </div>
          </div>
        </div>
      </div>
      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
          <div class='row row-cards'>
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Quick Action Links</h3>
                </div>
                <div class="card-body">
                  <div class="row g-2 align-items-center">

                    <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                      <a href="{{ route('admin-login') }}" class="btn btn-secondary w-100">
                        Login
                      </a>
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

  <!-- Libs JS -->
  <!-- Tabler Core -->
  <script src="{{ asset('theme/js/tabler.min.js?1668287865') }}" defer></script>
  <script src="{{ asset('theme/js/demo.min.js?1668287865') }}" defer></script>
</body>

</html>
