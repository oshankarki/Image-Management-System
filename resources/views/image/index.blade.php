<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Title</th>
        <th>Decription </th>
        <th>Image</th>
        <th>Action</th>

    </tr>
    @foreach($records as $record)
    <tr>
        <td>{{$record->title}}</td>
        <td>{{$record->description}}</td>
        <td><img src="{{ asset('storage/images/' . $record->image) }}" onclick="window.open('this.src', '_blank')" alt="Image"
                     height="100px" width="100">
        </td>
        <td>
            <form action="{{route('image.destroy',$record->id)}}" method="post" style="display:inline-block">
                @method("delete")
                @csrf
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>

