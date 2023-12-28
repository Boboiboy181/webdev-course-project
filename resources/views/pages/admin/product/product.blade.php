@extends('layouts.admin.admin')

@section('custome-styles')
    <link
        href="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet">
@endsection

@section('contents')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                <x-table
                    :field1="'Id'"
                    :field2="'Name'"
                    :field3="'Price'"
                    :field4="'Category'"
                >
                    @foreach ($products as $product)
                        <x-table-row
                            :data1="$product->_id"
                            :data2="$product->name"
                            :data3="$product->price"
                            :data4="$product->category"
                        />
                    @endforeach
                </x-table>
            </div>
        </div>
    </div>

@endsection

@section('custome-scripts')
    <script
        src="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script
        src="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script
        src="{{ asset('https://startbootstrap.github.io/startbootstrap-sb-admin-2/js/demo/datatables-demo.js') }}"></script>
@endsection