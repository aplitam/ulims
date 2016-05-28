
<script type="text/javascript">
  $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 500);
        return false;
      }
    }
  });
});


</script>



</head>
<body>

<div class="naviContent">
<div align="center"><br>
  <?php
                              echo CHtml::link('BROWSE', '/ulims/help/article/admin/') ; echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                              echo CHtml::link('HELP', array("/help/article/content/","view"=>"", "#"=>'gs')) ;  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                              echo CHtml::link('FAQS', '/ulims/help/faqs/faqs/');
                                  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                              echo CHtml::link('CONTACT US', '/ulims/site/contact/');

 
    ?>  
</div>
 <hr>
 </div>
<div id="sidenavi" class="sidebar-nav">
        
      <?php $this->widget('zii.widgets.CMenu', array(
      /*'type'=>'list',*/
      'encodeLabel'=>false,
      'items'=>array(
        //array('label'=>'<i class="icon icon-home"></i>  Dashboard', 'url'=>array('/lab'),'itemOptions'=>array('class'=>'')),


          array('label'=>'</i>Getting Started','url'=>array("/help/article/content/","view"=>"", "#"=>'gs') ),
          array('label'=>'</i> System Config', 'url'=>array("/help/article/content/","view"=>"", "#"=>'sc')  ),
          array('label'=>'</i> Laboratory', 'url'=>array("/help/article/content/","view"=>"", "#"=>'lm') ),        
          array('label'=>'</i> Cashiering', 'url'=>array("/help/article/content/","view"=>"", "#"=>'cm') ),
          array('label'=>'</i> Accounting', 'url'=>array("/help/article/content/","view"=>"", "#"=>'am') ),
          //array('label'=>'</i> Referral', 'url'=>array("/help/article/content/","view"=>"", "#"=>'rm') ),
       
        
        // Include the operations menu
        //array('label'=>'OPERATIONS','items'=>$this->menu),
      ),
       // 'htmlOptions'=> array('class'=>'sidebar-nav-fixed-left')
      ));?>
    </div>









<!-- G E T T I N G   S T A R T E D   W I T H   U L I M S
//////////////////////////////////////////////
-->
<div id="gs" class="content">
<div id="Introducing ULIMS" class="anchorLink"></div>
<div class="article"><br><br><br>
<br><h1><b>Getting Started with ULIMS</b></h1><br>
<div class="title">I. Introducing ULIMS</div>
<div id=content1>
      <div class="articleContent">
                            <br><p class="content">DOST Unified Laboratory Information and Management System is a web based information system implemented to administer the flow of requests in the different 
                            laboratories.</p>

                            <div class="modlink">
                            <?php 
                              //echo CHtml::link('MyLink',array('/help/content/gettingStarted','view'=>'gettingStarted', '#'=>'a')); echo "<br>"; 
                              echo CHtml::link('Laboratory Module', array("/help/article/content/","view"=>"", "#"=>'lm')) ; echo "<br>";
                              echo CHtml::link('Cashiering Module', array("/help/article/content/","view"=>"", "#"=>'cm')) ; echo "<br>";
                              echo CHtml::link('Accounting Module', array("/help/article/content/","view"=>"", "#"=>'am')) ; echo "<br>";
                              //echo CHtml::link('Referral Module', '/ulims/help/content/referral') ;
                             ?>               
                            </div> <!--modlink-->

                            <br>    
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/gs/gs_01.jpg', "alt tag of image"); ?>
                            </div>
      </div>
</div>
</div>


<div id="Entering the system" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">II. Entering the System</div><br><br>
<div id=content1>
      <div class="articleContent">
                            <p class="content">Upon opening the system, each would be asked to login to be able to access the different modules (laboratory, cashiering, accounting and referral) of the system. </p>

                            <p class="content">Each module requires specific user account/s which can only be created and added by the <b>admin</b>. See <b>User and User Roles</b> for more info about the different roles and privileges of a certain user. </p>

                            <div class="ins">
                                Log In to the System <br><br>

                                1.  On the <b>menu</b> located at the top of the page, locate and click the <b>System</b> button, and then click <b>Login</b>. <br><br>
                                2.  Enter account <b>Username</b> and <b>Password</b>. <br><br>
                                3.  Click <b>Login</b>. <br>
                            </div> <!--modlink-->
                            
                            <br>             
      </div>
</div>
</div>


<div id="Users and User Roles" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">III. Users and User Roles</div>
<div id=content1>
      <div class="articleContent">
                            <br><br>
                              <p class="content">
                                <b>The Admin</b> <br><br>
                                The <b>Admin</b> user oversees user management and overall operations in the system. This user is in-charged in setting up the <b>System Configurations</b> (which is a prerequisite of the system)
                              </p>
                            <br><br>
                              <p class="content">
                               <b> The Laboratory System Manager/s</b><br><br>

                                These are the <b>Admin</b> for the <b>Laboratory Module</b>. Actions like <b>Create, Update, View</b> and <b>Cancel</b> are allowed for these users across different module components (Requests, Customer, Tests, Packages & etc). These users have special privileges in this module.
                              </p>
                              <br><br>
                              <p class="content">
                              <b>The Laboratory System User/s</b><br>

                              Lab – System Users can function as <b>Lab – System Managers</b> but lack privileges for the action <b>Cancel</b>. Some <b>module components</b> may not be available for these users.
                              </p>
                              <br><br>


                              <p class="content">
                              <b>The Cashier System Manager/s</b><br><br>

                              This is the <b>Admin</b> for the <b>Cashiering Module</b>. All actions and privileges are given to this user
                              
                              </p>
                              <br><br>

                              <p class="content">
                              <b>The Accounting System User/s</b><br><br>
                              This is the <b>Admin</b> for the <b>Accounting Module</b>. All actions and privileges are given to this user.
                              </p>
                              <br><br>

                              <p class="content">
                              <b>The Accounting System User/s</b><br><br>

                              The only role of this user is to <b>manage</b> and <b>create order of payments</b> for each request.
                              
                              </p>
                              <br><br>     
      </div>
</div>
</div>



<div id="Create Users" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">IV. Create Users</div><br>
<div id=content1>
      <div class="articleContent">
                           <p class="content">Note that in creating a user, you must be logged in as the system <b>administrator</b> <?php  //echo CHtml::link('administrator', '/ulims/help/content/laboratory/') ;?></p><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/gs/gs_02.jpg', "alt tag of image"); ?>
                            </div><br>     
                            <div class="ins">
                              1.  Go to <b>Users</b> <br><br>
                              2.  Click <b>Create Users</b> on the lower left corner of the page<br><br>
                              3.  Input the required fields for creating the user<br><br>
                              4.  Change the status to either <b>Active, Not Active,</b> or <b>Banned</b><br><br>
                              5.  Make sure to change your <b>RSTL</b><br><br>
                              6.  Check the different modules that a certain user can <b>access</b><br><br>
                              7.  Choose <b>User Type</b> from the dropdown<br><br>
                              8.  Click <b>Create</b><br><br>
                            </div><br> <!--modlink-->        
      </div>
</div>
</div>



<div id="Manage Users" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">V. Manage Users</div><br>
<div id=content1>
      <div class="articleContent">
                           <p class="content">Note that in managing a user, you must be logged in as the system <b>administrator</b><?php  //echo CHtml::link('administrator', '/ulims/help/content/laboratory/') ;?></p><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/gs/gs_03.jpg', "alt tag of image"); ?>
                            </div><br>     
                            <div class="ins">
                                1.  Go to <b>Users</b><br><br>
                                2.  Click <b>Manage Users</b> on the lower left corner of the page<br><br>
                                3.  Click the <b>view</b>     icon in order to view the details of a certain user<br><br>
                                4.  Click <b>update</b>      icon in order to update a user<br><br>
                                5.  Click <b>delete</b>     icon in order to delete a user<br><br>

                            </div><br> <!--modlink-->      
      </div>
</div>
</div>


<div id="Create Profile Fields" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VI. Create Profile Fields</div><br>
<div id=content1>
      <div class="articleContent">
                            <div class="ins">
                                1.  Go to <b>Users > Manage Profile fields</b><br><br>
                                2.  Click <b>Create Profile Fields</b> on the lower left corner of the page<br><br>
                                3.  Input the required fields for creating the user<br><br>
                                4.  Click <b>Create</b><br>
                            </div><br> <!--modlink-->   
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/gs/gs_05.jpg', "alt tag of image"); ?>
                            </div><br>  
      </div>
</div>
</div>


<div id="Manage Profile Field" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VII. Manage Profile Fields</div><br>
<div id=content1>
      <div class="articleContent">

                            <div class="ins">
                                1.  Go to <b>Users</b><br><br>
                                2.  Click <b>Manage Profile Field</b> on the lower left corner of the page<br><br>
                                3.  Click the <b>view</b>     icon in order to view the details of a field<br><br>
                                4.  Click <b>update</b>      icon in order to update a field<br><br>
                                5.  Click <b>delete</b>     icon in order to delete a field<br><br>

                            </div><br> <!--modlink-->   
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/gs/gs_04.jpg', "alt tag of image"); ?>
                            </div><br>                                     
      </div>
</div>
</div>
</div><!--gs-->









<!-- S Y S T E M   C O N F I G U R A T I O N S
//////////////////////////////////////////////
-->

<div id="sc" class="content">

<div id="Before Setting Things in the System Configurations" class="anchorLink"></div>

<div class="article"><br><br><br>
<br><h1><b>System Configurations</b></h1><br>
      <p class="content">System Configurations is only available for alteration to the system <b>admin</b>.</p> <br>  
<div class="title">I. Before Setting Things in the System Configurations</div>
<div id=content1>
      <div class="articleContent">
                            <br><br>
                            <div class="smallimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_01.jpg', "alt tag of image"); ?>
                            </div>
                            <div class="insSmall">
                                1.  Go to <b>Manage Users</b><br><br>
                                2.  Update the <b>Admin</b> account<br><br>
                                3.  Set the <b>RSTL</b> dropdown to the correct value<br> (rstl_id) depending on your location<br><br>
                                4.  Click <b>Save</b>.<br><br>

                              <div class="alert alert-info">
                               • Note that this value is essential in the <b>System Configuration</b>.</div>
                              

                            </div> <!--ins-->

      </div>
</div>
</div>


<div id="Set Laboratories" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">II. Set Laboratories</div>
<div id=content1>
      <div class="articleContent">
                            <br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_02.jpg', "alt tag of image"); ?>
                            </div>
                            <div class="ins">
                                <br>
                                    1.  Open <b>System Configurations</b><br><br>
                                    2.  Click <b>Laboratory</b> dropdown<br><br>
                                    3.  Set the <b>Active</b> or <b>Inactive</b> laboratories in your lab

                            </div> <!--modlink-->
                            
                            <br>             
      </div>
</div>
</div>


<div id="Inititalize Laboratories" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">III. Initialize Laboratories</div>
<div id=content1>
      <div class="articleContent">
                            <br><br>
                            <div class="smallimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_03_4.jpg', "alt tag of image"); ?>
                            </div>
                            <div class="insSmall">

                                <p>Before being able to <b>create a request</b>, 
                                each active <br>laboratories must be initialized. Take note that you can<br> only initialize active laboratories and the next <b>Request<br> Reference Sample Codes</b> can be monitored per lab.</p><br>

                                1.  Go to <b>Manage Users</b><br><br>
                                2.  Update the <b>Admin</b> account<br><br>
                                3.  Set the <b>RSTL</b> dropdown to the correct value<br> (rstl_id) depending on your location<br><br>
                                4.  Click <b>Save</b>.<br><br>
                              <div class="alert alert-info">
                              <p> • If we are going to encode to the system 
                              the <b>Request Reference: R9-082014-PHY-0251</b>, we must indicate <b>250</b> in the <b>Request Start Code</b>. If the <b>Sample Code</b> would start as <b>PHY-0426</b>, then we indicate <b>425</b> in the <b>Sample Start Code</b>.</p>
                              </div>

                            </div> <!--ins-->  
      </div>
</div>
</div>



<div id="Assign Technical Managers" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">IV. Assign Technical Managers</div>
<div id=content1>
      <div class="articleContent">
                            <br><br>
                            <div class="smallimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_05.jpg', "alt tag of image"); ?>
                            </div>
                            <div class="insSmall"><br><br><br><br><br>
                              1.  Click the <b>Technical Managers</b> dropdown<br><br>
                              2.  Under the managers column, click on the empty cell <br>provided for the manager.<br><br>
                              3.  Select a user from the <b>User</b> dropdown<br><br>
                              4.  Click <b>Save</b><br><br>
                              <div class="alert alert-info">
                              • Note that only the users who are assigned to be <b>laboratory managers</b> will be listed under the user dropdown.</div>
                              </div><br><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_04.jpg', "alt tag of image"); ?>
                            </div>                             
      </div>
</div>
</div>



<div id="Adding Discounts" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">V. Adding Discounts</div>
<div id=content1>
      <div class="articleContent">
                            <br>
                            <p class="content">Discount presets are allocated in the system. Select only those are applicable in your RSTL.  Adding of new discounts<br> is also possible.</p>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_06.jpg', "alt tag of image"); ?>
                            </div>      <br><br>
                            <div class="smallimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_07.jpg', "alt tag of image"); ?>
                            </div>
                            <div class="insSmall"><br><br><br><br><br>
                            1.  Under the <b>Laboratory</b> in the <b>System Configurations</b>,<br> select the <b>Discounts</b> dropdown<br><br>
                            2.  Select a discount that is applicable in your RSTL<br><br>
                            3.  Click <b>Active</b> to activate one one the discounts<br> in the discounts presets<br><br>
                            4.  If you wish to add another discount option,<br> click <b>Add New Discount</b> <br><br>
                            5.  Input the <b>Type of discount</b><br><br>
                            6.  Input <b>Rate</b><br><br>
                            7.  Click <b>Create</b><br><br>

                            </div> <!--ins-->                              

 
      </div>
</div>
</div>


<div id="Add/ Create OR Series" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VI. Add/Create OR Series</div>
<div id=content1>
      <div class="articleContent">
                            <br>
                            <p class="content">Multiple OR Series can be added and used for different collection types. “OR Series” are specified under a Category. Categories are identified/given by the Collecting Officer (may vary)</p><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_08.jpg', "alt tag of image"); ?>
                            </div>      <br><br>
                            <div class="medimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_09.jpg', "alt tag of image"); ?>
                            </div>
                            <div class="insSmall"><br><br><br>
                                1.  Disable the currently added OR Series<br> and create an new series for your RSTL<br> by clicking <b>Inactive</b><br><br>
                                2.  Click <b>Add New OR Series</b><br><br>
                                3.  Select <b>OR Category</b> from the given<br> dropdown<br><br>
                                4.  Input the <b>Name/ Description/ <br>Purpose</b> of the new OR series<br><br>
                                5.  Input <b>Start O.R.</b><br><br>
                                6.  Input <b>End O.R.</b><br><br>
                                7.  Click <b>Create</b><br><br>


                            </div> <!--ins-->       
      </div>
</div>
</div>


<div id="Add / Create OR Categories" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VII. Add/Create OR Categories</div>
<div id=content1>
      <div class="articleContent">
                            <div class="medimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_10.jpg', "alt tag of image"); ?>
                            </div><br>
                            <div class="medimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_11.jpg', "alt tag of image"); ?>
                            </div>   
                            <div class="insSmall">
                                1.  Beside the <b>Add New OR Series</b> button, <br>click the <b>Manage O.R. Categories</b><br><br>
                                2.  Under the Manage O.R. Categories <br>where a list of <b>Categories</b> are listed, <br>Click Add New O.R. Category<br><br>
                                3.  Input the <b>Name</b> of the new O.R. category<br><br>
                                4.  Input a <b>Code</b> for the new Category<br><br>
                                5.  Click <b>Create </b><br>

                                <br><br><br><br><br><br><br><br><br>

                            </div> <!--ins-->                                                       

      </div>
</div>
</div>



<div id="Add Bank Account" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VIII. Add Bank Account</div>
<div id=content1>
      <div class="articleContent">

                            <br>
                            <p class="content">Bank account(s) can be specified in system which will appear on the Order of Payment form.</p><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_12.jpg', "alt tag of image"); ?>
                            </div>      <br><br>
                            <div class="medimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_11.jpg', "alt tag of image"); ?>
                            </div>
                            <div class="insSmall"><br><br><br><br><br><br><br>
                                1.  Under the <b>Cashiering</b>, click the <b>Bank<br> Accounts</b> dropdown<br><br>
                                2.  To edit Bank Accounts, click the<br> cell under <b>Account Number</b><br><br>
                                3.  Input the <b>Name</b> of bank<br><br>
                                4.  Input the <b>Account Number</b><br><br>
                                5.  Click <b>Save</b><br><br>
                                6.  To add bank account, click <br><b>Add New Account</b> <br><br>
                                7.  Do steps <b>2 </b>and <b>3</b><br><br>
                                8.  Click <b>Save</b><br><br>



                            </div> <!--ins-->                                
      </div>
</div>
</div>




<div id="OR Print Setup" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">IX. OR Print Setup</div>
<div id=content1>
      <div class="articleContent">
                            <br><br><p class="content"> Page Under Construction</p>                               
      </div>
</div>
</div>

<div id="Add / Change Signatories" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">X. Add/Change Signatories</div>
<div id=content1>
      <div class="articleContent"><br>
                            <p class="content"> Signatories are specified to be used in several forms in the system.</p>
                            <br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_15.jpg', "alt tag of image"); ?>
                            </div>      <br><br>
                            <div class="smallimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_16.jpg', "alt tag of image"); ?>
                            </div>
                            <div class="insSmall"><br><br>
                                1.  Under <b>Personnel</b>, then the dropdown <b>Signatories</b>,<br> click the cell which you would like to alter.<br><br>
                                2.  Input the changes in <b>Designation</b> (if there’s any)<br><br>
                                3.  Select name from the dropdown <b>Name</b><br><br>
                                4.  Click <b>Save</b><br><br>




                            </div> <!--ins--> <br><br><br><br><br>                              
                               
      </div>
</div>
</div>


<div id="Modify API Settings" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XI.  Modify API settings</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_17.jpg', "alt tag of image"); ?>
                            </div>      <br>
                            <div class="ins">
                                1.  Under <b>Web Application</b>, click the dropdown <b>API Settings</b><br><br>
                                2.  Input <b>URL, Version, Proxy URL, Proxy Port, Proxy User, Proxy Password,</b> and other <br>configuration needed in your API settings. <br><br>
                                3.  Click <b>Save</b>.<br>

                            </div> <!--ins-->                                  

                               
      </div>
</div>
</div>


<div id="Modify Site Settings" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XII. Modify Site Settings</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_18.jpg', "alt tag of image"); ?>
                            </div>      <br>

                            <br><br>
                              <p class="content">
                                <b>About the Agency/Laboratory</b> <br><br>
                                <div class="ins">
                                
                                1.  Under the <b>Agency/Laboratory</b> section, input the necessary changes<br><br>
                                2.  Change the <b>name</b> and <b>short name</b> agency depending on your RSTL<br><br>
                                3.  Input the full name of your <b>laboratory</b>, its <b>address</b>, and <b>contact number/s</b>.<br><br>  </div>
                              </p>
                            <br><br>
                              <p class="content">
                                <b>Change Agency Logo</b> <br><br>
                                <div class="ins">

                                1.  Under the <b>Agency/ Laboratory</b> section, click <b>Choose File</b><br><br>
                                2.  Browse for files from your computer/local files<br><br>
                                3.  Select the image<br><br>
                                4.  Click <b>Open</b><br><br>
                                5.  Make sure to <b>save</b> changes<br><br>
                                </div>
                              </p>
                            <br><br>
                              <p class="content">
                                <b>Dashboard</b> <br><br>
                                <div class="ins">
                                1.  Locate the <b>Dashboard</b> under <b>Web Application</b>, then the <b>Site Settings</b> right<br> after the <b>Agency/Laboratory</b> section<br><br>
                                2.  Enter the <b>title</b> for your dashboard<br><br>
                                3.  Input dashboard <b>description</b><br><br>
                                4.  Make sure to <b>save</b> changes<br><br> </div>
                              </p>
                            <br><br>
                              <p class="content">
                                <b>Sidebar Images</b> <br><br>
                                <div class="ins">
                                  
                                You can change the images on your sidebar in either <b>laboratory, cashier</b> or <b>accounting</b> module by following these steps<br><br>
                                1.  Locate the <b>Sidebar</b> under <b>Web Application</b>, then the <b>Site Settings</b> right after the <b>Dashboard</b> section<br><br>
                                2.  Click <b>Choose File</b><br><br>
                                3.  Browse for files from your <b>computer/local files</b><br><br>
                                4.  Select the image<br><br>
                                5.  Click <b>Open</b><br><br>
                                6.  Make sure to <b>save</b> changes<br><br>
                                </div>
                              </p>
                            <br><br>
                              <p class="content">
                                <b>Administrator</b> <br><br>
                                <div class="ins">
                                See <b>Users</b> and <b>User Roles</b> for details on how to change email address of admin.<br><br> </div>
                              </p>
                            <br><br>                              
      
      </div>
</div>
</div>


<div id="Modify Form Settings" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XIII. Modify Form Settings</div>
<div id=content1>
      <div class="articleContent">
                            <br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_19.jpg', "alt tag of image"); ?>
                            </div>      <br>                            


                            <p class="content">
                                <div class="ins">

                                1.  Under <b>Web Application</b>, click the dropdown <b>Form Settings</b><br><br>
                                2.  Input the necessary details like the <b>Form Title, Form Number,<br> Form revision number, Form revision Date,</b> and other necessary details.<br><br>
                                3.  Click <b>Save</b><br><br>

                                </div>
                              </p>
                            <br><br>
                              <p class="content">
                                <b>Change File Format</b> <br><br>
                                <div class="ins">
                                1.  Under <b>Web Application</b>, click the dropdown <b>Form Settings</b><br><br>
                                2.  Locate the <b>File Format</b> option<br><br>
                                3.  Under the dropdown, select the <b>format</b> for your document<br><br>
                                4.  Make sure to <b>save</b> changes<br><br>

                                </div>
                              </p>
                            <br><br>
                              <p class="content">
                                <b>Change Header Logo</b> <br><br>
                                <div class="ins">
                                1.  Under <b>Web Application</b>, click the dropdown <b>Form Settings</b><br><br>
                                2.  Locate the <b>Header Logo</b> option<br><br>
                                3.  Click <b>Choose File</b><br><br>
                                4.  Browse for files from your <b>computer/local files</b><br><br>
                                5.  Select the image<br><br>
                                6.  Click <b>Open</b><br><br>
                                7.  Make sure to <b>save</b> changes<br><br>

 
                                </div>
                              </p>
                            <br><br>       
      </div>
</div>
</div>


<div id="Truncate Test Data" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XIV. Truncate Test Data</div>
<div id=content1>
      <div class="articleContent">
                            <br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/sc/sc_20.jpg', "alt tag of image"); ?>
                            </div>      <br>                            

                                <div class="ins">

                                    1.  Under Web Application, Click on the <b>Test Data</b> dropdown<br><br>
                                    2.  Click  <b>Truncate</b><br><br>
                                    3.  Click <b>Ok</b><br><br>


                                </div>                            
      </div>
</div>
</div>
</div><!--sc-->












<!-- L A B O R A T O R Y   M O D U L E
//////////////////////////////////////////////
-->
<div id="lm" class="content">

<div id="Manage Requests" class="anchorLink"></div>

<div class="article"><br><br><br>
<br><h1><b>Laboratory Module</b></h1><br>
      <p class="content">Laboratory Module will only be available for <b>lab users</b> and <b>lab managers</b>.</p> <br>  
<div class="title">I. Manage Requests</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="ins">
                                1.  Click <b>manage requests link</b><br><br>
                                2.  To view a request, click on the view icon or the Request reference Number<br><br>
                                3.  To update/ change request details, click on the update icon<br><br>
                                <div class="bignote">
                                <div class="alert alert-info">
                                • <font color="blue">Blue</font> : Ongoing – requests that were accepted in the system but doesn’t mean that analysis is on-going (will be available on the next update)<br>
                                • <font color="green">Green</font> : Completed – requests that were passed over the due date<br>
                                • <font color="orange">Orange</font>: Report Nearly Due – requests that are 3 days before the due date<br>
                                • <font color="red">Red</font>: Cancelled– cancelled requests<br>      
                                </div></div>                 
                            </div> <!--ins-->
                            <br><br><br><br><br><br><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_01.jpg', "alt tag of image"); ?>
                            </div>
      </div>
</div>
</div>


<div id="Create Requests" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">II. Create Request</div>
<div id=content1>
      <div class="articleContent">
                            <div class="ins"><br>
                                1.  On the side bar, click <b>Requests</b><br><br>
                                2.  Click on the <b>Create Request</b> link on the lower left part of the page under the sidebar<br><br>
                                3.  Choose a <b>laboratory</b> from the given dropdown<br><br>
                                <div class="bignote">
                                <div class="alert alert-info">
                                    • If customer is new or does not exist in the dropdown, click the icon beside the text field to create new customer    
                                </div></div>                                      
                            </div> <!--ins-->
                            <br><br><br><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_02.jpg', "alt tag of image"); ?>
                            </div>  
                            <div class="ins"><br>
                                4.  Fill the <b>date of request</b><br><br>
                                5.  Input and select a customer from the <b>customer</b> dropdown<br><br>
                                6.  Choose the <b>type of payment</b><br><br>
                                7.  Choose the <b>discount</b> (if there are any) <br><br>
                                8.  Input the <b>report due</b> and other necessary details<br><br>
                                9.  Click <b>Create</b><br><br>   

                            </div>           
      </div>
</div>
</div>


<div id="Cancel Requests" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">III. Cancel Request</div>
<div id=content1>
      <div class="articleContent">
                            <div class="medimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_06.jpg', "alt tag of image"); ?>
                            </div>   
                            <div class="insSmall"><br><br>
                              1.  On the manage users page,click on the<br>view icon in order to view the request details<br><br>
                              2.  Click the <b>cancel request</b> beside the <br>request reference number<br><br>
                              3.  Input a <b>reason</b> for the cancellation of the<br> request<br><br>
                              4.  Click <b>Cancel request</b><br><br>
                            </div>  <br><br><br><br><br><br><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_05.jpg', "alt tag of image"); ?>
                            </div>                                                            
      </div>
</div>
</div>



<div id="Manage Customers" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">IV. Manage Customers</div>
<div id=content1>
      <div class="articleContent">
                            <div class="ins"><br>
                                1.  On the sidebar, go to <b>Customers</b><br><br>
                                2.  Click <b>Manage Users</b> on the lower left corner of the page<br><br>
                                3.  Click the <b>view</b>     icon in order to view the details of a certain user<br><br>
                                4.  Click <b>update</b>      icon in order to update a user<br><br>
                                5.  Click <b>delete</b>     icon in order to delete a user<br>
                                                                    
                            </div> <!--ins-->
                            <br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_03.jpg', "alt tag of image"); ?>
                            </div>                           
      </div>
</div>
</div>



<div id="Add Customers" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">V. Add Customers</div>
<div id=content1>
      <div class="articleContent">
                            <div class="ins"><br>
                                1.  Go to <b>Customers</b> on the side navigation<br><br>
                                2.  Under the side navigation, click <b>Create Customer</b><br><br>
                                3.  Input the necessary information<br><br>
                                4.  Choose the <b>type, nature of business,</b> and <b>industry</b> on the dropdown<br><br>
                                5.  Input the address and other Contact information<br><br>
                                6.  Click <b>Create</b><br>                                            
                            </div> <!--ins-->
                            <br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_04.jpg', "alt tag of image"); ?>
                            </div>                              

 
      </div>
</div>
</div>


<div id="Add Samples" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VI. Add Samples</div>
<div id=content1>
      <div class="articleContent">
                            <div class="smallimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_08.jpg', "alt tag of image"); ?>
                            </div>   
                            <div class="insSmall">
                                1.  On the manage request page, click on the <b>view</b>     icon<br><br>
                                2.  Under the request details, click <b>Add Samples</b><br><br>
                                3.  If you’ll use an existing sample, search a <b>Sample <br>Template</b> on the dropdown<br><br>
                              
                              <div class="alert alert-info">
                                • A template will only appear in the dropdown if it<br> was created and saved for previous requests
                              </div>
                            </div><br><br><br><br><br><br><br><br><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_07.jpg', "alt tag of image"); ?>
                            </div>   
                            <div class="ins"><br>
                                4.  Else, Input the sample name and its description<br><br>
                                5.  Check <b>Save Template</b> checkbox if you want to save the newly created template<<br><br>
                                6.  Click <b>Create</b><br>

                            </div><br>                                                                    
      </div>
</div>
</div>


<div id="Manage Sample Templates" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VII. Manage Sample Templates</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_11.jpg', "alt tag of image"); ?>
                            </div>   
                            <div class="ins"><br>
                                1.  On the sidebar, go to <b>Sample Templates</b><br><br>
                                2.  Click the <b>view</b>     icon in order to view the details of a certain template<br><br>
                                3.  Click <b>update</b>      icon in order to update a template<br><br>
                                4.  Click <b>delete</b>     icon in order to delete a template


                            </div><br>                                                       

      </div>
</div>
</div>



<div id="Create Sample Templates" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VIII. Create Sample Templates</div>
<div id=content1>
      <div class="articleContent">
                            <div class="ins"><br>
                                1.  On the sidebar, go to <b>Sample Templates</b><br><br>
                                2.  Click <b>Create Sample Templates</b> under the side navigation<br><br>
                                3.  Input a sample name and a description<br><br>
                                4.  Click <b>Create</b>
                            </div><br>                                
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_12.jpg', "alt tag of image"); ?>
                            </div>                                
      </div>
</div>
</div>




<div id="Add Analyses" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">IX. Add analyses</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_09.jpg', "alt tag of image"); ?>
                            </div>  
                            <br>
                            <p class="content"> An analysis could be added if and only if a sample was already added.</p><br>
                            <div class="medimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_10.jpg', "alt tag of image"); ?>
                            </div>                              
                            <div class="insmed">
                                <div class="alert alert-info">• If you are on the <b>manage <br> requests</b>, click on the <b>view</b>     icon <br> before the following steps</div>
                                1.  Upon creating a request, you can <br>immediately click <b>Add Analyses</b> <br>right under the request details<br> and samples<br><br>
                                2.  Check a <b>sample</b> to analyze<br><br>
                                3.  Choose a <b>test category</b> for the analysis<br><br>
                                4.  Select the <b>sample type</b><br><br>
                                5.  Select the <b>test name</b>  for analysis<br><br>
                                6.  Click <b>Create</b><br>

                            </div><br><br><br><br><br><br><br><br><br><br>                                                                      
      </div>
</div>
</div>

<div id="Add Package" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">X. Add Package</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="medimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_13.jpg', "alt tag of image"); ?>
                            </div>                              
                            <br><br><br><br><br><br>
                            <div class="insmed">
                                <div class="alert alert-info">• A package can only be added if a sample was already added.</div>
 
                                1.  Click the <b>Add package</b> beside the Add<br> Analysis button<br><br>
                                2.  Check a <b>sample</b> to analyze<br><br>
                                3.  Choose a <b>test category</b> for the analysis<br><br>
                                4.  Select the <b>sample type</b><br><br>
                                5.  Select the <b>test name</b>  you want to add<br><br>
                                6.  Click <b>Create</b>
                            </div><br><br><br><br><br><br><br><br>                               
                               
      </div>
</div>
</div>


<div id="Manage Package" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XI.  Manage Package</div>
<div id=content1>
      <div class="articleContent"><br>
                               
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_11.jpg', "alt tag of image"); ?>
                            </div>                               
                            <div class="ins"><br>
                                1.  On the sidebar, go to <b>Packages</b><br><br>
                                2.  Click the <b>view</b>     icon in order to view the details of a certain package<br><br>
                                3.  Click <b>update</b>      icon in order to update a package<br><br>
                                4.  Click <b>delete</b>     icon in order to delete a package<br><br>

                            </div><br> 
                               
      </div>
</div>
</div>


<div id="Create Package" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XII. Create Package</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_15.jpg', "alt tag of image"); ?>
                            </div>                               
                            <div class="ins"><br>
                                1.  Go to <b>Packages</b> located at the side navigation<br><br>
                                2.  Locate and click the <b>Create Package</b> right under the side navigation<br><br>
                                3.  Input the <b>package name</b> and <b>rate</b><br><br>
                                4.  Choose a <b>test category</b><br><br>
                                5.  Choose <b>sample type</b> from the dropdown<br><br>
                                6.  Click and select a test on the list that would be automatically generated<br><br>
                                7.  Review <b>test details</b><br><br>
                                8.  Click <b>Create</b>


                            </div><br>                           
      
      </div>
</div>
</div>


<div id="Manage Tests" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XIII. Manage Tests</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_16.jpg', "alt tag of image"); ?>
                            </div>                               
                            <div class="ins"><br>
                                1.  On the sidebar, go to <b>Tests/ Calibration</b><br><br>
                                2.  Click the <b>view</b>   icon in order to view the details of a certain test<br><br>
                                3.  Click <b>update</b>      icon in order to update a test<br><br>
                                4.  Click <b>delete</b>     icon in order to delete a test
                            </div><br>       
      </div>
</div>
</div>


<div id="Create Tests" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XIV. Create Tests</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_17.jpg', "alt tag of image"); ?>
                            </div>                               
                            <div class="ins"><br>
                                1.  Go to <b>Test/ Calibration</b> located at the side navigation<br><br>
                                2.  Locate and click the <b>Create Test</b> right under the side navigation<br><br>
                                3.  Input the <b>Test Name, Method, References, Fee</b> and <b>Cycle Time</b><br><br>
                                4.  Choose <b>Category, Sample Type</b> and <b>Lab</b> from the dropdown<br><br>
                                5.  Click <b>Create</b>

                            </div><br>                            
      </div>
</div>
</div>


<div id="Manage Order of Payments" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XV. Manage Order of Payments</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_18.jpg', "alt tag of image"); ?>
                            </div>                               
                            <div class="ins"><br>
                                1.  On the sidebar, go to <b>Order of Payments</b><br><br>
                                2.  This will provide the list of order of payments made.
                            </div><br>                               
      </div>
</div>
</div>


<div id="Create Order of Payment: Laboratory" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XVI. Create Order of Payment</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_19.jpg', "alt tag of image"); ?>
                            </div>                               
                            <div class="ins"><br>
                                1.  Go to <b>Order of Payment</b> located at the side navigation<br><br>
                                2.  Locate and click the <b>Create Order of Payment</b> right under the side navigation<br><br>
                                3.  Choose <b>Collection type</b> and <b>Date</b><br><br>
                                4.  Choose the <b>Customer</b> registered in the dropdown menu<br><br>
                                5.  Select the <b>Request</b> made<br><br>
                                6.  Input the <b>Purpose/ For payment of</b><br><br>
                                7.  Then, click <b>Create</b><br><br>
                           </div><br>                                 
      </div>
</div>
</div>


<div id="Laboratory Reports" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">XVII. Laboratory Reports</div>
<div id=content1>
      <div class="articleContent"><br>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_22.jpg', "alt tag of image"); ?>
                            </div>                               
                            <div class="ins"><br>
                                1.  On the sidebar, go to <b>Reports</b><br><br>
                                2.  This will provide to you the <b>Accomplishment Report</b> and <b>Customer Statistics</b><br><br>
                                3.  Click the <b>Accomplishment Report</b>  to view
                           </div><br>  
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_23.jpg', "alt tag of image"); ?>
                            </div>
                            <div class="ins"><br>
                                4.  It will show the summary of accomplishment made per year and laboratory<br><br>
                                5.  Click the <b>Customer Statistics</b>  to view

                           </div><br>                                   
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/lm/lm_24.jpg', "alt tag of image"); ?>
                            </div>                                                                               <div class="ins"><br>
                                6.  It will show the table of customers served per year<br><br>
                                7.  If necessary, the data from the Accomplishment Report and Customer Statistic can be <br>exported as an excel file format by clicking the <b>Export</b> link beside the navigation bar.


                           </div><br>             
      </div>
</div>
</div>


</div><!--lm-->








<!-- C A S H I E R I N G   M O D U L E-->
<div id="cm" class="content">

<div id="Manage Receipt" class="anchorLink"></div>
<div class="article">
<br><br><br>
<br><h1><b>Cashiering Module</b></h1><br>
<p class="content">Cashiering Module will only be available for <b>cahier</b> and <b>cashier user</b>.</p><br>
<div class="title">I. Manage Receipt</div><br>
<div id=content1>
      <div class="articleContent">
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/cm/cm_01.jpg', "alt tag of image"); ?>
                            </div><br>
                            <div class="ins">
                            1. Go to the <b>Receipt</b> tab of the cashiering module.<br><br>
                            2. This will automatically lead you to <b>Manage Receipt</b> page.<br><br>
                            3. Click the <b>update</b>    icon to update the receipt.<br><br>
                            4. Click the <b>view</b>   icon to view the receipt.<br><br>
                          <div class="bignote">
                          <div class="alert alert-info">
                            • <font color="gray">Gray</font> : Paid/Collected– receipts that are already paid or collected.<br>
                            • <font color="red">Red</font> : Cancelled– cancelled receipts
                            </div>
                          </div>
                            </div> <!--modlink-->
                            
                            <br>             
      </div>
</div>
</div>

<div id="Create Receipt" class="anchorLink"></div>
<div class="article"><br><br><br>
<div class="title">II. Create Receipt</div><br>
<div id=content1>
      <div class="articleContent">
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/cm/cm_02.jpg', "alt tag of image"); ?>
                            </div><br>
                            <div class="ins">
                            1. Go to the <b>Receipt</b> tab of the cashiering module.<br><br>
                            2. Click <b>Create Receipt</b> link found under Operations tab.<br><br>
                            3. Select the <b>Project</b> type.<br><br>
                            4. Choose the <b>Receipt Date</b>.<br><br>
                            5. Select the <b>Payment Mode</b>.<br><br>
                            6. Select the <b>Collection Type</b>.<br><br>
                            7. Select the <b>OR series</b>.<br><br>
                            8. Input the name of the <b>Payor</b>.<br><br>
                            9. Click <b>Create</b> when done.<br><br>
                            <div class="bignote">
                            <div class="alert alert-info">
                            • Note: OR series is automatically generated upon admin’s configuration.</div>
                            </div></div><br><br><br>
                             <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/cm/cm_03.jpg', "alt tag of image"); ?>
                            </div><br><br>
                            <div class="smallimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/cm/cm_04.jpg', "alt tag of image"); ?>
                            </div><br><br><br><br><br>
                            <div class="insSmall">
                            10. <b>Receipt #</b> will be given after creating the receipt.<br><br>
                            11. Click the <b>Add Collection</b> button to add for collection/s.<br><br>
                            12. Search for the <b>Request Reference Number</b> in the <br> dropdown menu.<br><br>
                           <div class="alert alert-info"> • Note: Request Reference Number won’t appear without any request at the Laboratory.<br></div>
                            13. <b>Amount</b> will automatically generate. <br><br>
                            14. Click <b>Create</b> when done.<br><br>
                            15. You can print the receipt created by <br>clicking the <b>Print</b> button.<br><br>
                            </div>
      </div>
</div>
</div>

<div id="Cancel Receipt" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">III. Cancel Receipt</div>
<div id=content1>
      <div class="articleContent">
                            <div class="smallimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/cm/cm_11.jpg', "alt tag of image"); ?>
                            </div> <br><br><br><br><br><br>
                            <div class="insSmall">
                            1. Go to the <b>Receipt</b> tab of the cashiering module.<br><br>
                            2. This will automatically lead you to <b>Manage Receipt</b> page.<br><br>
                            3. Click the <b>view</b>   icon to view the receipt.<br><br>
                            4. Click the <b>cancel button</b> beside the receipt number.<br><br>
                            5. Reason/s of cancelling the receipt should be provided.<br><br>
                            6. Click <b>OK</b>.<br><br><br><br>
                            </div> <!--modlink-->
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/cm/cm_12.jpg', "alt tag of image"); ?>
                            </div><br>
                            <br>             
      </div>
</div>
</div>

<div id="Manage Deposit" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">IV. Manage Deposit</div><br>
<div id=content1>
      <div class="articleContent">
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/cm/cm_07.jpg', "alt tag of image"); ?>
                            </div><br>
                            <div class="ins">
                            1. Go to the <b>Deposit</b> tab of the cashiering module.<br><br>
                            2. This will automatically lead you to <b>Manage Receipt</b> page.<br><br>
                            3. Click the <b>update</b>    icon to update the receipt.<br><br>
                            4. Click the <b>view</b>   icon to view the receipt.<br><br>
                            5. Click the <b>delete</b>   icon to delete the deposit.<br><br>
                            <div class="bignote">
                            <div class="alert alert-info">
                            • <font color="gray">Gray</font> : Paid/Collected– receipts that are already paid or collected.<br>
                            • <font color="red">Red</font> : Cancelled– cancelled receipts<br>
                            </div></div>
                            </div> <!--modlink-->
                            
                            <br>             
      </div>
</div>
</div>

<div id="Create Deposit" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">V. Create Deposit</div><br>
<div id=content1>
      <div class="articleContent">
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/cm/cm_10.jpg', "alt tag of image"); ?>
                            </div><br>
                            <div class="ins">
                            1. Go to the <b>Deposit</b> tab of the cashiering module.<br><br>
                            2. Click <b>Create Deposit</b> link found under Operations tab.<br><br>
                            3. Select <b>Deposit Type</b> in the drop down menu.<br><br>
                            4. Select the <b>OR series</b> available per request.<br><br>
                            5. <b>Start OR</b> will automatically generate.<br><br>
                            6. <b>End OR</b> can be selected in the drop down menu. <br><br>
                            <div class="bignote">
                            <div class="alert alert-info">
                            • Note: User can also initialize End OR by checking the box beside the <br> Start OR drop down, just be sure that the series is still right.
                            </div></div><br><br><br><br>
                            7. Select <b>Deposit Date</b><br><br>
                            8. <b>Amount</b> will automatically generate upon selecting for the OR series<br><br>
                            9. Click <b>Create</b> when done. <br><br>

                            </div> <!--modlink-->

      </div>
</div>
</div>

<div id="Cash Receipt Record" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VI. Cash Receipt Record</div><br>
<div id=content1>
      <div class="articleContent">
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/cm/cm_09.jpg', "alt tag of image"); ?>
                            </div><br>
                            <div class="ins">
                            1. Go to the <b>Deposit</b> tab of the cashiering module.<br><br>
                            2. Click <b>Cash Receipt Record</b> link found under Operations tab.<br><br>
                            3. Navigate into the page by selecting the <b>month</b> and <b>year</b>.<br><br>
                            4. Records of the cash receipts will be shown in the table.<br><br>
                            <div class="bignote">
                            <div class="alert alert-info">
                            • <font color="gray">Gray</font> : Paid/Collected– receipts that are already paid or collected.<br>
                            • <font color="red">Red</font> : Cancelled– cancelled receipts<br>
                            </div></div>
                            </div> <!--modlink-->
                            
                            <br>             
      </div>
</div>
</div>


<div id="Report of Collection & Deposits" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VII. Report of Collection &amp; Deposits</div><br>
<div id=content1>
      <div class="articleContent">
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/cm/cm_05.jpg', "alt tag of image"); ?>
                            </div><br>
                            <div class="ins">
                            1. Go to the <b>Receipt</b> tab of the cashiering module.<br><br>
                            2. Click <b>Report of Collection</b> link found under Operations tab.<br><br>
                            3. Navigate into the page by selecting the <b>month</b> and <b>year</b>.<br><br>
                            4. Results and total of the collections will be shown in the table.<br><br>
                            5. You can print the table of collections by clicking the <b>Print</b> button.<br><br>
                            <div class="bignote">
                            <div class="alert alert-info">
                            • <font color="gray">Gray</font> : Paid/Collected– receipts that are already paid or collected.<br>
                            • <font color="red">Red</font> : Cancelled– cancelled receipts<br>
                            </div></div>
                            </div> <!--modlink-->
                            
                            <br>             
      </div>
</div>
</div>


<div id="Create Order of Payment: Cashiering" class="anchorLink"></div>
<div class="article">
<br><br><br>
<div class="title">VIII. Create Order of Payment</div><br>
<div id=content1>
      <div class="articleContent">
                              <div class="ins"><font color="red">ERROR 403 CASHIER IS NOT AUTHORIZED TO PERFORM THIS ACTION</font></div>
                              
      </div>
</div>
</div>
</div><!--cm-->








<!-- A C C O U N T I N G   M O D U L E-->
<div id="am" class="content">


<div id="Manage Order of Payments" class="anchorLink"></div>
<div class="article"><br><br><br>
<br><h1><b>Accounting Module</b></h1><br>
<p class="content">Accounting Module will only be available for <b>accounting user</b> and <b>accounting manager</b>.</p><br>
<div class="title">I. Manage Order of Payments</div><br>
<div id=content1>
      <div class="articleContent">
                           <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/am/am_01.jpg', "alt tag of image"); ?>
                            </div><br>
                            <div class="ins">
                            1. Go to the <b> Order of Payment</b> tab of the accounting module.<br><br>
                            2. This will automatically lead you to <b>Manage Order of Payments</b> page.<br><br>
                            3. Click the <b>update</b>    icon to update the receipt.<br><br>
                            </div>
      </div>
</div>
</div>

<div id="Create Order of Payment: Accounting" class="anchorLink"></div>
<div class="article"><br><br><br>
<div class="title">II. Create Order of Payment</div><br>
<div id=content1>
      <div class="articleContent">
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/am/am_02.jpg', "alt tag of image"); ?>
                            </div><br>
                            <div class="ins">
                            1. Go to the <b>Order of Payment</b> tab of the cashiering module.<br><br>
                            2. Click <b>Create Order of Payment</b> link found under Operations tab.<br><br>
                            3. Select the <b>Collection type</b>.<br><br>
                            4. Choose the <b>Date</b>.<br><br>
                            5. Input <b>Customer Name</b>.<br><br>
                            6. Input customer’s <b>Address</b>.<br><br>
                            7. Input the <b>Purpose</b>.<br><br>
                            8. Click <b>Create</b> when done.<br><br>
                            </div>
                            <div class="bigimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/am/am_03.jpg', "alt tag of image"); ?>
                            </div><br><br>
                            <div class="smallimg">
                              <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/am/am_04.jpg', "alt tag of image"); ?>
                            </div><br><br><br><br><br>
                            <div class="insSmall">
                            10. <b>Transaction Num</b> will be given after <br>creating the order of payment.<br><br>
                            11. Click the <b>Add Item</b> button to add for item/s.<br><br>
                            12. Search for the <b>Request Reference</b> in the <br> dropdown menu.<br><br>
                           <div class="alert alert-info"> • Note: Request Reference won’t appear <br> without any request at the Laboratory.<br></div>
                            13. <b>Amount</b> will automatically generate. <br><br>
                            14. Click <b>Create</b> when done.<br><br>
                            15. You can print the receipt created by clicking the <b>Print</b> button.<br><br>
                            </div>
      </div>
</div>
</div>

</div><!--am-->








