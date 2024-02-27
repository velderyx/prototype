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
                    <input type="date" class="form-control" name="date" />
                 </div>
                 <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="name" placeholder="nama part"/>
                 </div>
                 <div class="form-group">
                    <label>Mobil</label>
                    <select class="form-control" name="car_id">
                        @foreach ($cars as $car)
                        <option value="{{ $car->id }}">{{ $car->name }}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label>plat nomor</label>
                    <input type="text" class="form-control" name="plate" placeholder="plat nomor"/>
                 </div>
                 <div class="form-group">
                  <label>Supplier</label>
                   <select class="form-control" name="supplier_id">
                    @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                   </select>
                 </div>
                 <div class="form-group">
                    <label>Asuransi</label>
                    <select class="form-control" name="insurance_id">
                        @foreach ($insurances as $insurance)
                        <option value="{{ $insurance->id }}">{{ $insurance->name }}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" class="form-control" name="description" placeholder="Keterangan"/>
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
