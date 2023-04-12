<!DOCTYPE html>
<html>
<head>
	<title>Shoe Stock Management System</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
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
        
        h1 {
            margin-left:10px;
        }
        
        main {
            padding: 20px;
        }
        
        form label {
            display: block;
            margin-bottom: 10px;
        }
        
        form input {
            display: block;
            margin-bottom: 20px;
            padding: 5px;
            width: 100%;
        }
        
        button {
            background-color: #333;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
        }

        form button {
            background-color: #333;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 10px 20px;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .container{
            border-style:solid;
            margin-top:80px;
            margin-left:10px;
            margin-right:10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        
        
        table th {
            background-color: #f2f2f2;
        }
        
        table td:last-child {
            text-align: center;
        }
        
        table td button {
            background-color: #333;
            border: none;
            color: #fff;
            cursor: pointer;
            margin-right: 5px;
            padding: 5px 10px;
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
        <main>
            
            <form action="{{url('upload')}}" method="POST">
                @csrf
                <div>
                    <h1>Add Shoes In The Stocks</h1><br>
                    @if (Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif
                </div><br>
                <label for="shoe-name"><B>Shoe Name:</B></label>
                <input type="text" id="name" name="name" required>
                <label for="shoe-size"><b>Size:</b></label>
                <input type="number" id="size" name="size" required>
                <label for="shoe-color"><b>Color:</b></label>
                <input type="text" id="color" name="color" required>
                <label for="shoe-quantity"><b>Quantity:</b></label>
                <input type="number" id="quantity" name="quantity" required>
                <button type="submit">Add Shoe</button>
                <a href="{{url('/view')}}">
                    <button type="button" class="btn btn-outline-primary float-right">List Shoes</button>
                </a> 
            </form>
    </div>
        

	</main>
</body>
</html>