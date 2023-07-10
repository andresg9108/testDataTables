const theme = () => {
	const tables = document.querySelectorAll('table');
	
	if(document.documentElement.classList.contains('light-theme')){
		document.documentElement.classList.toggle('light-theme', false);
		document.documentElement.classList.toggle('dark-theme', true);
	
		tables.forEach(table => {
		  table.classList.toggle('table-dark', true);
		});
	}else{
		document.documentElement.classList.toggle('light-theme', true);
		document.documentElement.classList.toggle('dark-theme', false);
	
		tables.forEach(table => {
		  table.classList.toggle('table-dark', false);
		});
	}
}