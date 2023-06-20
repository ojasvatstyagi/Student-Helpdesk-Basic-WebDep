// Accessing DOM elements
const title = document.getElementById('title');
const description = document.getElementById('description');

// Changing content dynamically
title.innerHTML = 'Welcome to My Awesome Website';
description.textContent = 'This website provides useful information and services.';

// Adding event listeners
const menuItems = document.querySelectorAll('#menu li');

menuItems.forEach(item => {
  item.addEventListener('click', () => {
    // Handle menu item clicks
    console.log('Menu item clicked:', item.textContent);
  });
});
