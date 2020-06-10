<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Add Company</title>
</head>
<body>
  <div class="container">
    <div class="row mx-md-n5">
     <div class="col-12">
       <h1 class="mt-3">Tambah Perusahaan</h1>
       <hr>
       <form action="{{route('company.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Perusahaan</label>
          <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Alamat Perusahaan</label>
          <input type="text" name="company_address" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
     </div>
    </div>
  </div>
      
</body>
</html>