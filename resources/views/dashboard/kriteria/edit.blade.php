@extends('./layout/page2')

@section('content')
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
            <h1>Edit Kriteria</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Kriteria</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  <section class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
              <div class="card-header">
                <h3 class="card-title">Edit Kriteria</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/kriteria/update/'.$kriteria->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kode_kriteria" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode_kriteria" placeholder="Kode Kriteria" value="{{ $kriteria->kode_kriteria}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_kriteria" placeholder="Nama Kriteria" value="{{ $kriteria->nama_kriteria}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bobot" class="col-sm-2 col-form-label">Nilai Bobot</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="bobot" placeholder="Nilai Bobot" value="{{ $kriteria->bobot}}">
                    </div>
                  </div>
                  {{-- <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis Kriteria</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis" placeholder="Jenis Kriteria" value="{{ $kriteria->jenis}}">
                    </div>
                  </div> --}}
                  <div class="form-group row">
                        <label for="jenis" class="col-sm-2 col-form-label">Jenis Kriteria *</label>
                        <div class="col-sm-10">
                        <select id="jenis" name="jenis" class="form-control" required="required" data-error="Please specify your need.">
                            <option value="cost">Cost</option>
                            <option value="benefit">Benefit</option>
                        </select>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button style="background-color: #198754;" type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
