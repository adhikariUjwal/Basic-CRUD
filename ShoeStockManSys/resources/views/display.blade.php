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
            padding: 20px;
        }
        
        h1 {
            margin: 0;
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
            text-align:center;
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

	<main>
        <h1>Stock Details</h1>
		<table>
			<thead>
				<tr>
					<th>Shoe Name</th>
					<th>Size</th>
					<th>Color</th>
					<th>Quantity</th>
                    <th>Delete</th>
                    <th>Update</th>
				</tr>
			</thead>

			<tbody>
                @foreach($data as $shoe)
				<tr>
                    <td>{{$shoe->name}}</td>
                    <td>{{$shoe->size}}</td>
                    <td>{{$shoe->color}}</td>
                    <td>{{$shoe->quantity}}</td>
                    <td>
                        <a href="{{url('delete',$shoe->id)}}">
                        <input type="button" value="Delete"></a>
                    </td>
                    <td>
                        <a href="{{url('update_view',$shoe->id)}}">
                        <input type="button" value="Update"></a>
                    </td>
				</tr>
                @endforeach
			</tbody>
		</table>
        <br><br>
        <a href="{{url('/home')}}">
            <button type="button" class="btn btn-outline-primary float-right">Back to Home To Add More Shoes</button>
        </a>

	</main>
</body>
</html>