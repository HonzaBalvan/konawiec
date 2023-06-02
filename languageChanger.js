var languageContent = {
  "cz": {
    "header1": "Vítejte na našem eshopu",
  },
  "pl": {
    "header1": "Witajte w našom eshopě"
  }
};
function changeLanguage(lang) {
  for (var key in languageContent[lang]){
    document.getElementById(key).innerHTML = languageContent[lang][key];
  }
}
