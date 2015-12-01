
<html>
    <head>
        <title>列表页面</title>
        <style>
        .header{
        background-color:darkred;
        }
        .container{
        background-color: deepskyblue;
        }
        .footer{
        background-color: greenyellow;
        }
        </style>
    </head>
    <body>
    <div class=" header">
    <h3>详细信息</h3>
    </div>

        <div class="container">
           <table><tr>
           <th>NO.</th>
           <th>Name</th>
           <th>Price</th>
           <th>Number</th>
           </tr>
           <tr>
           <td>{{$product->id}}</td>
           <td>{{$product->name}}</td>
           <td>{{$product->price}}</td>
           <td>{{$product->number}}</td>
           </tr>
           </table>
        </div>
<hr/>
        <div class="footer">
       Copy Right @ 2015-2025
        </div>
    </body>
</html>