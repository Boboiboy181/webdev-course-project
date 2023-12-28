@props(['field1', 'field2', 'field3', 'field4'])

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable">
        <thead>
        <tr>
            <th>{{$field1}}</th>
            <th>{{$field2}}</th>
            <th>{{$field3}}</th>
            <th>{{$field4}}</th>
            <th style="width: 215px">Action</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>{{$field1}}</th>
            <th>{{$field2}}</th>
            <th>{{$field3}}