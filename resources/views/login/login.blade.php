<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<form action='/login' method="post">
    @csrf
    <input type="email" name="email" id="">
    <input type="password" name="password" id="">
    <button type="submit">login</button>
</form>
</body>
</html>
