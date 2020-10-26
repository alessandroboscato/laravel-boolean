<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Cognome</td>
        <td>Sesso</td>
        <td>Data di nascita</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->name}}</td>
          <td>{{$student->lastname}}</td>
          <td>{{$student->sex}}</td>
          <td>{{$student->date_of_birth}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
