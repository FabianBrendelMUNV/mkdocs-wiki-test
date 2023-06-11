---
title: Technisches Setup
date: 25.05.2023
comments: true
weight: 2
---
# Beschreibung des technischen Setups

## Executive Summary
Das MaaS-NRW-Wiki ist eine MkDocs-Website, die in einem Github-Repository liegt. Durch automatisierte (CI/CD) Prozesse ("Github Actions") wird bei Änderungen oder durch manuelles Anstoßen aus der "Rohversion" die echte Webseite erzeugt und in das Cloudflare CDN hochgeladen.  

**Vorteile** diese Setups sind:  

- Initial keine Kosten bei Github (die Limits bei den benötigten Github-Actions für Free-Accounts sind großzügig)
- Initial keine Kosten für Hosting (die Limits bei Cloudflare für Free-Accounts sind großzügig)
- Die Lösung ist portabel und kann z.B. bei Überschreiten der Cloudflare-Limits schnell und einfach woanders hochgeladen werden
- Für das Hosting reicht ein sehr einfacher Webserver, weil keine Funkionalität wie PHP, PERL, Datenbanken, etc. benötigt werden
- Keine "aktive" Website => Keine Pflege wegen Sicherheitslücken, Software-Updates, etc. notwendig

**Nachteile** dieses Setups sind:  

- Minimal höhere Lernkurve zur Bearbeitung der ersten Seite als bei einem klassischen Wiki
- Alle "aktiven" User (für Kommentare oder zur Bearbeitung) benötigen einen Github-Account

## Deployment-Setup
Das Deployment der Webseite ist zweistufig angelegt:
1. Bei jeder Änderung im Github-Repository wird ein Rendering durch MkDocs angestoßen und das Ergebnis auf die "preview-site" branch in Github gepusht. Änderungen in dieser Branch werden von Cloudflare automatisch erkannt und die Preview-Website wird aktualisiert. Zudem ermöglicht das Pushen der gerenderten Seite in eine eigene Branch auch nochmal eine Übersicht der Änderungen zwischen den einzelnen Versionen.
1. Der Workflow zum deployen der Live-Website kann entweder manuell oder durch die Definition eines "Release" ausgelöst werden. Hierdurch wird zunächst auch das Rendering durch MkDocs angestoßen. Im Unterschied zum Preview-Deployment wird die neue Version nicht automatisch auf eine Webseite hochgeladen oder in die "live-site" branch gepusht, sondern dieser Teil muss vorher durch einen der (zuvor definierten) berechtigten User freigegeben werden. Diese wird bei Github durch die Verwendung eines "Environments" festgelegt, das auch den API-Key für Cloudflare enthält. So ist sichergestellt, das **niemand** ohne Review die Live-Website aktualisieren kann. Es wäre zwar möglich den Workflow so abzuändern, das eine Version in die "live-site" Branch gepusht wird, das hat aber keinerlei "öffentliche" Auswirkungen, sondern ist eigentlich vorrangig als "interne" Versionshistorie vorgesehen.

``` mermaid
flowchart TD
    A1[Änderung im Wiki] --> |MkDocs rendering| A2(Push in 'preview-site' branch)
    A2 <--> |Cloudflare picks up changes| A3(Deployed preview-site)
    A3 --> A4[https://maas-nrw-wiki-preview.pages.dev]

    B1[Live deployment workflow ausgelöst] -->|MkDocs rendering| B2{{Review durch Auditoren}}
    B2 --> |MkDocs rendering| B3(Push in 'live-site' branch)
    B2 --> |Github Action push| B4(Deployed live-site)
    B4 --> B5[https://maas-nrw-wiki.pages.dev]        
```

## TO-DO / OFFENE FRAGEN
- Kommentare von Preview-Site und Live-Site trennen oder auf Preview-Site beschränken?
- Analytics konfigurieren / abschalten: hilfreich / nicht hilfreich
- Review der Einstellungen für die Github-Action "commit messages" für live-site push
- Google-Fonts selber integrieren
- Juristische Bewertung der DSGVO-Situation bei Cloudflare [Link](https://www.cloudflare.com/de-de/trust-hub/gdpr/)
- Cloudflare ist klassisches "JAMStack" hosting

    * Hier kann nicht einfach per php ein simples Passwort abgefragt werden
    * Mit Cloudflare "Access" könnten für maximal 50 Benutzer (für **alle** vom gleichen Benutzer eingerichteten Websites) Zugriffsbeschränkungen eingerichtet werden
    * Ansonsten ist die Preview-Site nur durch "Security by Obscurity" geschützt