//window.location="../ADMIN/event_register.php";





var ddlYears = document.getElementById("ddlYears");
//let selectedItem = ddlYears.options[0].value;
let selectedItem = 0;
$(document).ready(function() {
    $("select.selectVal").change(function() {
        selectedItem = $(this).children("option:selected").val();
        console.log(selectedItem );
        window.location=`../MEMBERS/member.php#${selectedItem}`;
      });
  });
  
