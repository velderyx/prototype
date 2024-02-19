@extends('layout.main')
@section('title', 'Data Part')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Part
                <a href="{{ route('part.index') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    <span>Tambah Part baru</span>
                </a>
                <div>
                    @if(session()->has('success'))
                        <div>
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
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
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" >
                  <thead>
                  <tr>
                    <th>nama</th>
                    <th>mobil</th>
                    <th>plat</th>
                    <th>supplier</th>
                    <th>asuransi</th>
                    <th>tgl</th>
                    <th>keterangan</th>
                    <th>opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($parts as $part)
                    <tr>
                        <td>{{ $part->name }}</td>
                        <td>{{ $part->car->name }}</td>
                        <td>{{ $part->plate }}</td>
                        <td>{{ $part->supplier->name }}</td>
                        <td>{{ $part->insurance->name }}</td>
                        <td>{{ date('d/m/Y', strtotime($part->date)) }}</td>
                        <td>{{ $part->description }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">Action</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                              </button>
                              <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="{{ route('part.edit', ['part' => $part]) }}">Edit</a>
                                <a class="dropdown-item" href="{{ route('part.destroy', ['part'=>$part]) }}">Delete</a>
                              </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>nama</th>
                    <th>mobil</th>
                    <th>plat</th>
                    <th>supplier</th>
                    <th>asuransi</th>
                    <th>tgl</th>
                    <th>keterangan</th>
                    <th>opsi</th>
                  </tr>
                  </tfoot>
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
