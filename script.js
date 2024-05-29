function get_json() {

   let client ="'client: '"+ document.getElementById("client").value;
   let commande ="'commande: '"+ document.getElementById("commande").value
   let recu ="'recu: '"+ document.getElementById("recu").value
   let limite ="'limite: '"+ document.getElementById("limite").value

   const myJSON = JSON.stringify(client +","+ commande +","+ recu +","+ limite)
   console.log(myJSON)
}

/* Récupérer les données du formulaire et générer des paires clef/valeur dans un 'objet':
   { "clef": "valeur" ... }
    Sauvegarder l'objet dans un cookie/localstorage */
