

/*window.onload = function () {
    var currentYear = (new Date()).getFullYear();
    for (var i = 2020; i <= currentYear; i++) {
        var option = document.createElement("OPTION");
        option.innerHTML = i;
        option.value = i;
        option.onclick=()=>{
            console.log(option);
        }
        ddlYears.appendChild(option);
    }
};*/


//var selected_value = ddlYears.options[ddlYears.selectedIndex].value;
//console.log(selected_value);

//console.log(ddlYears.children);
//var opt = document.getElementById("opt");
//console.log(opt.parentElement[1]);
var ddlYears = document.getElementById("ddlYears");
let selectedItem = ddlYears.options[0].value;

$(document).ready(function() {
    $("select.selectVal").change(function() {
        selectedItem = $(this).children("option:selected").val();
        //console.log(selectedItem );
      });
  });
  //console.log(selectedItem );
  

let message = document.querySelector('.month-message');
let event = document.querySelector('.month-event');
let selector = document.querySelectorAll('.selector');
//console.log(selector);
selector.forEach((e)=>{
    e.onclick=()=>{
        //e.preventDefault();
        //console.log("hi");
        message.style.display="none";
        event.style.display="block";
        //console.log(month);
        var mon = e.children[0].value;
        //console.log(mon);
        $.ajax({
            url: "../EVENTS/monthlyEventData.php",
            type: "POST",
            data: {'month_value' : mon,'year_value':selectedItem},
            success: function(data){
                console.log('hi');
                $("#monthly-event").html(data);
            }
        }); 
    }
})



const toggle = document.querySelector('.toggle');
const cal = document.querySelector('.cal');
const options = {
    root: null, 
    threshold: 0.6,  
    rootMargin: "-140px",
  };


const obs = new IntersectionObserver((entries,obs)=>{
    entries.forEach(entry =>{
        //console.log(entry);
        if(entry.isIntersecting)
        {
            cal.classList.add('active');
        }
        else{
            cal.classList.remove('active');

        }
        
    })
},options);
obs.observe(cal);
toggle.onclick = function(){
    console.log('ok');
   cal.classList.toggle('active');
}