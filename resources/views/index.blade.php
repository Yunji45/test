<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <p>form checkin</p>
    <form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="title">Nopol</label>
                    <input type="text" name="Nopol" id="Nopol" class="form-control">
                    
                  </div>
                  <div class="form-group">
                    <label for="tittle">Tangggal</label>
                    <input type="text" name="Tanggal" id="Tanggal" class="form-control">
                    
                  </div>
                  <div class="form-group">
                    <label for="tittle">Jam</label>
                    <input type="text" name="jam" id="jam" class="form-control">
                    
                  </div>
                  <div class="form-group">
                    <label for="title">Jenis Kendaraan</label>
                    <input type="text" name="Jenis_kendaraan" id="Jenis_kendaraan" class="form-control">
                    
                  </div>
                </div>
              </div>
              <button class="btn btn-primary">save</button>
            </form>
           @yield('content')
</body>
</html>