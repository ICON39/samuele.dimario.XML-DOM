INFO:

Studenti:
- Simone Belli, matricola 2024391
- Samuele Di Mario, matricola 2009541

E' possibile consultare tutti i file (contenuti nelle relative cartelle) di questo terzo homework su GitHub, seguendo i seguenti link:
- https://github.com/simobe-git/lweb/tree/3rdHomework
- https://github.com/ICON39/samuele.dimario.XML-DOM
oppure basta cercare gli utenti:
- 'simobe-git' e accedere alla branch denominata '3rdHomework' 
- 'ICON39' e accedere alla repository 'samuele.dimario.XML-DOM'
e successivamente ci si trova di fronte tutti i file necessari.

SCOPO:

L'esercizio svolto vuole creare una pagina web sul mondo della Formula 1: l'idea iniziale era quella di emulare il più possibile 
la pagina ufficiale della F1 ma ciò non è avvenuto come si può notare, poiché abbiamo cercato di applicare 
quanto più possibile gli argomenti affrontati durante le lezioni/esercitazioni antecedenti alla stesura di questo homework. 
---------------------------------------------------------------------------------------------------

DESCRIZIONE: 

Il proggetto possiede una strutturata suddivisione in sottocartelle, in particolare vi sono altre sottocartelle che si occupano della completa implementazione del progetto come la cartella dedicata ai codici HTML per la 
visualizzazione del sito, quella PHP per l'implementazione degli script e quella relativa ai codici XML contenente informazioni e le relative grammatiche.
Come operazione preliminare per poter testare l'applicativo sarà importante eseguire lo script 'install.php' il quale crea e popola il database necessaro, mentre i dati contenuti nel file 'datiDiConnessione.php' e 'connessione.php' servono per instaurare la connessione al DBMS.
Gli script PHP contenuti in 'media/collegamenti/php' servono oltre che all'identificazione/registrazione dell'utente acnhe per definire le operazoni che questo può eseguire nella propria area personale. In particolare in tale area si possono "prenotare" alcuni 
servizi gestiti dai file contenuti nel percorso 'media/collegamenti/php/prenotazioni' che permettono di gestire una diversa prenotazione a seconda del servizio di cui l'utente vuole usufruire.
Abbiamo certato di rendere il codice modulare, come si può notare dai file 'menu.php' e menu2.php', richiamati all'interno di 
alcuni script per mostrare il menù, tale distinzione avviene poiché i file vengono richiamati in pagine diverse che richiedono percorsi diversi per accedere ai collegamenti (link) all'interno di essi.
--------------------------------------------------------------------------------------------------

ESEMPIO:

I dati che vengono inseriti all'interno della tabella 'Utenti' per effettuare il login sono i seguenti, nel formato 'USERNAME', 'EMAIL', 'PASSWORD':
    		('AAA','a@a.it','AAAA1?'),
		('Simone','simone@simone.com','Pass2!'),
		('abc123','abc@123.it','Pass3!'),
		('lweb!','l@web.com','Pass4!'),
		('2homework','2@hmw.com','Pass5!')";	
--------------------------------------------------------------------------------------------------

APPROFONDIMENTO:

Gli sviluppi principali di questo progetto avvengono nell'utilizzo e nella gestione dei file XML suddivisi in tre tipologie:
- 'monoposto.xml', i cui record sono le informazioni che mostriamo agli utenti. All'interno notiamo la presenza di un collegamento 
con un file CSS per la creazione un'interfaccia grafica personalizzata che facilita la visualizzazione dei dei record. Inoltre abbiamo 
un collegamento con un file DTD il quale descrive la grammatica utilizzata
- 'prenotaPosto.xml' il quale consente dalla homepage dell'applicazione di prenotare un posto in tribuna per assistere ad una gara di Formula 1. 
Accedendo infatti alla sezione 'Prenota il posto' nel box in verde della homepage si entrerà in una pagina in cui sono mostrate le tribune 
del circuito e i posti totali. In basso si può compilare un form in cui si va a prenotare un posto nella tribuna desiderata, 
e si può scegliere il numero di posto. Se questo è stato già prenotato, la prenotazione non verrà effettuata e bisognerà cambiare posto. 
Se invece il numero di posto immesso è fuori dai limiti della tribuna (perchè la tribuna può ospitare meno persone) verrà detto all'utente 
che il numero di posto non è disponibile. 
Se invece la prenotazione è andata a buon fine questa verrà stampata in una tabella situata nella pagina collegata alla form, ovvero 'prenotazioniPosto.php'.
Infine per descrivere la grammatica del file XML fare riferimento al file 'prenotaPosto.dtd'
- 'prenotazioni.xml' (si riferisce al file php 'prenotazioniPosto.php') permette di effettuare operazioni sulle prenotazioni
(aggiungere, eliminare, visualizzare) con consegeunte modifica del file XML corrispondente oppure tornare alla homepage. La grammatica associata al file XML è contenuta in un file XSD.
