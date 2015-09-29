<!DOCTYPE html>
<html>
    <head>
        <title>{!! Theme::get('title') !!}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{{! Theme::get('keywords') !!}">
        <meta name="description" content="{{! Theme::get('description') !!}">
        {!! Theme::asset()->styles() !!}
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        {!! Theme::asset()->scripts() !!}
    </head>
    <body>
        {!! Theme::partial('header') !!}
        
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    {!! Theme::partial('sidebar') !!}
                </div>
                <div class="span9" id="content">
                    {!! Theme::content() !!}
                </div>
            </div>
        </div>

        {!! Theme::partial('footer') !!}

        {!! Theme::asset()->container('footer')->scripts() !!}
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>
</html>