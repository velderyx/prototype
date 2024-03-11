@extends('layout.main')
@section('title', 'Data Part')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Barang
                <a href="{{ route('part.create') }}" class="btn btn-success">
                    <i class="fas fa-plus"></i>
                    <span>Tambah </span>
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

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          <div class="col-md-6">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Compound 2500</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Tgl</th>
                      <th>Entitas</th>
                      <th style="width: 10px">Jumlah</th>
                      <th style="width: 10px">Saldo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>05/07/2024</td>
                      <td>Andreas</td>
                      <td>1</td>
                      <td>20</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>02/03/2024</td>
                      <td>yadi</td>
                      <td>-5</td>
                      <td>20</td>
                    </tr>
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
      </div><!-- /.container-fluid -->
    </section>
@endsection