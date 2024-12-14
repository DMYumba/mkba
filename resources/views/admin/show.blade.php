<!-- resources/views/files/show.blade.php -->
<img src="{{ route('admin.show', $file->id) }}" alt="File">
<!-- resources/views/viewFile.blade.php -->
<embed src="{{ route('admin.show', $file->id) }}" type="application/pdf" width="100%" height="600px">

