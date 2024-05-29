<div class="form-group">
    <label>Mobil</label>
    {{-- <button wire:click.prevent="updatecars">+</button> --}}
    <div class="d-flex">
        <select id="car_id" class="form-control" name="car_id">
            @foreach ($carsLive as $car)
            <option value="{{ $car->id }}" {{ old('car_id') == $car->id ? 'selected' : '' }} {{ !old('car_id') ? $car->name == "Lainnya" ? 'selected' : ''  : ''}}>{{ $car->name }}</option>
            @endforeach
        </select>
        <button type="button" data-toggle="modal" data-target="#carModal">+</button>
    </div>
</div>
