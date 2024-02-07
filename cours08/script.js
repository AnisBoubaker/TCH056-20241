
//Le id reçu est un nombre
const ajouterArticle = function(id, titre, contenu){
    if(typeof(id)!= 'number')
    {
        console.log("Le id n'est pas conforme");
        return;
    }

    const parent = document.querySelector('main');
    const nouvelArticle = document.createElement('article');

    nouvelArticle.setAttribute('id', 'article'+id);
    

    //Attention, cette methode comporte des risques!
    // nouvelArticle.innerHTML = `<h2>${titre}</h2><p>${contenu}</p>`;

     parent.append(nouvelArticle);

    //Creation de la balise titre de type H2
    const baliseTitre = document.createElement('h2');
    baliseTitre.textContent = titre;

    //Creation de la balise paragraphe pour le contenu
    const balisePara = document.createElement('p');
    balisePara.innerHTML = contenu;

    nouvelArticle.append(baliseTitre, balisePara);

    parent.appendChild(nouvelArticle);
}


//document.addEventListener('DOMContentLoaded', () => {
    ajouterArticle(10, 'Bonjour', 'Ceci est article 10');
//})

