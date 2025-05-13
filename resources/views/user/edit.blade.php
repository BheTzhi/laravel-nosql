<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Insert Test!</title>
</head>

<body>
    <h1 class="mb-4">Test Insert</h1>

    <div class="container mt-4">

        <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" maxlength="15"
                    placeholder="fulanun" value="{{ $user->username }}" autofocus>
            </div>

            <div class="form-group mb-4">
                <label for="password">Passowrd</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="min 8 caracters"
                    value="{{ $user->password }}">
            </div>

            <div class="form-group mb-4">
                <label for="first_name">First Name (optional)</label>
                <input type="text" name="details[first_name]" id="first_name" class="form-control"
                    placeholder="Fulanun" value="{{ $user->details->first_name ?? null }}">
            </div>
            <div class="form-group mb-4">
                <label for="last_name">Last Name (optional)</label>
                <input type="text" name="details[last_name]" id="last_name" class="form-control"
                    placeholder="Fulanun" value="{{ $user->details->last_name ?? null }}">
            </div>

            <div class="form-group mb-4">
                <button type="submit" class="btn btn-outline-primary"> Save</button>
                <button type="reset" class="btn btn-outline-secondary"> Reset</button>
            </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        const inputField = document.getElementById('username');

        inputField.addEventListener('input', function(event) {
            this.value = this.value.toLowerCase();
        });

        inputField.addEventListener('input', function(event) {
            this.value = this.value.replace(/\s/g, '');
        });
    </script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('input[type="text"], input[type="password"]');

            inputs.forEach(input => {
                if (input.value) {
                    // Fokuskan ke input satu per satu (jika mau langsung fokus ke yang pertama saja, tambahkan break logika)
                    input.focus();

                    // Pindahkan kursor ke akhir
                    const length = input.value.length;
                    input.setSelectionRange(length, length);
                }
            });
        });
    </script>


</body>

</html>
