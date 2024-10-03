<div >
    <h1>Add New Blog</h1>
    <form action="add" method="post" enctype="multipart/form-data">
        @csrf
        {{-- <label for="">SL:</label>
        <input type="text" name="sl">
        <br><br> --}}
        <label for="">Title:</label>
        <input type="text" name="title" placeholder="Add Title" required>
        <br><br>
        <label for="">Image Uplod:</label>
        <input type="file" name="image" >

        <br>
        <br>
        <label for="">Description:</label>
        {{-- <input type="text" name="description" placeholder="Add Desctiption"> --}}
        <textarea name="description" id="" cols="5" rows="5" placeholder="Add Desctiption"></textarea>
        <br>
        <br>
        <button>Submit</button>

    </form>
</div>
