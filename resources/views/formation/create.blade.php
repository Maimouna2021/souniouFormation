<form method="POST" action="{{url('createEnregistre')}}">
{{ csrf_field() }}
            <div class="form-group">
                <label for="titre">titre:</label>
                <input type="text" class="form-control" name="titre"/>
            </div>

            <div class="form-group">
                <label for="resume">resume :</label>
                <input type="text" class="form-control" name="resume"/>
            </div>
            
            <div class="form-group">
                <label for="description">description :</label>
                <input type="text" class="form-control" name="description"/>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
  </div>
</div>
