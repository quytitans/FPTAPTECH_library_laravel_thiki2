<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }

        table.names tr:nth-child(even) {
            background-color: #eee;
        }

        table.names tr:nth-child(odd) {
            background-color: #fff;
        }

        table.names th {
            background-color: black;
            color: white
        }
    </style>
</head>
<body>
<h1>FPT APTECH LIBRARY</h1>
<div class="topnav">
    <div class="search-container">
        <form action="/home" method="post">
            @csrf
            <input type="text" placeholder="book's name.." name="name">
            <button type="submit">Search</button>
        </form>
    </div>
    <br>
</div>
<table class="names">
    <tr>
        <th>ID</th>
        <th>Author</th>
        <th>Title</th>
        <th>ISBN</th>
        <th>Pub Year</th>
        <th>Status</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$book->bookid}}</td>
            <td>{{$book->authorid}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->ISBN}}</td>
            <td>{{$book->pub_year}}</td>
            <td>{{$book->strStatus}}</td>
        </tr>
    @endforeach
</table>

</body>
</html>
