<script>
    window.deleteButtonTrans = '{{ trans("global.app_delete_selected") }}';
    window.copyButtonTrans = '{{ trans("global.app_copy") }}';
    window.csvButtonTrans = '{{ trans("global.app_csv") }}';
    window.excelButtonTrans = '{{ trans("global.app_excel") }}';
    window.pdfButtonTrans = '{{ trans("global.app_pdf") }}';
    window.printButtonTrans = '{{ trans("global.app_print") }}';
    window.colvisButtonTrans = '{{ trans("global.app_colvis") }}';
</script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="{{ url('adminlte/js') }}/bootstrap.min.js"></script>
<script src="{{ url('adminlte/js') }}/select2.full.min.js"></script>
<script src="{{ url('adminlte/js') }}/main.js"></script>
<script src="{{ url('adminlte/js') }}/main.js"></script>
<script src="{{ url('adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ url('adminlte/plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ url('adminlte/js/app.min.js') }}"></script>
<script>
    window._token = '{{ csrf_token() }}';
</script>
<script>
    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "url": "http://cdn.datatables.net/plug-ins/1.10.16/i18n/English.json"
        }
    });
</script>
<script type="text/javascript">
    /*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
    $(document).ready(function(){
        $('.filterable .btn-filter').click(function(){
            var $panel = $(this).parents('.filterable'),
                $filters = $panel.find('.filters input'),
                $tbody = $panel.find('.table tbody');
            if ($filters.prop('disabled') == true) {
                $filters.prop('disabled', false);
                $filters.first().focus();
            } else {
                $filters.val('').prop('disabled', true);
                $tbody.find('.no-result').remove();
                $tbody.find('tr').show();
            }
        });

        $('.filterable .filters input').keyup(function(e){
            /* Ignore tab key */
            var code = e.keyCode || e.which;
            if (code == '9') return;
            /* Useful DOM data and selectors */
            var $input = $(this),
                inputContent = $input.val().toLowerCase(),
                $panel = $input.parents('.filterable'),
                column = $panel.find('.filters th').index($input.parents('th')),
                $table = $panel.find('.table'),
                $rows = $table.find('tbody tr');
            /* Dirtiest filter function ever ;) */
            var $filteredRows = $rows.filter(function(){
                var value = $(this).find('td').eq(column).text().toLowerCase();
                return value.indexOf(inputContent) === -1;
            });
            /* Clean previous no-result if exist */
            $table.find('tbody .no-result').remove();
            /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
            $rows.show();
            $filteredRows.hide();
            /* Prepend no-result row if all rows are filtered */
            if ($filteredRows.length === $rows.length) {
                $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
            }
        });
    });

    $("#resetpermission").on("click", function () {
        $("#permissionselect").val(0);

    });
    $("#resetrole").on("click", function () {
        $("#roleselect").val(0);

    });
</script>

<script src="{{ url('adminlte/js') }}/icheck.min.js"></script>
{{--<script>--}}
    {{--$(function () {--}}
        {{--$('input').iCheck({--}}
            {{--checkboxClass: 'icheckbox_square-blue',--}}
            {{--radioClass: 'iradio_square-blue',--}}
            {{--increaseArea: '20%' // optional--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}


@yield('javascript')
<script src="{{ asset('croppic.min.js') }}"></script>
<script>
    var eyeCandy = $('#cropContainerEyecandy');
    var croppedOptions = {
        uploadUrl: 'upload',
        cropUrl: 'crop',
        cropData:{
            'width' : eyeCandy.width(),
            'height': eyeCandy.height()
        }
    };
    var cropperBox = new Croppic('cropContainerEyecandy', croppedOptions);
</script>