var loginModal = document.getElementById("id01");
var registerModal = document.getElementById("id02");

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == loginModal) {
    loginModal.style.display = "none";
  } else if (event.target == registerModal) {
    registerModal.style.display = "none";
  }
};

// Function to open the login modal
function openLoginModal() {
  loginModal.style.display = 'block';
}

// Function to open the register modal
function openRegisterModal() {
  registerModal.style.display = 'block';
}

// Function to close the modals
function closeModal(modalId) {
  document.getElementById(modalId).style.display = 'none';
}

var signIn = document.getElementById("sign-in-menu");
var signOut = document.getElementById("sign-out-menu");
var register = document.getElementById("register-menu");

if (
  localStorage.getItem("isLogin") === "false" ||
  !localStorage.getItem("isLogin")
) {
  signOut.style.display = "none";
  signIn.style.display = "block";
  register.style.display = "block";
} else {
  register.style.display = "none";
  signIn.style.display = "none";
  signOut.style.display = "block";
}

let cart = [];

function addToCart(itemName, itemPrice) {
  const item = { name: itemName, price: itemPrice, quantity: 1 };
  const itemIndex = cart.findIndex(cartItem => cartItem.name === itemName);
  
  if (itemIndex > -1) {
    cart[itemIndex].quantity += 1;
  } else {
    cart.push(item);
  }

  updateCart();
}

function updateCart() {
  const cartItemsContainer = document.getElementById('cart-items');
  const cartCount = document.getElementById('cart-count');
  const cartTotalContainer = document.getElementById('cart-total');
  
  cartItemsContainer.innerHTML = '';
  let total = 0;

  cart.forEach(item => {
    const itemTotal = item.price * item.quantity;
    total += itemTotal;

    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');
    cartItem.innerHTML = `
      <span>${item.name}</span>
      <span>${item.quantity} x $${item.price}</span>
      <span>$${itemTotal}</span>
      <button onclick="removeFromCart('${item.name}')">Remove</button>
    `;

    cartItemsContainer.appendChild(cartItem);
  });

  cartCount.innerText = cart.length;
  cartTotalContainer.innerText = `Total: $${total}`;
}

function removeFromCart(itemName) {
  const itemIndex = cart.findIndex(cartItem => cartItem.name === itemName);

  if (itemIndex > -1) {
    cart.splice(itemIndex, 1);
  }

  updateCart();
}

function checkout() {
  if (cart.length === 0) {
    alert('Your cart is empty.');
    return;
  }

  const total = cart.reduce((acc, item) => acc + item.price * item.quantity, 0);
  alert(`Your total is $${total}. Thank you for your purchase!`);

  cart = [];
  updateCart();
}

document.addEventListener('DOMContentLoaded', function() {
  // Smooth scrolling for navigation links
  const navLinks = document.querySelectorAll('.navbar a');

  navLinks.forEach(link => {
    link.addEventListener('click', function(event) {
      event.preventDefault();

      const targetId = this.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetId);

      if (targetSection) {
        targetSection.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });

  updateCart();
});
