<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Records from Database</h1>
<div class="card">
    <div class="card-body">


        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="datatable" class="table table-hover ">
                        <thead>
                            <table class="table mt-5">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">name</th>
                                        <!-- <th scope="col">Parent Category</th> -->
                                        <!-- <th scope="col"></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $categories)
                                    <tr>
                                        <td>{{ $categories->name }}</td>
                                        <!-- <td>{{ $categories->parent_category }}</td> -->
                                        <td>

                   
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">

                </div>
            </div>
            <div class="col-5">
                <div class="float-end">

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
