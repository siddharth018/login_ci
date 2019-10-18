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
                    <a href="<?php echo base_url(''); ?>dashboard">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(''); ?>user_list">
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
            <section class="tables-section">
               <!-- table4 -->
                <div class="outer-w3-agile mt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>


                          

                                <?php 
                            foreach ($data as $userDetails) {
                                   ?>                        
                            <tr>
                                <th scope="row"><?php print_r($userDetails->Id); ?></th>
                                <td><?php print_r($userDetails->Name); ?></td>
                                <td><?php print_r($userDetails->Email); ?></td>
                                <td><?php print_r($userDetails->Mobile); ?></td>
                                <td><?php print_r($userDetails->Gender); ?></td>
                                <td><?php if($userDetails->Status == '1') {
                                    echo 'active';
                                } else {
                                echo "Inactive";
                            } ?></td>
                                <td> <a href="<?php echo base_url('home/user_edit'); ?>?id=<?php print_r($userDetails->Id); ?>">Edit</a> </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>
               

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