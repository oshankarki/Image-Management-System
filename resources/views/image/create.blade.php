<html>
<head>
    <title>Create Image</title>
</head>
<style>
    .error{
        color: red;
    }
</style>
<body>

<form action="{{route("image.store")}}" method="post"  enctype="multipart/form-data">
    @csrf
    <label for="title">Image Title</label><br>
    <input type="text" id="title"  name="title" placeholder="title"><br><br>
    @error('title')
    <span class="error">{{ $message }}</span>
    @enderror
    <label for="description">Description</label><br>
    <textarea id="description" name="description" rows="4" cols="50" placeholder="description"></textarea><br><br>
    @error('description')
    <span class="error">{{ $message }}</span>
    @enderror
    <label for="image">Upload Image:</label><br>
    <input type="file" id="image" name="image">
    @error('image')
    <span class="error">{{ $message }}</span>
    @enderror
    <button type="submit" >Submit</button>


</form>
        </body>
</html>
