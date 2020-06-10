<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Company</title>
</head>
<body>
    <div class="container">
        <div class="row mx-md-n5">
            <div class="col-6">
                <h1 class="mt-3">Data Karyawan</h1>
            </div>  
            <div class="col-6">
                <a href="{{route('employee.create')}}" class="btn btn-primary mt-4 ml-2 float-right">Tambah Data</a>
                <a href="/home" class="btn btn-secondary mt-4 mr-2 float-right">Back to Home</a>      
            </div>
            <table class="table table-bordered table-hover mt-3 text-center">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Umur Karyawan</th>
                    <th scope="col">Perusahaan</th>
                    <th scope="col">Posisi Karyawan</th>
                    <th scope="col">Gaji Karyawan</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                      @foreach ($employees as $employee)
                      <tr>
                            <th>{{$loop->iteration}}</th>
                            <th>{{$employee->nama_karyawan}}</th>
                            <th>{{$employee->umur_karyawan}}</th>
                            <th>{{$employee->company->nama_perusahaan}}</th>
                            <th>{{$employee->posisi_karyawan}}</th>
                            <th>{{$employee->gaji_karyawan}}</th>
                      <td>
                          <form action="{{route('employee.edit',$employee->id)}}" method="GET">
                              <button type="submit" class="btn btn-success">Edit Data</button>
                          </form>
                      </td>
                      <td>
                      <form action="{{route('employee.delete',$employee->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                      </td>
                    </tr>
                  </tbody>
                      @endforeach 
              </table>
         </div>
        </div>
    </div>
    
</body>
</html>