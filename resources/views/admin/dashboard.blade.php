@extends('layouts.header')

@section('fill')

<div class="container">
    <div class="card">
        <div class="card-body">

            <div class="flex justify-center">
                <table class="bg-white col-sm-12 table table-bordered">
                    <tr>
                        <th class="text-center"> NIK </th>
                        <th class="text-center"> Kategori </th>
                        <th class="text-center"> Lokasi </th>
                        <th class="text-center"> Keterangan </th>
                        <th class="text-center"> Created at </th>
                        <th class="text-center"> Update at </th>
                        <th class="text-center"> Action </th>
                    </tr>
                    @foreach($aspirasis as $aspirasi)
                    <tr>
                        <td class="p-1 m-1 bg-white text-dark border-2 border-gray-100 text-center" value="{{ $aspirasi->nik }}">
                        </td>
                        <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center" value="{{ $aspirasi->id_kategori }}">
                        </td>
                        <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center" value="{{ $aspirasi->lokasi }}">
                        </td>
                        <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center" value="{{ $aspirasi->keterangan }}">
                        </td>
                        <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center" value="{{ $aspirasi->created_at }}">
                        </td>
                        <td class="p-1 m-1 bg-white border-2 border-gray-100 text-center" value="{{ $aspirasi->updated_at}}">
                        </td>
                        <td>
                            <div class="d-flex flex row col-sm-12">
                                <div class="p2 ">
                                    <form action=""></form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>
</div>

@endsection