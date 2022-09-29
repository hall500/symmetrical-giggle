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

  // Example POST method implementation:
async function postData(url = '', data = {}) {
    // Default options are marked with *
    const response = await fetch(url, {
      method: 'POST', // *GET, POST, PUT, DELETE, etc.
      mode: 'cors', // no-cors, *cors, same-origin
      cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
      credentials: 'same-origin', // include, *same-origin, omit
      headers: {
        'Content-Type': 'application/json'
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      redirect: 'follow', // manual, *follow, error
      referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
      body: JSON.stringify(data) // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects
  }

  //callback function that gets triggered on payment success or failure
  function paymentCallback(response){
      if(response != null){
        postData('./interswitch.php', {
            merchantcode: 'MX101505',
            transactionreference: response.txnref,
            amount: document.getElementsByName('amount')[0].value * 100
        })
        .then((data) => {
            console.log(data); // JSON data parsed by `data.json()` call
        });
      }
  }