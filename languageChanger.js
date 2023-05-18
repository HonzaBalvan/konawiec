var languageContent = {
  "cz": {
    "header1": "Vítejte na našem eshopu",
  },
  "pl": {
    "header1": "Witamy w naszym Eshopie"
  }
};
function changeLanguage(lang) {
  for (var key in languageContent[lang]){
    document.getElementById(key).innerHTML = languageContent[lang][key];
  }
}
