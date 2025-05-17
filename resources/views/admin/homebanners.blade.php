<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Home Banner</title>
    <style>
        .image-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .image-table th, .image-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .image-table th {
            background-color: var(--c-action-primary);
            color: white;
        }

        .image-table img {
            max-width: 100px;
            height: auto;
        }
        *, *:after, *:before {
            box-sizing: border-box;
        }

        :root {
            --c-action-primary: #2e44ff;
            --c-action-primary-accent: #e9e5ff;
            --c-action-secondary: #e5e5e5;
            --c-text-primary: #0d0f21; 
            --c-text-secondary: #6a6b76;
            --c-background-primary: #d0d1de;
        }

        body {
            font-family: "Poppins", sans-serif;
            color: var(--c-text-primary);
            background-color: var(--c-background-primary);    
        }

        input, button, select, textarea {
            font: inherit;
        }

        .modals {
            width: 90%;
            max-width: 500px;
            margin: 10vh auto;
            background-color: #FFF;
            border-radius: .5rem;
            margin-top: 100px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .2); 
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 1.5rem 1.5rem 1rem;
            margin-top: 200px;
        }

        .modal-body {
            padding: 1rem 1.5rem;
        }

        .modal-title {
            font-weight: 700;
        }

        .modal-description {
            color: var(--c-text-secondary);
        }

        .upload-area {
            margin-top: 1.25rem;
            border: none;
            background-color: transparent;
            padding: 3rem;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px dashed #ccc;
            transition: background-color 0.3s;
            cursor: pointer;
        } 

        .upload-area:hover {
            background-color: var(--c-action-primary-accent);
        }

        .upload-area-title {
            margin-top: 1rem;
            font-weight: 700;
            color: var(--c-text-primary);
        }

        .upload-area-description {
            color: var(--c-text-secondary);
        }

        .thumbnails {
            display: flex;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            margin: 0.5rem;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-footer {
            padding: 1rem 1.5rem 1.5rem;
            display: flex;
            justify-content: flex-end;
        }

        .btn-secondary, .btn-primary {
            padding: .5rem 1rem;
            font-weight: 500;
            border: 2px solid var(--c-action-secondary);
            border-radius: .25rem;
            background-color: transparent;
        }

        .btn-primary {
            color: #FFF;
            background-color: var(--c-action-primary);
            border-color: var(--c-action-primary);
        }

        .hidden {
            display: none;
        }

      
    </style>
</head>
<body>
    <!-- Navigation bar -->
    @include('partials.nav') 

    <div class="modals" >
        
        <div class="modal-body">
            <h3 class="modal-title">Upload a Banner Images</h3>
            <label class="upload-area" for="file-input">
                <span class="upload-area-title">Drag file(s) here to upload.</span>
                <span class="upload-area-description">
                    Alternatively, you can select a file by <br/><strong>clicking here</strong>
                </span>
                <input type="file" id="file-input" class="hidden" multiple accept="image/*" />
            </label>
            <div class="thumbnails" id="thumbnail-container"></div>
        </div>
        <div class="modal-footer">
            <button class="btn-secondary">Cancel</button>
            <button class="btn-primary" style="margin-left: 10px;" id="upload-button">Upload File</button>
        </div>
    </div>

    <table class="image-table" id="image-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="image-table-body"></tbody>
    </table>
     <div id="pagDiv"></div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        fetchUploadedImages();
        const fileInput = document.getElementById('file-input');
        const thumbnailContainer = document.getElementById('thumbnail-container');
        const uploadButton = document.getElementById('upload-button');

        // Display thumbnails when files are selected
        fileInput.addEventListener('change', function() {
            thumbnailContainer.innerHTML = ''; 
            const files = Array.from(this.files);
            files.forEach(file => {
                const reader = new FileReader();
                reader.onload = function(event) {
                    const thumbnail = document.createElement('div');
                    thumbnail.classList.add('thumbnail');
                    thumbnail.innerHTML = `<img src="${event.target.result}" alt="Uploaded Image" style="width: 100px; height: auto;">`; // Adjust width and height as needed
                    thumbnailContainer.appendChild(thumbnail);
                };
                reader.readAsDataURL(file);
            });
        });

        // Handle upload button click
        uploadButton.addEventListener('click', function() {
            const formData = new FormData();
            const files = fileInput.files;

            // Append each file to the FormData object
            for (let i = 0; i < files.length; i++) {
                formData.append('images[]', files[i]); // Append each file
            }

            // Send the POST request to the upload route
            fetch('{{ route('upload') }}', { // Use Laravel route helper for URL
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // If using Blade templating
                    'Accept': 'application/json', // Expecting a JSON response
                },
            })
           
            .then(data => {
                console.log('Success:', data);
                Swal.fire({
                    title: 'Success!',
                    text: 'Files uploaded successfully!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                // Optionally, you can clear the input and thumbnails here
                fileInput.value = ''; // Clear the file input
                thumbnailContainer.innerHTML = ''; // Clear thumbnails
                fetchUploadedImages()
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    title: 'Error!',
                    text: 'Error uploading files: ' + error.message,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        });
    });

    function deleteImage(image) {
        fetch(`remove/${image}`, { // Use Laravel route helper for URL
            method: 'DELETE', // Make sure the method is DELETE
            headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}', // If using Blade templating
                    'Accept': 'application/json', // Expecting a JSON response
                    'Content-Type': 'application/json',

                },
            }
        )
  .then(data => {
    // Log the data from the response
      fetchUploadedImages()      
  })
  .catch(error => {
    // Handle and log any errors
    console.error('Fetch error:', error);
  });
        
}
    
    function fetchUploadedImages() {
        fetch('http://127.0.0.1:8000/fetch')
  .then(response => {
    // Check if the response is ok
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    // Parse the response body as JSON (or as needed)
    return response.json(); // Use .text() or .blob() if you're expecting plain text or binary data
  })
  .then(data => {
    // Log the data from the response
    console.log(data);
            const imageTableBody = document.getElementById('image-table-body');
            imageTableBody.innerHTML = '';

            data.data.forEach(image => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td><img src="/images/${image.image}" alt="Uploaded Image" style="width: 100px; height: auto;"></td>
                    <td><button class="btn-secondary" onclick="deleteImage('${image.image}')">Delete</button></td>
                `;
                imageTableBody.appendChild(row);
            
  })})
  .catch(error => {
    // Handle and log any errors
    console.error('Fetch error:', error);
  });
        
}

</script>



</body>
</html>
