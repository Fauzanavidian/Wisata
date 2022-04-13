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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CRUD LARAVEL 8</title>
</head>

<body>
    <h1 class="text-center">DATA WISATA</h1>

    <div class="container mb-2">
        <a href="/tambahwisata" type="button" class="btn btn-success">Tambah
            +</a>
            <div class="row g-3 align-items-center mt-1">
                <div class="col-auto">
                <form action="/wisata" method="GET">
                  <input type="search" name='search' class="form-control" aria-describedby="passwordHelpInline">
                </form>
                </div>
              </div>
        <div class="row">
            {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2" role="alert">
                {{ $message }}
            </div>
            @endif --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Last Updated</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        <td>{{ $row->nama }}</td>
                        <td>
                            <img src="{{ asset('fotowisata/'. $row->foto) }}"
                                alt="" style="width: 8em;">
                        </td>
                        <td>{{ $row->deskripsi }}</td>
                        <td>{{ $row->lokasi }}</td>
                        <td>{{ $row->rating }}</td>
                        {{-- <td>{{ $row->updated_at->format('D M Y') }}</td> --}}
                        <td>{{ $row->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="#"
                                class="btn btn-danger mb-1 delete" data-nama="{{ $row->nama }}" data-id={{  $row->id }}>Delete</a>
                            <a href="/showwisata/{{$row->id }}"
                                class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </body>
<script>
    $('.delete').click(function(){
        var wisataid = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');

        swal({
    title: "Yakin?",
    text: "Kamu akan menghapus data wisata dengan nama "+nama+" ",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
        window.location = "/deletewisata/"+wisataid+""
        swal("Data berhasil di hapus", {
        icon: "success",
        });
    } else {
        swal("Data tidak jadi dihapus");
    }
    });
    });
</script>

<script>
@if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
@endif

</script>
</html>
