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
                 <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="nama part" value="{{ $part->name }}" oninput="this.value = this.value.toUpperCase()"/>
                 </div>
                 <div class="form-group">
                    <label>Mobil</label>
                    <select class="form-control" name="car_id">
                        @foreach ($cars as $car)
                        <option value="{{ $car->id }}" {{ $car->id == $part->car_id ? 'selected' : '' }}>{{ $car->name }}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label>plat nomor</label>
                    <input type="text" class="form-control uppercase" name="plate" placeholder="plat nomor" value="{{ $part->plate }}" oninput="this.value = this.value.toUpperCase()"/>
                 </div>
                 <div class="form-group">
                  <label>Supplier</label>
                   <select class="form-control" name="supplier_id">
                       @foreach ($suppliers as $supplier)
                       <option value="{{ $supplier->id }}" {{ $supplier->id == $part->supplier_id ? 'selected' : '' }}>{{ $supplier->name }}</option>
                       @endforeach
                   </select>
                 </div>
                 <div class="form-group">
                    <label>Asuransi</label>
                    <select class="form-control" name="insurance_id">
                      @foreach ($insurances as $insurance)
                      <option value="{{ $insurance->id }}" {{ $insurance->id == $part->insurance_id ? 'selected' : '' }}>{{ $insurance->name }}</option>
                      @endforeach
                    </select>
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
