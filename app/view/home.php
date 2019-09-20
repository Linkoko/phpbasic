<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Myanmar Links</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($students as $stu){ ?>
                        <tr>
                            <td><?php echo $stu['id']; ?></td>
                            <td><?php echo $stu['name']; ?></td>
                            <td><?php echo $stu['phone_no']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($classes as $cla){ ?>
                        <tr>
                            <td><?php echo $cla['id']; ?></td>
                            <td><?php echo $cla['name']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Student</th>
                            <th>Class</th>
                            <th>Batch</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($student_batch as $sb){ ?>
                        <tr>
                            <td>
                                <?php
                                    foreach($students as $stud){
                                        if($stud['id'] == $sb['student_id']){
                                            echo $stud['name'];
                                        }
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    foreach($batches as $batc){
                                        if($sb['batch_id'] == $batc['id']){
                                            foreach($classes as $clas){
                                                if($clas['id'] == $batc['class_id']){
                                                    echo $clas['name'];
                                                }
                                            }
                                        }
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $sb['batch_id'];
                                ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>
</html>