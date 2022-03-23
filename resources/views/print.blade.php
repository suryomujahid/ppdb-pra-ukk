<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
</head>
<body>
    <div class="container">
        <h2>SMK Semangat 45</h2>
        <h4>Penerimaan Peserta Didik Baru</h4>
        <hr>
        <div class="m-auto">
            <img src="{{ asset('storage/'.$registrar['photo'])}}" alt="" srcset="" style="width:5rem;height:5rem">
            <p>Nomor Daftar: {{$registrar['id']}}</p>
            <p>Jenis kelamin: {{$registrar['gender']}}</p>
            <p>Alamat: {{$registrar['address']}}</p>
            <p>Agama: {{$registrar['religion']}}</p>
            <p>Asal SMP: {{$registrar['asal_smp']}}</p>
            <p>Jurusan: {{$registrar['major']}}</p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>