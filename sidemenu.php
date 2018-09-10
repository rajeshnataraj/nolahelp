<?php include("commonlink.php") ?>
<link rel="stylesheet" href="<?php echo $pathval ?>custom/jquery.treeView.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $pathval ?>custom/jquerysctipttop.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $pathval ?>custom/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $pathval ?>custom/jquery.treeView.js"></script>
<div class="leftNav">
   <!-- custome menu start-->
   <div class="treeview-container" id="sub-header">
      <div class="head-txt" id="titlehead"></div>
      <ul class="treeview">
         <li><a class="" href="<?php echo $pathval; ?>Welcome.php">Welcome</li>
         </a>
         <li><a href="#"> About </a></li>
         <li><a href="#"> Pitsco Webinars </a></li>
         <li><a class="" href="<?php echo $pathval; ?>FAQs.php">FAQs</a> </li>
         <li></span><a class="rtIn" href="<?php echo $pathval; ?>Dashboard.php">Dashboard</a> </li>
         <li class="contains-items ">
            <a class="rtIn" href="<?php echo $pathval; ?>Library.php">Library</a>
            <ul style="display: none;" id="libraryMain">
               <li><a  class="rtIn" href="<?php echo $pathval; ?>Library/Missions.php">Missions</a> </li>
               <li>
                  <a href="<?php echo $pathval; ?>Library/Modules.php">Modules </a>
                  <ul style="display: none;" id="librarySub1">
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Library/Modules/Graded_Not-Graded.php">Graded/Not Graded</a> </li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Library/Modules/Extend-Content.php">Extend Content</a> </li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Library/Modules/Robo-Review-Game.php">Robo-Review Game</a> </li>
                  </ul>
               </li>
               <li><a  class="rtIn" href="<?php echo $pathval; ?>Library/IPLs.php">IPLs</a> </li>
               <li>
                  <a  href="<?php echo $pathval; ?>Library/Math-Modules.php">Math Modules </a>
                  <ul style="display: none;" id="librarySub2">
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Library/Math-Modules/Graded_ Not-Graded-math.php">Graded/Not Graded</a> </li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Library/Math-Modules/Extend -content-math.php">Extend Content</a> </li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Library/Math-Modules/Robo-Review-Game-math.php">Robo-Review Game</a> </li>
                  </ul>
               </li>
               <li><a  href="<?php echo $pathval; ?>Library/Activities.php">Activities</a></li>
               <li><a  href="<?php echo $pathval; ?>Library/Quests.php">Quests</a> </li>
               <li><a  href="<?php echo $pathval; ?>Library/Custom-Content.php">Custom Content</a> </li>
               <li><a  href="<?php echo $pathval; ?>Library/Expeditions.php">Expeditions</a></li>
               <li><a  href="<?php echo $pathval; ?>Library/Rubric.php">Rubric</a> </li>
            </ul>
         </li>
         <li class="contains-items ">
            <a class="rtIn" href="<?php echo $pathval; ?>Users.php">Users</a>
            <ul style="display:none" id="usersMenu">
               <li><a class="rtIn" href="<?php echo $pathval; ?>User/Create-New-Students.php">Create New Students</a> </li>
               <li><a class="rtIn" href="<?php echo $pathval; ?>User/Import-Students.php">Import Students</a> </li>
            </ul>
         </li>
         <li class="contains-items ">
            <a class="rtIn" href="<?php echo $pathval; ?>Reports.php">Reports</a>
            <ul style="display:none" id="reportsMain">
               <li class="contains-items">
                  <a class="rtIn" href="<?php echo $pathval; ?>Reports/Classroom-Management.php">Classroom Management</a>
                  <ul style="display: none;" id="reportsSub1">
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Classroom-Management/Student-Passwords.php">Student Passwords</a> </li>
                     <li>
                        <a class="rtIn" href="<?php echo $pathval; ?>Reports/Classroom-Management/Individual-Student-Schedule.php">Individual Student Schedule</a>
                        <ul style="display: none;" id="reportsSub1Sub2">
                           <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Classroom-Management/Individual-Student-Schedule/Master-Schedule-Export.php">Master Schedule Export</a> </li>
                        </ul>
                     </li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Classroom-Management/Science-Schedule.php">Science Schedule</a> </li>
                  </ul>
               </li>
               <li class="contains-items">
                  <a class="rtIn" href="<?php echo $pathval; ?>Reports/Grade.php">Grade</a>
                  <ul style="display: none;" id="reportsSub2">
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Grade/Class-Schedule-Scores.php">Class Schedule Scores</a> </li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Grade/Individual-Grades.php">Individual Grades</a> </li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Grade/Class-Grades.php">Class Grades</a></li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Grade/Individual-Assignment-Grades.php">Individual Assignment Grades</a></li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Grade/Assessment-Report.php">Assessment Report</a> </li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Grade/Pre_Post-Report.php">Pre/Post Report</a></li>
                  </ul>
               </li>
               <li class="contains-items">
                  <a class="rtIn" href="<?php echo $pathval; ?>Reports/Questions-Answers.php">Questions and Answers</a>
                  <ul style="display: none;" id="reportsSub3">
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Questions-Answers/Individual-IPL-Question.php">Individual IPL Question</a></li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Questions-Answers/IPL-Analytics.php">IPL Analytics</a>  </li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Questions-Answers/IPL-Progress-Summary.php">IPL Progress Summary</a></li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Questions-Answers/Knowledge-Survey.php">Knowledge Survey</a></li>
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Reports/Questions-Answers/Assessment-Question.php">Assessment Question</a> </li>
                  </ul>
               </li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/Grade-Book.php">Grade Book</a></li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/Student-Progress.php">Student Progress</a></li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/Correlation-Report.php">Correlation Report</a></li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/Best-Fit-Report.php">Best Fit Report</a></li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/Standards-Progress.php">Standards Progress</a></li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/Class-Standards.php">Class Standards</a></li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/Class-Progress-Report.php">Class Progress Report</a></li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/Open-Response.php">Open Response</a></li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/Completion-Report.php">Completion Report</a></li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/AssessmentReport.php">Assessment Report</a></li>
               <li class=""><a class="rtIn" href="<?php echo $pathval; ?>Reports/Rubric-Report.php">Rubric Report</a></li>
            </ul>
         </li>
         <li class="contains-items ">
            <a class="rtIn" href="<?php echo $pathval; ?>Tools.php">Tools</a>
            <ul style="display:none" id="toolsMenu">
               <li><a class="rtIn" href="<?php echo $pathval; ?>Tools/Messages.php">Messages</a></li>
               <li><a class="rtIn" href="<?php echo $pathval; ?>Tools/Calendar.php">Calendar</a> </li>
               <li><a class="rtIn" href="<?php echo $pathval; ?>Tools/My-Tags.php">My Tags</a> </li>
               <li><a class="rtIn" href="<?php echo $pathval; ?>Tools/Asset.php">Asset</a> </li>
               <li><a class="rtIn" href="<?php echo $pathval; ?>Tools/My-Information.php">My Information</a></li>
            </ul>
         </li>
         <li class="contains-items ">
            <a class="rtIn" href="<?php echo $pathval; ?>Assessment.php">Assessment</a>
            <ul style="display:none" id="assMenu">
               <li><a class="rtIn" href="<?php echo $pathval; ?>Assessment/Creating-an-Assessment.php">Creating an Assessment</a></li>
               <li><a class="rtIn" href="<?php echo $pathval; ?>Assessment/Assigning-an-Assessment.php">Assigning an Assessment</a> </li>
               <li><a class="rtIn" href="<?php echo $pathval; ?>Assessment/Question-Bank.php">Question Bank</a> </li>
            </ul>
         </li>
         <li class="contains-items ">
            <a class="rtIn" href="<?php echo $pathval; ?>Class.php">Class</a>
            <ul style="display:none" id="classMain">
               <li><a class="rtIn" href="<?php echo $pathval; ?>Class/Schedule-Types.php">Schedule Types</a></li>
               <li>
                  <a class="rtIn" href="<?php echo $pathval; ?>Class/Creating-New-Class.php">Creating a New Class</a>
                  <ul style="display: none;" id="classSub1">
                     <li><a class="rtIn" href="<?php echo $pathval; ?>Class/Creating-a-New-Class/Scheduling-an-IPL-Series.php">Scheduling an IPL Series</a></li>
                     <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Creating-a-New-Class/Scheduling-Modules.php">Scheduling Modules</a></li>
                     <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Creating-a-New-Class/Scheduling-Whole-Class-Assignment.php">Scheduling a Whole Class Assignment</a></li>
                     <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Creating-a-New-Class/Scheduling-Quests.php">Scheduling Quests</a></li>
                     <li>
                        <a class="rtIn" href="<?php echo $pathval; ?>Class/Creating-a-New-Class/Scheduling-Pitsco-Science.php">Scheduling Pitsco Science</a>
                        <ul style="display: none;" id="classSub1sub1">
                           <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Creating-a-New-Class/Scheduling-Pitsco-Science/Creating-Dyad-Schedule.php">Dyad Schedule</a></li>
                           <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Creating-a-New-Class/Scheduling-Pitsco-Science/Creating-Triad-Schedule.php">Triad Schedule</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li>
                  <a class="rtIn" href="<?php echo $pathval; ?>Class/Class-Details.php">Class Details</a>
                  <ul style="display: none;" id="classSub2">
                     <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Class-Details/View_Edit-Details.php">View/Edit Details</a></li>
                     <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Class-Details/Manage-People.php">Manage People</a></li>
                     <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Class-Details/View_Edit-Schedule.php">View/Edit Schedule</a></li>
                     <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Class-Details/View-Class-Calendar.php">View Class Calendar</a></li>
                     <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Class-Details/Delete-Class.php">Delete Class</a></li>
                     <li> <a class="rtIn" href="<?php echo $pathval; ?>Class/Class-Details/Unlock.php">Unlock</a> </li>
                  </ul>
               </li>
            </ul>
         </li>
         <li class="contains-items ">
            <a class="rtIn" href="<?php echo $pathval; ?>Student-Interface.php">Student Interface</a>
            <ul style="display:none" id="StudentMain">
               <li><a class="rtIn" href="<?php echo $pathval; ?>Student-Interface/Assignments.php">Assignments</a> </li>
               <li><a class="rtIn" href="<?php echo $pathval; ?>Student-Interface/My-Progress.php">My Progress</a> </li>
               <li><a class="rtIn" href="<?php echo $pathval; ?>Student-Interface/Library.php">Library</a> </li>
               <li><a class="rtIn" href="<?php echo $pathval; ?>Student-Interface/Tools.php">Tools</a> </li>
            </ul>
         </li>
         <li><a class="rtIn" href="<?php echo $pathval; ?>Synergy-Modules.php">Synergy ITC - Modules: Getting Started</a> </li>
         <li><a class="rtIn" href="<?php echo $pathval; ?>Synergy-ITC-SecurityStatement.php">Synergy ITC Security Statement</a> </li>
         <li><a class="rtIn" href="<?php echo $pathval; ?>Contact-Customer-Support.php">Contact Customer Support</a> </li>
         <li><a class="rtIn" href="<?php echo $pathval; ?>Videos.php">Synergy ITC Videos</a> </li>
         <li><a class="rtIn" href="<?php echo $pathval; ?>Webinars.php">Pitsco Webinars</a></li>
      </ul>
   </div>
   <!-- custome menu end-->
   <script>
      $('.treeview').treeView();
   </script>
   <style>
  .active { font-weight: bold !important; }
  /*.zopim{
    display: none !important;
  }*/
  </style>
</div>
