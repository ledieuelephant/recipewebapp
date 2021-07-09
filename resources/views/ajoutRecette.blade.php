@include('header')

<div class="container">
    <form action="/ajoutRecette" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Nom de la recette</label><br>
            <input type="text" name="nomRecette" id="nomRecette">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Type de recette</label> <br>
            <input type="text" name="typeRecette" id="typeRecette">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Temps de la Recette</label> <br>
            <input type="text" name="timeRecette" id="timeRecette">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Recette</label>
            <textarea class="form-control" name="recette" id="recette" rows="3"></textarea>
        </div>
        <input type="submit" value="Envoyer">
    </form>
</div>
