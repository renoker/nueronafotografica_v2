<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .email-container {
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            border-bottom: 2px solid #D72323;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .email-header h1 {
            color: #D72323;
            font-size: 24px;
            margin: 0;
        }

        .email-content p {
            margin: 10px 0;
        }

        .email-content p strong {
            color: #555555;
        }

        .email-footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #dddddd;
        }
    </style>
</head>

<body>

    <div class="email-container">
        <div class="email-header">
            <h1>Datos de la Fotografía</h1>
        </div>
        <div class="email-content">
            <p>Nombre de la foto: <strong>{{ $galeria->name }}</strong></p>
            <p>Tamaño: <strong>{{ $galeria->size->size }}</strong></p>
            <p>Material: <strong>{{ $galeria->finish->finish_es }}</strong></p>
            <p>Papel: <strong>{{ $galeria->paper->paper_es }}</strong></p>
            <p>Precio mostrado al cliente: <strong>${{ number_format($galeria->precio, 2, '.', ',') }}</strong></p>
        </div>
        <div class="email-header">
            <h1>Datos del Cliente</h1>
        </div>
        <div class="email-content">
            <p>Nombre: <strong>{{ $request->name_cliente }}</strong></p>
            <p>Email: <strong>{{ $request->email_cliente }}</strong></p>
        </div>
        <div class="email-footer">
            <p>Gracias por elegir Neurona Fotográfica.</p>
        </div>
    </div>

</body>

</html>
