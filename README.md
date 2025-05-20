```md
# ToDos Fullstack App

Ce projet est une application fullstack Laravel + React avec PostgreSQL comme base de données.  
Il utilise GraphQL pour la communication API et une architecture en monorepo (`/frontend` + `/backend`).

---

## 📁 Structure du projet

```

ToDos/
├── backend/        → Application Laravel (API + Auth)
├── frontend/       → Application React 
├── data/           → (optionnel) Docker/PostgreSQL config si utilisée
└── README.md

````

---

## ⚙️ Prérequis

- PHP ≥ 8.2
- Composer ≥ 2.x
- Node.js ≥ 18
- Docker (si vous utilisez PostgreSQL en container)
- PostgreSQL ≥ 14 (installé localement **ou** via Docker)

---

## 🚀 Installation (Backend Laravel)

1. **Cloner le projet** :

   ```bash
   git clone https://github.com/anassezzine/ToDos.git
   cd ToDos/backend
````

2. **Installer les dépendances PHP** :

   ```bash
   composer install
   ```

3. **Copier le fichier `.env`** :

   ```bash
   cp .env.example .env
   ```

4. **Configurer la base de données** dans `.env` :

   Exemple avec PostgreSQL (via Docker) :

   ```env
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=todo_app
   DB_USERNAME=postgres
   DB_PASSWORD=password
   ```

5. **Générer la clé de l'application** :

   ```bash
   php artisan key:generate
   ```

6. **Exécuter les migrations** :

   ```bash
   php artisan migrate
   ```

---

## 🐳 Utilisation de Docker pour PostgreSQL

Si vous utilisez Docker, assurez-vous que le container PostgreSQL est en cours d’exécution :

```bash
docker ps
```

> Le port `5432` doit être exposé (voir colonne "PORTS").
> Si aucun container n’est présent, vous pouvez créer un `docker-compose.yml`.

---

## 🔐 Authentification API

Le projet utilise **Laravel Breeze** en mode API :

```bash
composer require laravel/breeze --dev
php artisan breeze:install api
php artisan migrate
```

Cela ajoute les routes suivantes :

* `POST /api/register`
* `POST /api/login`
* `GET /api/user` (avec token Bearer)

---

## ✍️ Auteur

* [Anass Ezzine](https://github.com/anassezzine)

```
