 @extends('partials.layout')
    <style>
        *{
            margin:0;
            padding:0;
            list-style:none;
        }
        .container{
            display: flex;
            align-items: center;
            justify-content:center;
            height:100%;
            width:100%;
             overflow-y:auto;
        }

        .content{
            border:4px solid black;
            height: auto;
            width: 70vw;
            background-color:pink;
            padding: 8px 20px;
            overflow-y:hidden;
        }

        .todo_item{
            display:flex;
            height: auto;
            width: 100%;
            /* margin-left:60px; */
            border: 2px solid green;
            margin-bottom:8px;
        }

        li{
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items:center;
        }
        .todo_name{
            margin-left: 8px;
            font-size:20px;
        }
        .form{
            width:500px;
            border:2px;
            padding:50px
            margin-top:100px;
            margin-left:100px;
        }
        h1{
            text-align:center;
        }
        .btn_add{
            width: 70px;
            font-size:20px;
            margin-top:-30px;
            color:red;
            margin-left:100px
            background-color:yellow;
            border-radius: 5px;
            float: right;

        }
        .btn_add1{
            width: 70px;
            font-size:20px;
            margin-top:-30px;
            color:red;
            margin-left:100px
            background-color:yellow;
            border-radius: 5px;

        }
        /* .wrapper{
            display: flex;
            border:2px solid black;
            justify-content:center;
            align-items:center;
        } */
         .img_frame{
            height:50px;
            width:50px;
         }
         ul{
            display:flex;
         }
        img{
            width:50px;
            height:50px;
            overflow: hidden;
            background-size:cover;
            border: 1px solid blue;
        }
        .box1{
            border:2px;
            padding:2px;
            margin:2px;

        }
    
        .aside{
            display: flex;
            justify-content: space-between;
            width: auto;
        }
        form{
            width:fit-content;
        }
        /* .btn{
            width: 70px;
            font-size:20px;
            color:red;
            background-color;
            border-radius: 5px;
        } */

        .edt{
            width: 70px;
            font-size:18px;
            color:blacl;
            border-radius:15px;
            background-color:green;
        
            
        }
        .dlt{
            width: 70px;
            font-size:18px;
            color:black;
            background-color:red;
            border-radius:15px;

        }
    </style>

    @section('title', 'TODO APP | Home')

    @section('content')
        <div class= "content">
             <h1>My TODO List</h1>

             


            <div  class ="add">
            <form method="POST" action="logout">
                @csrf
             <button class="btn_add1" type="submit">Logout</button>
            </form>
            
             <button class="btn_add"><a href="/add" class="add">Add</a></button>
            </div>
            
            @foreach ($todos as $todo)
                <ul>
                    <div class="todo_item">
                        <div class="img_frame">
                                <img src="{{ asset($todo['photo']) }}" alt="img"/>
                        </div>    
                        <li>
                            <p class="todo_name">{{ $todo['name'] }}</p>
                            <aside class="aside">
                                <button class="edt"><a href="/update/{{$todo['id'] }}" class=edit>Edit</a></button>
                                        <form method="POST" action="/delete/{{ $todo['id']}}">
                                            @csrf
                                            @method("DELETE")
                                            <button class="dlt" type="submit">Delete</button>
                                        </form>
                            </aside>
                        </li>
                    </div>
                </ul>
            @endforeach
            {{ $todos->links() }}
        </div>
    @endsection

          
            
            
                

   
