<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="{{url('/link/reg')}}" method="post">
    @csrf
    <table border="1">
        <tr>
            <td>名称</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>年龄</td>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <td>性别</td>
            <td><input type="radio" name="sex"value="1">男&nbsp;<input type="radio" name="sex"value="2">女
            </td>
        </tr>
        <tr>
            <td>电话</td>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <td>邮箱</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>appid</td>
            <td><input type="text" name="appid"></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>确认密码</td>
            <td><input type="password" name="passwords"></td>
        </tr>
        <tr>
            <td>:)</td>
            <td><input type="submit" value="提交"></td>
        </tr>
    </table>
</form>
</body>
</html>
