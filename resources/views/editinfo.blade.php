@extends('layouts.main')

@section('container')

<section>
<h1 class="text-center">EDIT DATA</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form action="/updateAdmin" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="form-label">Email</label>
                                <input type="text" name="email" class="form-control"
                                    
                                     value="{{ Auth()->User()->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="form-label">phone</label>
                                <input type="text" name="phone" class="form-control"
                                    
                                     value="{{ Auth()->User()->phone }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="form-label">Motto Hidup</label>
                                <input type="text" name="motto" class="form-control"
                                    
                                     value="{{ Auth()->User()->motto  }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="form-label">Usia</label>
                                <input type="text" name="usia" class="form-control"
                                    
                                    aria-describedby="emailHelp" value="{{ Auth()->User()->usia  }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="form-label">kode Admin</label>
                                <input type="text" name="kode" class="form-control"
                                    
                                     value="{{ Auth()->User()->kode  }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1"
                                    class="form-label">Status</label>
                                <select class="form-select" name="status"
                                    aria-label="Default select example">
                                    <option selected>{{ Auth()->User()->status}}
                                    </option>
                                    <option value="Single">Single</option>
                                    <option value="Menikah">Menikah</option>
                                </select>
                            </div>
                            <button type="submit"
                                class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>



@endsection
