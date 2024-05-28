<div class="form-group">
    <label>Mobil</label>
    {{-- <button wire:click.prevent="updateCars">+</button> --}}
    <div class="d-flex">
        <select id="Car_id" class="form-control" name="Car_id">
            @foreach ($CarsLive as $Car)
            <option value="{{ $Car->id }}" {{ old('Car_id') == $Car->id ? 'selected' : '' }} {{ !old('Car_id') ? $Car->name == "lainnya" ? 'selected' : ''  : ''}}>{{ $Car->name }}</option>
            @endforeach
        </select>
        <button type="button" data-toggle="modal" data-target="#CarModal">+</button>
    </div>
</div>
