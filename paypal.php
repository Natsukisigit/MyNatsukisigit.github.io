<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <style>
        .w3-container {
            font-size: 14px;
        }

        .center {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <div class="center">
        <h3 class="donate">
            <div class="w3-card-4">

                <header class="w3-container w3-blue">
                    <h1>DONATE</h1>
                </header>

                <div class="w3-container">
                    <p>DONASI BISA MEMBUATMU JADI PAHLAWAN</p>

                    <!-- PAYPAL BUTTONS HERE  -->

                    <body>
                        <!-- Set up a container element for the button -->
                        <div id="paypal-button-container"></div>
                    
                        <!-- Include the PayPal JavaScript SDK -->
                        <script src="https://www.paypal.com/sdk/js?client-id=AWtnk3WrNurnS4zXlcjbNqfy2VPuWmjEwysYaNFloLBBuBgyyaA9wAkpMr7Q4OihoUSLDkDJnUTDJBsb&currency=USD"></script>

                    
                        <script>
                            // Render the PayPal button into #paypal-button-container
                            paypal.Buttons({
                    
                                // Set up the transaction
                                createOrder: function(data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: {
                                                value: '88.44'
                                            }
                                        }]
                                    });
                                },
                    
                                // Finalize the transaction
                                onApprove: function(data, actions) {
                                    return actions.order.capture().then(function(orderData) {
                                        // Successful capture! For demo purposes:
                                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                        var transaction = orderData.purchase_units[0].payments.captures[0];
                                        alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
                    
                                        // Replace the above to show a success message within this page, e.g.
                                        // const element = document.getElementById('paypal-button-container');
                                        // element.innerHTML = '';
                                        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                                        // Or go to another URL:  actions.redirect('thank_you.html');
                                    });
                                }
                    
                    
                            }).render('#paypal-button-container');
                        </script>
                    </body>

                </div>

                <footer class="w3-container w3-blue">
                    <h5>@ MUHAMMAD SIGIT</h5>
                </footer>

            </div>
        </h3>

    </div>

</body>