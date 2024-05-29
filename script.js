function get_json() {
   let client = document.getElementById("client").value;
   client = "myclient: "+ client
   const myJSON = JSON.stringify(client)
   console.log(myJSON)
}

/*   Récupérer les données du formulaire et générer des paires clef/valeur dans un 'objet':
   { "clef": "valeur" ... }
    Sauvegarder l'objet dans un cookie
    Ajouter un bouton sauvegarder pour demander à l'utilisateur où stocker le fichier. */

    async function sauvegarder() {
      try {
        // create a new handle
        const newHandle = await window.showSaveFilePicker();
    
        // create a FileSystemWritableFileStream to write to
        const writableStream = await newHandle.createWritable();
    
        // write our file
        await writableStream.write("This is my file content");
    
        // close the file and write the contents to disk.
        await writableStream.close();
      } catch (err) {
        console.error(err.name, err.message);
      }
    }
    
