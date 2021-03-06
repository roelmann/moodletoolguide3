<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
    $('.darktext').on('click',function(){
        $('.darktext').addClass('hidden');
        $('.darktext').removeClass('show');
        $('.lighttext').addClass('show');
        $('.lighttext').removeClass('hidden');
        $('.text-white').addClass('text-dark');
        $('.text-white').removeClass('text-white');
    });
    $('.lighttext').on('click',function(){
        $('.lighttext').addClass('hidden');
        $('.lighttext').removeClass('show');
        $('.darktext').addClass('show');
        $('.darktext').removeClass('hidden');
        $('.text-dark').addClass('text-white');
        $('.text-dark').removeClass('text-dark');
    });
    $('.outlineonly').on('click',function(){
        $('.cardbackground').removeClass('hidden');
        $('.cardbackground').addClass('show');
        $('.outlineonly').removeClass('show');
        $('.outlineonly').addClass('hidden');
        $('.border-dark').removeClass('border-dark');
        $('.bg-success').addClass('border-success');
        $('.bg-success').removeClass('bg-success');
        $('.bg-warning').addClass('border-warning');
        $('.bg-warning').removeClass('bg-warning');
        $('.bg-danger').addClass('border-danger');
        $('.bg-danger').removeClass('bg-danger');
    });
    $('.cardbackground').on('click',function(){
        $('.cardbackground').addClass('hidden');
        $('.cardbackground').removeClass('show');
        $('.outlineonly').addClass('show');
        $('.outlineonly').removeClass('hidden');
        $('.border-success').addClass('border-dark bg-success');
        $('.border-warning').addClass('border-dark bg-warning');
        $('.border-danger').addClass('border-dark bg-danger');
        $('.border-success').removeClass('border-success');
        $('.border-warning').removeClass('border-warning');
        $('.border-danger').removeClass('border-danger');
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

    $('#Transfer').on('click',function(){
        // Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Set this button to success.
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show next row.
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
    });
    $('#Assess').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Set this button to success.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show next row.
        $('.fromAssess').removeClass('hidden');$('.fromAssess').addClass('showlevel');
    });
    $('#Interact').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Set this button to success.
        $('#Interact').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show next row.
        $('.fromInteract').removeClass('hidden');$('.fromInteract').addClass('showlevel');
    });
    $('#CoCreate').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Set this button to success.
        $('#CoCreate').removeClass('btn-dark');$('#CoCreate').addClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show next row.
        $('.fromCoCreate').removeClass('hidden');$('.fromCoCreate').addClass('showlevel');
    });
    $('#External').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show correct option on first row.
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        // Show this row.
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        // Show correct option on this row.
        $('#External').removeClass('btn-dark');$('#External').addClass('btn-success');
        // Sow next row.
        $('.fromExternal').removeClass('hidden');$('.fromExternal').addClass('showlevel');
    });
    $('#Interactive').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show correct option on first row.
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        // Show this row.
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        // Show correct option on this row.
        $('#Interactive').removeClass('btn-dark');$('#Interactive').addClass('btn-success');
        // Sow next row.
        $('.fromInteractive').removeClass('hidden');$('.fromInteractive').addClass('showlevel');
    });
    $('#Static').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show correct option on first row.
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        // Show this row.
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        // Show correct option on this row.
        $('#Static').removeClass('btn-dark');$('#Static').addClass('btn-success');
        // Sow next row.
        $('.fromStatic').removeClass('hidden');$('.fromStatic').addClass('showlevel');
    });
    $('#Guided').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous row(s).
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        $('.fromInteractive').removeClass('hidden');$('.fromInteractive').addClass('showlevel');
        // Show correct option on previous row(s).
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        $('#Interactive').removeClass('btn-dark');$('#Interactive').addClass('btn-success');
        // Show this option.
        $('#Guided').removeClass('btn-dark');$('#Guided').addClass('btn-success');
        // Sow next row.
        $('.fromGuided').removeClass('hidden');$('.fromGuided').addClass('showlevel');
    });
    $('#Searchable').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous row(s).
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        $('.fromInteractive').removeClass('hidden');$('.fromInteractive').addClass('showlevel');
        // Show correct option on previous row(s).
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        $('#Interactive').removeClass('btn-dark');$('#Interactive').addClass('btn-success');
        // Show this option.
        $('#Searchable').removeClass('btn-dark');$('#Searchable').addClass('btn-success');
        // Sow next row.
        $('.fromSearchable').removeClass('hidden');$('.fromSearchable').addClass('showlevel');
    });
    $('#Multimedia').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous row(s).
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        $('.fromInteractive').removeClass('hidden');$('.fromInteractive').addClass('showlevel');
        // Show correct option on previous row(s).
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        $('#Interactive').removeClass('btn-dark');$('#Interactive').addClass('btn-success');
        // Show this option.
        $('#Multimedia').removeClass('btn-dark');$('#Multimedia').addClass('btn-success');
        // Sow next row.
        $('.fromMultimedia').removeClass('hidden');$('.fromMultimedia').addClass('showlevel');
    });
    $('#Simple_WYSIWYG').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous row(s).
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        $('.fromInteractive').removeClass('hidden');$('.fromInteractive').addClass('showlevel');
        $('.fromMultimedia').removeClass('hidden');$('.fromMultimedia').addClass('showlevel');
        // Show correct option on previous row(s).
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        $('#Interactive').removeClass('btn-dark');$('#Interactive').addClass('btn-success');
        $('#Multimedia').removeClass('btn-dark');$('#Multimedia').addClass('btn-success');
        // Show this option.
        $('#Simple_WYSIWYG').removeClass('btn-dark');$('#Simple_WYSIWYG').addClass('btn-success');
        // Sow next row.
        $('.fromSimple_WYSIWYG').removeClass('hidden');$('.fromSimple_WYSIWYG').addClass('showlevel');
    });
    $('#Multiple_types').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous row(s).
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        $('.fromInteractive').removeClass('hidden');$('.fromInteractive').addClass('showlevel');
        $('.fromMultimedia').removeClass('hidden');$('.fromMultimedia').addClass('showlevel');
        // Show correct option on previous row(s).
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        $('#Interactive').removeClass('btn-dark');$('#Interactive').addClass('btn-success');
        $('#Multimedia').removeClass('btn-dark');$('#Multimedia').addClass('btn-success');
        // Show this option.
        $('#Multiple_types').removeClass('btn-dark');$('#Multiple_types').addClass('btn-success');
        // Sow next row.
        $('.fromMultiple_types').removeClass('hidden');$('.fromMultiple_types').addClass('showlevel');
    });

    $('#Externally_created').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous row(s).
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        $('.fromInteractive').removeClass('hidden');$('.fromInteractive').addClass('showlevel');
        $('.fromMultimedia').removeClass('hidden');$('.fromMultimedia').addClass('showlevel');
        // Show correct option on previous row(s).
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        $('#Interactive').removeClass('btn-dark');$('#Interactive').addClass('btn-success');
        $('#Multimedia').removeClass('btn-dark');$('#Multimedia').addClass('btn-success');
        // Show this option.
        $('#Externally_created').removeClass('btn-dark');$('#Externally_created').addClass('btn-success');
        // Sow next row.
        $('.fromExternally_created').removeClass('hidden');$('.fromExternally_created').addClass('showlevel');
    });
    $('#Printable').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous row(s).
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        $('.fromStatic').removeClass('hidden');$('.fromStatic').addClass('showlevel');
        // Show correct option on previous row(s).
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        $('#Static').removeClass('btn-dark');$('#Static').addClass('btn-success');
        // Show this option.
        $('#Printable').removeClass('btn-dark');$('#Printable').addClass('btn-success');
        // Sow next row.
        $('.fromPrintable').removeClass('hidden');$('.fromPrintable').addClass('showlevel');
    });
    $('#Within_the_VLE').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous row(s).
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        $('.fromStatic').removeClass('hidden');$('.fromStatic').addClass('showlevel');
        // Show correct option on previous row(s).
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        $('#Static').removeClass('btn-dark');$('#Static').addClass('btn-success');
        // Show this option.
        $('#Within_the_VLE').removeClass('btn-dark');$('#Within_the_VLE').addClass('btn-success');
        // Sow next row.
        $('.fromWithin_the_VLE').removeClass('hidden');$('.fromWithin_the_VLE').addClass('showlevel');
    });
    $('#Several_chapters').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous row(s).
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        $('.fromStatic').removeClass('hidden');$('.fromStatic').addClass('showlevel');
        // Show correct option on previous row(s).
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        $('#Static').removeClass('btn-dark');$('#Static').addClass('btn-success');
        // Show this option.
        $('#Several_chapters').removeClass('btn-dark');$('#Several_chapters').addClass('btn-success');
        // Sow next row.
        $('.fromSeveral_chapters').removeClass('hidden');$('.fromSeveral_chapters').addClass('showlevel');
    });
    $('#Many_unlinked_pages').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous row(s).
        $('.fromTransfer').removeClass('hidden');$('.fromTransfer').addClass('showlevel');
        $('.fromStatic').removeClass('hidden');$('.fromStatic').addClass('showlevel');
        // Show correct option on previous row(s).
        $('#Transfer').removeClass('btn-dark');$('#Transfer').addClass('btn-success');
        $('#Static').removeClass('btn-dark');$('#Static').addClass('btn-success');
        // Show this option.
        $('#Many_unlinked_pages').removeClass('btn-dark');$('#Many_unlinked_pages').addClass('btn-success');
        // Sow next row.
        $('.fromMany_unlinked_pages').removeClass('hidden');$('.fromMany_unlinked_pages').addClass('showlevel');
    });
    $('#Multiple_authors').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show correct option on first row.
        $('#CoCreate').removeClass('btn-dark');$('#CoCreate').addClass('btn-success');
        // Show this row.
        $('.fromCoCreate').removeClass('hidden');$('.fromCoCreate').addClass('showlevel');
        // Show correct option on this row.
        $('#Multiple_authors').removeClass('btn-dark');$('#Multiple_authors').addClass('btn-success');
        // Sow next row.
        $('.fromMultiple_authors').removeClass('hidden');$('.fromMultiple_authors').addClass('showlevel');
    });
    $('#Collected_data').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show correct option on first row.
        $('#CoCreate').removeClass('btn-dark');$('#CoCreate').addClass('btn-success');
        // Show this row.
        $('.fromCoCreate').removeClass('hidden');$('.fromCoCreate').addClass('showlevel');
        // Show correct option on this row.
        $('#Collected_data').removeClass('btn-dark');$('#Collected_data').addClass('btn-success');
        // Sow next row.
        $('.fromCollected_data').removeClass('hidden');$('.fromCollected_data').addClass('showlevel');
    });
    $('#Curated_collection').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show correct option on first row.
        $('#CoCreate').removeClass('btn-dark');$('#CoCreate').addClass('btn-success');
        // Show this row.
        $('.fromCoCreate').removeClass('hidden');$('.fromCoCreate').addClass('showlevel');
        // Show correct option on this row.
        $('#Curated_collection').removeClass('btn-dark');$('#Curated_collection').addClass('btn-success');
        // Sow next row.
        $('.fromCurated_collection').removeClass('hidden');$('.fromCurated_collection').addClass('showlevel');
    });
    $('#QA').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show correct option on first row.
        $('#Interact').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        // Show this row.
        $('.fromInteract').removeClass('hidden');$('.fromInteract').addClass('showlevel');
        // Show correct option on this row.
        $('#QA').removeClass('btn-dark');$('#QA').addClass('btn-success');
        // Sow next row.
        $('.fromQA').removeClass('hidden');$('.fromQA').addClass('showlevel');
    });
    $('#Groups').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show correct option on first row.
        $('#Interact').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        // Show this row.
        $('.fromInteract').removeClass('hidden');$('.fromInteract').addClass('showlevel');
        // Show correct option on this row.
        $('#Groups').removeClass('btn-dark');$('#Groups').addClass('btn-success');
        // Sow next row.
        $('.fromGroups').removeClass('hidden');$('.fromGroups').addClass('showlevel');
    });
    $('#Whole_Cohort').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show correct option on first row.
        $('#Interact').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        // Show this row.
        $('.fromInteract').removeClass('hidden');$('.fromInteract').addClass('showlevel');
        // Show correct option on this row.
        $('#Whole_Cohort').removeClass('btn-dark');$('#Whole_Cohort').addClass('btn-success');
        // Sow next row.
        $('.fromWhole_Cohort').removeClass('hidden');$('.fromWhole_Cohort').addClass('showlevel');
    });
    $('#Video').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show correct option on first row.
        $('#Interact').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        // Show this row.
        $('.fromInteract').removeClass('hidden');$('.fromInteract').addClass('showlevel');
        // Show correct option on this row.
        $('#Video').removeClass('btn-dark');$('#Video').addClass('btn-success');
        // Sow next row.
        $('.fromVideo').removeClass('hidden');$('.fromVideo').addClass('showlevel');
    });
    $('#Small').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromInteract').removeClass('hidden');$('.fromInteract').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Interact').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        $('#Groups').removeClass('btn-dark');$('#Groups').addClass('btn-success');
        // Show this row.
        $('.fromGroups').removeClass('hidden');$('.fromGroups').addClass('showlevel');
        // Show correct option on this row.
        $('#Small').removeClass('btn-dark');$('#Small').addClass('btn-success');
        // Show next row.
        $('.fromSmall').removeClass('hidden');$('.fromSmall').addClass('showlevel');
    });
    $('#Large').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromInteract').removeClass('hidden');$('.fromInteract').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Interact').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        $('#Groups').removeClass('btn-dark');$('#Groups').addClass('btn-success');
        // Show this row.
        $('.fromGroups').removeClass('hidden');$('.fromGroups').addClass('showlevel');
        // Show correct option on this row.
        $('#Large').removeClass('btn-dark');$('#Large').addClass('btn-success');
        // Show next row.
        $('.fromLarge').removeClass('hidden');$('.fromLarge').addClass('showlevel');
    });
    $('#Synchronous').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromInteract').removeClass('hidden');$('.fromInteract').addClass('showlevel');
        $('.fromGroups').removeClass('hidden');$('.fromGroups').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Interact').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        $('#Groups').removeClass('btn-dark');$('#Groups').addClass('btn-success');
        $('#Small').removeClass('btn-dark');$('#Small').addClass('btn-success');
        // Show this row.
        $('.fromSmall').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on this row.
        $('#Synchronous').removeClass('btn-dark');$('#Synchronous').addClass('btn-success');
        // Show next row.
        $('.fromSynchronous').removeClass('hidden');$('.fromSynchronous').addClass('showlevel');
    });
    $('#ASynchronous').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromInteract').removeClass('hidden');$('.fromInteract').addClass('showlevel');
        $('.fromGroups').removeClass('hidden');$('.fromGroups').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Interact').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        $('#Groups').removeClass('btn-dark');$('#Groups').addClass('btn-success');
        $('#Small').removeClass('btn-dark');$('#Small').addClass('btn-success');
        // Show this row.
        $('.fromSmall').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on this row.
        $('#ASynchronous').removeClass('btn-dark');$('#ASynchronous').addClass('btn-success');
        // Show next row.
        $('.fromASynchronous').removeClass('hidden');$('.fromASynchronous').addClass('showlevel');
    });
    $('#Offline').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        // Show this row.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on this row.
        $('#Offline').removeClass('btn-dark');$('#Offline').addClass('btn-success');
        // Show next row.
        $('.fromOffline').removeClass('hidden');$('.fromOffline').addClass('showlevel');
    });
    $('#Offline').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        // Show this row.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on this row.
        $('#Offline').removeClass('btn-dark');$('#Offline').addClass('btn-success');
        // Show next row.
        $('.fromOffline').removeClass('hidden');$('.fromOffline').addClass('showlevel');
    });
    $('#Testing').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        // Show this row.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on this row.
        $('#Testing').removeClass('btn-dark');$('#Testing').addClass('btn-success');
        // Show next row.
        $('.fromTesting').removeClass('hidden');$('.fromTesting').addClass('showlevel');
    });
    $('#Understanding').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        // Show this row.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on this row.
        $('#Understanding').removeClass('btn-dark');$('#Understanding').addClass('btn-success');
        // Show next row.
        $('.fromUnderstanding').removeClass('hidden');$('.fromUnderstanding').addClass('showlevel');
    });
    $('#Portfolio').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Interact').addClass('btn-success');
        // Show this row.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on this row.
        $('#Portfolio').removeClass('btn-dark');$('#Portfolio').addClass('btn-success');
        // Show next row.
        $('.fromPortfolio').removeClass('hidden');$('.fromPortfolio').addClass('showlevel');
    });
    $('#Learner_Centred').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        // Show this row.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on this row.
        $('#Learner_Centred').removeClass('btn-dark');$('#Learner_Centred').addClass('btn-success');
        // Show next row.
        $('.fromLearner_Centred').removeClass('hidden');$('.fromLearner_Centred').addClass('showlevel');
    });
    $('#Group').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        // Show this row.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on this row.
        $('#Group').removeClass('btn-dark');$('#Group').addClass('btn-success');
        // Show next row.
        $('.fromGroup').removeClass('hidden');$('.fromGroup').addClass('showlevel');
    });
    $('#Collaborative').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Group').removeClass('btn-dark');$('#Group').addClass('btn-success');
        // Show this row.
        $('.fromGroup').removeClass('hidden');$('.fromGroup').addClass('showlevel');
        // Show correct option on this row.
        $('#Collaborative').removeClass('btn-dark');$('#Collaborative').addClass('btn-success');
        // Show next row.
        $('.fromCollaborative').removeClass('hidden');$('.fromCollaborative').addClass('showlevel');
    });
    $('#Discussion').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Group').removeClass('btn-dark');$('#Group').addClass('btn-success');
        // Show this row.
        $('.fromGroup').removeClass('hidden');$('.fromGroup').addClass('showlevel');
        // Show correct option on this row.
        $('#Discussion').removeClass('btn-dark');$('#Discussion').addClass('btn-success');
        // Show next row.
        $('.fromDiscussion').removeClass('hidden');$('.fromDiscussion').addClass('showlevel');
    });
    $('#Sync').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        $('.fromGroup').removeClass('hidden');$('.fromGroup').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Group').removeClass('btn-dark');$('#Group').addClass('btn-success');
        $('#Discussion').removeClass('btn-dark');$('#Discussion').addClass('btn-success');
        // Show this row.
        $('.fromDiscussion').removeClass('hidden');$('.fromDiscussion').addClass('showlevel');
        // Show correct option on this row.
        $('#Sync').removeClass('btn-dark');$('#Sync').addClass('btn-success');
        // Show next row.
        $('.fromSync').removeClass('hidden');$('.fromSync').addClass('showlevel');
    });
    $('#Async').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        $('.fromGroup').removeClass('hidden');$('.fromGroup').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Group').removeClass('btn-dark');$('#Group').addClass('btn-success');
        $('#Discussion').removeClass('btn-dark');$('#Discussion').addClass('btn-success');
        // Show this row.
        $('.fromDiscussion').removeClass('hidden');$('.fromDiscussion').addClass('showlevel');
        // Show correct option on this row.
        $('#Async').removeClass('btn-dark');$('#Async').addClass('btn-success');
        // Show next row.
        $('.fromAsync').removeClass('hidden');$('.fromAsync').addClass('showlevel');
    });
    $('#Single_option').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        $('.fromTesting').removeClass('hidden');$('.fromTesting').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Testing').removeClass('btn-dark');$('#Testing').addClass('btn-success');
        // Show this row.
        $('.fromTesting').removeClass('hidden');$('.fromTesting').addClass('showlevel');
        // Show correct option on this row.
        $('#Single_option').removeClass('btn-dark');$('#Single_option').addClass('btn-success');
        // Show next row.
        $('.fromSingle_option').removeClass('hidden');$('.fromSingle_option').addClass('showlevel');
    });
    $('#_Multimedia_').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Testing').removeClass('btn-dark');$('#Testing').addClass('btn-success');
        // Show this row.
        $('.fromTesting').removeClass('hidden');$('.fromTesting').addClass('showlevel');
        // Show correct option on this row.
        $('#_Multimedia_').removeClass('btn-dark');$('#_Multimedia_').addClass('btn-success');
        // Show next row.
        $('.from_Multimedia_').removeClass('hidden');$('.from_Multimedia_').addClass('showlevel');
    });
    $('#In_depth').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Testing').removeClass('btn-dark');$('#Testing').addClass('btn-success');
        // Show this row.
        $('.fromTesting').removeClass('hidden');$('.fromTesting').addClass('showlevel');
        // Show correct option on this row.
        $('#In_depth').removeClass('btn-dark');$('#In_depth').addClass('btn-success');
        // Show next row.
        $('.fromIn_depth').removeClass('hidden');$('.fromIn_depth').addClass('showlevel');
    });
    $('#Repeatable').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Learner_Centred').removeClass('btn-dark');$('#Learner_Centred').addClass('btn-success');
        // Show this row.
        $('.fromLearner_Centred').removeClass('hidden');$('.fromLearner_Centred').addClass('showlevel');
        // Show correct option on this row.
        $('#Repeatable').removeClass('btn-dark');$('#Repeatable').addClass('btn-success');
        // Show next row.
        $('.fromRepeatable').removeClass('hidden');$('.fromRepeatable').addClass('showlevel');
    });
    $('#Peer_Assessed').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Learner_Centred').removeClass('btn-dark');$('#Learner_Centred').addClass('btn-success');
        // Show this row.
        $('.fromLearner_Centred').removeClass('hidden');$('.fromLearner_Centred').addClass('showlevel');
        // Show correct option on this row.
        $('#Peer_Assessed').removeClass('btn-dark');$('#Peer_Assessed').addClass('btn-success');
        // Show next row.
        $('.fromPeer_Assessed').removeClass('hidden');$('.fromPeer_Assessed').addClass('showlevel');
    });
    $('#Reflection').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Learner_Centred').removeClass('btn-dark');$('#Learner_Centred').addClass('btn-success');
        // Show this row.
        $('.fromLearner_Centred').removeClass('hidden');$('.fromLearner_Centred').addClass('showlevel');
        // Show correct option on this row.
        $('#Reflection').removeClass('btn-dark');$('#Reflection').addClass('btn-success');
        // Show next row.
        $('.fromReflection').removeClass('hidden');$('.fromReflection').addClass('showlevel');
    });
    $('#Spot').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        $('.fromLearner_Centred').removeClass('hidden');$('.fromLearner_Centred').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Learner_Centred').removeClass('btn-dark');$('#Learner_Centred').addClass('btn-success');
        $('#Reflection').removeClass('btn-dark');$('#Reflection').addClass('btn-success');
        // Show this row.
        $('.fromReflection').removeClass('hidden');$('.fromReflection').addClass('showlevel');
        // Show correct option on this row.
        $('#Spot').removeClass('btn-dark');$('#Spot').addClass('btn-success');
        // Show next row.
        $('.fromSpot').removeClass('hidden');$('.fromSpot').addClass('showlevel');
    });
    $('#Over_time').on('click',function(){
        //Reset all buttons to dark.
        $('.btn-success').addClass('btn-dark');$('.btn-dark').removeClass('btn-success');
        // Reset all rows to hidden.
        $('.showlevel').addClass('hidden');$('.hidden').removeClass('showlevel');
        // Show previous rows.
        $('.fromAssess').removeClass('hidden');$('.fromSmall').addClass('showlevel');
        $('.fromLearner_Centred').removeClass('hidden');$('.fromLearner_Centred').addClass('showlevel');
        // Show correct option on previous rows.
        $('#Assess').removeClass('btn-dark');$('#Assess').addClass('btn-success');
        $('#Learner_Centred').removeClass('btn-dark');$('#Learner_Centred').addClass('btn-success');
        $('#Reflection').removeClass('btn-dark');$('#Reflection').addClass('btn-success');
        // Show this row.
        $('.fromReflection').removeClass('hidden');$('.fromReflection').addClass('showlevel');
        // Show correct option on this row.
        $('#Over_time').removeClass('btn-dark');$('#Over_time').addClass('btn-success');
        // Show next row.
        $('.fromOver_time').removeClass('hidden');$('.fromOver_time').addClass('showlevel');
    });




</script>
