<x-adminlayout>
  <x-slot:title>
    All Vehicles
    </x-slot>

    <div class="container-xl mt-3 mb-3">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Vehicles</h3>
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
                  <th class="w-1">Vehicle Type</th>
                  <th>Vehicle Capacity</th>
                  <th>Type of Trailer</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                {{-- show a message if no vehicles available --}}
                @if (count($vehicles) == 0)
                  <div class="container-xl mt-3 mb-3">
                    <p class="text-center text-bg-danger"> No data on Vehicles </p>
                  </div>
                @endif
                
                @foreach ($vehicles as $vehicle)
                  <tr>
                    <td><a href="/admin/vehicles/{{ $vehicle['id'] }}" class="text-reset"
                        tabindex="-1">{{ $vehicle['vehicle_type'] }}</a></td>
                    <td>
                    <td><span class="text-muted">{{ $vehicle['vehicle_type'] }}</span></td>
                      {{ $vehicle['capacity'] }}
                    </td>
                    <td>
                      {{ $vehicle['type_of_trailer'] }}
                    </td>
                    <td>
                      {{ $vehicle['status'] }}
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <div class="card-footer d-flex align-items-center">
            <p class="text-muted m-0"><span>{{count($vehicles)}}</span> entries</p>
          </div>
        </div>
      </div>
    </div>
</x-adminlayout>
