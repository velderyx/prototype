<div class="form-group">
    <label>location</label>
    {{-- <button wire:click.prevent="updatelocationss">+</button> --}}
    <div class="d-flex">
        <select id="location_id" class="form-control" name="location_id">
            @foreach ($locationsLive as $location)
            <option value="{{ $location->id }}"
                @if (old('location_id') == $location->id)
                    selected
                @elseif ($id_location_edit == $location->id)
                    selected
                @else
                    @if ($location->name == "lainnya")
                        selected
                    @endif
                @endif
            >
                {{ $location->name }}
            </option>
            @endforeach
        </select>
        <button type="button" data-toggle="modal" data-target="#locationsModal">+</button>
    </div>
</div>
