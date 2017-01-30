$(document).ready(function() {

    var delFunction = function() {
        var $this = $(this);
        var delUrl = $this.attr('link');

        $.ajax({
            url: delUrl,
            type: 'GET',
            success: function(data) {
                $this.closest("li").remove();
            }
        });
    };


    $('.add-record').click(function($event) {
        $event.preventDefault();

        var $this = $(this);
        var addUrl = $this.attr('link');
        var projectID = $this.attr('link-data');

        var $inputTitle = $this.parent().siblings(".input-title");
        var $inputContent = $this.parent().siblings(".input-text");

        var titleContent = $inputTitle.val();
        var textContent = $inputContent.val();

        $.ajax({
            url: addUrl,
            type: 'POST',
            data: { title: titleContent, text: textContent, projectId: projectID },
            success: function(data) {
                var delLink = data.delLink;

                $elem = $("<li class='panel panel-info'>" +
                    "<div class='panel-heading'>" + titleContent + "<i class='icon-remove2 right del-record' link='" + delLink + "'></i></div>" +
                    "<div class='panel-body'>" + textContent + "</div>" +
                    "</li>"
                );

                $ulParent = $this.parent().parent().siblings("ul");

                $ulParent.append($elem);
                $ulParent.sortable("refresh");

                var $i = $($($elem.children().get(0)).children().get(0));
                $i.click(delFunction);
            }
        });

        $inputTitle.val("");
        $inputContent.val("");
    });

    $('.del-record').click(delFunction);

/* -------------------help-sidebar--------------------------------------- */
$("#fwp-sidebar").hide();
$(".fwp-open-help").click(
    function(){
        if($("#fwp-content").hasClass('col-md-12')){
            $("#fwp-content").removeClass().addClass('col-md-10 fixed');
            $("#fwp-sidebar").removeClass().addClass('col-md-2').show();
        } else {
            $("#fwp-sidebar").removeClass().hide();
            $("#fwp-content").removeClass().addClass('col-md-12');
        }
    }
);
/* ---------------remove-------------------- */
$( ".icon-remove2" ).click(
    function(){
    $(this).parents("li.ui-sortable-handle").remove()
    }
 );
/* ---------------date-picker-------------------- */

$('.input-group.date').datepicker({
    format: "dd/mm/yyyy",
    todayBtn: true,
    language: "fr",
    todayHighlight: true,
    orientation: "top left"

    });


 /* --------------------color-picker---------------------------- */

$('.colorselector').colorselector();


 /* --------------------drag&drop---------------------------- */

 
$( ".sortable" ).sortable({ axis: "y" });

// getter
var axis = $( ".sortable" ).sortable( "option", "axis" );
// setter
$( ".sortable" ).sortable( "option", "axis", "y" );
 

 /* --------------------checkboxes---------------------------- */

var checkAll = $('.checkbox input.all');
var checkboxes = $('.checkbox input.check');

$('.checkbox input').iCheck();


checkAll.on('ifChecked ifUnchecked', function(event) {        
    if (event.type == 'ifChecked') {
        checkboxes.iCheck('check');
    } else {
        checkboxes.iCheck('uncheck');
    }
});

checkboxes.on('ifChanged', function(event){
    if(checkboxes.filter(':checked').length == checkboxes.length) {
        checkAll.prop('checked', 'checked');
    } else {
        checkAll.removeProp('checked');
    }
    checkAll.iCheck('update');
});

 /* --------------------trend---------------------------- */

   $( document.body ).on( 'click', ' #trend .dropdown-menu li', function( event ) {

      var $iconTrend = $( event.currentTarget );

      $iconTrend.closest( '.dropdown' )
         .find( '.dropdown-toggle' ).html( $iconTrend.html() )
            .end()
         .children( '.dropdown-toggle' ).dropdown( 'toggle' );

       var value = $iconTrend.find("span").attr('class');
       $iconTrend.closest('.dropdown').find('input').val(value);

      return false;

   });

});