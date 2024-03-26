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
@elseif ($section === 'insurances')
    <select id="insurance_id" class="form-control" name="insurance_id">
        @foreach ($insurancesLive as $insurance)
        <option value="{{ $insurance->id }}" {{ old('insurance_id') == $insurance->id ? 'selected' : '' }}>{{ $insurance->name }}</option>
        @endforeach
    </select>
@endif
