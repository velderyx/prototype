<div class="form-group">
    <label>Asuransi</label>
    {{-- <button wire:click.prevent="updateInsurances">+</button> --}}
    <div class="d-flex">
        <select id="insurance_id" class="form-control" name="insurance_id">
            @foreach ($insurancesLive as $insurance)
            <option value="{{ $insurance->id }}"
                @if (old('insurance_id') == $insurance->id)
                    selected
                @elseif ($id_insurance_edit == $insurance->id)
                    selected
                @else
                    @if ($insurance->name == "lainnya")
                        selected
                    @endif
                @endif

            >{{ $insurance->name }}</option>
            @endforeach
        </select>
        <button type="button" data-toggle="modal" data-target="#insuranceModal">+</button>
    </div>
</div>
