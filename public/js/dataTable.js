
        $(document).ready(function() {
            $('#dataTable').DataTable({
                // scrollX: true,
                // "searching": false, order: [[0, 'asc']],
                rowReorder: true,
                pagingType: "simple_numbers",
                responsive: true,
                rowReorder: {
                    selector: "td:nth-child(2)",
                },
                // stateSave: false,
                mark: true,
                language: {
                    searchPlaceholder: "Search Here",
                },
            });

            // Highlight search term
            table.on("draw", function() {
                var body = $(table.table().body());
                var searchTerm = table.search();

                // Clear previous highlights
                body.unmark();

                if (searchTerm) {
                    // Highlight new search term in specific columns (excluding the Actions column)
                    body.find("td").each(function() {
                        var cell = $(this);
                        // Highlight in all columns except the last one (assuming it's the Actions column)
                        if (!cell.hasClass("action-cell")) {
                            cell.mark(searchTerm);
                        }
                    });
                }
            });
        });
  