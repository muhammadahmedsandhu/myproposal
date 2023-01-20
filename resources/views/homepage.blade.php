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
        <div class="row">

            @foreach($data as $data1)
    <div class="col-12" style="border-style: solid; margin-top: 2px"   id="copyButton">
    <button class="btn btn-dark" style="margin-left:1200px"  

    id="button1" onclick="CopyToClipboard('div1')"
    >Copy</button>
    <div id="div1" >
    <h1>{{ $data1->title }}</h1><br>
    <p>{{ $data1->description }}</p>
    </div>
            </div>

            @endforeach

        </div>

    </div>


<script>
function CopyToClipboard(containerid) {  if (document.selection) {    var range = document.body.createTextRange();    range.moveToElementText(document.getElementById(containerid));    range.select().createTextRange();    document.execCommand("copy");  } else if (window.getSelection) {    var range = document.createRange();    range.selectNode(document.getElementById(containerid));    window.getSelection().addRange(range);    document.execCommand("copy");    alert("Text has been copied, now paste in the text-area")  }}
</script>

</body>
</html>



