# Meetmotorbikers - HTML Layout
**Build with Bootstrap v4.0**

**BASICS**
- [x] Assets Structure
- [x] Bootstrap v4.0 Build
- [x] Grunt SCSS Compile/Minify to CSS
- [x] Font Install

**DONE**
- [x] Startseite Web/Mobile
- [x] Startseite -> Eingeloggt
- [x] Map Übersicht Web/Mobile
- [x] Map Übersicht -> Eingeloggt
- [x] Map Übersicht -> Nicht Eingeloggt
- [x] Map Übersicht -> Stadt Suche
- [x] Map Übersicht -> Kalendar
- [x] Map Übersicht -> Einloggen Overlay
- [x] Map Übersicht -> Registrieren Overlay
- [x] Map Übersicht -> Registrieren Mail Overlay
- [x] Map Übersicht -> Thanks Overlay
- [x] Tour Detail Page
- [x] Profil / Freunde
- [x] Profil (loggt) -> Anstehende Touren
- [x] Profil (loggt) -> gefahrene Tour
- [x] Profil (loggt) -> Profil Einstellungen
- [x] Profil (loggt) -> Benachrichtigungen
- [x] Profil (loggt) -> angenommen
- [x] Profil (loggt) -> Profil gesperrt
- [x] Profil (loggt) -> Anstehende Touren
- [x] Tour erstellen

**TODOs**
- [ ] Mobile Überarbeitung

**DEMO**
```
http://meetmotor.timtoews.de/
User: test
Password: testuser_123#

home: http://meetmotor.timtoews.de/

overview: http://meetmotor.timtoews.de/overview.php
overview logged: http://meetmotor.timtoews.de/overview-logged.php

register: http://meetmotor.timtoews.de/overview.php
(link register)

register-email: http://meetmotor.timtoews.de/overview.php
(link register <- on click button "Mit E-Mail registrieren")

einloggen: http://meetmotor.timtoews.de/overview.php
(link einloggen)

thanks: http://meetmotor.timtoews.de/overview.php#thanks

tour-detail: http://meetmotor.timtoews.de/tour-detail.php

tour-detail (logged): http://meetmotor.timtoews.de/tour-detail-logged.php

profil: http://meetmotor.timtoews.de/profil-logged.php

profil notification: http://meetmotor.timtoews.de/profil-notification.php

profil notification congratulation popup: http://meetmotor.timtoews.de/profil-notification.php
(link Annehmen)

profil settings: http://meetmotor.timtoews.de/profil-settings.php

profil blocked: http://meetmotor.timtoews.de/profil-blocked.php

create tour: http://meetmotor.timtoews.de/create-tour.php

```

**How to install?**
```
cd root/assets
npm install 

change css or js? 
-> cd root/assets/ "grunt watch" change files..

```

**package.json**
- devDependencies:
- autoprefixer: ^8.0.0
- grunt: ~0.4.5
- grunt-contrib-clean: ^1.1.0
- grunt-contrib-compress: ~0.13.0
- grunt-contrib-copy: ~1.0.0
- grunt-contrib-sass: ~1.0.0
- grunt-contrib-watch: ~0.6.1
- grunt-cssnano: ^2.1.0
- grunt-newer: ~1.1.2
- grunt-postcss: ^0.9.0
- load-grunt-tasks: ~3.2.0
