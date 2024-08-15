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
               <h3 class="card-title">Edit Part</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->
            <form method="post" action="{{route('part.update', ['part' =>$part])}}">
                @csrf
                @method('put')
               <div class="card-body">
                 <div class="form-group">
                    <label>tanggal</label>
                    <input type="date" class="form-control" name="date" value="{{ $part->date }}"/>
                 </div>

                 @livewire('supplierAttribute', ['id_supplier_edit' => $part->supplier_id])

                 @livewire('insuranceAttribute', ['id_insurance_edit' => $part->insurance_id])

                 @livewire('carAttribute', ['id_car_edit' => $part->car_id])

                 <div class="form-group">
                    <label>plat nomor</label>
                    <input type="text" class="form-control uppercase" name="plate" placeholder="plat nomor" value="{{ $part->plate }}" oninput="this.value = this.value.toUpperCase()"/>
                 </div>
                 <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="nama part" value="{{ $part->name }}" oninput="this.value = this.value.toUpperCase()"/>
                 </div>
                 <div class="form-group">
                  <label>Lokasi</label>
                   <select class="form-control" name="location_id">
                       @foreach ($locations as $location)
                       <option value="{{ $location->id }}" {{ $location->id == $part->location_id ? 'selected' : '' }}>{{ $location->name }}</option>
                       @endforeach
                   </select>
                 </div>
                 <div class="form-group">
                    <label>keterangan</label>
                    <input type="text" class="form-control" name="description" placeholder="Keterangan" value="{{ $part->description }}"/>
                 </div>
                 <div class="form-group">
                    <label>Status</label>
                    @foreach ($statuses as $status)
                    <div class="custom-control custom-radio">

                        <input class="custom-control-input" type="radio" id="{{ $status->id }}" name="status_id" value="{{ $status->id }}" {{ $status->id == $part->status_id ? 'checked' : 'adasad' }}>
                        <label for="{{ $status->id }}" class="custom-control-label" >{{ $status->name }}</label>

                    </div>
                    @endforeach
                 </div>
                 <div class="form-group">
                    <label>Tanggal Keluar</label>
                    <input type="date" class="form-control" name="date_out" value="{{ date('Y-m-d') }}"/>
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

       {{-- car modal --}}
       @livewire('CarFormModal')

       {{-- car modal --}}
       @livewire('SupplierFormModal')
     </div><!-- /.container-fluid -->
   </section>
@endsection
