<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR Code Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
</head>

<body>
    <div class="container-fluid">
        <div class="col-12 col-md-12 my-5">
            <center>
                <h1 class="text-center">
                    QR Code Generator
                </h1>
                <form class="my-3" action="/" method="get">
                    @csrf
                    <div class="col-md-6 mb-3">
                        <label for="generate" class="form-label">Input your text here. Example
                            https://www.youtube.com.</label>
                        <input type="text" name="generate" id="generate" class="form-control" value=""
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Generate</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
                <a href="/" class="btn btn-danger mb-3">Refresh Page</a>
                @if ($qr == !null)
                    <h2 class="mb-3">Result</h2>
                    <div class="mb-3">
                        {{ $qr }}
                    </div>
                    <h4>Screenshot your QR Code!</h4>
                @endif
            </center>
        </div>
    </div>

    <footer class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 text-center">
                &copy; 2024 QR Code Generator by IGF. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
