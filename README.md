# Dokumentace k webovému projektu

Tento repozitář obsahuje můj školní projekt webové stránky. Níže naleznete deník postupu práce, strukturu webu a technické specifikace.

## Deník postupu práce (27. 4. - 11. 5.)

* **27. 4.** - Založení repozitáře a návrh základní struktury webu. Rozmyšlení konceptu a seznamu 10 podstránek.
* **28. 4.** - Vytvoření základní HTML kostry pro hlavní stránku (`index.html`).
* **29. 4.** - Přidání CSS frameworku Tailwind, konfigurace základních barev (dark mode) a fontů (Space Grotesk, Inter).
* **30. 4.** - Vytvoření stránky "O nás", přidání hlavičky a patičky.
* **1. 5.** - Práce na sekci "Blog", návrh rozvržení pro výpis jednotlivých článků.
* **2. 5.** - Vytvoření obsahu pro Článek 1, Článek 2 a Článek 3 do Blogu.
* **3. 5.** - Vytvoření stránky "Kontakt" včetně návrhu kontaktního formuláře.
* **4. 5.** - Tvorba prvních podstránek pro jednotlivé herní ranky.
* **5. 5.** - Dokončení všech rankovacích podstránek s interaktivními hover efekty.
* **6. 5.** - Návrh a vytvoření stránek "Služby" a "Kariéra".
* **7. 5.** - Implementace stránek "Galerie" a "Často kladené dotazy (FAQ)".
* **8. 5.** - Vytvoření speciální podstránky pro "Coaching", obsahující pokročilý formulář s výběrem ranků a četnosti tréninků.
* **9. 5.** - Úpravy responzivity, doladění CSS stylů napříč celým webem.
* **10. 5.** - Vypracování této dokumentace v `README.md`, sepsání ukázek všech použitých HTML tagů.
* **11. 5.** - Finální revize kódu, kontrola všech odkazů, validace HTML a odevzdání projektu na GitHub.

---

## Mapa stránek

Web se skládá z následujících minimálně 10 podstránek:

1. **Home** (`index.html`) - Výchozí bod, hlavní přehled ranků.
2. **Kontakt** - Obsahuje kontaktní formulář pro spojení s námi.
   - *Prvky formuláře:* Jméno (`<input type="text">`), Email (`<input type="email">`), Zpráva (`<textarea>`), Tlačítko (`<button>`).
3. **Blog** - Výpis článků týkajících se hry a novinek:
   - *Článek 1:* "Jak se dostat z Bronzu" - Tipy a triky pro úplné začátečníky.
   - *Článek 2:* "Rozbor patche 2.0" - Co se změnilo v nové sezóně, buffy a nerfy zbraní.
   - *Článek 3:* "Nejlepší zbraně pro rank up" - Tier list aktuálně nejsilnějších loadoutů.
4. **O nás** - Informace o tvůrci projektu a cíli tohoto webu.
5. **Galerie** - Ukázky ze hry, screenshoty z turnajů.
6. **Služby** - Přehled toho, co hráčům nabízíme.
7. **Ceník** - Informace o případném zpoplatnění a variantách členství.
8. **Kariéra** - Nabídka práce, hledáme další trenéry.
9. **FAQ** - Často kladené dotazy ohledně hry a webu.
10. **Coaching** - Detailní registrační formulář na individuální trénink s trenérem.

---

## Použité HTML Tagy (dle učebnice)

Během tvorby projektu a dokumentace byly využity všechny požadované standardní HTML tagy:

### Struktura dokumentu
```html
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Titulek webu</title>
</head>
<body>
    <!-- Zde je obsah stránky -->
</body>
</html>
```

### Formátování textu a nadpisy
```html
<h1>Hlavní nadpis</h1>
<h2>Podnadpis</h2>
<p>Toto je odstavec obsahující <strong>tučný text</strong> a <em>kurzívu</em> pro zvýraznění.</p>
<hr>
<br>
```

### Odkazy a obrázky
```html
<a href="kontakt.html">Přejít na kontaktní stránku</a>
<img src="logo.png" alt="Logo webu" width="200" height="100">
```

### Seznamy
```html
<ul>
    <li>Neuspořádaná položka 1</li>
    <li>Neuspořádaná položka 2</li>
</ul>

<ol>
    <li>Uspořádaná položka 1</li>
    <li>Uspořádaná položka 2</li>
</ol>
```

### Tabulky
```html
<table>
    <tr>
        <th>Služba</th>
        <th>Čas</th>
    </tr>
    <tr>
        <td>Coaching</td>
        <td>14:00</td>
    </tr>
</table>
```

### Formuláře
Tento formulář je využit primárně na stránce Kontakt a ve složitější podobě na stránce Coaching:
```html
<form action="/submit" method="post">
    <label for="jmeno">Jméno:</label>
    <input type="text" id="jmeno" name="jmeno" required>
    
    <label for="zprava">Zpráva:</label>
    <textarea id="zprava" name="zprava"></textarea>
    
    <button type="submit">Odeslat dotaz</button>
</form>
```

### Seskupování elementů
```html
<div>
    <span>Zde je inline seskupení textu uvnitř div bloku.</span>
</div>
```
