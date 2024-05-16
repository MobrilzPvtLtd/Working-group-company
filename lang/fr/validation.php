<?php

return [
    'accepted' => ':attribute doit être accepté.',
'active_url' => 'L\'URL :attribute n\'est pas valide.',
'after' => ':attribute doit être une date postérieure à :date.',
'after_or_equal' => ':attribute doit être une date postérieure ou égale à :date.',
'alpha' => ':attribute ne peut contenir que des lettres.',
'alpha_dash' => ':attribute ne peut contenir que des lettres, des chiffres, des tirets et des traits de soulignement.',
'alpha_num' => ':attribute ne peut contenir que des lettres et des chiffres.',
'array' => ':attribute doit être un tableau.',
'before' => ':attribute doit être une date antérieure à :date.',
'before_or_equal' => ':attribute doit être une date antérieure ou égale à :date.',
'between' => [
    'numeric' => ':attribute doit être compris entre :min et :max.',
    'file' => ':attribute doit être compris entre :min et :max kilo-octets.',
    'string' => ':attribute doit être compris entre :min et :max caractères.',
    'array' => ':attribute doit avoir entre :min et :max éléments.',
],
'boolean' => 'Le champ :attribute doit être vrai ou faux.',
'confirmed' => 'La confirmation :attribute ne correspond pas.',
'date' => ':attribute n\'est pas une date valide.',
'date_equals' => ':attribute doit être une date égale à :date.',
'date_format' => ':attribute ne correspond pas au format :format.',
'different' => ':attribute et :other doivent être différents.',
'digits' => ':attribute doit comporter :digits chiffres.',
'digits_between' => ':attribute doit comporter entre :min et :max chiffres.',
'dimensions' => 'Les dimensions de l\'image :attribute ne sont pas valides.',
'distinct' => 'Le champ :attribute a une valeur en double.',
'email' => ':attribute doit être une adresse e-mail valide.',
'ends_with' => ':attribute doit se terminer par l\'une des valeurs suivantes : :values',
'exists' => ':attribute sélectionné n\'est pas valide.',
'file' => ':attribute doit être un fichier.',
'filled' => 'Le champ :attribute doit avoir une valeur.',
'gt' => [
    'numeric' => ':attribute doit être supérieur à :value.',
    'file' => ':attribute doit être supérieur à :value kilo-octets.',
    'string' => ':attribute doit être supérieur à :value caractères.',
    'array' => ':attribute doit avoir plus de :value éléments.',
],
'gte' => [
    'numeric' => ':attribute doit être supérieur ou égal à :value.',
    'file' => ':attribute doit être supérieur ou égal à :value kilo-octets.',
    'string' => ':attribute doit être supérieur ou égal à :value caractères.',
    'array' => ':attribute doit avoir :value éléments ou plus.',
],
'image' => ':attribute doit être une image.',
'in' => ':attribute sélectionné n\'est pas valide.',
'in_array' => 'Le champ :attribute n\'existe pas dans :other.',
'integer' => ':attribute doit être un entier.',
'ip' => ':attribute doit être une adresse IP valide.',
'ipv4' => ':attribute doit être une adresse IPv4 valide.',
'ipv6' => ':attribute doit être une adresse IPv6 valide.',
'json' => ':attribute doit être une chaîne JSON valide.',
'lt' => [
    'numeric' => ':attribute doit être inférieur à :value.',
    'file' => ':attribute doit être inférieur à :value kilo-octets.',
    'string' => ':attribute doit être inférieur à :value caractères.',
    'array' => ':attribute doit avoir moins de :value éléments.',
],
'lte' => [
    'numeric' => ':attribute doit être inférieur ou égal à :value.',
    'file' => ':attribute doit être inférieur ou égal à :value kilo-octets.',
    'string' => ':attribute doit être inférieur ou égal à :value caractères.',
    'array' => ':attribute ne doit pas avoir plus de :value éléments.',
],
'max' => [
    'numeric' => ':attribute ne peut pas être supérieur à :max.',
    'file' => ':attribute ne peut pas être supérieur à :max kilo-octets.',
    'string' => ':attribute ne peut pas être supérieur à :max caractères.',
    'array' => ':attribute ne peut pas avoir plus de :max éléments.',
],
'mimes' => ':attribute doit être un fichier de type : :values.',
'mimetypes' => ':attribute doit être un fichier de type : :values.',
'min' => [
    'numeric' => ':attribute doit être au moins :min.',
    'file' => ':attribute doit être au moins :min kilo-octets.',
    'string' => ':attribute doit être d\'au moins :min caractères.',
    'array' => ':attribute doit avoir au moins :min éléments.',
],
'multiple_of' => ':attribute doit être un multiple de :value.',
'not_in' => ':attribute sélectionné n\'est pas valide.',
'not_regex' => 'Le format :attribute n\'est pas valide.',
'numeric' => ':attribute doit être un nombre.',
'password' => 'Le mot de passe est incorrect.',
'present' => 'Le champ :attribute doit être présent.',
'regex' => 'Le format de :attribute n\'est pas valide.',
'required' => 'Le champ :attribute est requis.',
'required_if' => 'Le champ :attribute est requis lorsque :other est :value.',
'required_unless' => 'Le champ :attribute est requis sauf si :other est dans :values.',
'required_with' => 'Le champ :attribute est requis lorsque :values est présent.',
'required_with_all' => 'Le champ :attribute est requis lorsque :values sont présents.',
'required_without' => 'Le champ :attribute est requis lorsque :values n\'est pas présent.',
'required_without_all' => 'Le champ :attribute est requis lorsque aucun de :values n\'est présent.',
'same' => ':attribute et :other doivent correspondre.',
'size' => [
    'numeric' => ':attribute doit être :size.',
    'file' => ':attribute doit être de :size kilo-octets.',
    'string' => ':attribute doit être de :size caractères.',
    'array' => ':attribute doit contenir :size éléments.',
],
'starts_with' => ':attribute doit commencer par l\'une des valeurs suivantes : :values',
'string' => ':attribute doit être une chaîne de caractères.',
'timezone' => ':attribute doit être une zone valide.',
'unique' => ':attribute a déjà été pris.',
'uploaded' => 'Le téléchargement de :attribute a échoué.',
'url' => 'Le format de :attribute n\'est pas valide.',
'uuid' => ':attribute doit être un UUID valide.',

/*
|--------------------------------------------------------------------------
| Lignes de langage de validation personnalisées
|--------------------------------------------------------------------------
|
| Ici, vous pouvez spécifier des messages de validation personnalisés pour les attributs en utilisant la
| convention "attribute.rule" pour nommer les lignes. Cela nous permet de
| spécifier rapidement une ligne de langue personnalisée spécifique pour une règle d'attribut donnée.
|
*/

'custom' => [
],

/*
|--------------------------------------------------------------------------
| Attributs de validation personnalisés
|--------------------------------------------------------------------------
|
| Les lignes de langage suivantes sont utilisées pour échanger des espaces réservés d'attribut
| avec quelque chose de plus convivial pour le lecteur comme Adresse e-mail à la place de "email". Cela nous aide simplement à rendre les messages un peu plus propres.
|
*/

'attributes' => [
    'name' => 'Nom',
    'username' => 'Nom d\'utilisateur',
    'email' => 'Adresse e-mail',
    'first_name' => 'Prénom',
    'last_name' => 'Nom de famille',
    'password' => 'Mot de passe',
    'password_confirmation' => 'Confirmation du mot de passe',
    'city' => 'Ville',
    'country' => 'Pays',
    'address' => 'Adresse',
    'phone' => 'Téléphone',
    'mobile' => 'Portable',
    'age' => 'Âge',
    'sex' => 'Sexe',
    'gender' => 'Genre',
    'day' => 'Jour',
    'month' => 'Mois',
    'year' => 'Année',
    'hour' => 'Heure',
    'minute' => 'Minute',
    'second' => 'Seconde',
    'title' => 'Titre',
    'text' => 'Texte',
    'content' => 'Contenu',
    'description' => 'Description',
    'excerpt' => 'Extrait',
    'date' => 'Date',
    'time' => 'Heure',
    'available' => 'Disponible',
    'size' => 'Taille',
    'terms' => 'Termes',
    'province' => 'Province',
],

];
