<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
        <button class="btn btn-primary"><a href="{{ route('pagehome') }}" style="color: white">HomePage</a></button>
        <div class="row">
            <div class="col">

            </div>
            <div class="col mt-3">

                <form action="{{ route('postdata') }}" method="post">
                    @csrf
                    <label ><strong><b>Title</b></strong></label><br>
                    <input type="text" value="" name="title"><br>
                    <label for="">Description</label><br>
                    <input type="text" name="description"><br>
                    <input type="submit" value="Submit">
                </form>



            </div>
            <div class="col">

            </div>

        </div>

    </div>

</body>
</html>
