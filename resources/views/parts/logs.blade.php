@extends('layout.main')
@section('title', 'Data Part')
@section('content')
    <section class="content-header">
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
                <th>Tanggal</th>
                <th>Plat</th>
                <th>Part</th>
                <th>Status</th>
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
                    <td>{{ $log->date }}</td>
                    <td>{{ $log->part->plate }}</td>
                    <td>{{ $log->part->name }}</td>
                    <td>{{ $log->newStatus->name }}</td>
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
