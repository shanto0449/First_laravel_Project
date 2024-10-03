<div style="text-align: center ;">
    <h1>Edit Blog </h1>

<form action="/edit/{{$data->id}}}}" method="post" enctype="multipart/form-data" >
    @csrf
    <input type="hidden" name="_method" value="put">
    <label for="">Title:</label>
    <input type="text" name="title" value="{{$data->title}}" placeholder="Add Title">
    <br><br>
    <label for="">Image Uplod:</label>
    <input type="file" name="image" value="{{$data->image}}" >
    <br>
    <br>
    <label for="">Description:</label>
    {{-- <input type="text" name="description" placeholder="Add Desctiption"> --}}
    <textarea name="description" id="" value="{{$data->description}}" cols="30" rows="10" placeholder="Add Desctiption">{{$data->description}}</textarea>
    <br><br>
    <button>Submit</button>
    <button> <a href="/list">Cancle</a></button>
</form>


 </div>
