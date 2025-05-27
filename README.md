````markdown
# ✅ Laravel ToDo App

Une application web simple de gestion de tâches (ToDo) développée avec **Laravel**, **Blade**, **Tailwind CSS** et le système d’**authentification Laravel Breeze**.

## 📦 Fonctionnalités

- Authentification (inscription, connexion, déconnexion)
- Ajout, affichage et suppression de tâches
- Tâches associées à chaque utilisateur (sécurisées)
- Interface responsive avec Tailwind CSS
- Architecture propre et organisée (routes, contrôleurs, requêtes)

## 🚀 Installation

### 1. Cloner le projet

```bash
git clone https://github.com/ton-compte/ton-repo.git
cd ton-repo/backend
````

### 2. Installer les dépendances PHP et JS

```bash
composer install
npm install
```

### 3. Configuration de l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

⚠️ Configure ta base de données dans le fichier `.env` :

```
DB_DATABASE=todos
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Migration de la base de données

```bash
php artisan migrate
```

### 5. Compiler les assets

```bash
npm run dev
```

### 6. Lancer le serveur de développement

```bash
php artisan serve
```

## 🔐 Authentification

Utilise Laravel Breeze pour gérer :

* Inscription
* Connexion
* Email vérifié (optionnel)

Pour activer la vérification email, assure-toi d’avoir configuré `MAIL_MAILER` dans `.env`.


## 🗂️ Structure du projet

* `app/Http/Controllers/Web` : contrôleurs web (interface Blade)
* `resources/views/todos` : vues Blade
* `routes/web.php` : routes principales
* `app/Http/Requests` : requêtes de validation
* `app/Models/Todo.php` : modèle Eloquent


## 🤝 Contribuer

Les contributions sont les bienvenues ! Fork le projet, crée une branche, et propose une PR.

```
