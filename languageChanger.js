var languageContent = {
  "cz": {

    "paragraph1": "Vítejte na eshopu Konawiec, kde vytváříme designerské oblečení pro koně. V poslední době se ukázal kůň méně jako dopravní prostředek, ale spíš jako statusová záležitost a vkusový doplněk. Proto se začínají mnohem více řešit koňští zubaři, hloubková číštění kůže a i správný oděv pro koně. Ty byly do této doby až trapně ošklivé. Konawiec přichází s revolucí v koňském oděvu - designerské oblečení pro koně, protože upřímně věříme, že kvalitní kůň je ukázka dobrého polského aristokrata.",
    "paragraph2": "Jednou z nejdůležitějších věcí v moderní módě pro koně je branding. Proto kromě našich lety prověřených kousků s novým spinem a formálními oděvy nabízíme artikly ve spolupráci s návrháři z celého světa. Můžete v našem eshopu tak narazit na několik kousků ve spolupráci s francouzským návrhářským domem Balenciaga, ",
    "header1": "Vítejte na našem eshopu"
  },
  "pl": {

    "paragraph1": "Witajte w našom eshopě Konawiec, kde wytwarame disignarijskije odiewstwo pre konie. W recentnej dobwe sa zdawa kon myn jak prostrednik doprawcowy, wsak wic jak okolnost statusowa a dodatek elegancko. Preto sa pocina howorit o wrtochrupech konskich, drbani hlubkowe a i sat korektni pre kon. Telowaky latkove byly donynizs oskliwie. Konawiec prichadza s revolucijou v hadru konskem - obleceni designerske pre kon, lebo virame uprimny (v Boga), zie kon kwalitny jest nutne pre kazdieho aristokrata z Polskie.",
    "paragraph2": "",
    "header1": "Witajte w našom eshopě"
  }
};
function changeLanguage(lang) {
  for (var key in languageContent[lang]){
    document.getElementById(key).innerHTML = languageContent[lang][key];
  }
}
