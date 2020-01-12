<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="{{url('/link/index')}}" method="post">
    @csrf
    <table border="1">
        <tr>
            <td>账户</td>
            <td><input type="text" name="account"></td>
        </tr>
        <tr>
            <td>token</td>
            <td><input type="text" name="token"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="查询"></td>
        </tr>
    </table>
</form>
</body>
</html>