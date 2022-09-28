//load isw payment page
function checkout(){
    var merchantCode = 'MX101505';
    var payItemId = 'Default_Payable_MX101505';

    var transRef = randomReference();
    var paymentRequest = {
                merchant_code: merchantCode,
                pay_item_id: payItemId,
                txn_ref: transRef,
                amount:  document.getElementsByName('amount')[0].value,
                cust_id: document.getElementsByName('cust_id')[0].value,
                currency:  document.getElementsByName('currency')[0].value,
                site_redirect_url: window.location.origin,
                onComplete: paymentCallback,
                mode: 'TEST'
     };
     window.webpayCheckout(paymentRequest);
  }

  //generate a random transaction ref
  function randomReference() {
      var length = 10;
      var chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var result = '';
      for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
      return result;
  }

  //callback function that gets triggered on payment success or failure
  function paymentCallback(response){
      if(response != null){
          alert(response.desc);
      }
  }