<div> <h1>Upload File</h1> </div>
<form action="fileupload" method="POST" enctype="multipart/form-data">
    @csrf
    File <input type="file" name="file"> <br><br>
    <button type="submit"> Upload </button>
</form>
