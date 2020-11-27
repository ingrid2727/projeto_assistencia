function verificar() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }


  






  let refle = 0;
  function exibir() {
 
	table = document.getElementById("myTable").getElementsByTagName('tbody')[0];
	newRow = table.insertRow(table.length);
	cell1 = newRow.insertCell(0);
	cell1.innerHTML= '<p class="count"></p>';

	cell2 = newRow.insertCell(1);
	cell2.innerHTML = personagem.write;

	cell3 = newRow.insertCell(2);
	cell3.innerHTML = personagem.greem;

	cell4 = newRow.insertCell(3);
    cell4.innerHTML = personagem.black;
    
    cell5 = newRow.insertCell(4);
    cell5.innerHTML = personagem.red;

    cell6 = newRow.insertCell(5);
    cell6.innerHTML = personagem.pink;
    
	cell6 = newRow.insertCell(5);
	cell6.innerHTML = '<a onclick = "editar(this)">Alterar</a> | ' +
					  '<a onclick = "apagar(this)">Apagar</a>';	
}
function apagar(td) {
	linhaSelec = td.parentElement.parentElement;
	document.getElementById('formLista').deleteRow(linhaSelec.rowIndex);
	limpar();
	if(refle == 1){
		refle = 0;
		let title = document.getElementById("titulo").innerHTML = "Lista de Serviço";
		document.getElementById("brow").style.visibility = "visible";
	}
}

function limpar() {
	document.getElementById('').value = "";
	document.getElementById('').value = "";
	document.getElementById('').value = "";
}