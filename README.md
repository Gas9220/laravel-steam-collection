# Steam

## Milestone 1

- [x]  Stabilite un team leader che si occuperà di ospitare il progetto, creare le issues e approvare le pull requests.
- [x]  Brainstorming per l’analisi e progettazione della base di dati che dovrà fornire tutte le informazioni necessarie alla piattaforma
- [x]  Divisione dei compiti tra i diversi membri del team in modo che si lavori parallelamente su tutti i fronti del progetto (creazione db, seed/creazione api/creazione stile/creazione struttura)
- [x]  Dopo aver creato uno scheletro del progetto, trasformate i compiti in Issues su Github incaricando i diversi membri
- [ ]  Start code!

### Scelte progettuali

- Abbiamo scelto come [Team Leader](https://www.notion.so/Steam-c594c681da4c4a8fa151aa7653ed7113) @Gaspare
- Palette colori
    
    | 0B2447 | Bg |
    | --- | --- |
    | 19376D | Footer |
    | 576CBC | Card |
    | A5D7E8 | Text |

### Struttura Dati

Nome database: steam_db

| Dato | Tipo di dato |
| --- | --- |
| title | string |
| publisher | string(40) |
| publication_year | date |
| developers | string(40) |
| platforms | string |
| description | text |
| pegi | tinyinteger nullable |
| genre | string |
| rating | float(3,1) default(0) |
| thumbnail | text |
| early_access | boolean default(0) |
|  |  |

### Distribuzioni Ruoli

### Migration @Cosimo Pancok Jr

### Seeder @Gaspare

### Api/Creazione @Danilo Eberli

### Stile/Struttura @Vittoria Romano

## Layout

### Index

![style.jpg](Steam%20c594c681da4c4a8fa151aa7653ed7113/style.jpg)
