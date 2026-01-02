function addToCart() {
  alert("Product added to cart!");
}function addToCart() {
  // Create success message element
  const successMessage = document.createElement('div');
  successMessage.className = 'success-message';
  successMessage.textContent = 'Product added to cart successfully!';
  successMessage.style.position = 'fixed';
  successMessage.style.top = '20px';
  successMessage.style.right = '20px';
  successMessage.style.zIndex = '1000';
  successMessage.style.maxWidth = '300px';
  
  // Add to body
  document.body.appendChild(successMessage);
  
  // Remove after 3 seconds
  setTimeout(() => {
    successMessage.style.animation = 'slideIn 0.5s ease reverse';
    setTimeout(() => {
      document.body.removeChild(successMessage);
    }, 500);
  }, 3000);
}

// Cart functionality
let cart = JSON.parse(localStorage.getItem('cart')) || [];

function updateCartCount() {
  const cartCount = document.getElementById('cart-count');
  if (cartCount) {
    cartCount.textContent = cart.length;
  }
}

// Initialize when page loads
document.addEventListener('DOMContentLoaded', function() {
  updateCartCount();
});