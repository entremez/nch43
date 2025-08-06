# nch43

Aplicación web para la selección de muestras al azar conforme a la **Norma Chilena NCh 43.Of.61**

## 📄 Descripción

Este proyecto permite generar muestras aleatorias desde un lote finito, cumpliendo con los procedimientos establecidos en la norma **NCh 43** emitida por el Instituto Nacional de Normalización de Chile.

## 🚀 Instalación y ejecución

```bash
git clone https://github.com/entremez/nch43.git
cd nch43
npm install     
composer install
cp .env.example .env
php artisan key:generate
php artisan serve  (Si se utiliza en local)
```

> ⚠️ Asegúrate de tener instalado Node.js, según la versión que estés usando.

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

