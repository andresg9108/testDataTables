document.addEventListener('DOMContentLoaded', (e) => {
	new DataTable('#myTable', {
		ajax: "./php/",
		processing: true,
		serverSide: true
	});
});