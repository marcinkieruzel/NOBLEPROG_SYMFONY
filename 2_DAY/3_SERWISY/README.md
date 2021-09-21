### SERWISY ###

– stwórz nowy serwis `Rewerse`, jego zadanie jest bardzo proste. Ma odwracać kolejność liter w stringu. Użyj serwisu w swoim kontrolerze. 

– zainstaluj bundle https://github.com/KnpLabs/KnpMarkdownBundle. Przy jego pomocy możesz swtorzyć stronę dokumentacji twojego projektu bez używania html. Stwórz route `/readme` i w nim wyrenderuj przykładową stronę dokumentacji. Następnie spróbuj przenieść logikę generowania markdown z kontrolera do własnego serwisu. 

– stwórz formularz kontaktowy w route `/sendmail` – użyj do tego bundla symfony mailer. Formularz powinien zawierać następujące dane `imię`, `nazwisko`, `telefon`, `email`, `wiadomość`. Spróbuj stworzyć podstawową walidację formularza. Po prawidłowym wysłaniu requesta formularz pownien się rzeczywiście wysyłać.