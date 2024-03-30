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
                        <input id="date"type="date" class="form-control" name="date" value="{{ old('date') }}" />
                    </div>
                    <div class="form-group">
                    <label>Supplier</label>
                        <div class="d-flex">
                            @livewire('partAttribute', ['section' => 'suppliers'])
                            <button type="button" data-toggle="modal" data-target="#supplierModal">+</button>
                        </div>
                    </div>
                    {{-- insurance attirbute --}}
                    @livewire('insuranceAttribute')
                    {{-- end insurance attirbute --}}
                    <div class="form-group">
                        <label>Mobil</label>
                        <div class="d-flex">
                            @livewire('partAttribute', ['section' => 'cars'])
                            <button type="button" data-toggle="modal" data-target="#carModal">+</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>plat nomor</label>
                        <input id="plate" type="text" class="form-control" name="plate" placeholder="plat nomor" value="{{ old('plate') }}" oninput="this.value = this.value.toUpperCase()"/>
                    </div>
                    <div class="form-group" id="nameInputs">
                        <label>Nama</label>
                        <button type="button" onclick="addNameInput()">+</button>
                        <input id="name1" type="text" class="form-control" id="name1" name="names[]" placeholder="nama part" value="{{ old('names1') }}" oninput="this.value = this.value.toUpperCase()"/>
                        <label>Lokasi</label>
                        <div class="d-flex">
                            <select id="location_id1" class="form-control" id="location_id1" name="location_ids[]">
                                @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                            <button type="button" data-toggle="modal" data-target="#locationModal">+</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Keterangan tambahan</label>
                        <input id="description" type="text" class="form-control" name="description" placeholder="kosong" value="{{ old('description') }}"/>
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

       {{-- insurance modal --}}
        @livewire('insuranceFormModal')


       {{-- status modal  --}}
       <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('status.store') }}" method="POST">
                    @csrf <!-- Add CSRF token -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="newItemModalLabel"> Tambah Nama Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" class="form-control" id="name1" name="names[]">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
       </div>

       {{-- car modal --}}
       <div class="modal fade" id="carModal" tabindex="-1" aria-labelledby="carModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('car.store') }}" method="POST">
                    @csrf <!-- Add CSRF token -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="newItemModalLabel"> Tambah Nama jenis Mobil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Input fields for your form -->
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" placeholder="contoh: Toyota Avanza" class="form-control" id="name1" name="names[]">
                        </div>
                        <!-- Add more input fields as needed -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
       </div>

       {{-- supplier modal --}}
       <div class="modal fade" id="supplierModal" tabindex="-1" aria-labelledby="supplierModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('supplier.store') }}" method="POST">
                    @csrf <!-- Add CSRF token -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="supplierModalLabel"> Tambah Nama Supplier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Input fields for your form -->
                        <div class="form-group">
                            <label>Nama </label>
                            <input type="text" placeholder="contoh: Rajawali" class="form-control" id="name1" name="names[]">
                        </div>
                        <!-- Add more input fields as needed -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
       </div>


        {{-- location modal --}}
        <div class="modal fade" id="locationModal" tabindex="-1" aria-labelledby="locationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('location.store') }}" method="POST">
                        @csrf <!-- Add CSRF token -->
                        <div class="modal-header">
                            <h5 class="modal-title" id="locationModalLabel"> Tambah Nama Lokasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Input fields for your form -->
                            <div class="form-group">
                                <label>Nama </label>
                                <input type="text" placeholder="contoh: L2" class="form-control" id="name1" name="names[]">
                            </div>
                            <!-- Add more input fields as needed -->
                        </div>


                        {{-- for later --}}
                        {{-- <div class="form-group">
                            <label>tanggal</label>
                            <input id="dateModal"type="date" class="form-control" name="dateModal" value="{{ old('date') }}" />
                        </div>
                        <div class="form-group" >
                        <label>Supplier</label>
                            <div class="d-flex">
                                <select id="supplier_idModal" class="form-control" name="supplier_idModal">
                                    @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}" {{ old('supplier_id') == $supplier->id ? 'selected' : '' }}>
                                        {{ $supplier->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <button type="button" data-toggle="modal" data-target="#supplierModal">+</button>
                            </div>
                        </div>
                        <div class="form-group" style="display: none;">
                            <label>Asuransi</label>
                            <div class="d-flex">
                                <select id="insurance_idModal" class="form-control" name="insurance_idModal">
                                    @foreach ($insurances as $insurance)
                                    <option value="{{ $insurance->id }}" {{ old('insurance_id') == $insurance->id ? 'selected' : '' }}>{{ $insurance->name }}</option>
                                    @endforeach
                                </select>
                                <button type="button" data-toggle="modal" data-target="#insuranceModal">+</button>
                            </div>
                        </div>
                        <div class="form-group" style="display: none;">
                            <label>Mobil</label>
                            <div class="d-flex">
                                <select id="car_idModal" class="form-control" name="car_idModal">
                                    @foreach ($cars as $car)
                                    <option value="{{ $car->id }}" {{ old('car_id') == $car->id ? 'selected' : '' }}>{{ $car->name }}</option>
                                    @endforeach
                                </select>
                                <button type="button" data-toggle="modal" data-target="#carModal">+</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>plat nomor</label>
                            <input id="plateModal" type="text" class="form-control" name="plateModal" placeholder="plat nomor" value="{{ old('plate') }}" oninput="this.value = this.value.toUpperCase()"/>
                        </div>
                        <div class="form-group" id="nameInputs" style="display: none;">
                            <label>Nama</label>
                            <button type="button" onclick="addNameInput()">+</button>
                            <input id="name1Modal" type="text" class="form-control" id="name1Modal" name="names[]" placeholder="nama part" value="{{ old('names1') }}" oninput="this.value = this.value.toUpperCase()"/>
                            <label>Lokasi</label>
                            <div class="d-flex">
                                <select id="location_id1Modal" class="form-control" id="location_id1Modal" name="location_ids[]">
                                    @foreach ($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                                <button type="button" data-toggle="modal" data-target="#locationModal" onclick="populateModal()">+</button>
                            </div>
                        </div>
                        <div class="form-group" style="display: none;">
                            <label>Keterangan tambahan</label>
                            <input id="descriptionModal" type="text" class="form-control" name="descriptionModal" placeholder="kosong" value="{{ old('description') }}"/>
                        </div>
                        <div class="form-group" style="display: none;">
                            <label>Status</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio1Modal" name="status_idModal" value="1" checked>
                                <label for="customRadio1" class="custom-control-label" >ada</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="customRadio2Modal" name="status_idModal" value="2">
                                <label for="customRadio2" class="custom-control-label">diambil</label>
                            </div>
                        </div> --}}

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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

