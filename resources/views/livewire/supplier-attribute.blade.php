<div class="form-group">
    <label>Supplier</label>
    {{-- <button wire:click.prevent="updatesupplierss">+</button> --}}
    <div class="d-flex">
        <select id="supplier_id" class="form-control" name="supplier_id">
            @foreach ($suppliersLive as $suppliers)
            <option value="{{ $suppliers->id }}" {{ old('suppliers_id') == $suppliers->id ? 'selected' : '' }} {{ !old('suppliers_id') ? $suppliers->name == "lainnya" ? 'selected' : ''  : ''}}>{{ $suppliers->name }}</option>
            @endforeach
        </select>
        <button type="button" data-toggle="modal" data-target="#suppliersModal">+</button>
    </div>
</div>
