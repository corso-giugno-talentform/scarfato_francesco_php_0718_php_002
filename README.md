# ############################################################################
# PHP
# ############################################################################

La repo si trova su

https://github.com/corso-giugno-talentform/scarfato_francesco_php_0718_php_002

# ############################################################################
# Esercizi
# ############################################################################

**TIPS 1: Per migliorare l’approccio alle funzioni,  il consiglio è sempre di risolvere la traccia utilizzando come prima cosa l’approccio sequenziale. Successivamente procedere con:**

1. **Estrazione**
2. **Incapsulamento**
3. **Astrazione**

**TIPS 2: Controllare sulla documentazione ufficiale di PHP.NET se esiste una Built-In function da utilizzare per il caso specifico.**

# ############################################################################
# Esercizio 1
# ############################################################################

Utilizzando un approccio funzionale (piccole funzioni che risolvono un piccolo problema), riscrivere il programma fatto in precedenza che stampi in console tutti i numeri da 1 a 30.

- Se il numero e’ multiplo di 3, non deve stampare il numero ma “PHP”;
- Se multiplo di 5 deve stampare “JAVASCRIPT”;
- Se multiplo di 3 e 5 (15) deve stampare “Aulab”;

# ############################################################################
# Esercizio 2
# ############################################################################

Dato il seguente array associativo:

```php
$persons = [
  [
    'name' => 'Marco',
    'age' => 18,
  ],
  [
    'name' => 'Vanessa',
    'age' => 12,
  ],
  [
    'name' => 'Jack',
    'age' => 34,
  ],
  [
    'name' => 'Maria',
    'age' => 55,
  ],
];
```

Scrivere un programma utilizzando le funzioni in grado di controllare l’ età  di ogni persona e stampare a video se:

- Maggiore o uguale di 18: "$nome_persona può votare"
- Minore di 18: "$nome_persona non può votare"

---

# ############################################################################
# Esercizio 3
# ############################################################################

Scrivere un programma funzionale che, dato un numero in input ($max), stampi a video:

- PRIMA tutti i numeri Dispari
- DOPO tutti i numeri PARI

```php
//Esempio max = 10
1,3,5,7,9
0,2,4,6,8,10
```

# ############################################################################
# OOP
# ############################################################################

Ricordate:

1) Nome classe sempre al singolare

2) Prima lettera sempre maiuscola

3) Bisogna sempre scrivere in inglese (tutto)

La famosa azienda Talentform ha appena acquistato 5 aziende più piccole con sedi sparse in tutte il mondo.

Vi è stato chiesto di realizzare un sistema di monitoraggio fiscale per ognuna di queste Sedi.

Essendo dati finanziari, gli eventuali errori di logica devono rasentare lo 0.

Utilizzare, quindi, un approccio orientato agli oggetti per risolvere la traccia.

Esercizio 1
Creare una classe Azienda (Company) che abbia gli attributi public:

Nome: Nome della sede;
Sede: Stato in cui è ubicata la sede;
Totale Dipendenti (default=0): Numero di dipendenti assunti in quella sede.
Definire la funzione __construct() come visto a lezione per prendere in input i 3 attributi.

Esercizio 2
Una volta definita la classe, istanziare 5 Sedi con i rispettivi dati e controllare che siano stati correttamente memorizzati con un var_dump();

//Istanzio i 5 Oggetti
$company1 = new Company('Apple', 'USA', 3);
$company2 = new Company('Barilla', 'ITA', 3);
$company3 = new Company('Nintendo', 'JAP', 5);
$company4 = new Company('Nokia', 'FIN', 10);
$company5 = new Company('Xioami', 'CHI', 3);

var_dump($company1); //ecc
Esercizio 3
Utilizzando la classe Azienda appena creata, implementare un metodo in grado di stampare via terminale:

L'ufficio $this->nome con sede in $this->sede ha ben $this->dipendenti dipendenti.

Se il $this→dipendenti è > di 0. Altrimenti se i dipendenti sono 0 (valore di default) stampare:

L’ufficio $this->nome con sede in $this->sede non ha dipendenti

Esercizio 4
Proseguendo con la classe appena creata Company, definire 1 attributo statico relativo a:

//Attributi

public static $stipendio_medio_mensile = 1500;
E implementare un nuovo metodo che, per ogni oggetto Azienda Istanziato, calcoli la spesa annuale in euro con la formula

numero dipendenti * ($stipendio_medio_mensile * 12)

e la stampi per ogni oggetto:

$tot = $this->dipendenti * (self::$stipendio_medio_mensile * 12);

echo "Il costo annuale dell'Ufficio $nome è di $tot Euro"
e successivamente un metodo (non nel costruttore, attenzione) in grado di calcolare di volta in volta tutti i totali:

Il costo annuale dell'Ufficio $nome è di XXXXXX Euro
Il costo totale per l'azienda HP3 attualmente è di XXXXXX Euro (Valore che aumenta ogni volta)

Esercizio 5
Adesso vogliamo conoscere quanto gravano queste 5 sedi all’azienda HP. Creare un attributo statico:

//Attributi
public static $totale = 0;
E di volta in volta somma in maniera ricorsiva il totale economico speso:

self::$total += $costo_totale_azienda


Esercizio 6
Dulcis in fundo, come ultimo task da eseguire, stampare nel terminale il totale assoluto di tutte le aziende 1 sola volta, con un metodo statico.

Utilizzare un metodo statico attraverso la classe Company (No oggetto) e richiamarlo come visto a lezione.