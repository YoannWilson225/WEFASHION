@php
function genererChaineAleatoire($longueur = 5)
        {
            $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $longueurMax = strlen($caracteres);
            $chaineAleatoire = '';
            for ($i = 0; $i < $longueur; $i++)
            {
                $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
            }
                return $chaineAleatoire;
        }
@endphp

<div class="card-body">
    <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <select class="form-select" name="category_id">
                    <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Description</label>
                <textarea name="description" rows="3"  class="form-control"></textarea>
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Prix</label>
                <input type="number" name="prix">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Taille</label>
                <input type="text" class="form-control" name="taille">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Is_online</label>
                <input type="checkbox" name="is_online">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Etat</label>
                <input type="text" class="form-control" name="etat">
            </div>
            <div class="col-md-6 mb-3">
                <label for="">Reference</label>
                <input type="text" class="form-control" name="reference" value="{{genererChaineAleatoire(16)}}">
            </div>
            <div class="col-md-12 mb-3">
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

