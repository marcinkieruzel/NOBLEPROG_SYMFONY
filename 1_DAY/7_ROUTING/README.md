### Routing ###

- stwórz projekt symfony 4.4
- stwórz route `/blog` w response przekaż dowolnego stringa. Sprawdź czy route działa
- stwórz route `/blog/create` z metodami `get` i `post`. Niech renderuje prosty formularz html z jednym polem `title` w `get` a w `post` niech renderuje jedynie wartość pola `title` wpisanego przez użytkownika
- stwórz route `/yearofbirth/{number}` – stwórz walidację parametru number w annotacji, tak by mogła zawierać tylko czterocyfrową liczbę. W Response zwróć wiek użytkownika 
  