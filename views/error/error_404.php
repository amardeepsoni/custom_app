<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>404 - Page Not Found</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            color: #333;
        }

        .error-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        .error-content {
            max-width: 600px;
        }

        .error-code {
            font-size: 120px;
            font-weight: 700;
            line-height: 1;
            color: #343a40;
        }

        .error-title {
            font-size: 32px;
            margin: 20px 0 10px;
        }

        .error-message {
            font-size: 17px;
            color: #6c757d;
            margin-bottom: 30px;
        }

        .home-btn {
            display: inline-block;
            padding: 12px 25px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.3s;
        }

        .home-btn:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

    <div class="error-page">
        <div class="error-content">

            <div class="error-code">404</div>

            <h1 class="error-title">Page Not Found</h1>

            <p class="error-message">
                Sorry, the page you are looking for doesn't exist
                or may have been moved.
            </p>

            <a href="/" class="home-btn">
                Back to Home
            </a>

        </div>
    </div>

</body>
</html>