<?php require_once ("include/header.php") ?>

<!-- Add Student -->
<div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="saveStudent">
                <div class="modal-body">

                    <div id="errorMessage" class="alert alert-warning d-none"></div>

                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Phone</label>
                        <input type="text" name="phone" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Course</label>
                        <input type="text" name="course" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Student</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Student Modal -->
<div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="updateStudent">
                <div class="modal-body">

                    <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                    <input type="hidden" name="student_id" id="student_id">

                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" name="email" id="email" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Course</label>
                        <input type="text" name="course" id="course" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Student</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Student Modal -->
<div class="modal fade" id="studentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="mb-3">
                    <label for="">Name</label>
                    <p id="view_name" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <p id="view_email" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>
                    <p id="view_phone" class="form-control"></p>
                </div>
                <div class="mb-3">
                    <label for="">Course</label>
                    <p id="view_course" class="form-control"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>PHP Simple Ajax CRUD

                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal"
                            data-bs-target="#studentAddModal">
                            Add Student
                        </button>
                    </h4>
                </div>
                <div class="card-body">

                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $query = "SELECT * FROM students";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $student) {
                                    ?>
                                    <tr>
                                        <td><?= $student['id'] ?></td>
                                        <td><?= $student['name'] ?></td>
                                        <td><?= $student['email'] ?></td>
                                        <td><?= $student['phone'] ?></td>
                                        <td><?= $student['course'] ?></td>
                                        <td>
                                            <button type="button" value="<?= $student['id']; ?>"
                                                class="viewStudentBtn btn btn-info btn-sm">View</button>
                                            <button type="button" value="<?= $student['id']; ?>"
                                                class="editStudentBtn btn btn-success btn-sm">Edit</button>
                                            <button type="button" value="<?= $student['id']; ?>"
                                                class="deleteStudentBtn btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once ("include/footer.php") ?>