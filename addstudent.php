<!doctype html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
</head>
<body>
<h1 style="color: #9c123e; text-align: center; margin: 50px">Add new Student</h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="post.php" method="post">
                    <div class="mb-3">
                        <label>Student Name</label>
                        <input type="text" name="name" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="number" name="age" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label>Telephone</label>
                        <input type="text" name="telephone" class="form-control" required/>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col"></div>

        </div>
    </div>
</section>
</body>
</html>

