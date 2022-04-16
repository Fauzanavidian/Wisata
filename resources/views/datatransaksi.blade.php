@extends('layouts.main')

@section('container')

<section>
    <h1 class="text-center">DATA TRANSAKSI</h1>
    <div class="container mb-2">
        <a href="/admin-tambahcustomer" type="button" class="btn btn-success">Tambah
            +</a>
            <div class="row g-3 align-items-center mt-1">
                <div class="col-auto">
                <form>
                  <input type="search" name='search' class="form-control" aria-describedby="passwordHelpInline">
                </form>
                </div>
              </div>
        <div class="row">
             {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success mt-2" role="alert">
                {{ $message }}
            </div>
            @endif  --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Transaksi</th>
                        <th scope="col">Email Customer</th>
                        <th scope="col">Nama Wisata</th>
                        <th scope="col">Order Date</th>
                        <th scope="col">Payment Date</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Total Prices</th>
                        <th scope="col">Bukti Transfer</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <td>1</td>
                        <td>TRA-1</td>
                        <td>ganteng@aku.com</td>
                        <td>Garuda Wisnu Kencana</td>
                        <td>02-12-22</td>
                        <td>03-12-22</td>
                        <td>Paid</td>
                        <td>Rp150.000,00</td>
                        <td></td>
                        <td>
                            <a href="#"
                                class="btn btn-primary">Edit</a>
                        </td>
                    </tr> --}}

                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        <td>{{ $row->id_transaction }}TRA-1</td>
                        <td>{{ $row->email_customer }}</td>
                        <td>{{ $row->nama_wisata }}</td>
                        <td>{{ $row->transaction_date->diffForHumans() }}</td>
                        <td>{{ $row->Payment_date }}</td>
                        <td>{{ $row->Payment_Status }}</td>
                        <td>{{ $row->Total_Prices }}</td>
                        <td>{{ $row->bukti_transfer }}</td>
                        <td></td>
                        <td>
                            <a href="#"
                                class="btn btn-primary">Edit</a>
                        </td>
                    </tr>

                </tbody>
                {{-- <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        
                        <td>{{ $row->Timestamp }}</td>
                        <td>{{ $row->Username }}</td>
                        <td>{{ $row->Date->format('D M Y') }}</td>
                        <td>{{ $row->Payment_Status }}</td>
                        <td>{{ $row->Total_Prices }}</td>
                        <td>{{ $row->password }}</td>
                        <td>
                            <a href="/deletecustomer/{{ $row->id }}"
                                class="btn btn-danger mb-1 delete">Delete</a>
                            <a href="/showcustomer/{{$row->id }}"
                                class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody> --}}
            </table>
        </div>
    </div>
</section>
@endsection