<?php
require_once('config.php');
?>
<html>
<head>
	<title>Razorpay Integrated </title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_ZymubfNUVDnrp3", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $_POST['amount'] * 100;?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "HAPPYFACE",
    "description": "Donate",
    "image": "https://cdn.vox-cdn.com/thumbor/VM9qJlfkrS4EQqELf1yBzlojEto=/0x0:2040x1360/925x925/filters:focal(857x517:1183x843):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/67653419/acastro_201016_1777_moonbug_0002.0.jpg",
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
</body>
</html>