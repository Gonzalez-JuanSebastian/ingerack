# Ingerack

**Ingerack** es un sitio web desarrollado en **Laravel 11** con **Inertia.js**, **Vue 3** y **TailwindCSS**, diseñado para presentar los servicios de **diseño, instalación y mantenimiento de sistemas de refrigeración industrial**.  
Su objetivo es ofrecer una plataforma moderna, escalable y rápida para mostrar la experiencia técnica y proyectos de la empresa **Kambio Kreativo**.

---

## 🚀 Tecnologías principales

| Componente | Tecnología |
|-------------|-------------|
| Backend | Laravel 11 (PHP ^8.2) |
| Frontend | Inertia.js + Vue 3 |
| Estilos | TailwindCSS |
| Autenticación | Laravel Sanctum |
| Entorno local | Laravel Sail / Artisan |
| Build / Dev | Vite |
| Testing | PHPUnit |
| Despliegue | Configuración lista para Vercel |

---

## ⚙️ Requisitos

- PHP **8.2 o superior**
- Composer **2.x**
- Node.js **18+**
- NPM o Yarn
- MySQL o SQLite
- Git

---

## 🧩 Instalación

Clona el repositorio e instala dependencias del backend y frontend:

```bash
git clone https://github.com/Gonzalez-JuanSebastian/ingerack.git
cd ingerack

# Dependencias PHP
composer install

# Dependencias JS
npm install

# Copiar entorno base
cp .env.example .env

# Generar key de la app
php artisan key:generate
```

---

## 🧠 Configuración del entorno

Edita el archivo `.env` y completa los valores principales según tu entorno:

```bash
APP_NAME=Ingerack
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ingerack
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=smtp.tu-dominio.com
MAIL_PORT=587
MAIL_USERNAME=usuario
MAIL_PASSWORD=clave
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=info@ingerack.com
MAIL_FROM_NAME="Ingerack"
```

---

## 🧪 Migraciones y datos iniciales

Para preparar la base de datos:

```bash
php artisan migrate
php artisan db:seed
```

> Si usas SQLite, asegúrate de que el archivo `database/database.sqlite` exista.

---

## 💻 Ejecución en desarrollo

Inicia el servidor de desarrollo (Laravel + Vite):

```bash
php artisan serve
npm run dev
```

Visita: [http://localhost:8000](http://localhost:8000)

---

## 🏗️ Estructura del proyecto

```
app/                # Lógica del backend y controladores
resources/js/       # Componentes Vue e integración con Inertia
resources/views/    # Vistas base Blade
routes/web.php      # Definición de rutas principales
database/           # Migraciones, seeders y factories
public/             # Archivos públicos y assets compilados
```

---

## 🧰 Scripts útiles (Composer)

| Comando | Descripción |
|----------|--------------|
| `composer install` | Instala dependencias PHP |
| `composer dev` | Inicia el entorno con servidor, colas, logs y Vite (modo concurrente) |
| `php artisan key:generate` | Genera la APP_KEY |
| `php artisan migrate` | Ejecuta migraciones |
| `php artisan optimize` | Optimiza la aplicación |

---

## 🧭 Rutas y autenticación

El proyecto usa **Laravel Breeze** para autenticación base y **Sanctum** para la gestión de sesiones y tokens.

Para ver las rutas disponibles:
```bash
php artisan route:list
```

---

## 🧱 Despliegue

El proyecto incluye un archivo `vercel.json`, por lo que puede desplegarse fácilmente en **Vercel** o cualquier hosting compatible con Laravel.

Pasos típicos:
1. Subir el proyecto a GitHub.  
2. Conectar el repo con Vercel.  
3. Configurar variables de entorno en el panel de Vercel.  
4. Deploy automático tras cada push a `main`.

---

## 🧑‍💻 Autoría

Desarrollado por **Juan Sebastián González – Kambio Kreativo**

[GitHub](https://github.com/Gonzalez-JuanSebastian)  
[LinkedIn](https://linkedin.com/in/juan-sebastian-gonzalez)  
[Correo](mailto:info@kambiokreativo.com)

---

## 📜 Licencia

Este proyecto está bajo la licencia **MIT**.  
Consulta el archivo `LICENSE` para más detalles.

---

## 🌟 Contribuciones

Las contribuciones son bienvenidas.  
Puedes hacer un fork del repositorio, crear una rama y enviar un **pull request** con tus mejoras o sugerencias.
