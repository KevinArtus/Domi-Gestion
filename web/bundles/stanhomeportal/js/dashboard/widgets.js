var callbackChange = function(event, ui) {
    var $widget = ui.$player.closest('.gs-w');

    var id = $widget.attr("data-id");
    var row = $widget.attr("data-row");
    var col = $widget.attr("data-col");
    var sizeX = $widget.attr("data-sizex");
    var sizeY = $widget.attr("data-sizey");

    var url = Routing.generate('portal_dashboard_widget_position', { id: id, col: col, row: row, length: sizeX, height: sizeY });
    $.get(url);
};

$(function() {
    var gridster = $(".gridster").gridster({
        widget_selector: ".boxWidget",
        widget_margins: [10, 10],
        widget_base_dimensions: [340, 150],
		resize: {
            enabled: true,
			stop: callbackChange
        },
		draggable: {
			stop: callbackChange
		}
    }).data('gridster');

    $(".boxWidget").each(function(){
        var $widget = $(this);

        var id = $widget.data('id');
        var url = Routing.generate('portal_dashboard_widget', { id: id });

        $.get(url, function(data) {
            $widget.find('.widgetContent').html(data);
            $widget.fadeIn();
        });
    });

    $(".boxWidget .btn-refresh, .boxWidget .btn-settings").click(function (e) {
        e.preventDefault();
        var $btn = $(this);
        var $widget = $btn.parents('.boxWidget');

        $.get($btn.attr('href'), function(data) {
            var $widgetContent = $widget.find('.widgetContent');

            $widgetContent.fadeOut(function() {
                $widgetContent.html(data);
                $widgetContent.fadeIn();
            });
        });
    });

    $(".boxWidget .btn-delete").on('click', function(e){
        e.preventDefault();
        var $btn = $(this);
        var $widget = $btn.parents('.boxWidget');

        $.get($btn.attr('href'), function() {
            $widget.fadeOut(function() {
                gridster.remove_widget($widget);
            })
        });
    });
});