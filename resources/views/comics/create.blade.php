<form class="" action="{{route('comics.store')}}" method="post">
  @csrf
  @method('POST')
  <input type="text" name="title" value="" placeholder="Inserisci il titolo">
  <input type="text" name="description" value="" placeholder="Inserisci una descrizione">
  <input type="text" name="thumb" value="" placeholder="Inserisci il link dell'immagine di copertina">
  <input type="text" name="price" value="" placeholder="Inserisci il prezzo">
  <input type="text" name="series" value="" placeholder="Inserisci il titolo della serie">
  <input type="text" name="sale_date" value="" placeholder="Inserisci la data di vendita">
  <input type="text" name="type" value="" placeholder="Inserisci il genere">
  <input type="submit" name="" value="Crea nuovo fumetto">

</form>
