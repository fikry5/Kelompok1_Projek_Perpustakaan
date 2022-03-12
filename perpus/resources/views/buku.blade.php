@extends('style.main')

@section('container')
    
<h1>Data Buku</h1>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="3">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <button class="btn btn-warning">Edit</button>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-danger">Hapus</button>
                            </div>
                            <div class="col-2">
                                <button class="btn btn-danger"
                                ><a href="/inputan" >Tambah</a></button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        @endsection