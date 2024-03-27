@if ($section === 'suppliers')
    <select id="supplier_id" class="form-control" name="supplier_id">
        @foreach ($suppliersLive as $supplier)
        <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>
            {{ $supplier->name }}
        </option>
        @endforeach
    </select>
@elseif ($section === 'cars')
    <select id="car_id" class="form-control" name="car_id">
        @foreach ($carsLive as $car)
        <option value="{{ $car->id }}" {{ old('car_id') == $car->id ? 'selected' : '' }}>{{ $car->name }}</option>
        @endforeach
    </select>
@elseif ($section === 'insuranceForm')
    <div class="modal-content">
        <form wire:submit.prevent="storeData">
            @csrf <!-- Add CSRF token -->
            <div class="modal-header">
                <h5 class="modal-title" id="insuranceModalLabel"> Tambah Nama Asuransi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Input fields for your form -->
                <div class="form-group">
                    <label>Nama </label>
                    <input type="text" placeholder="contoh: Sonwelis Takaful" class="form-control" id="name1" wire:model="name">
                </div>
                <!-- Add more input fields as needed -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

@endif
