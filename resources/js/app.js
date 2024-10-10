import './bootstrap';
import './partials/lightbox';
import './partials/gallery';
import "./partials/mobileButtons"
import './partials/swiper'
import './partials/footerYear'
import './partials/preloader'
import 'flowbite';

document.addEventListener('DOMContentLoaded', () => {
    const tables = document.querySelectorAll('table');
  
    tables.forEach(table => {
      // Sprawdź, czy tabela już jest opakowana w div z overflow-x
      if (table.parentElement.tagName !== 'DIV' || !table.parentElement.style.overflowX) {
        // Tworzenie nowego div-a
        const wrapper = document.createElement('div');
        
        // Dodanie stylu overflow-x: scroll
        wrapper.style.overflowX = 'auto';
        
        // Wstawienie wrappera przed tabelą
        table.parentNode.insertBefore(wrapper, table);
        
        // Przeniesienie tabeli do wrappera
        wrapper.appendChild(table);
      }
    });
  });
  




