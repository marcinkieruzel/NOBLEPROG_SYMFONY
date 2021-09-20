### COMPOSER ###

- Wykonaj komendę `composer init` i stwórz projekt
- stwórz plik `index.php` i zaciągnij do niego plik `vendor/autoload.php`
- Stwórz klasę `Club` w pliku `src/Club.php` z własnościami `name` dodawanymi w konstuktorze oraz `players` (jako tablica stringów)
- Stwórz klasę `Player` w pliku `src/Player.php` niech zawiera w sobie dwa parametry `name` oraz `club` o type Club.
- stwórz gettery i settery do klas;
- utwórz kilka klubów i kilku piłkarzy, zadbaj o to, żeby w chwili tworzenia piłkarza automatycznie dodawał się on do klubu
- stwórz metodę `transfer(club)` pozwalającą na przejście piłkarza z jednego klubu do drugiego 
- pamiętaj o używaniu składni `use/namsepace`