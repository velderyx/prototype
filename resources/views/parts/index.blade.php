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
              @livewire('PartIndex')
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
