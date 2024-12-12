const searchInput = document.getElementById('searchInput');
const cards = document.querySelectorAll('.card');

searchInput.addEventListener('input', function() {
  const searchText = searchInput.value.toLowerCase();

  cards.forEach(card => {
    const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();
    const cardText = card.querySelector('.card-text-search').textContent.toLowerCase();
    const cardCategory = card.querySelector('.category').textContent.toLowerCase();

    // Show or hide cards based on search text in title or text content
    if (cardTitle.includes(searchText) || cardText.includes(searchText) || cardCategory.includes(searchText)) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });
});
