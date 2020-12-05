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


  
  let flag = 0;

  document.getElementById("botaozinho").addEventListener('click',function () {
    if(!document.getElementById("nick").value || !document.getElementById("fc") || !document.getElementById("hp")){
      alert("Preencha todos os campos !");
    }
    else{
      exibir();
      limpar();
    }
  });
  function salvar() {
    personagem = { nick: document.getElementById('nick').value,
             hp: document.getElementById('hp').value,
             fc: document.getElementById('fc').value };
  
    return personagem;
  }
  
  function exibir() {
    personagem = salvar();
    table = document.getElementById("formLista").getElementsByTagName('tbody')[0];
    newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = '<p class="count"></p>';
  
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = personagem.nick;
  
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = personagem.hp;
  
    cell3 = newRow.insertCell(3);
    cell3.innerHTML = personagem.fc;
  
    cell3 = newRow.insertCell(4);
    cell3.innerHTML = '<a onclick = "editar(this)">Alterar</a> | ' +
              '<a onclick = "apagar(this)">Apagar</a>';	
  }
  
  function editar(td) {
    p = salvar();
    linhaSelec = td.parentElement.parentElement;
    if(flag==0){
      flag =1;
      let title = document.getElementById("titulo").innerHTML = "Alterar Ficha";
      document.getElementById("botaozinho").style.visibility = "hidden";
    }
    else if(flag == 1){
      flag = 0;
      let title = document.getElementById("titulo").innerHTML = "Cadastrar Ficha";
      document.getElementById("botaozinho").style.visibility = "visible";
    }
    
    v1 = document.getElementById('nick').value = linhaSelec.cells[1].innerHTML;
    v2 = document.getElementById('hp').value = linhaSelec.cells[2].innerHTML;
    v3 = document.getElementById('fc').value = linhaSelec.cells[3].innerHTML;
  
    if (p.nick != v1 || p.hp != v2 || p.fc != v3) {
      linhaSelec.cells[1].innerHTML = p.nick;
      linhaSelec.cells[2].innerHTML = p.hp;
      linhaSelec.cells[3].innerHTML = p.fc;
    }
  }
  
  function apagar(td) {
    linhaSelec = td.parentElement.parentElement;
    document.getElementById('formLista').deleteRow(linhaSelec.rowIndex);
    limpar();
    if(flag == 1){
      flag = 0;
      let title = document.getElementById("titulo").innerHTML = "Cadastrar Ficha";
      document.getElementById("botaozinho").style.visibility = "visible";
    }
  }
  
  function limpar() {
    document.getElementById('nick').value = "";
    document.getElementById('hp').value = "";
    document.getElementById('fc').value = "";
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