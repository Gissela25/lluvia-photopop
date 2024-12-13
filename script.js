// Function to load HTML components
function loadComponent(componentPath, elementId) {
    fetch(componentPath)
      .then(response => {
        if (!response.ok) {
          throw new Error(`Failed to load ${componentPath}`);
        }
        return response.text();
      })
      .then(html => {
        document.getElementById(elementId).innerHTML = html;
      })
      .catch(err => console.error(err));
  }
  
  // Load Navbar and Footer
  document.addEventListener("DOMContentLoaded", () => {
    loadComponent('components/navbar.html', 'navbar');
    loadComponent('components/footer.html', 'footer');
  });
  