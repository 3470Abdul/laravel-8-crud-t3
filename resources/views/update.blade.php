<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6 mt-5 card shadow">
                <div class="mt-3 text-primary text-center">
                    <h3>Update Employee Data</h3>
                </div>
                <form action="update" method="post">
                    @csrf
                    <div class="my-3">
                        <input type="hidden" class="form-control" name="id" value="{{ $data[0]->id }}">
                    </div>
                    <div class="my-3">
                        <input type="text" class="form-control" name="name" value="{{ $data[0]->name }}">
                    </div>
                    <div class="my-3">
                        <input type="age" class="form-control" name="age" value="{{ $data[0]->age }}">
                    </div>
                    <div class="my-3">
                        <input type="designation" class="form-control" name="designation" value="{{ $data[0]->designation }}">
                    </div>
                    <div class="my-3 text-center">
                        <input type="submit" class="btn btn-primary w-75" value="Update Data">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
