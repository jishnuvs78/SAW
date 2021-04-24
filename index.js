
function redirect(){
  alert(9118);
  window.location.href="http://localhost/demo/SAW/login.php";
  return false;
}


// function loadbodyDivId(){
//   // alert(document.getElementById('lll').value);
//   // alert($('#lll').val());
// //  $('#bodyDivId').empty().append('ABCD');
//
//   $.ajax({url: "demo.txt", success: function(result){
//    $("#bodyDivId").empty().append(result);
//  }});
// alert(9);
//   return false;
// }

// $('[data-bs-toggle="tab"]').click(function(e) {
//         e.preventDefault();
//         $this = $(this);
//         var loadurl = $(this).attr('href');
//         var targ = $(this).attr('data-bs-target');
//         $(targ).load(loadurl, function(){
//             $this.tab('show');
//         });
//     });

$(document).ready(function () {
$('[data-bs-toggle="tab"]').click(function(e) {
        e.preventDefault();
        $this = $(this);
        var loadurl = $(this).attr('href');
        var targ = $(this).attr('data-bs-target');
        $(targ).load(loadurl, function(){
            $this.tab('show');
            return false;
        });
    });
});
