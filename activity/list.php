
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
                    <form id="activity_form" method="post">

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
                                                $categoriesFromFirebase = $firebase->get();
                                                
                                                foreach ($categoriesFromFirebase as $key => $value) {
                                                            
                                            ?>
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td> <?php echo $doc['name'] ?></td>
                                                    <td><?php echo $doc['price'] ?></td>
                                                    <td> <?php echo $doc['start_date'] ?></td>
                                                    <td><?php echo $doc['end_date'] ?></td>

                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li>
                                                                    <a data-toggle="modal" href="#draggable">
                                                                        <i class="icon-wrench"></i> Assign </a>
                                                                        <input type="hidden" id="activityId" name="activityId" value="<?php echo $id; ?>"/>

                                                                </li>                                                               
                                                                 <li>
                                                                    <a onclick="removeActivity('<?php echo $id ?>');">
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


                    </div>
                    </form>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <div id="draggable" class="modal fade"  tabindex="-1" data-width="400">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Assign Schedule</h4>
                            </div>
                            <div class="modal-body">
                            <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN VALIDATION STATES-->
                                <div class="portlet light portlet-fit portlet-form bordered">

                                    <div class="portlet-body">
                                        <!-- BEGIN FORM-->
                                        <form action="#" id="add_activity" method="post" class="form-horizontal" enctype="multipart/form-data">
                                            <div class="form-body">


                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Worker
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <select class="form-control select2me" name="worker">
                                                            <option value="">Select...</option>
                                                            <?php 
                                                                require_once '../Firestore.php';
                                                                $fs = new Firestore('workers');
                                                                $documents = $fs->getDocuments();
                                                                foreach ($documents as $document) {
                                                                    $doc = $document->data();
                                                                    $id = $document->id();
                                                            ?>
                                                            <option value="<?php echo $id; ?>"><?php echo $doc['fullName']; ?></option>
                                                                <?php }?>
                                                        </select>
                                                    </div>
                                                </div> 
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Schedule Date</label>
                                                    <div class="col-md-4">
                                                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                            <input type="text" class="form-control"  name="scheduleDate" id="scheduleDate">
                                                            <span class="input-group-btn">
                                                                <button class="btn default" type="button">
                                                                    <i class="fa fa-calendar"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                </div>   
                                                <div class="form-group">
                                                    <label class="control-label col-md-3">Schedule Time
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-4">
                                                        <input type="time" name="scheduleTime" id="scheduleTime" data-required="1" class="form-control" /> </div>
                                                </div>                                                
                                                
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green" onclick="assignedActivity();">Submit</button>
                                                        <button type="button" class="btn default">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END FORM-->
                                    </div>
                                    <!-- END VALIDATION STATES-->
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                    <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                    <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>

    </body>
    <script>
        function gotoAddpage(){
            var formObj = document.getElementById("activity_form");
            formObj.action = "add.php";
            formObj.submit();
        }
        function removeActivity(id){
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

        function assignedActivity(id){  
           alert(document.getElementById("activityId").value);
           var id = document.getElementById("activityId").value;
           var scheduleTime = ocument.getElementById("scheduleTime").value;
           var scheduleDate = ocument.getElementById("scheduleDate").value;

            $.ajax({
                type: "POST",  
                url: "assigned_action.php",  
                data: ({id: document.getElementById("activityId").value}),
                dataType: "json",       
                success: function(response)  
                {
                  // window.location.reload();
                }   
            });   
        }       
    </script>
</html>