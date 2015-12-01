
<html>
    <head>
        <title>列表页面</title>
        <style>
        .header{
        background-color:darkred;
        }
        .li{
        float:left;
        }
        ul{
        list-style: none;
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
    <ul>
    <li class="li">首页</li>
    <li class="li">产品</li>
    <li>帮助</li>
    </ul>
    </div>
        <div class="container">
           <table>
           <tr>
           <th>NO.</th>
           <th>Name</th>
           <th>Price</th>
           <th>Number</th>
           <th>Operation</th>
           </tr>
           @foreach($products as $p)
           <tr>
           <td>{{$p->id}}</td>
           <td>{{$p->name}}</td>
           <td>{{$p->price}}</td>
           <td>{{$p->number}}</td>
           <td><a href="/product/show/{{$p->id}}">Show</a></td>
           <td><a href="/product/edit/{{$p->id}}">Edit</a></td>
           <td><a href="/product/delete/{{$p->id}}">Delete</a> </td>
           </tr>
           @endforeach
           </table>
           <a href="/product/edit">Create</a>
        </div>
<hr/>
        <div class="footer">
       Copy Right @ 2015-2025
        </div>
    </body>
</html>