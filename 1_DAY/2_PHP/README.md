### PHP ###

1. Stwórz klasę abstrakcyjną `Vehicle`. Powinna ona zawierać jedną własność dodaną z poziomu konstruktora – a mianowicie `type` oraz własności  `distance` początkowo ustawioną na 0 i `condition` początkowo ustawioną na 100.
2. Stwórz trzy klasy dziedziczące po `Vehicle` – `Bike`, `Car`, `Boat`
3. Stwórz klasy dziedziczące po `Boat` – `MotorBoat` i `SailBoat`
4. Stwórz interface `Move` z metodami `move(distance)` i `repair()`, zaimplementuj interface do wszystkich klas (pomyśl, jak to zrobić w najprostszy sposób).
5. Stwórz trait z metodami `getDistanceMade` i `getCondition`
6. Spróbuj stworzyć kilka obiektów na podstawie w/w klas. Spróbuj wywołać metodę `move` na wybranych obiektach i pokonać nimi jakiś dystans. Uwaga obiekt każdej klasy musi zapisywać swój przebyty dystans i kondycję. Kondycja pojazdu obliczana jest w następujący sposób: każde 200000 km to 100 kondycji. 
7. Jeśli pojazd stracił kondycję nie może jechać dalej i musi zostać naprawiony. Zaimplementuj do tego motodę `repair` z interfejsu.
