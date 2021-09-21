### Routing ###

- stwórz projekt symfony 4.4
- stwórz route `/blog` w Response przekaż dowolnego stringa. Sprawdź czy route działa
- stwórz route `/blog/create` z metodami `get` i `post`. Niech renderuje prosty formularz html z jednym polem `title` w `get` a w `post` niech renderuje jedynie wartość pola `title` wpisanego przez użytkownika
- stwórz route `/yearofbirth/{number}` – stwórz walidację parametru number w annotacji, tak by mogła zawierać tylko czterocyfrową liczbę. W Response zwróć wiek użytkownika
- stwórz route `/introduce/{name}/{lastName}` z imieniem i nazwiskiem użytkownika. W Response przekaż informację o tym imieniu i nazwisku
- stwórz prostego CRUD'a. Zdefiniuj Route na poziomie klasy kontrolera `/files`. Stwórz route `/files/add` – a w nim wyrenderuj formularz z jednym polem `content`. Po wysłaniu formularza postem zapisz treść pola `content` do pliku txt o randomowej nazwie. Pliki powinny znajdować się w katalogu `/public/files`. Stwórz route `/files/get` i w kontrolerze wylistuj wszystkie pliki z katalogu i przekaż listę do szablonu.
  