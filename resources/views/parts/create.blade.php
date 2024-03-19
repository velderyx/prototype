@extends('layout.main')
@section('title', 'Data Part')
@section('content')
   <section class="content">
     <div class="container-fluid">
       <div class="row">
         <!-- left column -->
         <div class="col-md-6">
           <!-- general form elements -->
           <div class="card card-primary">
             <div class="card-header">
               <h3 class="card-title">Tambah Part</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->
            <form method="post" action="{{route('part.store')}}">
                @csrf
                @method('post')
                <div class="card-body">
                    <div class="form-group">
                        <label>tanggal</label>
                        <input type="date" class="form-control" name="date" value="{{ old('date') }}" />
                    </div>
                    <div class="form-group" id="nameInputs">
                        <label>Nama</label>
                        <button type="button" onclick="addNameInput()">+</button>
                        <input type="text" class="form-control" id="name1" name="names[]" placeholder="nama part" value="{{ old('names1') }}" oninput="this.value = this.value.toUpperCase()"/>
                        <label>Lokasi</label>
                        <select class="form-control" id="location_id1" name="location_ids[]">
                            @foreach ($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mobil</label>
                        <select class="form-control" name="car_id">
                            @foreach ($cars as $car)
                            <option value="{{ $car->id }}" {{ old('car_id') == $car->id ? 'selected' : '' }}>{{ $car->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>plat nomor</label>
                        <input type="text" class="form-control" name="plate" placeholder="plat nomor" value="{{ old('plate') }}" oninput="this.value = this.value.toUpperCase()"/>
                    </div>
                    <div class="form-group">
                    <label>Supplier</label>
                    <select class="form-control" name="supplier_id">
                        @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>
                            {{ $supplier->name }}
                        </option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Asuransi</label>
                        <select class="form-control" name="insurance_id">
                            @foreach ($insurances as $insurance)
                            <option value="{{ $insurance->id }}" {{ old('insurance_id') == $insurance->id ? 'selected' : '' }}>{{ $insurance->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="description" placeholder="Keterangan" value="{{ old('description') }}"/>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio1" name="status_id" value="1" checked>
                            <label for="customRadio1" class="custom-control-label" >ada</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="customRadio2" name="status_id" value="2">
                            <label for="customRadio2" class="custom-control-label">diambil</label>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
           </div>
           <!-- /.card -->

         </div>
       </div>
       <!-- /.row -->
     </div><!-- /.container-fluid -->
   </section>
@endsection

@push('script')
<script>
    let nameCounter = 1;

    function addNameInput() {
        nameCounter++;
        const container = document.getElementById("nameInputs");
        const div = document.createElement("div");
        const divId = "nameDiv" + nameCounter; // Create unique ID for the div
        div.id = divId; // Assign ID to the div
        div.innerHTML = `
            <label for="name${nameCounter}">Nama Part ke-${nameCounter}:</label>
            <input type="text" class="form-control" id="name${nameCounter}" name="names[]"  oninput="this.value = this.value.toUpperCase()" placeholder="nama part">
                    <label>Lokasi Part ke-${nameCounter}:</label>
                    <select class="form-control" id="location_id${nameCounter}" name="location_ids[]">
                        @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endforeach
                    </select>
            <button type="button" onclick="removeNameInput('${divId}')">Remove</button> <!-- Pass divId to removeNameInput -->
        `;
        container.appendChild(div);
    }

    function removeNameInput(divId) {
        const div = document.getElementById(divId); // Get div by ID
        div.remove();
        nameCounter--;
    }
</script>

@if ($errors->any())
    <script>
        window.onload = function() {
            alert("{{ $errors->first() }}");
        }


    </script>
@endif

@endpush

