<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create A Part</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div>
        <form method="post" action="{{route('part.update', ['part' =>$part])}}">
            @csrf
            @method('put')
            <div>
                <label>tanggal</label>
                <input type="date" name="date" value="{{ $part->date }}"/>
            </div>
            <div>
                <label>Nama</label>
                <input type="text" name="name" placeholder="nama part" value="{{ $part->name }}"/>
            </div>
            <div>
                <label>Mobil</label>
                <select name="car_id">
                    @foreach ($cars as $car)
                    <option value="{{ $car->id }}" {{ $car->id == $part->car_id ? 'selected' : '' }}>{{ $car->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>plat nomor</label>
                <input type="text" name="plate" placeholder="plat nomor" value="{{ $part->plate }}"/>
            </div>
            <div>
                <label>Supplier</label>
                <select name="supplier_id">
                    @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" {{ $supplier->id == $supplier->supplier ? 'selected' : '' }}>{{ $supplier->name }}</option>
                    @endforeach
                </select>    
            </div>
            <div>
                <label>Asuransi</label>
                <select name="insurance_id">
                    @foreach ($insurances as $insurance)
                    <option value="{{ $insurance->id }}" {{ $insurance->id == $insurance->insurance_id ? 'selected' : '' }}>{{ $insurance->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="submit" value="Update"/>
            </div>
        </form>
    </div>
</body>
</html>