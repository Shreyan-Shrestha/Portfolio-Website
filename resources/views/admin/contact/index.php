 @extends('partials.admin')
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
            padding: 8px 20px;
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
            padding:50px;
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
            margin-left:100px;
            background-color:yellow;
            border-radius: 5px;
            float: right;

        }
        .btn_add1{
            width: 70px;
            font-size:20px;
            margin-top:-30px;
            color:red;
            margin-left:100px;
            background-color:yellow;
            border-radius: 5px;

        }

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
        .contact-container{
            border: 1px solid white;
            margin-bottom: 8px;
        }
        
    </style>

@section('title', 'Portfolio Website | Received Messages')

@section('content')
    <div class= "content">
             <h1>View Contact</h1>
            <div class="contact-container">
            <table>
                <tr>
                    <td>S.N</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Message</td>
                </tr>
                foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact['name'] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['message'] }}</td>
                    </tr>
                @endforeach
            </table>
            </div>  
            
        
    </div>
@endsection


          
            
            
                

   
