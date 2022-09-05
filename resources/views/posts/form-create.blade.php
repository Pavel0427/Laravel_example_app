<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <h4><b>Create Posts</b></h4>
                <form method="POST" action=" {{ url('post') }} " id="form">

                    <!-- Submit Token     -->
                    @csrf



                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" autocomplete="off" required minlength="5">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Published</label>
                        <select name="is_publishing" class="form-control">
                            <option selected disabled>Choose Status</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control">
                            <option selected disabled>Choose Status</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>

                    <!-- <input type="hidden" name="user_id" value="1"> -->

                    <button type="submit" class="btn btn-primary">Submit Now!</button>
                </form>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

    <script>
        $('#form').parsley();
    </script>


</body>

</html>