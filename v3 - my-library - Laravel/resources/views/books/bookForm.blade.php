Qui ci andrà il form per la creazione o modifica di un libro

<h2> {{  $book['id'] ? "Modifica Libro":"Crea Libro" }}</h2>
<p>{{  $book['title'] ?? '' }}</p>
    