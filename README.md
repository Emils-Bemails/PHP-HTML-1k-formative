# PHP-HTML-1k-formative

## Noteikumi

- Formatīvajā darbā atļauts izmantot tikai [devdocs.io](https://devdocs.io/).
- Github vietnē atļauts tikai glabāt savu lokālo projektu, citu projektus skatīt NAV atļauts.
- Uz datora meklēt un izmantot citus projektus NAV atļauts.
- Instalēt un lietot neatļautu programmatūru, piem., VS Code paplašinājumus, NAV atļauts.
- Darbs jāveic patstāvīgi bez komunikācijas ar citiem.

## Vides sagatavošana

1. Atinstalējiet visus Visual Studio Code paplašinājumus izņemot Live Server, Prettier un SQLite3 Editor.
2. Novirziet šo repozitoriju uz jaunu Jūsu Github kontā ar tādu pašu nosaukumu un **nosūtiet saiti skolotājam**.
3. Pārbaudiet vai veiksmīgi izdodas 'git push'.

## Uzdevumi

**_Izveidojiet PHP un HTML aplikāciju `Mans blogs`._**<br>
Tukši `index.html` un `about.php` faili jau ir doti.<br>

1. uzdevums<br>
   Šajā mapē uzstartējiet PHP izstrādes serveri uz 8000 porta.
   Atveriet `index.html` pārlūkā izmantojot uzstartēto serveri.

2. uzdevums<br>
   Izveidojiet 'boilerplate' HTML kodu `index.html` failā.
   Izveidojiet virsraksta elementu ar tekstu "Home".
   Izveidojiet HTML sarakstu (`ul > li`) navigāciju saitēm (`a`).
   Sarakstā izveidojiet saiti uz `about.php`.
   Versionējiet izmaiņas jaunā komitā un turpmāk izveidojiet komitu katram uzdevumam.

3. uzdevums<br>
   Arī `about.php` jāizveido HTML 'boilerplate' kods.
   `body` sadaļā izveidojiet PHP dinamisko sadaļu `<?php ?>`.
   Ar `echo` izveidojiet virsraksta elementu ar tekstu "About".
   Izveidojiet indeksētu masīvu `$indexedArray` ar trim teksta elementiem:

   - " ",
   - "Lorem ipsum dolor sit amet, consectetur adipisicing."
   - "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, iusto."

   Ar `foreach` ciklu apstaigājiet masīvu un izveidojiet (ar `echo`) 3 paragrāfa (`p`) elementus ar attiecīgo tekstu katram.

4. uzdevums<br>
   Izveidojiet jaunus failus `contact.php` un `contact-sent.php` abus ar HTML 'boilerplate' kodu.
   `contact.php` failā izveidojiet HTML formu ar trim laukiem: vārds, e-pasts un ziņa jeb atsauksmes teksts.
   Apstiprinot formu, tās datus aizsūtiet uz `contact-sent.php`, kurā lietotājs tiek informēts par veiksmīgu kontaktu formas aizpildīšanu un tiek attēloti visi nosūtītie dati.
   `contact-sent.php` lapā izveidojiet saiti (`a` tag), kas ved atpakaļ uz `contact.php`.

5. uzdevums<br>
   Izveidojiet sarakstu ar navigācijas saitēm `index.html`, `about.php` un `contact.php` failos.
   Saites ļauj ērti pārvietoties starp visām trim lapām.

## Sintakses atslēgvārdi:

- echo
- print_r
- var_dump
- action
- method
- input
- textarea
- button
- name
- $\_POST
