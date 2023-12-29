<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navigation Bar -->
    <!-- (Inclure votre code de navigation ici) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Project Ecole</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/inscription">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/connexion">Connexion</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="formulaire mt-5">
        <h2 class="text-center mb-4">Inscription</h2>
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nom complet</label>
                <input type="text" class="form-control" name="name" id="name" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">Adresse email</label>
                <input type="email" class="form-control" name="email" id="email" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" id="password" required autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button> 
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <!-- (Inclure votre code JS ici) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
