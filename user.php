<?php
$page_title="Manage your account";
$page_description="Modify your account";
$page="login";
include ('header.php');
include(DIR_ACCOUNT.'session.php');
?>
<div class="page-header">
    <div class="content">
        <div class="container">
            <div class="text-center">
                <h2> Manage your account </h2>
            </div>
        </div>
    </div>
</div>

<div class="profile-main">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="card-header">
                    <h3 class="text-warning"> Profile </h3>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-12">
                        <div class="card">
                            <div class="content">
                                <h6 class="category">Profile</h6>
                                <h4 class="title"><a href="#">Details</a></h4>
                                <p class="description">
                                    <div id="welcome">Name: <?php echo $fullname; ?></div>
                                </p>
                                <p class="description">
                                    Email:
                                </p>
                                <p class="description">
                                    Password:
                                </p>
                            </div>
                        </div> <!-- end card -->
                    </div>
                    <div class="col-sm-6 col-md-12">
                        <div class="card">
                            <div class="content">
                                <h6 class="category">Overview</h6>
                                <h4 class="title"><a href="#">Orders</a></h4>
                                <div style="padding-top: 10px; text-align: center">
                                    <p class="description">
                                        Pending: <strong>3</strong>
                                    </p>
                                    <p class="description">
                                        Complete: <strong>20</strong>
                                    </p>
                                    <p class="description">
                                        Canceled: <strong>1</strong>
                                    </p>
                                    <p class="description">
                                        Total word-count: <strong>5050</strong>
                                    </p>
                                    <p class="description">
                                        Rating: <strong>5/10</strong>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-md-offset-1 col-sm-12">
                <div class="card-header">
                    <h3 class="text-warning"> Orders </h3>
                </div>
                <?php
                    if (!get_orders($user_check)){
                        echo '<br><div class="warning"><p> You have not made any requests yet </p></div>';
                    }
                ?>
                <div class="table-responsive <?php if(!get_orders($user_check)) echo 'hidden'; ?>">
		            <table class="table">
		                <thead>
		                    <tr>
		                        <th class="text-center">Date</th>
		                        <th>Title</th>
		                        <th>Word-count</th>
		                        <th>Status</th>
		                        <th class="text-right">Actions</th>
		                    </tr>
		                </thead>
		                <tbody>
		                    <tr>
		                        <td class="text-center"><?php echo $date; ?></td>
		                        <td><?php echo $title; ?></td>
		                        <td><?php echo $count; ?></td>
		                        <td><?php echo $status; ?></td>
		                        <td class="td-actions text-right">
		                            <button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="">
		                                <i class="material-icons">person</i>
		                            </button>
		                            <button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="">
		                                <i class="material-icons">edit</i>
		                            </button>
		                            <button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="">
		                                <i class="material-icons">close</i>
		                            </button>
		                        </td>
		                    </tr>
		                </tbody>
		            </table>
		        </div>
            </div>
        </div>
    </div>
</div>
<?php include ('footer.php'); ?>