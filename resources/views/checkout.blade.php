<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please wait...</title>
</head>
<body>
    <p>checking out...</p>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = new Stripe('pk_test_51L4mKZADSR4m4SBlHwS7wwq26MRsNzCFf1mz0NzO1eJwoXTkmchIdZ1t7YOMQh4GLZxzXDDMbx5PQVesZz7MEqRe00D4JhFF0V');
        stripe.redirectToCheckout({
            sessionId: '{{$session->id}}'
        });
    </script>
</body>
</html>