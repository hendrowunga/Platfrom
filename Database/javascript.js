function limit(element) {
  var max_chars = 5;
  if (element.value.length >= max_chars) {
    element.valur = element.value.substr(0, max_chars);
  }
}
