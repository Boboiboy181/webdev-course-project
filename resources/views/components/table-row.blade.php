@props([
    'data1',
    'data2',
    'data3',
    'data4',
])

<tr>
    <td>{{$data1}}</td>
    <td>{{$data2}}</td>
    <td>{{ number_format($data3, 0, ',', ',') }} VNĐ</td>
    <td>{{$data4}}</td>
    <td>
        <button class="btn btn-info">Detail</button>
        <button class="btn btn-success">Update</button>
        <button class="btn btn-danger">Delete</button>
    </td>
</tr>