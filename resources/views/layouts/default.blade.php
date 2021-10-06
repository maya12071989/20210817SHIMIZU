<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
 body{
    background-color: blue;
}
.list{
  display: block;
   width: 1200px;
   height:500px;
   margin-top:100px;
   margin-left:100px;
   padding:100px;
    background-color: white;
    border-radius:5%;
    border:none;
}
   
    th {
    
      color: #000;
      padding: 5px 40px;
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 25px 40px;
 
      text-align: center;
    }
    </style>
  </head>
  <body>

    <div class="content">
    @yield('content')
    </div>
</body>
</html>