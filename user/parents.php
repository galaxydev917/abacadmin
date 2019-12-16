
 <?php require_once '../common/header.php';?>
 
 <?php 
    require '../FirebaseCls.php';
    $firebase = new FirebaseCls("parents");    
    $parentsFromFirebase = $firebase->get();
?>
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
                                                        <td> <?php echo $value['phone'] ?></td>
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
                <button class="open-button" onclick="openForm()">Open Chat</button>
                <div class="chat-popup" id="myForm">
                    <div class="chat-container">
                        <button type="button" class="close-button" onclick="closeForm()">Close Chat</button>
                        <div class="chat-user-content">
                            <?php foreach ($parentsFromFirebase as $key => $value) {?>
                                <div class="chat-row" role="user">
                                    <ul class="chat-user-item">
                                        <li onclick="javascript:doSelChatUser(this, 0);">
                                            <a>
                                                <span>
                                                    <img src="" class="img-circle" alt="" />
                                                </span>
                                                <span class="chat-name"><?php echo $value["fullName"];?></span>
                                                <input type="hidden" value="<?php echo $value["uid"];?>" />
                                                <input type="hidden" value="eMufhVQQE2Q:APA91bHDDkXedOwQyoCKEp5t2Zxkcav6iJp-QGGWZuBbvaQX1Np8PFFXRxATJSI04cPIONlKso7tt1tNWxFu1EOULUk3BpXrRJZV2yX0BgVpBAJYIday9m32QuS5Fmnik7Ysy_vGUNut" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            <?php }?>
                            </div>
                        <input type="text" placeholder="Type message here" name="msg" required onkeypress="javascript:doSendMessage(this, event);" />
                    </div>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>
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
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
            
            function doSelChatUser(obj, type) {
                if (type == 0) {
                    var selUserId = obj.childNodes.item(1).childNodes.item(5).value;
                    var selUserToken = obj.childNodes.item(1).childNodes.item(7).value;
                    document.getElementById("selUserId").value = selUserId;
                    document.getElementById("selUserToken").value = selUserToken;
                }
            }

            function doSendMessage(txtObj, evt) {
                evt = (evt) ? evt : event;
                var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
                if( txtObj.value == "" ) {
                    return false;
                } else if( charCode == 13 ) {
                    
                }
            }
        </script> 
    <?php require_once '../common/footer.php';?> 


