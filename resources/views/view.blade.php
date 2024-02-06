<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Enter</h3>
                <div class="card">
                    <form action="{{ route('information.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-2 mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" required>
                        </div>
                        <div class="mt-2 mb-2">
                            <label for="age" class="form-label">Age</label>
                            <input type="number" name="age" id="age" placeholder="Enter your Age" class="form-control">
                        </div>
                        <div class="mt-2 mb-2">
                            <label for="education" class="form-label">Education</label>
                            <select name="education" id="education" class="form-control">
                                <option value="" selected disabled>Select Education Level</option>
                                <option value="master">Master</option>
                                <option value="bachelor">Bachelor</option>
                                <option value="high_school">High School</option>
                                <option value="school">School</option>
                            </select>
                        </div>
                        <div class="mt-2 mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter Your Email" class="form-control">
                        </div>
                        <div class="mt-2 mb-2">
                            <label for="docs" class="form-label">Document</label>
                            <input type="file" id="image_data" name="image_data" accept=".jpeg, .jpg, .png" >
                        </div>  
                        <hr>
                        <div class="mt-2 mb-2">
                            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>