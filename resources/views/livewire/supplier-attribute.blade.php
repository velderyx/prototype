<div class="form-group">
    <label>Supplier</label>
    {{-- <button wire:click.prevent="updatesupplierss">+</button> --}}
    <div class="d-flex">
        <select id="supplier_id" class="form-control" name="supplier_id">
            @foreach ($suppliersLive as $supplier)
            <option value="{{ $supplier->id }}"
                @if (old('supplier_id') == $supplier->id)
                    selected
                @elseif ($id_supplier_edit == $supplier->id)
                    selected
                @else
                    @if ($supplier->name == "lainnya")
                        selected
                    @endif
                @endif
            >
                {{ $supplier->name }}
            </option>
            @endforeach
        </select>
        <button type="button" data-toggle="modal" data-target="#suppliersModal">+</button>
    </div>
</div>
