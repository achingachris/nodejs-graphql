<x-adminlayout>

    <div class="container-xl m-auto mt-3">
      <div class="row row-cards">
        <div class="col">
          <div class="row row-cards">
            <div class="col-12">
              <form class="card" method="POST" action="/admin/routes">
                @csrf
                <div class="card-body">
                  <h3 class="card-title">Add A Vehicle</h3>
                  <hr />
                  <div class="row row-cards">
                    <div class="col-md-12">
                      <div class="mb-3">
                        <label class="form-label">Vehicle Type</label>
                        <input type="text" class="form-control" name="vehicle_type">
                        @error('vehicle_type')
                          <div class="alert alert-danger m-auto">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-end">
                  <button type="submit" class="btn btn-primary">Add Route</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </x-adminlayout>
  