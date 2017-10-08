
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<script src="js/bootstrap.min.js"></script>

<script src="js/tabel_filter.js"></script>

<script>
    $(function(){
        $('*[data-href]').click(function(){
            window.location = $(this).data('href');
            return false;
        });
    });
</script>