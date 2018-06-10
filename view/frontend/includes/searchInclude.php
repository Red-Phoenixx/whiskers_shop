<div id="searchBlock">
  <form method="GET" action="?action=listProducts">
    <div id="search1">
      <p id="formSpeciesBlock">
         Espèce :
         <select name="species" id="species">
           <option value="Tous"></option>
           <option value="Chien">Chien</option>
           <option value="Chat">Chat</option>
           <option value="Rongeurs">Rongeur</option>
         </select>
      </p>
      <p id="formCategoryBlock">
         Catégorie :
         <select name="category" id="category">
           <option value="Tous"></option>
           <option value="Alimentation">Alimentation</option>
           <option value="Accessoire">Accessoire</option>
           <option value="Cage">Cage</option>
           <option value="Santé">Santé</option>
           <option value="Jouet">Jouet</option>
         </select>
      </p>
      <p id="formSearchBlock">
        Recherche :
        <input type="search" name="search" />
      </p>
    </div>

    <div id="search2">
      <p id="formPriceBlock">
       Prix :
        <input type="radio" name="prix" value="croissant" id="Croissant" /> <label for="Croissant">Croissant</label>
        <input type="radio" name="prix" value="decroissant" id="Décroissant" /> <label for="Décroissant">Décroissant</label>
      </p>
      <p id="formRangePriceBlock">
        Min : <input type="number" min="0" max="999999" step="1" value ="0" />€
        Max : <input type="number" min="0" max="999999" step="1" value="999999" />€
      </p>
      <input type="submit" value="Rechercher" id="searchButton" />
    </div>
  </form>
</div>