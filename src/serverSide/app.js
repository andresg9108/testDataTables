document.addEventListener('DOMContentLoaded', (e) => {
	new DataTable('#myTable', {
		ajax: "./php/",
		processing: true,
		serverSide: true,
		pageLength: 10,
		responsive: true,
		scrollX: true,
		// searching: false,
		lengthMenu: [10, 20, 30, 40, 50, 100, 200, 500],
		columnDefs: [
			{ width: "40px", targets: [0] },
			{ width: "200px", targets: [1] },
			{ width: "25%", targets: [2, 3, 4, 5] },
			{ orderable: false, targets: [5] }, // Evitar que una columna se ordene.
			{ searchable: false, targets: [5] }, // Evutar que busque en columnas.
		],
		language: {
	        lengthMenu: "Mostrar _MENU_ registros por página",
	        zeroRecords: "No hay resultados",
	        info: "De _START_ a _END_ - _TOTAL_ resultados",
	        infoEmpty: "No hay resultados",
	        infoFiltered: "(_MAX_ registros totales)",
	        search: "Buscar:",
	        loadingRecords: "Cargando...",
	        paginate: {
	            first: `<span class="fas fa-angle-double-left"></span>`,
	            last: `<span class="fas fa-angle-double-right"></span>`,
	            next: `<span class="fas fa-chevron-right"></span>`,
	            previous: `<span class="fas fa-chevron-left"></span>`
	        }
	    }
	});
});