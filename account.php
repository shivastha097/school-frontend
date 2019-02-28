<?php include_once('includes/header.php') ?>

<!-- Navbar -->
<?php include_once('includes/navbar.php') ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php include_once('includes/sidebar.php') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid pt-3">
            <div class="row">
                <div class="col-lg-4 col-sm-12 add-exam">
                    <div class="card">
                        <div class="card-body">
                            <h1>Account Setting</h1>
                            <hr>
                            <!-- form -->

                            <form class="fontko">
                                <div class="form-group">
                                    <label for="Name">Registration No</label>
                                    <input type="text" class="form-control">
                                </div>
                            
                                <div class="form-group">
                                    <label for="Name">Full Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputGender">Gender*</label>
                                    <select id="inputGender" class="form-control">
                                        <option selected><p class="gens">Select...</p></option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="Name">Address</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="Email">E-mail</label>
                                    <input type="email" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="Name">Contact No</label>
                                    <input type="number" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="Name">Date Of Birth</label>
                                    <input type="Date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Name">Religion</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group pt-2 Uploadp">
                                    <h2 class="text1">Upload Photo</h2>
                                    <input type='file' onchange="readURL(this);" />
                                    <img id="blah" />
                                </div>
                                                    
                                <button type="button" class="btn btn-primary btn-sm ml-0">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>



                <div class="col-lg-8 col-sm-12 add-exam ">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="container-fluid">     
                                    <h1>User Profile</h1>
                                    <hr>
                                    <div class="col-xs-12 col-sm-3 center">
                                        <span class="profile-picture">
                                            <img class="editable img-responsive" alt=" Avatar" id="avatar2" src="img/avatar.png" width="100%" height="100%">
                                        </span>
                                        <div class="space space-4"></div>
                                    </div>
                                    <div class="col-xs-12 col-sm-9 users mt-2">
                                        <div class="profile-user-info ml-0">

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Registration No: </div>

                                                <div class="profile-info-value">
                                                    <span>56602</span>
                                                </div>
                                            </div>
                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Full Name: </div>
                                                    <div class="profile-info-value">
                                                        <span>John Wick</span>
                                                    </div>
                                                </div>
                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Gender: </div>
                                                <div class="profile-info-value">
                                                    <span>Male</span>
                                                </div>
                                            </div>
                                            
                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Address: </div>

                                                <div class="profile-info-value">
                                                    <span>Biratnagar</span>
                                                </div>
                                            </div>

                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Email: </div>

                                                <div class="profile-info-value">
                                                    <span>johnwickchapter3@wick.com</span>
                                                </div>
                                            </div>
                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Contact No.: </div>
                                                <div class="profile-info-value">
                                                    <span>02155201</span>
                                                </div>
                                            </div>
                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Date of Birth: </div>
                                                <div class="profile-info-value">
                                                    <span>1998-02-25</span>
                                                </div>
                                            </div>
                                            <div class="profile-info-row">
                                                <div class="profile-info-name">Religion: </div>
                                                <div class="profile-info-value">
                                                    <span>Hindu</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once('includes/footer.php') ?>