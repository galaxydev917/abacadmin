
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
                    <form id="category_form" method="post">
                    <input type="hidden" id="selected_id" name="selected_id" value="" />

                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase"> Activities</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                    <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="btn-group">
                                                        <button id="sample_editable_1_new" class="btn sbold green"  onclick="gotoAddpage();"> Add New
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
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
                                                    <th> Activity Name </th>
                                                    <th> Price </th>
                                                     <th>Start  Date</th>
                                                     <th> End Date </th>
                                                     <th> Actions </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                require '../FirebaseCls.php';
                                                $firebase = new FirebaseCls("activities");    
                                                $activitiesFromFirebase = $firebase->get();
                                                
                                                foreach ($activitiesFromFirebase as $key => $value) {
                                                            
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td> <?php echo $value['name'] ?></td>
                                                    <td><?php echo $value['price'] ?></td>
                                                    <td> <?php echo $value['start_date'] ?></td>
                                                    <td><?php echo $value['end_date'] ?></td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li>
                                                                    <a onclick="addDetail('<?php echo $key ?>');">
                                                                        <i class="icon-plus"></i> Add Schedule </a>
                                                                </li>                                                               
                                                                 <li>
                                                                    <a onclick="removeActivity('<?php echo $key ?>');">
                                                                        <i class="icon-trash"></i> Remove </a>

                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
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
                <!-- <div id="responsive" class="modal fade" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Add schedule</h4>
                            </div>
                            <div class="modal-body">
                                <div class="scroller" style="height:300px" data-always-visible="1" data-rail-visible1="1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Some Input</h4>
                                            <p>
                                                <input type="text" class="col-md-12 form-control"> </p>
                                            <p>
                                                <input type="text" class="col-md-12 form-control"> </p>
                                            <p>
                                                <input type="text" class="col-md-12 form-control"> </p>
                                            <p>
                                                <input type="text" class="col-md-12 form-control"> </p>
                                            <p>
                                                <input type="text" class="col-md-12 form-control"> </p>
                                            <p>
                                                <input type="text" class="col-md-12 form-control"> </p>
                                            <p>
                                                <input type="text" class="col-md-12 form-control"> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Close</button>
                                <button type="button" class="btn green">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
            </div>
            <!-- END FOOTER -->
        </div>

    </body>
    <script>
        function gotoAddpage(){
            var formObj = document.getElementById("category_form");
            formObj.action = "add.php";
            formObj.submit();
        }
        function addDetail(id){
            var seleted_id = document.getElementById("selected_id");
            selected_id.value = id;
            var formObj = document.getElementById("category_form");
            formObj.action = "detail_activity.php";
            formObj.submit();
       
        } 
        function removeActivity(id){
            alert("Are you sure delete activity?");
            $.ajax({
                type: "POST",  
                url: "remove_action.php",  
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


