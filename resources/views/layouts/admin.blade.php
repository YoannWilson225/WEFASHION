<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('adminCss/style.css') }}" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@include('layouts.inc.adminNavbar')
<div class="container">
    <div class="flex__message">
        <h1 class="welcome">Bienvenue <span class="bold">{{ Auth::user()->name }}</span>, vous pouvez ajouter ou supprimer
        un produit ici.</h1>
        <a href="" id="new" class="btn btn-outline-success">Nouveau</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-11">
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
                                <td>20€</td>
                                <td>Solde</td>
                                <td>
                                    <a href="" class="btn btn-outline-primary">Edit</a>
                                    <a href="" class="btn btn-outline-danger">Supprimer</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Pull Over</td>
                                <td>Homme</td>
                                <td>30€</td>
                                <td>Standard</td>
                                <td>
                                    <a href="" class="btn btn-outline-primary">Edit</a>
                                    <a href="" class="btn btn-outline-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
