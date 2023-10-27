<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QR Code Generator with Download</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-2">
                    <p class="mb-0">Simple</p>
                    <a href="" id="container" >{!! $simple !!}</a><br/>
                    <button id="download" class="mt-2 btn btn-info text-light" onclick="downloadSVG()">Download SVG</button>
                </div>
                <div class="col-md-2">
                    <p class="mb-0">Color Change</p>
                    {!! $changeColor !!}
                </div>
                <div class="col-md-2">
                    <p class="mb-0">Background Color Change </p>
                    {!! $changeBgColor !!}
                </div>


                <div class="col-md-2">
                    <p class="mb-0">Style Square</p>
                    {!! $styleSquare !!}
                </div>
                <div class="col-md-2">
                    <p class="mb-0">Style Dot</p>
                    {!! $styleDot !!}
                </div>
                <div class="col-md-2">
                    <p class="mb-0">Style Round</p>
                    {!! $styleRound !!}
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script>

    function downloadSVG() {
      const svg = document.getElementById('container').innerHTML;
      const blob = new Blob([svg.toString()]);
      const element = document.createElement("a");
      element.download = "w3c.svg";
      element.href = window.URL.createObjectURL(blob);
      element.click();
      element.remove();
    }
    </script>
</html>
