<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
    <style>
        div{
            margin:10px;
            display:flexbox;
        }

        header {
            background-color: #ffffff;
            color: #000000;
            border-style:solid;
            margin-top:5px;
            margin-left:5px;
            margin-right:5px;
            text-align: center;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        
        header {
            background-color: #333;
            color: #fff;
            padding: -10px;
        }
        
        button {
            background-color: #333;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
        }
        
        input[type="text"]{
            display: block;
        }

        .container{
            border-style:solid;
            margin-top:100px;
            margin-left:500px;
            margin-right:500px;
            box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0)
        }


    </style> 
</head>
<body>
    <header>
		<div class="logo">
            <h1>Shoe Stock Management System</h1>
        </div>
	</header>

    <div class="container">
        <div>
            <h1>Update Shoe</h1>
        </div>

        @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    
        <form action="{{url('update',$shoe->id)}}" method="POST">
            @csrf
            <div>
                <label>Shoe Name:</label>
                <input type="text" name="name" value="{{$shoe->name}}">
            </div>
    
            <div>
                <label>Size:</label>
                <input type="text" name="size" value="{{$shoe->size}}">
            </div>
    
            <div>
                <label>Color:</label>
                <input type="text" name="color" value="{{$shoe->color}}">
            </div>
    
            <div>
                <label>Quantity:</label>
                <input type="text" name="quantity" value="{{$shoe->quantity}}">
            </div>
            <div>
                <input type="submit" value="Update">
            </div>
            
        </form>
    
        <div>
            <br><br>
                <a href="{{url('/home')}}">
                    <button type="button" class="btn btn-outline-primary float-right">Home</button>
                </a>
                <a href="{{url('/view')}}">
                    <button type="button" class="btn btn-outline-primary float-right">List Shoes</button>
                </a>
        </div>
    </div>
</body>
</html>