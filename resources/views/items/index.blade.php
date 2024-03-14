@extends('layout.main')
@section('title', 'Data Part')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Barang Cairan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col -->
          {{-- card start collumn from here --}}
          <div class="col-md-6">
            <!-- /.card -->

            {{-- thinner reducer card --}}
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h3 class="card-title">Thinner  Reducer</h3>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('item.store') }}" class="btn btn-success" data-toggle="modal" data-target="#thinnerReducerModal">
                                <i class="fas fa-plus"></i>
                                <span>Tambah</span>
                            </a>
                        </div>
                    </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="itemTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Tgl</th>
                      <th>Nama</th>
                      <th style="width: 10px">Qty</th>
                      <th style="width: 10px">Saldo</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $balance = 0;
                        $totalItems = count($itemsThinnerReducer);
                        $rowNumber = $totalItems;
                    @endphp

                    @foreach($itemsThinnerReducer as $item)
                    <tr>
                        <td>{{ $rowNumber-- }}</td>
                        <td>{{ date('d/m/Y', strtotime($item->date)) }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ (int) $item->qty }}</td>
                        <td>{{ $balance += $item->qty }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            {{-- slow --}}
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h3 class="card-title">Slow</h3>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('item.store') }}" class="btn btn-success" data-toggle="modal" data-target="#slowModal">
                                <i class="fas fa-plus"></i>
                                <span>Tambah</span>
                            </a>
                        </div>
                    </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="itemTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Tgl</th>
                      <th>Nama</th>
                      <th style="width: 10px">Qty</th>
                      <th style="width: 10px">Saldo</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $balance = 0;
                        $totalItems = count($itemsslow);
                        $rowNumber = $totalItems;
                    @endphp

                    @foreach($itemsslow as $item)
                    <tr>
                        <td>{{ $rowNumber-- }}</td>
                        <td>{{ date('d/m/Y', strtotime($item->date)) }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ (int) $item->qty }}</td>
                        <td>{{ $balance += $item->qty }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-6">
            <!-- /.card -->

            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <h3 class="card-title">Thinner A</h3>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('item.store') }}" class="btn btn-success" data-toggle="modal" data-target="#thinnerAModal">
                                <i class="fas fa-plus"></i>
                                <span>Tambah</span>
                            </a>
                        </div>
                    </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table id="itemTable" class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Tgl</th>
                      <th>Nama</th>
                      <th style="width: 10px">Qty</th>
                      <th style="width: 10px">Saldo</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                        $balance = 0;
                        $totalItems = count($itemsThinnerA);
                        $rowNumber = $totalItems;
                    @endphp

                    @foreach($itemsThinnerA as $item)
                    <tr>
                        <td>{{ $rowNumber-- }}</td>
                        <td>{{ date('d/m/Y', strtotime($item->date)) }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ (int) $item->qty }}</td>
                        <td>{{ $balance += $item->qty }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>



    {{-- modal thinner reducer new "collumn" --}}
    <div class="modal fade" id="thinnerReducerModal" tabindex="-1" aria-labelledby="thinnerReducerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('item.store') }}" method="POST">
                    @csrf <!-- Add CSRF token -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="thinnerReducerModalLabel">gunakan tanda minus - pada qty untuk pengambilan </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Input fields for your form -->
                        <div class="form-group">
                            <label for="compound_name">Tanggal</label>
                            <input type="date" class="form-control" id="compound_name" name="date">
                        </div>
                        <div class="form-group">
                            <label for="compound_name">Nama</label>
                            <input type="text" class="form-control" id="compound_name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="compound_name">qty</label>
                            <input type="number" class="form-control" id="compound_name" name="qty">
                        </div>
                        <div class="form-group" style="display: none;">
                            <label for="compound_name">Item name</label>
                            <input type="text" class="form-control" id="compound_name" name="itemName" value="thinner reducer">
                        </div>
                        <!-- Add more input fields as needed -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    {{-- modal thinner A --}}
    <div class="modal fade" id="thinnerAModal" tabindex="-1" aria-labelledby="thinnerAModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('item.store') }}" method="POST">
                    @csrf <!-- Add CSRF token -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="thinnerAModalLabel">gunakan tanda minus - pada qty untuk pengambilan </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Input fields for your form -->
                        <div class="form-group">
                            <label for="compound_name">Tanggal</label>
                            <input type="date" class="form-control" id="compound_name" name="date">
                        </div>
                        <div class="form-group">
                            <label for="compound_name">Nama</label>
                            <input type="text" class="form-control" id="compound_name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="compound_name">qty</label>
                            <input type="number" class="form-control" id="compound_name" name="qty">
                        </div>
                        <div class="form-group" style="display: none;">
                            <label for="compound_name">Item name</label>
                            <input type="text" class="form-control" id="compound_name" name="itemName" value="thinner a">
                        </div>
                        <!-- Add more input fields as needed -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- modal slow --}}
    <div class="modal fade" id="slowModal" tabindex="-1" aria-labelledby="slowModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('item.store') }}" method="POST">
                    @csrf <!-- Add CSRF token -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="slowModalLabel">gunakan tanda minus - pada qty untuk pengambilan </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Input fields for your form -->
                        <div class="form-group">
                            <label for="compound_name">Tanggal</label>
                            <input type="date" class="form-control" id="compound_name" name="date">
                        </div>
                        <div class="form-group">
                            <label for="compound_name">Nama</label>
                            <input type="text" class="form-control" id="compound_name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="compound_name">qty</label>
                            <input type="number" class="form-control" id="compound_name" name="qty">
                        </div>
                        <div class="form-group" style="display: none;">
                            <label for="compound_name">Item name</label>
                            <input type="text" class="form-control" id="compound_name" name="itemName" value="slow">
                        </div>
                        <!-- Add more input fields as needed -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
