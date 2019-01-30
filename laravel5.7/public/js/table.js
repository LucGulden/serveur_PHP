$(document).ready(function() {
        $('#table_id').dataTable( {
            "responsive": true,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
            },
            "dom": 'lfrtBp',
            "buttons": [
                {
                    extend : 'csv',
                    text: 'Exporter en CSV',
                    bom : true,
                    filename : 'utilisateurs'
                },
                {
                    extend : 'pdf',
                    text: 'Exporter en PDF',
                    filename : 'utilisateurs',
                    title : 'Utilisateurs du site'
                }
            ]
        } );
    } );

