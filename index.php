<html>
    <head>
        <title>Flick Gateway Checkout Demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <script src="https://objective-bell-e3e252.netlify.app/checkout.js"></script>
    </head>
    <body>
        <form class="m-5">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Enter TopUp Amount</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="button" class="btn btn-primary" onclick="loadIframe('',true);">Pay</button>
          </form>
    </body>
</html>