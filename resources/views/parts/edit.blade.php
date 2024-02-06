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
                <input type="date" name="tgl" value="{{ $part->tgl }}"/>
            </div>
            <div>
                <label>Nama</label>
                <input type="text" name="nama" placeholder="nama part" value="{{ $part->nama }}"/>
            </div>
            <div>
                <label>Mobil</label>
                <input type="text" name="mobil" placeholder="mobil" value="{{ $part->mobil }}"/>
            </div>
            <div>
                <label>plat nomor</label>
                <input type="text" name="plat" placeholder="plat nomor" value="{{ $part->plat }}"/>
            </div>
            <div>
                <label>Supplier</label>
                <input type="text" name="supplier" placeholder="supplier" value="{{ $part->supplier }}"/>
            </div>
            <div>
                <label>Asuransi</label>
                <input type="text" name="asuransi" placeholder="asuransi" value="{{ $part->asuransi }}"/>
            </div>
            <div>
                <input type="submit" value="Update"/>
            </div>
        </form>
    </div>
</body>
</html>