(function($) {
    $(window).on('load', function () {
        /**
         * Blog category filter
         */
        $('.apps-has-category-select').on('change', function() {
            var selectedCategory = $(this).val();
            $.ajax({
                url: ajax.ajax_url,
                type: 'POST',
                data: {
                    action: 'apps_filter_blog_posts',
                    category: selectedCategory,
                },
                beforeSend: function() {
                    // Show loading spinner or message if needed
                    $('#home-filtered-blog-post-114').html('Loading...');
                },
                success: function(response) {
                    // Update the content of the blog post container
                    $('#home-filtered-blog-post-114').html(response);
                },
                error: function(xhr, status, error) {
                    // Handle error if AJAX request fails
                    console.error('AJAX Error:', xhr.responseText);
                }
            });
        });
        /**
         * Blog duration filter
         */
        $('.apps-has-duration-select').on('change', function() {
            var selectedOption = $(this).val();
            $.ajax({
                url: ajax.ajax_url,
                type: 'POST',
                data: {
                    action: 'apps_filter_blog_posts',
                    date_filter: selectedOption,
                },
                beforeSend: function() {
                    // Show loading spinner or message if needed
                    $('#home-filtered-blog-post-114').html('Loading...');
                },
                success: function(response) {
                    // Update the content of the blog post container
                    $('#home-filtered-blog-post-114').html(response);
                },
                error: function(xhr, status, error) {
                    // Handle error if AJAX request fails
                    console.error('AJAX Error:', xhr.responseText);
                }
            });
        });
    });
    /**
     * Blog search filter
    */
   $('.apps-search-post-for-home-114').on('change', function() {
        var searchTerm = $(this).val();
        $.ajax({
            url: ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'apps_perform_post_search',
                search_term: searchTerm,
            },
            beforeSend: function() {
                // Show loading spinner or message if needed
                $('#home-filtered-blog-post-114').html('Searching...');
            },
            success: function(response) {
                // Update the content of the search results container
                $('#home-filtered-blog-post-114').html(response);
            },
            error: function(xhr, status, error) {
                // Handle error if AJAX request fails
                console.error('AJAX Error:', xhr.responseText);
            }
        });
    });
})(jQuery)