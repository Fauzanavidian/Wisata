<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <title>CRUD LARAVEL 8</title>
</head>

<body>
    <section>
        <h1 class="text-center">EDIT DATA CUSTOMER</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="/updatecustomer/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1"
                                            class="form-label">Nama Panjang</label>
                                        <input type="text" name="full_name" class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $data->full_name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1"
                                            class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $data->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1"
                                            class="form-label">phone</label>
                                        <input type="text" name="phone" class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $data->phone }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1"
                                            class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $data->password }}">
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>