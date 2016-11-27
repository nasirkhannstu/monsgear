(function ($) {

    Drupal.behaviors.commentNotify = {
        attach: function (context) {
            $('#edit-notify', context)
                .bind('change', function() {
                    $('#edit-notify-type', context)
                        [this.checked ? 'show' : 'hide']()
                        .find('input[type=checkbox]:checked').attr('checked', 'checked');
                })
                .trigger('change');
        }
    }

})(jQuery);
;
(function ($) {
    var jumpToTop = function() {
        var new_position = $('.taxonomyBrowse').offset();
        window.scrollTo(new_position.left, new_position.top - 50);
        return false;
    }

    var finishUpdateMnsview = function(data) {
        $("div.loading-notice").remove();
        $("#mnsview-list").removeAttr('style');
    }

    var ajaxUpdate = function() {
        // This function will get executed after the ajax request is completed successfully
        var updateMnsview = function(data) {
            $("#mnsview-sort-switcher li").each(function() { $(this).removeClass('active') });
            $("#mnsview-sort-switcher li:nth-child("+data.block_id+")").addClass('active');
            $('#mnsview-list').html(data.view);
            $('#mnsview-list .pager a').click(ajaxUpdate);
            if ($(this).attr('data') && $(this).attr('data').match('pager=1')) {
                jumpToTop();
            }
        }

        var data = '';
        var parentClass = $(this).parent().attr('class');
        if (parentClass && parentClass.match('pager')) {
            data = data + 'pager=1';
        }

        $("div.loading-notice").remove();
        $(this).closest('.mnsTabs').after('<div class="loading-notice rotate-forever"><svg width="15" height="15" viewBox="0 0 100 100"><path fill="#005599" d="M80.1,19.9C72.4,12.3,61.7,7.5,50,7.5C31.8,7.5,16.2,19,10.2,35.1l10,3.7C24.7,26.7,36.3,18.1,50,18.1c8.8,0,16.8,3.6,22.5,9.3L60.6,39.4h31.9V7.5L80.1,19.9zM50,81.9c-8.8,0-16.8-3.6-22.5-9.3l11.9-11.9H7.5v31.9l12.5-12.5c7.7,7.7,18.3,12.5,30.1,12.5c18.2,0,33.8-11.5,39.8-27.6l-10-3.7C75.3,73.3,63.7,81.9,50,81.9z"/><image width="15" height="15" src="/images/fallback/update.png"/></svg> <span>Loading...</span></div>');
        $("#mnsview-list").fadeTo(0, 0.2);
        var url = (this.href.indexOf('?') > 0) ? this.href + '&ajax=1' : this.href + '?ajax=1';

        $.ajax({
            type:     'POST',
            url:      url,                  // Which url should be handle the ajax request. This is the url defined in the <a> html tag
            complete: finishUpdateMnsview,
            success:  updateMnsview,        // The js function that will be called upon success request
            dataType: 'json',               // Define the type of data that is going to get back from the server
            data:     data                  // Pass a key/value pair
        });

        return false; // return false so the navigation stops here and not continue to the page in the link
    }

    var preloadedUpdate = function() {
        var url_parts = this.href.split('/').reverse();
        var view_name = url_parts[2];
        var block_id  = url_parts[1];
        var tab_index = url_parts[0];

        // update view list
        $("div.mnsview-preloaded-view").each(function() { $(this).removeClass('active') });
        $('#mnsview-'+view_name+'-'+block_id).addClass('active');
        // update tabs
        $("#mnsview-sort-switcher li").each(function() { $(this).removeClass('active') });
        $("#mnsview-sort-switcher li:nth-child("+tab_index+")").addClass('active');

        return false;
    }

    Drupal.behaviors.mnsview = {
        attach: function(context, settings) {
            $('a.mnsview-sort-link:not(.mnsview-sort-link-processed)', context).click(ajaxUpdate);
            $('a.mnsview-preloaded-sort-link:not(.mnsview-preloaded-sort-link-processed)', context).click(preloadedUpdate);
            $('#mnsview-list .pager a', context).click(ajaxUpdate);
        }
    }
})(jQuery);
;
