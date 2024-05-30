function get_json() {

   let client = "client: " + document.getElementById("client").value;
   let commande = "commande: " + document.getElementById("commande").value
   let recu = "recu: " + document.getElementById("recu").value
   let limite = "limite: " + document.getElementById("limite").value
   let facture = client + "," + commande + "," + recu + "," + limite;
   const myJSON = JSON.stringify(facture)
   let num = new Date()
   num = JSON.stringify(num)
   localStorage.setItem(num, myJSON)

   let ligne = localStorage.getItem(num)

   const tbl = document.createElement("table");
   const tblBody = document.createElement("tbody");
   for (let i=0;i<2;i++) {
      const row = document.createElement("tr");
      for (let j = 0; j<ligne.length;j++) {
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
/* Récupérer les données du formulaire et générer des paires clef/valeur dans un 'objet':
   { "clef": "valeur" ... }
    Sauvegarder l'objet dans un cookie/localstorage */
