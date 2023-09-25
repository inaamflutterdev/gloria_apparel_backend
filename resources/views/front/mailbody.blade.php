<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLORIA APPAREL</title>
</head>
<body>
   <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>

        </tr>
    </thead>
    <tbody>
        <tr>{{$name}}</tr>
        <tr>{{$useremail}}</tr>
        <tr>{{$phone}}</tr>
        <tr>@isset($message)
        {{$message}}    
        @endisset 
        @isset($msg)@endisset    
       </tr>
    </tbody>
   </table> 
</body>
</html>