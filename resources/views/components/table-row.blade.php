@props([
    'data1',
    'data2',
    'data3',
    'data4',
    'detailUrl'
])

<tr>
    <td>{{$data1}}</td>
    <td>{{$data2}}</td>
    <td>{{ number_format($data3, 0, ',', ',') }} VNĐ</td>
    <td>{{$data4}}</td>
    <td>
        <a href="{{$detailUrl}}" class="btn btn-info">Detail</a>
    </td>
</tr>