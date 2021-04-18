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
              <input type="number" class="form-control" id="amount">
            </div>
            <button type="button" class="btn btn-primary" id="payNow">Pay</button>
          </form>
          <script>
            document.getElementById("payNow").addEventListener("click", function(){
              window.getpaidSetup({
                customer_email:"tim@nikosce.com",
                customer_firstname:"Clark",
                amount:document.getElementById("amount").value,
                txref:"MRS00000015646",
                PBFPubKey:"FLWPUBK-4425a3df7cabd0c68ac0c78f201eddb7-X",
                currency:"NGN",
                country:"NG",
                custom_title:"eShop",
                custom_logo:"http://localhost:8080/img/mrs-logo.4622fcc2.png",
                payment_options:"card,account",
                init_url:"http://localhost:8080/topup.html"
              });
            });
          </script>
    </body>
</html>