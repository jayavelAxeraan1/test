<html>
<head>
    <body>
        <title>test</title>
    </body>
</head>
<form action="{{route('test.insert')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Insert & Delete"><br/>
    <input type="submit" value ="Insert" name="php ">
    <input type="submit" value ="delete" name="delete">

</form>
</html>