<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>


<body class="hold-transition skin-blue sElection_IDebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Election Records
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Elections Record</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <?php
                if (isset($_SESSION['error'])) {
                    echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hElection_IDden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              " . $_SESSION['error'] . "
            </div>
          ";
                    unset($_SESSION['error']);
                }
                if (isset($_SESSION['success'])) {
                    echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              " . $_SESSION['success'] . "
            </div>
          ";
                    unset($_SESSION['success']);
                }
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <a href="#reset" data-toggle="modal" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-refresh"></i> Reset</a>

                                <!-- <a href="#addnewelection" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a> -->
                            </div>
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>

                                        <th>Election Name</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM election_record";
                                        $query = $conn->query($sql);
                                        while ($row = $query->fetch_assoc()) {

                                            echo "
                        <tr>
                          <td>" . $row['E_Name'] . "</td>
                          <td>" . $row['Start_Date'] . "</td>
                          <td>" . $row['End_Date'] . "</td>
                          
                         
                       
                        </tr>
                      ";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/elec_modal.php'; ?>
    </div>
    <?php include 'includes/scripts.php'; ?>
    <script>
        // $(function() {
        //     $(document).on('click', '.edit', function(e) {
        //         e.preventDefault();
        //         $('#edit').modal('show');
        //         var Election_ID = $(this).data('Election_ID');
        //         getRow(Election_ID);
        //     });

        //     $(document).on('click', '.delete', function(e) {
        //         e.preventDefault();
        //         $('#delete').modal('show');
        //         var Election_ID = $(this).data('Election_ID');
        //         getRow(Election_ID);
        //     });



        // });

        // function getRow(Election_ID) {
        //     $.ajax({
        //         type: 'POST',
        //         url: 'election_row.php',
        //         data: {
        //             Election_ID: Election_ID
        //         },
        //         dataType: 'json',
        //         success: function(response) {
        //             $('.Election_ID').val(response.Election_ID);
        //             $('#edit_E_Name').val(response.E_Name);
        //             $('#edit_date').val(response.date);

        //         }
        //     });
        // }
    </script>
</body>

</html>