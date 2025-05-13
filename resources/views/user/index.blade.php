<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
</head>

<body>
    <h1 class="mb-4">Test on table</h1>



    <div class="container mt-4">

        <a href="{{ route('user.create') }}" class="btn btn-primary mb-4"><i class="fa fa-plus"></i> Add User</a>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-light">
                @php
                    $no = 1;
                @endphp
                @foreach ($user as $u)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $u->_id }}</td>
                        <td>{{ $u->username }}</td>

                        <td>
                            {{ optional($u->details)->first_name ?? '' }}
                            {{ optional($u->details)->last_name ?? '' }}
                        </td>

                        <td>{{ $u->password }}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-outline-info"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('user.edit', ['user' => $u->_id]) }}"
                                class="btn btn-sm btn-outline-warning"><i class="fa fa-edit"></i></a>
                            <form action="{{ route('user.destroy', ['user' => $u->_id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger"
                                    onclick="return confirm('Deleted user {{ $u->username }} .?');"><i
                                        class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>
