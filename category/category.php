
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

                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase"> Categories</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body" style="width:50%;">
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
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1" >
                                            <thead>
                                                <tr>
                                                    <th style="width:80%"> Category Name </th>
                                                    <th style="width:20%"> Actions </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                require '../FirebaseCls.php';
                                                $firebase = new FirebaseCls("categories");    
                                                $categoriesFromFirebase = $firebase->get();
                                                
                                                foreach ($categoriesFromFirebase as $key => $value) {
                                                            
                                                ?>
                                                <tr class="odd gradeX">
                                                    <td style="width:80%"> <?php echo $value['name'] ?></td>
                                                    <td style="width:20%">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" onclick="removeActivity('<?php echo $key ?>');" type="button" data-toggle="dropdown" aria-expanded="false" > Remove
                                                               
                                                            </button>

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
            var formObj = document.getElementById("category_form");
            formObj.action = "add_category.php";
            formObj.submit();
        }

        function removeActivity(id){
            alert("Are you sure delete category?");
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


