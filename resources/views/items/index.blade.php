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
                {{-- card start column from here --}}
                @foreach($itemsByItemName as $itemName => $items)
                    <div class="col-md-6">
                        <!-- /.card -->
                        <div class="card">
                            <div class="card-header">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <h3 class="card-title">{{ ucfirst($itemName) }}</h3>
                                    </div>
                                    <div class="col-auto">
                                        <a href="{{ route('item.store') }}" class="btn btn-success" data-toggle="modal" data-target="#{{ Str::camel($itemName) }}Modal">
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
                                            $totalItems = count($items);
                                            $rowNumber = $totalItems;
                                        @endphp

                                        @foreach($items as $item)
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

                    {{-- Modal for this item --}}
                    <div class="modal fade" id="{{ Str::camel($itemName) }}Modal" tabindex="-1" aria-labelledby="{{ Str::camel($itemName) }}ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ route('item.store') }}" method="POST">
                                    @csrf <!-- Add CSRF token -->
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="{{ Str::camel($itemName) }}ModalLabel">gunakan tanda minus - pada qty untuk pengambilan </h5>
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
                                            <input type="text" class="form-control" id="compound_name" name="itemName" value="{{ $itemName }}">
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
                    {{-- End Modal --}}
                @endforeach
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
