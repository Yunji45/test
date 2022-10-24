@extends ('index')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible show fade">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nopol</th>
                <th>Tanggal</th>
                <th>jam</th>
                <th>Jenis kendaraan</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->Nopol }}</td>
                  <td>{{ $item->Tanggal }}</td>
                  <td>{{ $item->jam }}</td>
                  <td>{{ $item->Jenis_kendaraan }}</td>
                  <td>
                    <div class="d-flex">
                      <a href="" class="btn btn-info btn-sm me-2"><i class="fa fa-edit"></i> Edit</a>
                      <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i> Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection