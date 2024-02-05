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
        <form method="post" action="{{route('part.store')}}">
            @csrf
            @method('post')
            <div>
                <label>tanggal</label>
                <input type="date" name="tgl" value="{{ date('Y-m-d H:i:s') }}"/>
            </div>
            <div>
                <label>Nama</label>
                <input type="text" name="nama" placeholder="nama part"/>
            </div>
            <div>
                <label>Mobil</label>
                <input type="text" name="mobil" placeholder="mobil"/>
            </div>
            <div>
                <label>plat nomor</label>
                <input type="text" name="plat" placeholder="plat nomor"/>
            </div>
            <div>
                <label>Supplier</label>
                <input type="text" name="supplier" placeholder="supplier"/>
            </div>
            <div>
                <label>Asuransi</label>
                <input type="text" name="asuransi" placeholder="asuransi"/>
            </div>
            <div>
                <input type="submit" value="Simpan Part baru"/>
            </div>
        </form>
    </div>
</body>
</html>