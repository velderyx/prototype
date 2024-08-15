<div class="form-group">
    <label>Mobil</label>
    {{-- <button wire:click.prevent="updatecars">+</button> --}}
    <div class="d-flex">
        <select id="car_id" class="form-control" name="car_id">
            @foreach ($carsLive as $car)
                <option value="{{ $car->id }}"
                    @if (old('car_id') == $car->id)
                        selected
                    @elseif ($id_car_edit == $car->id)
                        selected
                    @else
                        @if ($car->name == "lainnya")
                            selected
                        @endif
                    @endif
                >
                    {{ $car->name }}
                </option>
            @endforeach
        </select>
        <button type="button" data-toggle="modal" data-target="#carModal">+</button>
    </div>
</div>
