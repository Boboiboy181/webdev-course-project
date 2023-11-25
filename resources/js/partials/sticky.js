// TODO: Code your sticky nav-bar here
const sticky = () => {
  window.addEventListener('scroll', function() {
    let navbar = document.getElementsByClassName('myheader border-navbar');
    if (window.scrollY >= 0) {
      navbar.classList.add('sticky'); // Add the 'sticky' class
    } else {
      navbar.classList.remove('sticky'); // Remove the 'sticky' class
    }
  });
}
