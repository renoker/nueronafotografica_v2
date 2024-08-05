<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contacto Mail</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 0;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 0 0 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.8em;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Contacto Neurona Fotográfica</h1>
        </div>
        <div class="content">
            <p><strong>Nombre:</strong> {{ $details['name'] }}</p>
            <p><strong>Email:</strong> {{ $details['email'] }}</p>
            <p><strong>Teléfono:</strong> {{ $details['phone'] }}</p>
            <p><strong>Mensaje:</strong> {{ $details['message'] }}</p>
        </div>
        <div class="footer">
            <p>Este correo ha sido enviado desde tu sitio de NeuronaFotográfica.</p>
        </div>
    </div>
</body>

</html>
