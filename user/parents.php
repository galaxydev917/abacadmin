
 <?php require_once '../common/header.php';?>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="index.html">
                            <img src="../assets/layouts/layout/img/logo-icon.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->

                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <?php require_once '../common/sidebar.php';?>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                    <form id="parents_form" method="post">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase"> Parents</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- <button id="sample_editable_1_new" class="btn sbold green"  onclick="gotoAddpage();"> Add New
                                                                <i class="fa fa-plus"></i>
                                                    </button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th> Parent Full Name </th>
                                                    <th> Email </th>
                                                    <th> Phone Number </th>
                                                    <!-- <th> Actions </th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                require '../FirebaseCls.php';
                                                $firebase = new FirebaseCls("parents");    
                                                $parentsFromFirebase = $firebase->get();
                                                
                                                foreach ($parentsFromFirebase as $key => $value) {
                                                            
                                            ?>
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td> <?php echo $value['fullName'] ?></td>
                                                    <td>
                                                        <a href="mailto:userwow@gmail.com"> <?php echo $value['email'] ?> </a>
                                                    </td>
                                                    <td> <?php echo $value['phonenumber'] ?></td>
                                                    <!-- <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-docs"></i> New Post </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-tag"></i> New Comment </a>
                                                                </li>
                                                                <li>
                                                                    <a onclick="addChild('<?php echo $key ?>');">
                                                                        <i class="icon-user"></i> Add Child </a>
                                                                </li>
                                                                <li class="divider"> </li>
                                                                <li>
                                                                    <a href="javascript:;">
                                                                        <i class="icon-flag"></i> Comments
                                                                        <span class="badge badge-success">4</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td> -->
                                                </tr>
                                                <?php                                                
                                                 }
                                                ?>                                                

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>

                    </form>                             
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->

            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
            </div>
            <!-- END FOOTER -->
        </div>

    </body>
    <script>
        function gotoAddpage(){
            var formObj = document.getElementById("parents_form");
            formObj.action = "add_parents.php";
            formObj.submit();
        }
        function addChild(id){
            $.ajax({
                type: "POST",  
                url: "add_child.php",  
                data: ({id: id}),
                dataType: "json",       
                success: function(response)  
                {
                   window.location.reload();
                }   
            });             
        }        
    </script>    
</html>


