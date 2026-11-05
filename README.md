# nch43

Aplicación web para la selección de muestras al azar conforme a la **Norma Chilena NCh 43.Of.61**

## 📄 Descripción

Este proyecto permite generar muestras aleatorias desde un lote finito, cumpliendo con los procedimientos establecidos en la norma **NCh 43** emitida por el Instituto Nacional de Normalización de Chile.

## 🚀 Instalación y ejecución

Requisitos: PHP 8.3 o superior con las extensiones `gd`, `zip`, `mbstring`, `xml` y `dom`, y Composer 2. No usa base de datos ni Node.js.

```bash
git clone https://github.com/entremez/nch43.git
cd nch43
composer install
cp .env.example .env
php artisan key:generate
php artisan serve  (Si se utiliza en local)
```

En producción: `composer install --no-dev --optimize-autoloader`, `APP_ENV=production` y `APP_DEBUG=false` en el `.env`, y luego `php artisan optimize`. La carpeta raíz del servidor web debe ser `public/`, y `storage/` y `bootstrap/cache/` deben tener permiso de escritura. `/up` responde 200 si el sitio está funcionando, lo que sirve para monitorearlo.

Tests: `php artisan test`.

## 🐳 Docker

Para levantar el sitio en cualquier equipo con Docker (por ejemplo, un PC o un VPS), sin instalar PHP:

```bash
git clone https://github.com/entremez/nch43.git
cd nch43
docker compose up -d --build
```

El sitio queda en http://localhost:8043. La imagen trae PHP 8.3, Apache y OPcache, y corre en modo producción (`APP_DEBUG=false`).

- **Puerto u otra URL:** `NCH43_PORT=80 APP_URL=https://nch43.cl docker compose up -d`. También se pueden dejar esas variables en un archivo `.env` junto a `docker-compose.yml`.
- **Clave de la app (`APP_KEY`):** si no se define, se genera la primera vez y se guarda en el volumen `storage`, así que se mantiene entre reinicios.
- **Actualizar:** `git pull` y luego `docker compose up -d --build`.
- **Revisar:** `docker compose ps` muestra `healthy` cuando `/up` responde. Los errores se ven con `docker compose logs -f`.
- **Detener:** `docker compose down`. Con `-v` también se borra el volumen, incluida la clave generada.

En un servidor público, se pone delante un proxy con HTTPS (Nginx, Caddy o Traefik) que redirija al puerto del contenedor.

## 🧪 Uso

1. Ingresa el **tamaño del lote (N)**.
2. Ingresa el **número de muestras a seleccionar (n)**.
3. Puedes:
   - Ingresar manualmente la fila/columna inicial.
   - O dejar que el sistema genere una posición aleatoria.
4. El sistema devolverá la lista de unidades seleccionadas del lote.


## 🏛️ Referencias normativas

- **NCh 43.Of.61** – Selección de muestras al azar. Instituto Nacional de Normalización (INN), Chile.

## 📄 Licencia

Desarrollado por entremez.cl – Proyecto: http://nch43.cl
📄 Licencia
Este proyecto está licenciado bajo la Licencia MIT. Esto significa que puedes usar, copiar, modificar, fusionar, publicar, distribuir, sublicenciar y/o vender copias del software, siempre que mantengas el aviso de derechos de autor y la renuncia de responsabilidad en todas las copias o partes sustanciales del software.

Para más detalles, revisa el archivo LICENSE incluido en este repositorio.

