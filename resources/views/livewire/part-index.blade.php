<div class="card-body" >
    {{-- <label for="statusFilter">Testing Filter by Status:</label>
    <select wire:model="statusFilter" id="statusFilter" wire:change="fetchParts">
        <option value="1">Status 1</option>
        <option value="2">Status 2</option>
    </select> --}}
@livewire('ToastNotification')
<form action="{{ route('part.bulk-change-status') }}" method="POST">
    @csrf
    @method('PATCH')

    <table id="example1" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Plat Nomor</th>
                <th>Nama</th>
                <th>Tanggal</th>
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
                    <td>{{ $part->plate }}</td>
                    <td>{{ $part->name }}</td>
                    <td>{{ date('d/m/Y', strtotime($part->date)) }}</td>
                    <td>{{ $part->car->name }}</td>
                    <td>{{ $part->supplier->name }}</td>
                    <td>{{ $part->insurance->name }}</td>
                    <td>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_id[{{ $part->id }}]" id="1{{ $part->id }}" value="1" {{ $part->status_id == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="1{{ $part->id }}">In Stock</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_id[{{ $part->id }}]" id="2{{ $part->id }}" value="2" {{ $part->status_id == '2' ? 'checked' : '' }}>
                                <label class="form-check-label" for="2{{ $part->id }}">Out</label>
                            </div>
                        </div>
                    </td>
                    <td>{{ $part->location->name }}</td>
                    <td>{{ $part->description }}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                Actions
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="{{ route('part.edit', ['part' => $part]) }}">Edit</a>
                                <a class="dropdown-item" href="{{ route('part.destroy', ['part' => $part]) }}" onclick="return confirm('Yakin hapus part ini?')">Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>Plat Nomor</th>
                <th>Nama</th>
                <th>Tanggal</th>
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

    <div class="form-group">
        <button type="submit" class="btn btn-primary" onclick="return confirm('Konfirmasi update part')">Update Status</button>
    </div>
</form>
</div>
