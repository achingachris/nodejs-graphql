<x-adminlayout>

  <div class="container-xl m-auto mt-3">
    <div class="row row-cards">
      <div class="col">
        <div class="row row-cards">
          <div class="col-12">
            <form class="card" method="POST" action="/admin/routes">
              @csrf
              <div class="card-body">
                <h3 class="card-title">Add Transportation Route</h3>
                <div class="row row-cards">
                  <div class="col-sm-6 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Destination 1</label>
                      <input type="text" class="form-control" name="destination_1">
                      @error('destination_1')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Destination 2</label>
                      <input type="text" class="form-control" name="destination_2">
                      @error('destination_2')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <label class="form-label">Distance in Kilometers</label>
                      <input type="number" class="form-control" name="distance">
                      @error('distance')
                        <div class="alert alert-danger">{{ $message }}</div>
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
