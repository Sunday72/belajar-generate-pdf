<!doctype html>
<html lang="en">

<head>
  <title>Belajar Generate PDF | School</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container">
      <div class="row mt-5">
        <div class="col-6">
          @if (session()->has('addSchool'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('addSchool') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <div class="mb-5">
            <h2>School</h2>
            <a href="{{route('school.create')}}" class="btn btn-primary">Add New</a>
          </div>
          @if (session()->has('deleteSchool'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('deleteSchool') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Sekolah</th>
                <th>Jurusan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($schools as $school)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$school->nama_sekolah}}</td>
                <td>{{$school->jurusan}}</td>
                <td>
                  <a href="/school/{{$school->id}}/terima" class="btn btn-success">Terima</a>
                  <a href="/school/{{$school->id}}/tolak" class="btn btn-danger">Tolak</a>
                </td>
              </tr>    
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
















  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>