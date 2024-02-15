@extends('layouts.frontend')
@section('title', 'Submit Player')
@section('content')
    <section class="submit-player-sec">
        <div class="container">
        <div class="row">
        <div class="col-lg-12">
            <div class="form-main">
                <h2>Application Form</h2>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form method="post" action="{{ route('players.submit') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label" for="name">Name:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label" for="country">Country:</label>
                        <input type="text" name="country" class="form-control" required>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label" for="email">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <label class="form-label" for="phone">Phone:</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <select name="category" class="form-control" required>
                            <option value="category1">Category 1</option>
                            <option value="category2">Category 2</option>
                            {{-- Add more options as needed --}}
                        </select>
                    </div>

                    <div class="input-group input-group-outline mb-3">
                        <div class="form-check">
                            <input type="checkbox" name="optional_round" class="form-check-input" value="1">
                        </div>
                        <label for="optional_round">Want to be a part of optional round?</label>
                    </div>
                    <div class="input-group input-group-outline mb-3" id="drag-drop-container">
                        <div class="form-check">
                            <input type="file" name="profile_photo" id="profile-photo-input" style="display: none;">
                            <div class="drag-drop-area" id="drag-drop-area">
                                <h3>Profile Photo</h3>
                                <p>Drag & Drop your photo here or click to select</p>
                            </div>
                        </div>
                        <img id="preview-image" alt="Preview Image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
        </div>
            </div>
        </div>
</section>
@endsection
@section('footer')
<script>
    var dragDropArea = document.getElementById('drag-drop-area');
    var profilePhotoInput = document.getElementById('profile-photo-input');
    var previewImage = document.getElementById('preview-image');

    dragDropArea.addEventListener('dragover', function (e) {
        e.preventDefault();
        dragDropArea.classList.add('dragover');
    });

    dragDropArea.addEventListener('dragleave', function () {
        dragDropArea.classList.remove('dragover');
    });

    dragDropArea.addEventListener('drop', function (e) {
        e.preventDefault();
        dragDropArea.classList.remove('dragover');

        var files = e.dataTransfer.files;
        handleFiles(files);
    });

    dragDropArea.addEventListener('click', function () {
        profilePhotoInput.click();
    });

    profilePhotoInput.addEventListener('change', function () {
        var files = profilePhotoInput.files;
        handleFiles(files);
    });

    function handleFiles(files) {
        // Hide the preview image if no files are selected
        if (files.length === 0) {
            previewImage.style.display = 'none';
            return;
        }

        // Handle the uploaded files here
        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            // Display file information
            console.log('File name: ' + file.name);
            console.log('File type: ' + file.type);
            console.log('File size: ' + file.size + ' bytes');

            // Display the image preview
            if (file.type.startsWith('image/')) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block'; // Show the preview image
                };

                reader.readAsDataURL(file);
            }
        }
    }
</script>
@endsection