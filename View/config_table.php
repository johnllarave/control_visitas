<script>
    $(document).ready(function() {
        $('#tabla').DataTable( {
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                //{extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: 'reporte'},
                //{extend: 'pdf', title: 'ExampleFile'},
            ],
            "language": {
                "url": "js/Spanish.json"
            }
        });
    });
</script>