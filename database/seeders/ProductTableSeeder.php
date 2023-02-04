<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


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

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Complet Blanc";
        $product->description = "Un pull et un jogging blanc";
        $product->prix = rand(10,80);
        $product->taille = "XS";
        $product->image = "hom (1).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Haut fun";
        $product->description = "Chapeau chaine & chemise";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (2).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Complet été";
        $product->description = "Pull sans capuche & jogging";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (3).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Mode sérieux";
        $product->description = "Chemise & pantalon tissu";
        $product->prix = rand(10,80);
        $product->taille = "L";
        $product->image = "hom (4).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le geek";
        $product->description = "Chemise jean & haut rayure";
        $product->prix = rand(10,80);
        $product->taille = "S";
        $product->image = "hom (5).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le stromae";
        $product->description = "haut rayure & pantalon tissu";
        $product->prix = rand(10,80);
        $product->taille = "S";
        $product->image = "hom (6).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le Bg";
        $product->description = "Menteau jean";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (7).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Mode hiver";
        $product->description = "Chemise tissu & pantalon blanc";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (8).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Hyppy";
        $product->description = "Chemise année 80";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (9).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Bad boy";
        $product->description = "Chemise & culotte jean";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (10).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();


    // ===================================================
    // ===================================================
    // ===================================================


        $product = new Product();
        $product->category_id = 1;
        $product->name = "Complet Blanc";
        $product->description = "Un pull et un jogging blanc";
        $product->prix = rand(10,80);
        $product->taille = "XS";
        $product->image = "hom (1).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Haut fun";
        $product->description = "Chapeau chaine & chemise";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (2).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Complet été";
        $product->description = "Pull sans capuche & jogging";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (3).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Mode sérieux";
        $product->description = "Chemise & pantalon tissu";
        $product->prix = rand(10,80);
        $product->taille = "L";
        $product->image = "hom (4).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le geek";
        $product->description = "Chemise jean & haut rayure";
        $product->prix = rand(10,80);
        $product->taille = "S";
        $product->image = "hom (5).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le stromae";
        $product->description = "haut rayure & pantalon tissu";
        $product->prix = rand(10,80);
        $product->taille = "S";
        $product->image = "hom (6).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le Bg";
        $product->description = "Menteau jean";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (7).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Mode hiver";
        $product->description = "Chemise tissu & pantalon blanc";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (8).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Hyppy";
        $product->description = "Chemise année 80";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (9).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Bad boy";
        $product->description = "Chemise & culotte jean";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (10).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        // ===================================================
        // ===================================================
        // ===================================================


        $product = new Product();
        $product->category_id = 1;
        $product->name = "Complet Blanc";
        $product->description = "Un pull et un jogging blanc";
        $product->prix = rand(10,80);
        $product->taille = "XS";
        $product->image = "hom (1).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Haut fun";
        $product->description = "Chapeau chaine & chemise";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (2).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Complet été";
        $product->description = "Pull sans capuche & jogging";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (3).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Mode sérieux";
        $product->description = "Chemise & pantalon tissu";
        $product->prix = rand(10,80);
        $product->taille = "L";
        $product->image = "hom (4).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le geek";
        $product->description = "Chemise jean & haut rayure";
        $product->prix = rand(10,80);
        $product->taille = "S";
        $product->image = "hom (5).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le stromae";
        $product->description = "haut rayure & pantalon tissu";
        $product->prix = rand(10,80);
        $product->taille = "S";
        $product->image = "hom (6).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le Bg";
        $product->description = "Menteau jean";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (7).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Mode hiver";
        $product->description = "Chemise tissu & pantalon blanc";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (8).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Hyppy";
        $product->description = "Chemise année 80";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (9).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Bad boy";
        $product->description = "Chemise & culotte jean";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (10).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        // ===================================================
        // ===================================================
        // ===================================================


        $product = new Product();
        $product->category_id = 1;
        $product->name = "Complet Blanc";
        $product->description = "Un pull et un jogging blanc";
        $product->prix = rand(10,80);
        $product->taille = "XS";
        $product->image = "hom (1).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Haut fun";
        $product->description = "Chapeau chaine & chemise";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (2).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Complet été";
        $product->description = "Pull sans capuche & jogging";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (3).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Mode sérieux";
        $product->description = "Chemise & pantalon tissu";
        $product->prix = rand(10,80);
        $product->taille = "L";
        $product->image = "hom (4).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le geek";
        $product->description = "Chemise jean & haut rayure";
        $product->prix = rand(10,80);
        $product->taille = "S";
        $product->image = "hom (5).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le stromae";
        $product->description = "haut rayure & pantalon tissu";
        $product->prix = rand(10,80);
        $product->taille = "S";
        $product->image = "hom (6).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Le Bg";
        $product->description = "Menteau jean";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (7).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Mode hiver";
        $product->description = "Chemise tissu & pantalon blanc";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (8).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Hyppy";
        $product->description = "Chemise année 80";
        $product->prix = rand(10,80);
        $product->taille = "XL";
        $product->image = "hom (9).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 1;
        $product->name = "Bad boy";
        $product->description = "Chemise & culotte jean";
        $product->prix = rand(10,80);
        $product->taille = "M";
        $product->image = "hom (10).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();


        // ===================================================
        // ===================================================
        // ===================================================
        // ===================================================
        // ===================================================
        // ===================================================

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Eté léger";
        $product->description = "Chemise blanche & pantalon noir";
        $product->prix = rand(8,56);
        $product->taille = "M";
        $product->image = "fem (1).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Night";
        $product->description = "Nuisette rayure";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (2).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Lucky";
        $product->description = "Chemise verte";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (3).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Work";
        $product->description = "Body sweat bleu & pantalon marron";
        $product->prix = rand(8,56);
        $product->taille = "XS";
        $product->image = "fem (4).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Crhistie";
        $product->description = "Chemise fleur & jean";
        $product->prix = rand(8,56);
        $product->taille = "L";
        $product->image = "fem (5).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Tokyo";
        $product->description = "Chemise velour bleue";
        $product->prix = rand(8,56);
        $product->taille = "S";
        $product->image = "fem (6).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Bad Girl";
        $product->description = "Chemise cowboy";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (7).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Campagne";
        $product->description = "Robe rayure";
        $product->prix = rand(8,56);
        $product->taille = "L";
        $product->image = "fem (8).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Soft vet";
        $product->description = "Haut rayure";
        $product->prix = rand(8,56);
        $product->taille = "XS";
        $product->image = "fem (9).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Sky";
        $product->description = "Combinaison bleu ciel";
        $product->prix = rand(8,56);
        $product->taille = "M";
        $product->image = "fem (10).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();


        // ===================================================
        // ===================================================
        // ===================================================


        $product = new Product();
        $product->category_id = 2;
        $product->name = "Eté léger";
        $product->description = "Chemise blanche & pantalon noir";
        $product->prix = rand(8,56);
        $product->taille = "M";
        $product->image = "fem (1).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Night";
        $product->description = "Nuisette rayure";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (2).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Lucky";
        $product->description = "Chemise verte";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (3).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Work";
        $product->description = "Body sweat bleu & pantalon marron";
        $product->prix = rand(8,56);
        $product->taille = "XS";
        $product->image = "fem (4).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Crhistie";
        $product->description = "Chemise fleur & jean";
        $product->prix = rand(8,56);
        $product->taille = "L";
        $product->image = "fem (5).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Tokyo";
        $product->description = "Chemise velour bleue";
        $product->prix = rand(8,56);
        $product->taille = "S";
        $product->image = "fem (6).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Bad Girl";
        $product->description = "Chemise cowboy";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (7).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Campagne";
        $product->description = "Robe rayure";
        $product->prix = rand(8,56);
        $product->taille = "L";
        $product->image = "fem (8).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Soft vet";
        $product->description = "Haut rayure";
        $product->prix = rand(8,56);
        $product->taille = "XS";
        $product->image = "fem (9).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Sky";
        $product->description = "Combinaison bleu ciel";
        $product->prix = rand(8,56);
        $product->taille = "M";
        $product->image = "fem (10).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        // ===================================================
        // ===================================================
        // ===================================================

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Eté léger";
        $product->description = "Chemise blanche & pantalon noir";
        $product->prix = rand(8,56);
        $product->taille = "M";
        $product->image = "fem (1).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Night";
        $product->description = "Nuisette rayure";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (2).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Lucky";
        $product->description = "Chemise verte";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (3).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Work";
        $product->description = "Body sweat bleu & pantalon marron";
        $product->prix = rand(8,56);
        $product->taille = "XS";
        $product->image = "fem (4).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Crhistie";
        $product->description = "Chemise fleur & jean";
        $product->prix = rand(8,56);
        $product->taille = "L";
        $product->image = "fem (5).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Tokyo";
        $product->description = "Chemise velour bleue";
        $product->prix = rand(8,56);
        $product->taille = "S";
        $product->image = "fem (6).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Bad Girl";
        $product->description = "Chemise cowboy";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (7).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Campagne";
        $product->description = "Robe rayure";
        $product->prix = rand(8,56);
        $product->taille = "L";
        $product->image = "fem (8).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Soft vet";
        $product->description = "Haut rayure";
        $product->prix = rand(8,56);
        $product->taille = "XS";
        $product->image = "fem (9).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Sky";
        $product->description = "Combinaison bleu ciel";
        $product->prix = rand(8,56);
        $product->taille = "M";
        $product->image = "fem (10).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        // ===================================================
        // ===================================================
        // ===================================================

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Eté léger";
        $product->description = "Chemise blanche & pantalon noir";
        $product->prix = rand(8,56);
        $product->taille = "M";
        $product->image = "fem (1).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Night";
        $product->description = "Nuisette rayure";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (2).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Lucky";
        $product->description = "Chemise verte";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (3).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Work";
        $product->description = "Body sweat bleu & pantalon marron";
        $product->prix = rand(8,56);
        $product->taille = "XS";
        $product->image = "fem (4).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Crhistie";
        $product->description = "Chemise fleur & jean";
        $product->prix = rand(8,56);
        $product->taille = "L";
        $product->image = "fem (5).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Tokyo";
        $product->description = "Chemise velour bleue";
        $product->prix = rand(8,56);
        $product->taille = "S";
        $product->image = "fem (6).jpg";
        $product->is_online = 1;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Bad Girl";
        $product->description = "Chemise cowboy";
        $product->prix = rand(8,56);
        $product->taille = "XL";
        $product->image = "fem (7).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Campagne";
        $product->description = "Robe rayure";
        $product->prix = rand(8,56);
        $product->taille = "L";
        $product->image = "fem (8).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Soft vet";
        $product->description = "Haut rayure";
        $product->prix = rand(8,56);
        $product->taille = "XS";
        $product->image = "fem (9).jpg";
        $product->is_online = 0;
        $product->etat = "solde";
        $product->reference = genererChaineAleatoire(16);
        $product->save();

        $product = new Product();
        $product->category_id = 2;
        $product->name = "Sky";
        $product->description = "Combinaison bleu ciel";
        $product->prix = rand(8,56);
        $product->taille = "M";
        $product->image = "fem (10).jpg";
        $product->is_online = 1;
        $product->etat = "standard";
        $product->reference = genererChaineAleatoire(16);
        $product->save();
    }
}


