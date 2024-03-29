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
                {{-- <div>
                    @if(session()->has('success'))
                        <div>
                            {{ session('success') }}
                        </div>
                    @endif
                </div> --}}
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
                <table id="example1" class="table table-bordered" >
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Tgl</th>
                    <th>Plat Nomor</th>
                    <th>Nama</th>
                    <th>Mobil</th>
                    <th>Supplier</th>
                    <th>Asuransi</th>
                    <th>Status</th>
                    <th>Lokasi</th>
                    <th>Keterangan</th>
                    <th>--</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                        $totalParts = count($parts);
                        $rowNumber = $totalParts;
                    @endphp
                    @foreach($parts as $part)
                    <tr>
                        <td>{{ $rowNumber-- }}</td>
                        <td>{{ date('d/m/Y', strtotime($part->date)) }}</td>
                        <td>{{ $part->plate }}</td>
                        <td>{{ $part->name }}</td>
                        <td>{{ $part->car->name }}</td>
                        <td>{{ $part->supplier->name }}</td>
                        <td>{{ $part->insurance->name }}</td>
                        <td>{{ $part->status->name }}</td>
                        <td>{{ $part->location->name }}</td>
                        <td>{{ $part->description }}</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-success">Opsi</button>
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                              <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" href="{{ route('part.edit', ['part' => $part]) }}">Edit</a></li>
                              <a class="dropdown-item" href="{{ route('part.destroy', ['part'=>$part]) }}" onclick="return confirm('Yakin hapus part ini?')">Delete</a></li>
                            </div>
                          </div>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Tgl</th>
                        <th>Plat Nomor</th>
                        <th>Nama</th>
                        <th>Mobil</th>
                        <th>Supplier</th>
                        <th>Asuransi</th>
                        <th>Status</th>
                        <th>Lokasi</th>
                        <th>Keterangan</th>
                        <th>--</th>
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
  @endsection
