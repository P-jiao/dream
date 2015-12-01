
<html>
    <head>
        <title>Network - @yield('welcome to my web!!')</title>
        <style>
        .header{
        background-color: darkred;
        }
        .footer{
        background-color: greenyellow;
        }
        </style>
    </head>
    <body>
    <div class=" header">
    <ul>
    <li>首页</li>
    <li>产品</li>
    <li>帮助</li>
    </ul>
    </div>

        <div class="container">
            @yield('content')
        </div>
<hr/>
        <div class="footer">
       @yield('footer')
        </div>
    </body>
</html>