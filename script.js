const texts = ["Fresh","Foods", "Fast","Easy-ordering"];
let count = 0;//words
let index = 0;//letters
let currentText = "";
let letter = "";
(function type() {
  if (count === texts.length) {
    count  =0;
  }
  currentText = texts[count];
  letter = currentText.slice(0, ++index);
  document.querySelector(".typing").textContent=letter;
  if(letter.length ===currentText.length){
    count++;
    index=0;
  }
  setTimeout(type, 400);
})();

