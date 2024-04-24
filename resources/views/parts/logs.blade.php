@extends('layout.main')
@section('title', 'Data Part')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Part
                <a href="{{ route('part.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    <span>Tambah Part baru</span>
                </a>
            </h1>
             <div>
                    @if(session()->has('success'))
                        <div>
                            for testing only
                            {{ session('success') }}
                        </div>
                    @endif
                </div>

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
                <th>date</th>
                <th>Part</th>
                <th>Old</th>
                <th>New</th>
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
                    <td>{{ $log->part->name }}</td>
                    <td>{{ $log->old }}</td>
                    <td>{{ $log->new }}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Part</th>
                    <th>Old</th>
                    <th>New</th>
                </tr>
                </tfoot>
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
