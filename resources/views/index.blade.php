<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./reset.css">
  <title>Document</title>
</head>


<style>
body{
    background-color: #333c5e;
    color: #000;
}
.input{
  width: 500px;
  height:30px;
  margin-right:50px;
}
.input_button{
  border:2px #6658A6 solid;
  color:#6658A6;
border-radius:10%;
width:50px;
height:30px;
background:#fff;
}

.update_button{
    border:2px #ff6600 solid;
  color:#ff6600;
border-radius:10%;
width:50px;
height:30px;
background:#fff;
}

.delete_button{
     border:2px #84C98B solid;
  color:#84C98B;
border-radius:10%;
width:50px;
height:30px;
background:#fff;
}
.list{
  display: block;
   width: 800px;
   height:500px;
   margin-top:200px;
   margin-left:200px;
   padding:50px 100px;
    background-color: white;
    border-radius:10px;
    border:none;
}
   
    th {
    
      color: #000;
      padding: 5px 40px;
    }
   
    td {
      padding: 25px 40px;
      color: #000;
      text-align: center;
    }
    h3{
      font-size:30px;
      font-weight:bold;
    }
</style>


<body>
  <div class="list">
    <div class="add">
  <h3>ToDo List</h3>
   <form action="/todo/create" method="POST">
  @csrf
  <input type="text" class="input" name="content"><button class="input_button">追加</button></form>
  

<table>
  @csrf
  <tr>
    <th>作成日</th>
    <th>タスク名</th>
    <th>更新</th>
    <th>削除</th>
  </tr>
  @foreach ($items as $item)
  <tr>
   <form method="post" action="/todo/update">
    <td>
      {{$item->created_at}}
    </td>
    <td>
   <input type="text" name="content" value="{{$item->content}}"> 
     
    </td>
    <td>
   <input type="hidden" name="id" value="{{$item->id}}"> 

     @csrf
<button class="update_button">更新</button>
 </td>
</form>

  <td>
  <form method="post" action="/todo/delete">
     @csrf
     <input type="hidden" name="id" value="{{$item->id}}"> 

<button class="delete_button">削除</button>
 </td>
</form>
 
  </tr>
  @endforeach
</table>

  </div>
  </div>
  </body>
  </html>

