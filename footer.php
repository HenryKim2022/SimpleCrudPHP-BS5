<footer id="pg-footer" class="mt-18">
    <div class="container mb-18 footerlinks" style="background-color:#323A45; color:#a8a9b4;">
        <div class="container ml-0 pl-0 text-center">
            <div id="copyright" class="copyright"></div>
        </div>
        <div class="d-flex align-items-center justify-content-center">
        </div>

    </div>


    <div class="row-fluid">
        <aside id="block-region-footer-left" class="span4 block-region" data-blockregion="footer-left" data-droptarget="1"></aside>
        <aside id="block-region-footer-middle" class="span4 block-region" data-blockregion="footer-middle" data-droptarget="1"></aside>
        <aside id="block-region-footer-right" class="span4 block-region" data-blockregion="footer-right" data-droptarget="1"></aside>
    </div>

    <style>
        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 60px;

            background-color: #f5f5f5;
            text-align: center;
        }

        #pg-footer {
            z-index: 9;
            font-size: 1em;
            color: #bdc3c7;
            text-align: left;

            background: #323A45;
            margin-top: 0;
            font-size: 1em;
            padding-top: 0;
            padding-bottom: 0;
            color: #bdc3c7;
            border-top: 3px solid #ffae00;
            text-align: left;
        }


        #pg-footer .logininfo {
            display: block;
            visibility: hidden;
            line-height: 0;
            margin-top: -20px;
        }

        .footerlinks {
            line-height: 15px;
            background: #292F38;
            border-top: 1px solid rgba(200, 200, 200, .15);
            padding: 10px 0;
        }
    </style>

</footer>



<!--  -->
<!-- INDEPENDENT: SCRIPT -->
<!-- FOOTER COPYRIGHT GENERATOR -->
<script type="text/javascript">
    let paragraph1 = `<p class='d-flex align-items-center justify-content-center' style='margin-bottom:0px'>
                <i>Copyright &copy; <?= $Curr_Year ?> <a href="<?= $Base_Url; ?>"><?= $Site_Subtitle_Footer ?></a>.<br>All rights reserved</i>  
            </p>`;
    let paragraph2 = `<p class='d-flex align-items-center justify-content-center' style='margin-bottom:0px'>
                <i>                    
                    Copyright &copy; <?= $Site_Build ?>-<?= $Curr_Year ?> <a href="<?= $Base_Url; ?>"><?= $Site_Subtitle_Footer ?></a>.<br>
                    All rights reserved<br>
                </i>  
            </p>`;

    if (<?= $Site_Build ?> == <?= $Curr_Year ?>) {
        document.getElementById('copyright').innerHTML = paragraph1;
    } else {
        document.getElementById('copyright').innerHTML = paragraph2;
    }
</script>
<!-- /.FOOTER COPYRIGHT GENERATOR -->



<!-- Bootstrap 5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js" integrity="sha512-72WD92hLs7T5FAXn3vkNZflWG6pglUDDpm87TeQmfSg8KnrymL2G30R7as4FmTwhgu9H7eSzDCX3mjitSecKnw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-responsive-bs4/2.4.0/responsive.bootstrap4.min.js" integrity="sha512-6GfG2kVDP+eERUuPOyDw9XFsW24wvdQo6bDFab6ragV8z3PY8KwglTXyRJJ+AOGlDBTYPdFUvvtjFqBX0997Tw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js" integrity="sha512-a9NgEEK7tsCvABL7KqtUTQjl69z7091EVPpw5KxPlZ93T141ffe1woLtbXTX+r2/8TtTvRX/v4zTL2UlMUPgwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js" integrity="sha512-pAoMgvsSBQTe8P3og+SAnjILwnti03Kz92V3Mxm0WOtHuA482QeldNM5wEdnKwjOnQ/X11IM6Dn3nbmvOz365g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/jszip@3.10.1/dist/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.colVis.min.js"></script>




<!-- DataTable Button Script -->
<script>
    $(document).ready(function() {
        var table = $('#dataListTable').DataTable({
            "lengthChange": false,
            "autoWidth": true,
            "columns": [{
                    "width": "5%"
                },
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                {
                    "width": "8%"
                }
            ],
            "buttons": [{
                    extend: 'excelHtml5',
                    title: "DATA " + "<?= $namaTabel ?>",
                    footer: true,
                    header: true,
                    exportOptions: {
                        columns: ':visible'
                    },
                    className: 'hide-for-all'
                },
                {
                    extend: 'pdf',
                    footer: true,
                    header: true,
                    exportOptions: {
                        columns: ':visible'
                    },
                    title: "DATA " + "<?= $namaTabel ?>",
                },
                {
                    text: 'Print',
                    extend: 'print',
                    footer: true,
                    header: true,
                    exportOptions: {
                        columns: ':visible'
                    },
                    className: 'hide-for-all',
                    title: "DATA " + "<?= $namaTabel ?>",
                    customize: function(win) {
                        $(win.document.body)
                            .css('font-size', '10pt')
                            .prepend(
                                '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
                            )
                            .append(``)

                        $(win.document.body).find('table')
                            // .addClass('compact')
                            .css('font-size', 'inherit');

                    }

                },
                {
                    text: 'Colvis',
                    extend: 'colvis'
                }
            ],
            columnDefs: [{
                targets: [],
                visible: false,
            }],
        });
        $('.dataTables_length').addClass('bs-select');
        table.buttons().container()
            .appendTo('#dataListTable_wrapper .col-md-6:eq(0)');

        //// Give scroolX- without breaking header~body aligment 
        jQuery('.dataTable').wrap('<div class="dataTables_scroll" />');


    });
</script>