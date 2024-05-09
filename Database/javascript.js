function limit(element) {
  var max_chars = 5;
  if (element.value.length >= max_chars) {
    element.valur = element.value.substr(0, max_chars);
  }
}
//Function yang digunakan unutk melimit karakter yang diinputkan ke dalam text field "ID Produk"
