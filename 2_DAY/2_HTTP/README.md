### HTTP ###

– stwórz projekt symfony 4.4
– stwórz kontroler RequestInspectorController. Przeanalizuj w nim parametry Request i Response. Spróbuj pobrać header, query strings, metodę http, cookies i dane sesji (jeśli ich nie ma możesz je zainicjować)
– stwórz kontroler APIController. Stwórz w nim metodę które będzie serwowała dowolną tablicę asocjacyjną jako api.
- stwórz kontroler CvController. Będzie on służył do generowania CV. W widokach stwórz formularz z polami: `imię`, `nazwisko`, `wiek`, `zainteresowania`. Zapisz plik jako json w katalogu `/public/cv`. Po utworzeniu pliku zwróć do klienta odpowiedni status (201); 