@extends('./layout/page2')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
            <h1>Data Course Programming</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Course Programming</li>
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
                <h3 class="card-title">Data Course Programming</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('course/add') }}" class="btn-sm btn-success">+ Tambah Data Course</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $course)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $course->nama_course }}</td>
                    <td>{{ $course->harga }}</td>
                    <td>{{ $course->status }}</td>
                    <td>{{ $course->deskripsi }}</td>
                    <td>
                      <a href="{{ url('course/edit/'.$course->id) }}" class="btn btn-outline-warning">Edit</a>
                      <a href="{{ url('course/delete/'.$course->id) }}" class="btn btn-outline-danger">Delete</a>
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
