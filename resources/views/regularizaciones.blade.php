<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <table>
        <caption style="display: none;">Listado de pólizas</caption>
        <tr>
          <th>Nombre:</th>
          <th>Empresa</th>
          <th>Email</th>
          <th>Fecha de póliza</th>
          <th>Acciones</th>
          <th>Seleccionar</th>
        </tr>
        @foreach ($registros as $user)
    <tr>
        <td>{{ $user['nombre'] }}</td>
        <td>{{ $user['empresa'] }}</td>
        <td>{{ $user['email'] }}</td>
        <td>{{ $user['fechaPoliza'] }}</td>
        <td>
            <button onclick=sendEmail("{{ $user['email'] }}")>Enviar mail</button>
        </td>
        <td>
            <input type="checkbox" name="userCheck" id="{{ $user['email'] }}">
        </td>
    </tr>
@endforeach

      </table>

      <button onclick="sendMassiveEmails()" style="background-color: green;">Enviar email masivos</button>

      <script>
        function sendEmail(email) {
            alert("Regularización enviada a: "+email);
        }

        function sendMassiveEmails() {
            alert("Regularizaciones enviadas");
        }
      </script>
</body>
</html>