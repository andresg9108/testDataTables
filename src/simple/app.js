document.addEventListener('DOMContentLoaded', (e) => {
	getData()
	.then((oResponse) => {
		const aUser = oResponse.data;
		let aNewUser = [];

		aUser.forEach((user, index) => {
			aNewUser = [...aNewUser, [
				index+1, 
				user.name || '', 
				user.email || '', 
				user.address.city || '', 
				user.company.name || '', 
				`
					<span class="fa-sharp fa-solid fa-check fa-1x" style="color: green;"></span>
				`, 
				`
					<button class="btn btn-sm btn-primary" style="margin: 5px">
						<span class="fa-solid fa-pencil"></span>
					</button>
					<button class="btn btn-sm btn-danger" style="margin: 5px">
						<span class="fa-solid fa-trash"></span>
					</button>
				` 
			]];
		});

		new DataTable('#myTable', {
			responsive: true,
			scrollX: true,
			data: aNewUser, 
		    pageLength: 5,
		    destroy: true,
		    // searching: false,
		    lengthMenu: [5, 10, 15, 20, 100, 200, 500],
		    columnDefs: [
  				{ width: "30px", targets: [0] },
  				{ width: "100px", targets: [5, 6] },
  				{ width: "200px", targets: [1] },
  				{ width: "33%", targets: [2, 3, 4] },
		        { className: "centered", targets: [5] }, // Agregar una clase a las columnas especificadas.
		        { orderable: false, targets: [2, 5, 6] }, // Evitar que una columna se ordene.
		        { searchable: false, targets: [0, 5, 6] }, // Evutar que busque en columnas.
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
	})
	.catch((oError) => {
		console.log(oError);
	});
});

const getData = () => {
	const sUrl = new URL('https://jsonplaceholder.typicode.com/users');
	
	return fetch(sUrl)
	.then((oResponse) => oResponse.json())
	.then((oResponse) => {
		return new Promise((resolve, reject) => {
		    return resolve({
		    	status: 1,
		    	data: oResponse
		    });
		});
	})
	.catch((oError) => {
	  return new Promise((resolve, reject) => {
		    return resolve({
		    	status: 0
		    });
		});
	});
}