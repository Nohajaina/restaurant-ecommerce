@extends('layouts.base',[$title = "Admin | Accueil"])
@section('section')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <div class="card p-4 shadow">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="product_name" placeholder="Nom de produit">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control my-3" name="price" placeholder="Prix produit">
                        </div>
                        <div class="form-group">
                            <label for="product_img">Image du produit</label>
                            <input type="file" class="form-control mb-3" id="product_img" name="product_img">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control my-3" name="product_categorie" placeholder="Catégorie de produit">
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="" class="form-control" placeholder="Déscription"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mt-3 px-5 " name="submit">Publier</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
@endsection