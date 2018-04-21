<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <th>
        surname
    </th>
    <th>
        sex
    </th>
    </thead>
    <tbody>
    @foreach($applicantspdf as $key =>$apdf)
        <tr>
            <td>{{ $apdf->applicant_surname }}</td>
            <td>{{ $apdf->applicant_sex }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>