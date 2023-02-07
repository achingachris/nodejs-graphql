<x-adminlayout>
  <x-slot:title>
    All Routes
    </x-slot>

    {{-- show a message if no routes available --}}
    @if (count($routes) == 0)
      <div class="container-xl mt-3 mb-3">
        <p class="text-center text-bg-danger"> No routes Added </p>
      </div>
    @endif

    <div class="container-xl mt-3 mb-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Available Routes</h3>
          </div>
          <div class="card-body border-bottom py-3">
            <div class="d-flex">
              <div class="ms-auto text-muted">
                Search:
                <div class="ms-2 d-inline-block">
                  <input type="text" class="form-control form-control-sm" placeholder="Search destination">
                </div>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="card-table table-vcenter text-nowrap datatable table">
              <thead>
                <tr>
                  <th class="w-1">Route ID</th>
                  <th>desctination 1</th>
                  <th>destination 2</th>
                  <th>Distance (KM)</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($routes as $route)
                  <tr>
                    <td><span class="text-muted">{{ $route['id'] }}</span></td>
                    <td><a href="/admin/routes/{{ $route['id'] }}" class="text-reset"
                        tabindex="-1">{{ $route['destination_1'] }}</a></td>
                    <td>
                      {{ $route['destination_2'] }}
                    </td>
                    <td>
                      {{ $route['distance'] }}
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            <p class="text-muted m-0">Showing <span>{{count($routes)}}</span> entries</p>
          </div>
        </div>
      </div>
    </div>
</x-adminlayout>
