<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<form method="post">
    <p>@csrf</p>
    <input type="text" name="name">
    <table class="table">
        <tr>
            <td><button type="button" style="width: 32px">7</button></td>
            <td><button type="button" style="width: 32px">8</button></td>
            <td><button type="button" style="width: 32px">9</button></td>
            <td><button type="button" style="width: 32px">/</button></td>
            <td><button type="button" style="width: 32px">ce</button></td>
        </tr>
        <tr>
        <td><button type="button" style="width: 32px">4</button></td>
        <td><button type="button" style="width: 32px">5</button></td>
        <td><button type="button" style="width: 32px">6</button></td>
        <td><button type="button" style="width: 32px">*</button></td>
        <td><button type="button" style="width: 32px">c</button></td>
        </tr>
        <tr>
        <td><button type="button" style="width: 32px">1</button></td>
        <td><button type="button" style="width: 32px">2</button></td>
        <td><button type="button" style="width: 32px">3</button></td>
        <td><button type="button" style="width: 32px">-</button></td>
        <td rowspan="2"><button type="button"  style="width: 32px; height: 48px">=</button></td>
        </tr>
        <tr>
        <td colspan="2"><button type="button" style="width: 68px">0</button></td>
        <td><button type="button" style="width: 32px">.</button></td>
        <td><button type="button" style="width: 32px">+</button></td>
        </tr>

    </table>
</form>
</body>
</html>
