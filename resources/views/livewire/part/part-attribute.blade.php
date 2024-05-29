@if ($section === 'suppliers')
    <select id="supplier_id" class="form-control" name="supplier_id">
        @foreach ($suppliersLive as $supplier)
        <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }} {{ !old('supplier_id') ? $supplier->name == "lainnya" ? 'selected' : ''  : ''}}>
            {{ $supplier->name }}
        </option>
        @endforeach
    </select>
@endif
