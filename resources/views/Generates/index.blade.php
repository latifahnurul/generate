<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generator User Hotspot </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <br><br>

                    <h2>Data Hasil generator</h2>
                    <br>
                </div>
               
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jumlah User</th>
                    <th>Kode Enkripsi</th>
                    <th>Masa Berlaku</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($generates as $generate)
                    <tr>
                        <td>{{ $generate->id }}</td>
                        <td>{{ $generate->jumlah_user }}</td>
                        <td>{{ $generate->kode_enkripsi }}</td>
                        <td>{{ $generate->masa_berlaku }}</td>
                        <td>
                            <form action="{{ route('companies.destroy',$generate->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('companies.edit',$generate->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $generates->links() !!}
    </div>
</body>
</html>