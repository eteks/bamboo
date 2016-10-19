$(document).ready(function() {
	
	 // Price filtering
    $(document).on('mouseup','.addui-slider-handle',function() {
        // var price_range =  $('.addui-slider-input').val().split(',');
        // var start_value = parseFloat(price_range[0]).toFixed(2);
        // var end_value = parseFloat(price_range[1]).toFixed(2);
        var cat_id = $('#category_id').val();
        var sort_val = $('.sort_products').val();
        var sub_categories_filter_length = $('.sub_categories_filter').length;
        var recipients_filter_length = $('.recipients_filter').length;
        if(sub_categories_filter_length > 0 && recipients_filter_length > 0) {
            var sub_id = $('.sub_categories_filter').find('a').data('id');
            var rec_id = $('.recipients_filter').find('a').data('id');
            var datavalues = {sub_id: sub_id ,cat_id: cat_id , rec_id : rec_id, sort:sort_val};
        }
        else if(sub_categories_filter_length > 0) {
            var sub_id = $('.sub_categories_filter').find('a').data('id');
            var datavalues = {sub_id: sub_id ,cat_id: cat_id , sort:sort_val};
        }
        else if(recipients_filter_length > 0) {
            var rec_id = $('.recipients_filter').find('a').data('id');
            var datavalues = {cat_id: cat_id , rec_id : rec_id, sort : sort_val};
        }
        else {
            var datavalues = { cat_id: cat_id , sort : sort_val};
        }   
        jQuery.ajax({
            type: "POST",
            url: "../ajax_controller/filtering_product",
            data: datavalues,
            success: function(res) {
                if (res)
                {
                    $('.product-list').html(res);
                }
            }
        });
    });

    // Sort filtering
    $('.sort_products').on('change',function() {
        // var price_range =  $('#slider-label').val().split(',');
        // var start_value = parseFloat(price_range[0]).toFixed(2);
        // var end_value = parseFloat(price_range[1]).toFixed(2);
        var cat_id = $('#category_id').val();
        var sort_val = $(this).val();
        var sub_categories_filter_length = $('.sub_categories_filter').length;
        var recipients_filter_length = $('.recipients_filter').length;
        if(sub_categories_filter_length > 0 && recipients_filter_length > 0) {
            var sub_id = $('.sub_categories_filter').find('a').data('id');
            var rec_id = $('.recipients_filter').find('a').data('id');
            var datavalues = {sub_id: sub_id ,cat_id: cat_id , rec_id : rec_id, sort:sort_val};
        }
        else if(sub_categories_filter_length > 0) {
            var sub_id = $('.sub_categories_filter').find('a').data('id');
            var datavalues = {sub_id: sub_id ,cat_id: cat_id , sort:sort_val};
        }
        else if(recipients_filter_length > 0) {
            var rec_id = $('.recipients_filter').find('a').data('id');
            var datavalues = {cat_id: cat_id , rec_id : rec_id, sort : sort_val};
        }
        else {
            var datavalues = { cat_id: cat_id , sort : sort_val};
        }   
        jQuery.ajax({
            type: "POST",
            url: "../ajax_controller/filtering_product",
            data: datavalues,
            success: function(res) {
                if (res)
                {
                    $('#product-list').html(res);
                }
            }
        });
    });
    
    //  Subcategories filtering
    $(".subcategories").click(function() {
        // var price_range =  $('.addui-slider-input').val().split(',');  
        // var start_value = parseFloat(price_range[0]).toFixed(2);
        // var end_value = parseFloat(price_range[1]).toFixed(2);
        var sort_val = $('.sort_products').val();
        var this_text = $(this).text();
        var sub_id = $(this).data('id');
        var cat_id = $('#category_id').val();
        var sub_categories_filter_length = $('.sub_categories_filter').length;
        var recipients_filter_length = $('.recipients_filter').length;
        if(sub_categories_filter_length > 0) {
            $('.sub_categories_filter').html(this_text+'<a data-id='+sub_id+' class="filtering_link" data-key="sub_cat"><i class="fa fa-times" aria-hidden="true"></i></a>');
        }
        else {
            $('.filtering_sections').append('<span class="sub_categories_filter">'+this_text+'<a data-id='+sub_id+' class="filtering_link" data-key="sub_cat"><i class="fa fa-times" aria-hidden="true"></i></a></span>');
        }
        if(recipients_filter_length > 0) {
            var rec_id = $('.recipients_filter').find('a').data('id');
            var datavalues = {sub_id: sub_id ,cat_id: cat_id , rec_id : rec_id, sort:sort_val};    
        }
        else {
            var datavalues = {sub_id: sub_id ,cat_id: cat_id ,sort:sort_val};
        }
        jQuery.ajax({
            type: "POST",
            url: "../ajax_controller/filtering_product",
            data: datavalues,
            success: function(res) {
                if (res)
                {
                    $('#product-list').html(res);
                }
            }
        });
    });

    //  Recipients fitering
    $(".recipients").click(function() {
        // var price_range =  $('.addui-slider-input').val().split(',');  
        // var start_value = parseFloat(price_range[0]).toFixed(2);
        // var end_value = parseFloat(price_range[1]).toFixed(2);
        var sort_val = $('.sort_products').val();
        var rec_id = $(this).data('id');
        var cat_id = $('#category_id').val();
        var this_text = $(this).text();    
        var sub_categories_filter_length = $('.sub_categories_filter').length;
        var recipients_filter_length = $('.recipients_filter').length;
        if(recipients_filter_length > 0) {
            $('.recipients_filter').html(this_text+'<a data-id='+rec_id+' class="filtering_link" data-key="rec"><i class="fa fa-times" aria-hidden="true"></i></a>');
        }
        else {
            $('.filtering_sections').append('<span class="recipients_filter">'+this_text+'<a data-id='+rec_id+' class="filtering_link" data-key="rec"><i class="fa fa-times" aria-hidden="true"></i></a></span>');
        }
        if(sub_categories_filter_length > 0) {
            var sub_id = $('.sub_categories_filter').find('a').data('id');
            var datavalues = {sub_id: sub_id ,cat_id: cat_id , rec_id : rec_id, s_val : start_value, e_val : end_value, sort:sort_val};
        }
        else {
            var datavalues = {cat_id: cat_id , rec_id : rec_id, s_val : start_value, e_val : end_value, sort:sort_val};
        }
        jQuery.ajax({
            type: "POST",
            url: "../ajax_controller/filtering_product",
            data: datavalues,
            success: function(res) {
                if (res)
                {
                    $('#product-list').html(res);
                }
            }
        });
    });
    
    //  Remove option filtering
    $(document).on('click','.filtering_link',function() {  
        $(this).closest('span').remove();
        // var price_range =  $('.addui-slider-input').val().split(',');  
        // var start_value = parseFloat(price_range[0]).toFixed(2);
        // var end_value = parseFloat(price_range[1]).toFixed(2);
        var sort_val = $('.sort_products').val();
        var cat_id = $('#category_id').val();
        var sub_categories_filter_length = $('.sub_categories_filter').length;
        var recipients_filter_length = $('.recipients_filter').length;
        if(sub_categories_filter_length > 0) {
            var sub_id = $('.sub_categories_filter').find('a').data('id');
            var datavalues = {sub_id: sub_id ,cat_id: cat_id , sort:sort_val};
        }
        else if(recipients_filter_length > 0) {
           var rec_id = $('.recipients_filter').find('a').data('id');
           var datavalues = {rec_id : rec_id ,cat_id: cat_id , sort:sort_val};
        }
        else {
            var datavalues = {cat_id: cat_id , sort:sort_val};
        }
        jQuery.ajax({
        type: "POST",
        url: "../ajax_controller/filtering_product",
        data: datavalues,
            success: function(res) {
                if (res)
                {
                    $('#product-list').html(res);
                }
            }
        });
    });
    
 }); // end of document   
