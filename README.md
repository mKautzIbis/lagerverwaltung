# Lagerverwaltung - Produktverwaltungssystem

## Überblick

Dies ist ein Lagerverwaltungssystem, entwickelt mit Laravel und Livewire für Lernzwecke. 
Die Anwendung dient der Verwaltung von Produkten in einem Lagerbestand. In einer Coding-Session wurden CRUD Funktionen
für die Produktverwaltung implementiert. Das Ein- und Ausbuchen des Lagerbestands fehlt noch.


## Hauptfunktionen

- Übersichtliche Darstellung aller Produkte
- Einfaches Hinzufügen, Bearbeiten und Löschen der Produkte
- Echtzeit-Interaktion ohne Seitenneuladen

## Systemvoraussetzungen

- PHP 8.1 oder höher
- Composer
- Node.js & npm
- MySQL/MariaDB Datenbank
- Webserver (z.B. Apache, Nginx)

## Installation

1. **Projekt klonen**
   ```bash
   git clone
   cd lagerverwaltung
   ```

2. **Abhängigkeiten installieren**
   ```bash
   composer install
   npm install
   ```

3. **Umgebungsvariablen einrichten**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Datenbank konfigurieren**
   - Datenbank in Ihrer MySQL/MariaDB-Instanz erstellen
   - Datenbankzugangsdaten in der `.env`-Datei anpassen

5. **Datenbankmigrationen ausführen**
   ```bash
   php artisan migrate --seed
   ```

6. **Frontend-Assets kompilieren**
   ```bash
   npm run dev
   # Oder für die Produktion:
   # npm run build
   ```

7. **Anwendung starten**
   Laravel Herd -> Sites -> Add -> bestehendes Projekt

## Wichtige Konsolenbefehle

| Befehl | Beschreibung                                          |
|--------|-------------------------------------------------------|
| `npm run dev` | Kompiliert Live-Assets für die Entwicklung            |
| `npm run build` | Kompiliert und optimiert Assets für die Produktion    |
| `php artisan make:livewire Komponentenname` | Erstellt eine neue Livewire-Komponente                |
| `php artisan make:model Modellname -mf` | Erstellt ein neues Modell mit Migration und Factory   |
| `php artisan migrate` | Führt ausstehende Datenbankmigrationen aus            |
| `php artisan migrate:refresh --seed` | Setzt die Datenbank zurück und füllt sie mit Testdaten |

## Entwicklung

### Livewire-Komponenten

Die Anwendung nutzt Livewire für interaktive Benutzeroberflächen. Neue Komponenten können mit folgendem Befehl erstellt werden:

```bash
php artisan make:livewire Products/ProductList
```

### Modelle

Für neue Modelle können in einem Befehl Migration und Factory erstellt werden:

```bash
php artisan make:model Product -mf
```

## Lizenz

Dieses Projekt ist für Übungszwecke erstellt worden.
