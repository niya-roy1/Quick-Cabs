Press J to jump to the feed. Press question mark to learn the rest of the keyboard shortcuts
log in
sign up
4
Trying to implement a payment gateway, how do I make it so that the
4
Posted byu/LCTarX
1 year ago
Trying to implement a payment gateway, how do I make it so that the

Okay, phew!

I've been working at this for the better part of a day now. I guess, before I start, I should make the noob declaration.

I've been trying to implement a payment gateway in my website. Here's the progress that I've made so far

I left the full code at the end of the post, but here's the part where I am having trouble:

<html>
   <form name="donAmount" id="donAmount">
       <label for="customcash">INR</label>
     <input type="number" name="customcash" id="customcash" />
   </form>
   <br/>
   <button id="rzp-button1">INDIAN PASSPORT-HOLDER</button>
   </html>
 </html>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
 <script>
 var options = {
     "key": "rzp_test_jFKCO85KW3hdcD",
     "amount": "2000", // 2000 paise = INR 20
     "name": "Purkal Youth Development Society",
     "description": "Purchase Description",
     "image": "/your_logo.png",
     "handler": function (response){
		 if (typeof response.razorpay_payment_id == 'undefined' ||  response.razorpay_payment_id < 1) {
		 
		} else {
		  redirect_url = '/thnx-you-paid.html';
		}
		location.href = redirect_url;
     },
     "prefill": {
         "name": "John Jonah",
         "email": "test@test.com"
     },
     "notes": {
         "address": "Hello World"
     },
     "theme": {
         "color": "#F37254"
     }
 };
document.getElementById('rzp-button1').onclick = function(e){
    e.preventDefault();
    options.amount = document.getElementById('customcash').value;
    var rzp1 = new Razorpay(options);
    rzp1.open();
}
 
 </script>
