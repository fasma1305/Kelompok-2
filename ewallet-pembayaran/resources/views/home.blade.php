<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TokoPakedi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="my-3">TokoPakEdi</h1>
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/img/baju.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kemeja</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <form action="/checkout" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="qty" class="form-label">total pesanan</label>
                    <input type="number" name="qty" class="form-control" id="qty" placeholder="masukan total pesanan!">
                  </div>
                  <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="masukan nama anda!">
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Nomor Telpon</label>
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="masukan Nomor Telp anda!">
                  </div>
                  <div class="mb-3">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea name="address" class="form-control" id="address"  rows="3"></textarea>
                  </div>
              <button type="submit" class="btn btn-primary">Go somewhere</button>
            </form>
            </div>
          </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>