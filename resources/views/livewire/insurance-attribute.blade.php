
    <select id="insurance_id" class="form-control" name="insurance_id">
        @foreach ($insurancesLive as $insurance)
        <option value="{{ $insurance->id }}" {{ old('insurance_id') == $insurance->id ? 'selected' : '' }}>{{ $insurance->name }}</option>
        @endforeach
    </select>
