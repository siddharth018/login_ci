<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin pannel</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Admin pannel" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <style type="text/css">
        .logout {
            display: inline-block !important;
    color: #fff;
    font-weight: 400;
        }
    </style>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="<?php echo base_url('assets/admin/css/'); ?>bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/'); ?>bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/css/'); ?>pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="<?php echo base_url('assets/admin/css/'); ?>style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/'); ?>style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="<?php echo base_url('assets/admin/css/'); ?>fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
     <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="dashboard">Dashboard</a>
                </h1>
                <span>M</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="user_list">
                        <i class="fas fa-th-large"></i>
                        List
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(''); ?>home/logout">
                        <i class="fas fa-th-large"></i>
                        Logout
                    </a>
                </li>
                
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
           

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">User Details</h2>
            <!--// main-heading -->

            <!-- Forms content -->
            <section class="forms-section">
                <?php foreach($data as $userDetails){

            } ?>
               
                <div class="container-fluid">
                    <div class="row">

                        <!-- Forms-1 -->
                        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">

                            <form action="<?php echo base_url('home/udpate_userDetails/'); ?><?php echo $userDetails->Id; ?>" method="post">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Name" name="Name" required="" value="<?php print_r($userDetails->Name); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="Email" required="" value="<?php print_r($userDetails->Email); ?>">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Mobile" name="Mobile" required="" value="<?php print_r($userDetails->Mobile); ?>">
                                    </div>
                                </div>
                                 <fieldset class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-sm-2 pt-0">Gender</label>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Gender" id="gridRadios1" value="Male" checked=""  required="">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Gender" id="gridRadios2" value="Female">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Female
                                                </label>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </fieldset>
                              
                                <div class="form-group row">
                                    <div class="col-sm-2">Status</div>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1" value="1" name="Status">
                                            <label class="form-check-label" for="gridCheck1">
                                               Active 
                                            </label>
                                        </div>
                                         <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1" name="Status" value="0" checked>
                                            <label class="form-check-label" for="gridCheck1">
                                                Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--// Forms-1 -->
                       
                    </div>
                </div>
                <!-- Forms-3 -->
               
            </section>

            <!--// Forms content -->

        </div>
    </div>

    <!-- Required common Js -->
    <script src='<?php echo base_url('assets/admin/js/'); ?>jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->
    
    <!-- loading-gif Js -->
    <script src="<?php echo base_url('assets/admin/js/'); ?>modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    <script src="<?php echo base_url('assets/admin/js/'); ?>SimpleChart.js"></script>
    
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="<?php echo base_url('assets/admin/js/'); ?>bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>