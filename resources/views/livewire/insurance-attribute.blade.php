<div class="form-group">
    <label>Asuransi</label>
    {{-- <button wire:click.prevent="updateInsurances">+</button> --}}
    <div class="d-flex">
        <select id="insurance_id" class="form-control" name="insurance_id">
            @foreach ($insurancesLive as $insurance)
            <option value="{{ $insurance->id }}" {{ old('insurance_id') == $insurance->id ? 'selected' : '' }}>{{ $insurance->name }}</option>
            @endforeach
        </select>
        <button type="button" data-toggle="modal" data-target="#insuranceModal">+</button>
    </div>
</div>
