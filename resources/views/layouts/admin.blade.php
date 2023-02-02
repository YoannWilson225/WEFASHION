@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Listes des produits') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Catégorie</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Etat</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Polo</td>
                                <td>Femme</td>
                                <td>20£</td>
                                <td>Solde</td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Pull Over</td>
                                <td>Homme</td>
                                <td>30£</td>
                                <td>Standard</td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
