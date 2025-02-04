# WooCommerce Fatturazione Italiana (HPOS Compatible)

Fork del plugin "WooCommerce P.IVA e Codice Fiscale per Italia" di dot4all, modificato per supportare HPOS (High-Performance Order Storage) di WooCommerce.

## Modifiche dalla Versione Originale

- Aggiunto il supporto completo per HPOS (High-Performance Order Storage)
- Compatibilità testata con WordPress 6.6.1
- Compatibilità testata con WooCommerce 8.6
- Compatibilità testata con PHP 8.3
- Mantenuta tutta la funzionalità originale
- Preservati i credits originali

## Il Plugin

Questo plugin rende WooCommerce adeguato al mercato italiano aggiungendo i campi Partita IVA e Codice Fiscale. Permette inoltre la gestione della Fatturazione Elettronica in XML. Aggiunge i campi P.IVA, CF, PEC e Codice Identificativo in base alla tipologia di fattura richiesta. Fondamentale per Aziende, Ditte Individuali, Liberi Professionisti e Privati.

### Funzionalità

* Aggiunta dei campi relativi alla Fatturazione Elettronica: Codice Identificativo e PEC
* Check VIES automatico delle partite IVA comunitarie al checkout - rimuove l'imposta al checkout per le aziende UE
* Inserimento in fase di checkout dei campi Codice Fiscale e Partita IVA
* Scelta della tipologia di cliente (Privato, Azienda, Libero Professionista)
* Modifica in amministrazione dei campi Codice Fiscale e Partita IVA
* Ricezione nel dettaglio ordine e via mail dei campi CF e P.IVA
* Generazione automatica della fattura/ricevuta lato amministrazione tramite il plugin WooCommerce PDF Invoices & Packing Slips

### Requisiti

* WordPress: 3.0.1 o superiore (testato fino a 6.6.1)
* PHP: 7.0 o superiore (testato fino a 8.3)
* WooCommerce: 3.5 o superiore (testato fino a 8.6)

### Note Importanti

Le versioni 2+ sono COMPATIBILI SOLO CON WooCommerce PDF Invoices & Packing Slips 2.0+

### Lingue Supportate

* Italiano (it_IT)
* Inglese
* Compatibile con WPML

### Installazione

1. Caricare la cartella del plugin all'interno di `/wp-content/plugins/` oppure installare il plugin attraverso la sezione WordPress plugins
2. Attivare il plugin attraverso la sezione 'Plugins' di WordPress

## Credits

* Plugin originale di [dot4all](https://dot4all.it)
* Compatibilità HPOS aggiunta da [Enrico Deleo](https://enricodeleo.com)
* Il plugin originale è un fork di WooCommerce PDF Invoices Italian Add-on di labdav

## Changelog

### 2.2.0
* Aggiunto supporto completo per HPOS (High-Performance Order Storage)
* Compatibilità testata con WordPress 6.6.1
* Compatibilità testata con WooCommerce 8.6
* Compatibilità testata con PHP 8.3

## Licenza

Questo programma è un software libero: puoi redistribuirlo e/o modificarlo secondo i termini della GNU General Public License pubblicata dalla Free Software Foundation, sia la versione 2 della Licenza, sia una versione successiva.

Questo programma è distribuito nella speranza che possa essere utile, ma SENZA ALCUNA GARANZIA; senza neppure la garanzia implicita di COMMERCIABILITÀ o IDONEITÀ PER UN PARTICOLARE SCOPO. Vedere la GNU General Public License per maggiori dettagli.