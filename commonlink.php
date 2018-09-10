<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

</body>
<script type="text/javascript">
  $(function()
  {
      var url = window.location.href;

      $("#sub-header a").each(function()
      {
          if(url == (this.href)) {
            var headval = $(this).html();     
              $("#titlehead").html(headval);
              $(this).closest("li a").addClass("active");
              $(this).parent('li').parent('ul').parent('li').addClass('items-expanded');
              $(this).parent('li').parent('ul').parent('li').parent('ul').parent('li').addClass('items-expanded');
              $(this).parent('li').parent('ul').parent('li').parent('ul').parent('li').parent('ul').parent('li').addClass('items-expanded');
              //$(this).closest("ul li").addClass("items-expanded");
          }
      });
  });

  $( document ).ready(function()
  {

    var expval = $('#expval').val();
    if(expval == 'libraryMain')
    {
      $("#libraryMain").css('display','block');
    }
    else if (expval == 'librarySub1') {
      $("#libraryMain").css('display','block');
      $("#librarySub1").css('display','block');
    }
    else if (expval == 'librarySub2') {
      $("#libraryMain").css('display','block');
      $("#librarySub2").css('display','block');
    }
    else if (expval == 'usersMenu') {
      $("#usersMenu").css('display','block');
    }
    else if (expval == 'reportsMain') {
      $("#reportsMain").css('display','block');
    }
    else if (expval == 'reportsSub1') {
      $("#reportsMain").css('display','block');
      $("#reportsSub1").css('display','block');
    }
    else if (expval == 'reportsSub1Sub2') {
      $("#reportsMain").css('display','block');
      $("#reportsSub1").css('display','block');
      $("#reportsSub1Sub2").css('display','block');
    }
    else if (expval == 'reportsSub2') {
      $("#reportsMain").css('display','block');
      $("#reportsSub2").css('display','block');
    }
    else if (expval == 'reportsSub3') {
      $("#reportsMain").css('display','block');
      $("#reportsSub3").css('display','block');
    }
    else if (expval == 'toolsMenu') {
      $("#toolsMenu").css('display','block');
    }
    else if (expval == 'assMenu') {
      $("#assMenu").css('display','block');
    }
    else if (expval == 'classMain') {
      $("#classMain").css('display','block');
    }
    else if (expval == 'classSub1') {
      $("#classMain").css('display','block');
      $("#classSub1").css('display','block');
    }
    else if (expval == 'classSub1sub1') {
      $("#classMain").css('display','block');
      $("#classSub1").css('display','block');
      $("#classSub1sub1").css('display','block');
    }
    else if (expval == 'classSub2') {
      $("#classMain").css('display','block');
      $("#classSub2").css('display','block');
    }
    else if (expval == 'StudentMain') {
      $("#StudentMain").css('display','block');
    }
});

</script>
<input type="hidden" id="hidval" value="1" />
</html>
<?php
session_start();
$actual_link = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$stridet = explode("/",$actual_link);
$coutval = count($stridet);
$pathval = "";
if($coutval == 2)
{
  $pathval = "";
}
else if($coutval == 3)
{
  $pathval = "../";
}
else if($coutval == 4)
{
  $pathval = "../../";
}
else if($coutval == 5)
{
    $pathval = "../../../";
}
else
{
  $pathval = "";
}
?>
