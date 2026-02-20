document.addEventListener('DOMContentLoaded', () => {
  // Search functionality
  const searchInput = document.getElementById('faq-search');
  const accordionItems = document.querySelectorAll('.accordion-item');

  if (searchInput) {
    searchInput.addEventListener('input', () => {
      const query = searchInput.value.trim().toLowerCase();
      accordionItems.forEach(item => {
        const text = item.textContent.toLowerCase();
        if (!query || text.includes(query)) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
          // Also close it if hidden
          item.classList.remove('active');
          const content = item.querySelector('.accordion-content');
          if (content) content.style.maxHeight = null;
        }
      });
    });
  }

  const headers = document.querySelectorAll('.accordion-header');
  
  headers.forEach(header => {
    header.addEventListener('click', () => {
      const item = header.parentElement;
      const isActive = item.classList.contains('active');
      
      // Close all
      document.querySelectorAll('.accordion-item').forEach(i => {
        i.classList.remove('active');
        i.querySelector('.accordion-content').style.maxHeight = null;
      });
      
      // Open clicked if it wasn't active
      if (!isActive) {
        item.classList.add('active');
        const content = item.querySelector('.accordion-content');
        content.style.maxHeight = content.scrollHeight + "px";
      }
    });
  });
});