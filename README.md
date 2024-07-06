
# QR Code Generator in Laravel 10

![Sponsor](https://i.postimg.cc/QdPWVf9Y/Screenshot-1.png) </br> 
**For Sponsor WhatsApp me +8801751337061**</br>
Watch video on YouTube: https://www.youtube.com/minit61 </br>
Watch video on Facebook: https://www.facebook.com/minit61</br>

I will give you a very simple example of generating QR code with image, QR code with color, QR code with SMS, QR code with email, and QR code in Laravel 10

## Output
![App Screenshot](https://i.postimg.cc/9MQBzGCg/qr-code-generator.png)


## Installation

**[Step - 1]** **Create new Project:**<br/>
(Open PowerShell In Your Local Machine and put this command)
 ```bash
Laravel new laravel10-qrcode-generator
```
**[Step - 2]** **Install package:** 
```bash
 composer require simplesoftwareio/simple-qrcode
```
**[Step - 3]** **Remove unnecessary code from inital Project:** <br/>
**[Step - 4]** **Make a controller:** 
```bash
 php artisan make:controller QRcodeGenerateController
```
**[Step - 5]** **Make a Route on the web.php:** 
```bash
 Route::get('/', [QRcodeGenerateController::class,'qrcode']);
```
**[Step - 6]** **Make Function with name in controller:** 
```bash
 public function qrcode()
```
**[Step - 7]** **Copy Code and paste on function:** 

use it on the top of the class name
```bash
use SimpleSoftwareIO\QrCode\Facades\QrCode;
```
```bash
    $qrCodes = [];
    $qrCodes['simple'] = 
    QrCode::size(150)->generate('https://minhazulmin.github.io/');
    $qrCodes['changeColor'] = 
    QrCode::size(150)->color(255, 0, 0)->generate('https://minhazulmin.github.io/');
    $qrCodes['changeBgColor'] = 
    QrCode::size(150)->backgroundColor(255, 0, 0)->generate('https://minhazulmin.github.io/');
    $qrCodes['styleDot'] = 
    QrCode::size(150)->style('dot')->generate('https://minhazulmin.github.io/');
    $qrCodes['styleSquare'] = QrCode::size(150)->style('square')->generate('https://minhazulmin.github.io/');
    $qrCodes['styleRound'] = QrCode::size(150)->style('round')->generate('https://minhazulmin.github.io/');

    return view('qrcode',$qrCodes);

```
**[Step - 8]** **Make a blade file:qrcode.blade.php** </br>
**[Step - 9]** **Add Bootstrap cdn** 
```bash
==> css
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
==> js 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
```
**[Step - 10]** **Copy Code and paste on qrcode.blade.php file** 
```bash
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
```
**[Step - 11]** **Copy Code and paste on the bottom of the qrcode.blade.php** 
```bash
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
```
**[Step - 12]** **run the command on the project terminal**
```bash 
	php artisan serve
```
Hit the url
```bash
	http://127.0.0.1:8000/
```
## Authors

- [@minhazulmin](https://www.github.com/minhazulmin)

