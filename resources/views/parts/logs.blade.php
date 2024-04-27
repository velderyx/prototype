@extends('layout.main')
@section('title', 'Data Part')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Logs History
        </h1>

      </div>

    </div>
  </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <!-- /.card-header -->
              <table id="example1" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                <th>No.</th>
                <th>Tanggal Keluar</th>
                <th>Plat</th>
                <th>Part</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $totalLogs = count($logs);
                    $rowNumber = $totalLogs;
                @endphp
                @foreach($logs as $log)
                <tr>
                    <td>{{ $rowNumber-- }}</td>
                    <td>{{ date('d/m/Y', strtotime($log->date)) }}</td>
                    <td>{{ $log->part->plate }}</td>
                    <td>{{ $log->part->name }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
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
  @endsection
