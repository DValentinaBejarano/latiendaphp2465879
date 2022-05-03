<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>
    <center><h1>Paises de la región</h1><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="table-danger"> Pais </th>
                <th class="table-primary"> Capital </th>
                <th> Moneda </th>
                <th> Población </th>
                <th class="table-success">Ciudades </th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais => $infopais)
            <tr>
                <td class="text-danger" rowspan="{{ count($infopais['ciudades']) }}" >
                    {{ $pais }}
                </td>
                <td class="text-primary" rowspan="{{ count($infopais['ciudades']) }}" >
                    {{ $infopais["Capital"] }}
                </td>
                <td rowspan="{{ count($infopais['ciudades']) }}" >
                    {{ $infopais["moneda"] }}
                </td>
                <td rowspan="{{ count($infopais['ciudades']) }}" >
                    {{ $infopais["poblacion"] }}
                </td>
                @foreach($infopais["ciudades"] as $ciudad )
                <th class="table-success">
                    {{ $ciudad}}
                </th>
            </tr>
                @endforeach()
            </tr>
            @endforeach
        </tbody>
        <tfood></tfood>
    </table>
</body>
</html>


