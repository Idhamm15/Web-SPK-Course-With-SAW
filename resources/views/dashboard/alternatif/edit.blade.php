@extends('./layout/page2')
@section('content')
  <section class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
            <h1>Edit Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Alternatif</li>
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
                <h3 class="card-title">Edit Alternatif</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/alternatif/update/'.$alternatif->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="kode_alternatif" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kode_alternatif" placeholder="Kode Alternatif" value="{{ $alternatif->kode_alternatif}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_alternatif" class="col-sm-2 col-form-label">Alternatif</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_alternatif" placeholder="Nama Alternatif" value="{{ $alternatif->nama_alternatif}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_1" class="col-sm-2 col-form-label">C1</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_1" placeholder="Nilai Kriteria (Tinggi Badan)" value="{{ $alternatif->kriteria_1}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_2" class="col-sm-2 col-form-label">C2</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_2" placeholder="Nilai Kriteria (Berat Badan)" value="{{ $alternatif->kriteria_2}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_3" class="col-sm-2 col-form-label">C3</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_3" placeholder="Nilai Kriteria (Kondisi Fisik)" value="{{ $alternatif->kriteria_3}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_4" class="col-sm-2 col-form-label">C4</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_4" placeholder="Nilai Kriteria (PBB)" value="{{ $alternatif->kriteria_4}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kriteria_5" class="col-sm-2 col-form-label">C5</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kriteria_5" placeholder="Nilai Kriteria (PBB)" value="{{ $alternatif->kriteria_5}}">
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
