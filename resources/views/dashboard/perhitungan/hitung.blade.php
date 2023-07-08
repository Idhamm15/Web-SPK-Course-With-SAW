@extends('layout.page2')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
            <h1>Perhitungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Perhitungan</li>
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
                <h3 class="card-title">Bobot</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>0.2</th>
                    <th>0.2</th>
                    <th>0.2</th>
                    <th>0.2</th>
                    <th>0.2</th>
                  </tr>
                  </thead>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      {{-- </div> --}}
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
                <h3 class="card-title">Normalisasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                </tr>
                </thead>
                <tbody>
                {{-- @foreach ($data as $alternatif)
                    <tr>
                        <td>{{$alternatif->kode_alternatif }}</td>
                        <td>{{$C1min['nama_alternatif'] / $alternatif->kriteria_1 }}</td>
                        <td>{{$alternatif->kriteria_2 / $C2max['nama_alternatif']}}</td>
                        <td>{{$alternatif->kriteria_3 / $C3max['nama_alternatif']}}</td>
                        <td>{{$alternatif->kriteria_4 / $C4max['nama_alternatif']}}</td>
                        <td>{{$alternatif->kriteria_5 / $C5max['nama_alternatif']}}</td>
                    </tr>
                @endforeach --}}
                 @foreach ($results as  $result)

                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $result['nama_alternatif'] }}</td>
                        <td>{{ $result['kriteria_1'] }}</td>
                        <td>{{ $result['kriteria_2'] }}</td>
                        <td>{{ $result['kriteria_3'] }}</td>
                        <td>{{ $result['kriteria_4'] }}</td>
                        <td>{{ $result['kriteria_5'] }}</td>
                        {{-- <td>{{ $result['hasil'] }}</td> --}}
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
      {{-- </div> --}}
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Main content -->
  <div class="col-12">
    <!-- Content Header (Page header) -->
    <section class="bg-light rounded h-100 p-4-header">
      <div class="mb-4">
        <div class="table-responsive-2">
          <div class="table">
                <h3 class="card-title">Hasil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Alternatif</th>
                    <th>Hasil</th>
                </tr>
                </thead>
                <tbody>
                {{-- @foreach ($data as $alternatif) --}}
                {{-- <tr>
                        <td>A1</td>
                        <td>A2</td>
                        <td>A3</td>
                        <td>A4</td>
                        Hasil
                        <td>
                            {{(1*$widget1['kriteria'])+
                            (0.77777777777778*$widget2['kriteria'])+
                            (1*$widget3['kriteria'])+
                            (0.88888888888889*$widget4['kriteria'])+
                            (0.88888888888889*$widget5['kriteria'])}}

                            {{(($alternatif->kriteria_1)*$widget1['kriteria'])+
                            (($alternatif->kriteria_2)*$widget2['kriteria'])+
                            (($alternatif->kriteria_3)*$widget3['kriteria'])+
                            (($alternatif->kriteria_4)*$widget4['kriteria'])+
                            (($alternatif->kriteria_5)*$widget5['kriteria'])}}
                        </td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>
                            {{(0.75*$widget1['kriteria'])+
                            (1*$widget2['kriteria'])+
                            (0.77777777777778*$widget3['kriteria'])+
                            (0.66666666666667*$widget4['kriteria'])+
                            (1*$widget5['kriteria'])}}
                        </td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>
                            {{(0.6*$widget1['kriteria'])+
                            (0.88888888888889*$widget2['kriteria'])+
                            (1*$widget3['kriteria'])+
                            (1*$widget4['kriteria'])+
                            (0.66666666666667*$widget5['kriteria'])}}
                        </td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td>
                            {{(0.66666666666667*$widget1['kriteria'])+
                            (0.77777777777778*$widget2['kriteria'])+
                            (0.88888888888889*$widget3['kriteria'])+
                            (0.55555555555556*$widget4['kriteria'])+
                            (0.77777777777778*$widget5['kriteria'])}}
                        </td>
                </tr> --}}

                 @foreach ($results as  $result)


                <tr>
                    <td>{{ $result['nama_alternatif'] }}</td>
                    <td>{{ $result['hasil'] }}</td>
                </tr>

                @endforeach

                {{-- @endforeach --}}
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
      {{-- </div> --}}
      <!-- /.container-fluid -->
    </section>
    <!-- content -->


  </div>


  {{-- <div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Responsive Table</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <td>{{$alternatif->kode_alternatif }}</td>
                        <td>{{$C1min['alternatif'] / $alternatif->kriteria_1 }}</td>
                        <td>{{$alternatif->kriteria_2 / $C2max['alternatif']}}</td>
                        <td>{{$alternatif->kriteria_3 / $C3max['alternatif']}}</td>
                        <td>{{$alternatif->kriteria_4 / $C4max['alternatif']}}</td>
                        <td>{{$alternatif->kriteria_5 / $C5max['alternatif']}}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>John</td>
                        <td>Doe</td>
                        <td>jhon@email.com</td>
                        <td>USA</td>
                        <td>123</td>
                        <td>Member</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>mark@email.com</td>
                        <td>UK</td>
                        <td>456</td>
                        <td>Member</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>jacob@email.com</td>
                        <td>AU</td>
                        <td>789</td>
                        <td>Member</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> --}}

  @endsection
