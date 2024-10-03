<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>List Blog</title>
</head>
<body>
    <div>
        <h1>Blogs list</h1>
        <br><br>

        <div style="text-align: Right; margin:10px">
         <button> <h3><a href="/add">Add Blog</a></h3></button>
        </div>
        <br><br>


        <table border="1">
         <tr style="text-align: center">
         <td>Title</td>
         <td>Image</td>
         <td>Description</td>
         <td>Publication_Date</td>
         <td>Action</td>
         </tr>

         @foreach ($blogs as $blog)
         <tr>
             <td>{{$blog->title}}</td>
         {{-- <td>{{$blog->image}}</td> --}}
         <td><img src="{{ Storage::url($blog->image) }}" style="width: 100px; margin:5px" alt="" ></td>
         <td>{{$blog->description}}</td>
         <td>{{$blog->created_at	}}</td>
         <td><a href="{{'delete/'.$blog->id}}">Delete</a><br>
             <a href="{{'edit/'.$blog->id}}">Edit</a>
             <a href="{{'view/'.$blog->id}}">View</a>
         </td>
         </tr>

         @endforeach

        </table>

     </div>

</body>
</html>
