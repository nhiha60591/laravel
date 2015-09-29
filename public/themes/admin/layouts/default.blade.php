<!DOCTYPE html>
<html>
    <head>
        <title>{!! Theme::get('title') !!}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{{! Theme::get('keywords') !!}">
        <meta name="description" content="{{! Theme::get('description') !!}">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>
    <body>
        {!! Theme::partial('header') !!}
        
        <div class="container-fluid">
            <div class="row">
                <div id="sidebar" class="col-xs-6 col-sm-4">
                    {!! Theme::partial('sidebar') !!}
                </div>
                <div id="main" class="col-xs-6 col-sm-8">
                    {!! Theme::content() !!}
                </div>
            </div>
        </div>

        {!! Theme::partial('footer') !!}

        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>