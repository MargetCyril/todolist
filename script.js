function get_json() {

   let client = "client: " + document.getElementsByName("client").value;
   let commande = "commande: " + document.getElementsByName("commande").value
   let recu = "recu: " + document.getElementsByName("recu").value
   let limite = "limite: " + document.getElementsByName("limite").value
   let facture = client + "," + commande + "," + recu + "," + limite;
   const myJSON = JSON.stringify(facture)
   let num = new Date()
   num = JSON.stringify(num)
   let PHP = num + ", "+ myJSON;
   document.getElementsByName("container").innerHTML = "PHP"
}

function tableau() {
  const tbl = document.createElement("table");
   const tblBody = document.createElement("tbody");
   for (let i=0;i<1;i++) {
      const row = document.createElement("tr");
      for (let j = 0; j<6;j++) {
         const cell = document.createElement("td");
         const cellText = document.createTextNode(`cell in row ${i}, collumn ${j}`);
         cell.appendChild(cellText);
         row.appendChild(cell);
      }
      tblBody.appendChild(row);
   }
   tbl.appendChild(tblBody);
   document.body.appendChild(tbl);
   tbl.setAttribute("border", "2") 
}

   /* const row = document.createElement("tr");
      const cell = document.createElement("td");
      const cellText = document.createTextNode(``);
      cell.appendChild(cellText)
 */
/* Récupérer les données du formulaire et générer des paires clef/valeur dans un 'objet':
   { "clef": "valeur" ... }
    Sauvegarder l'objet dans un cookie/localstorage */



