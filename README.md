# PHP DISCHI JSON

## Descrizione progetto

Questo progetto consiste in una web app che legge una lista di dischi e ne mostra le informazioni sotto forma di card con copertina e titolo.
Inoltre cliccando su una delle card vengono mostrare ulteriori informazioni relative all'album su cui si è cliccato.

## Tecnologie utilizzate

La lista delle tecnologie utilizzate per la realizzazione di questo progetto con le relative funzionalità è:

1. HTML: La pagina web è index.php ed HTML è usato per costruirne la struttura
2. CSS: Per dare stile e colore alla pagina
3. VueJS: Per effettuare le chiamate API della lista di dischi e gestire la reattività della pagina
4. PHP: Il file server.php simula un server:

   - Legge i dati da un file .json(che simula un ipotetico database)
   - Converte questi dati in PHP e li elabora in modo congruo alla richiesta della pagina index.php
   - Converte il risultato nuovamente in formato JSON e lo invia a index.php

5. AXIOS: Per la gestione delle richieste API client-server(index.php -> server.php)
