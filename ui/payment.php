<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Success</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        background-color: #f8f9fa;
    }

    .success-icon {
        font-size: 70px;
        color: #28a745;
    }
    </style>
</head>

<body>

    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="card shadow text-center p-4" style="max-width: 420px;">
            <div class="card-body">

                <div class="success-icon mb-3">
                    <img src="https://cdn-icons-png.freepik.com/512/7518/7518748.png?ga=GA1.1.254667819.1734027919"
                        style="height: 150px" alt="">
                </div>

                <h3 class="text-success">Payment Successful</h3>
                <p class="text-muted mt-2">
                    Thank you! Your payment has been completed successfully.
                </p>

                <hr>

                <a href="index.php" class="btn btn-dark mt-3 w-100">
                    Go to Home
                </a>

            </div>
        </div>
    </div>

</body>

</html>