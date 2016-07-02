<script>
    $(document).ready(function () {
        $("#changeNumberOfProduct").on('change', function () {
            var numberOfItems = $(this).val();
            var info = "{{ Request::url() }}?";


            info += 'limit=' + numberOfItems;

            @if(app('request')->input('filter'))
                    info += '&filter={{ app('request')->input('filter')}}';
            @endif
                    info +="&page={{$latestProduct->currentPage()}}";
            window.location.href = info;
        });

        $("#changeFilter").on('change', function () {
            var numberOfItems = $(this).val();
            var info = "{{ Request::url() }}?";


            info += 'filter=' + numberOfItems;

            @if( app('request')->input('limit'))
                    info += '&limit={{app('request')->input('limit')}}';
            @endif
                    info +="&page={{$latestProduct->currentPage()}}";
            window.location.href = info;
        });
    });
</script>