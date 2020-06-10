<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Add Employee</title>
</head>
<body>
    <div class="container">
        <div class="row mx-md-n5">
            <div class="col-6">
                <h1 class="mt-3">Tambah Data Karyawan</h1>
                <hr>
            </div>
            <div class="col-6">
                <a href="/" class="btn btn-secondary mt-4 float-right">Back</a>
            </div>
            <div class="col-12">
              <form action="{{route('employee.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Karyawan</label>
                  <input type="text" name="staff_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Umur Karyawan</label>
                  <input type="text" name="staff_age" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Perusahaan</label>
                    <select name="staff_company" class="form-control" id="">
                        <option value="pilih">Pilih Perusahaan</option>
                        @foreach ($companies as $company)
                             <option value="{{$company->id}}">{{$company->nama_perusahaan}}</option>
                        @endforeach
                    </select>
                  </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Posisi Karyawan</label>
                    <select name="staff_position" class="form-control" id="">
                        <option value="Pilih">Pilih Posisi</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Manager">Manager</option>
                        <option value="Staff">Staff</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gaji Karyawan</label>
                    <input type="number" name="staff_salary" class="form-control" id="exampleInputPassword1">
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
        </div>
    </div>
</body>
</html>