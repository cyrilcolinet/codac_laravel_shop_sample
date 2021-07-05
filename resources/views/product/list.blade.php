@extends('includes.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-3">Liste des Produits</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Picture</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}></td>
                            <td><img src="{{ $product->picture }}" /></td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="{{ route('product_show', ['id' => $product->id]) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach()
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection()
