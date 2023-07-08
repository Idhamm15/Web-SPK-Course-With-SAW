@extends('./layout/page2')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
            <h1>Data Kriteria</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kriteria</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
              <div class="card-header">
                <h3 class="card-title">Data Kriteria</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('kriteria/add') }}" class="btn-sm btn-success">+ Tambah Kriteria</a>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kode Kriteria</th>
                    <th>Kriteria</th>
                    <th>Nilai Bobot</th>
                    <th>Jenis Kriteria</th>
                    <!-- <th>Aksi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $kriteria)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $kriteria->kode_kriteria }}</td>
                    <td>{{ $kriteria->nama_kriteria }}</td>
                    <td>{{ $kriteria->bobot }}</td>
                    <td>{{ $kriteria->jenis }}</td>
                    <td>
                      <a href="{{ url('kriteria/edit/'.$kriteria->id) }}" class="btn btn-outline-warning">Edit</a>
                      <a href="{{ url('kriteria/delete/'.$kriteria->id) }}" class="btn btn-outline-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  @endsection
