
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/table_filter.js"></script>
    <script>
        $(function(){
            $('*[data-href]').click(function(){
                window.location = $(this).data('href');
                return false;
            });
        });
    </script>

    @yield('jspage')