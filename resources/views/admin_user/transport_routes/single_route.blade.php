<x-adminlayout>

  <x-slot:title>
    View Route
    </x-slot>

    <div class="container-xl mt-3 mb-5">

      <div class="card">

        <div class="table-responsive">
          <table class="card-table table-vcenter text-nowrap datatable table">
            <thead>
              <tr>
                <th class="w-1">Route ID</th>
                <th>desctination 1</th>
                <th>destination 2</th>
                <th>Distance</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td><span class="text-muted">{{ $route['id'] }}</span></td>
                  <td>{{ $route['destination_1'] }}</td>
                  <td>
                    {{ $route['destination_2'] }}
                  </td>
                  <td>
                    {{ $route['distance'] }}
                  </td>
                </tr>
            </tbody>
          </table>

        </div>

        <div class="card-footer">
          <a type="button" class="btn btn-primary" href="/admin/routes/{{ $route['id'] }}/edit">Edit</a>
        </div>
      </div>
    </div>


</x-adminlayout>
