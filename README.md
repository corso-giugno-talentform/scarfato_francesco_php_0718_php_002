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

