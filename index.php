<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP and MySQL CRUD Operations Demo</title>
    <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Content Section -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 offset-3">
                <h2>PHP and MySQL CRUD Operations</h2>
                <div class="pull-right">
                    <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
                </div>
            </div>
        </div>
            <div class="row mt-3">
                <div class="col-8 offset-3">
                    <h5>Records:</h5>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <th>No.</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email Address</th>
                            <th>Action</th>
                        </thead>
                        <tbody class="records_content"></tbody>
                    </table>
                </div>
        </div>
    </div>
    <!-- /Content Section -->

    <!-- Bootstrap Modal - To Add New Record -->
    <!-- Modal -->
    <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
    </div>
    <div class="modal-body">

    <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" id="first_name" placeholder="First Name" class="form-control" />
    </div>

    <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" id="last_name" placeholder="Last Name" class="form-control" />
    </div>

    <div class="form-group">
    <label for="email">Email Address</label>
    <input type="text" id="email" placeholder="Email Address" class="form-control" />
    </div>

    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary" onclick="addRecord()">Create</button>
    </div>
    </div>
    </div>
    </div>

    <!-- Modal - Update User details -->
    <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Update</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="update_first_name">First Name</label>
                        <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_last_name">Last Name</label>
                        <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_email">Email Address</label>
                        <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                    </div>
                    <input type="hidden" id="hidden_user_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="updateUserDetails()">Update</button>
                </div>
            </div>
        </div>
<script src="dist/js/jquery-2.2.4.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/main.js"></script>
</body>
</html>
