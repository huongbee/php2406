<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <h3 class="text-center">Upload file</h3>
                <form action="xuly-upload-multiple.php" 
                method="POST"
                enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" multiple name="avatar[]">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>