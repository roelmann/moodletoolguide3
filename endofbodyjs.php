<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
    $('.showall').on('click',function(){
        $('.toolrow').removeClass('showrow');
        $('.toolrow').removeClass('hiderow');
        $('.toolrow').addClass('showrow');
    });
    $('.showcore').on('click',function(){
        $('.toolrow').removeClass('showrow');
        $('.toolrow').removeClass('hiderow');
        $('.sourceCore').addClass('showrow');
        $('.sourcePlugin').addClass('hiderow');
        $('.sourceCatalyst').addClass('hiderow');
    });
    $('.showcatalyst').on('click',function(){
        $('.toolrow').removeClass('showrow');
        $('.toolrow').removeClass('hiderow');
        $('.sourceCore').addClass('hiderow');
        $('.sourcePlugin').addClass('hiderow');
        $('.sourceCatalyst').addClass('showrow');
    });
    $('.showplugin').on('click',function(){
        $('.toolrow').removeClass('showrow');
        $('.toolrow').removeClass('hiderow');
        $('.sourceCore').addClass('hiderow');
        $('.sourcePlugin').addClass('showrow');
        $('.sourceCatalyst').addClass('showrow');
    });
</script>
