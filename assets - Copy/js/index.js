/* Simple VanillaJS to toggle class */


var a = document.getElementById('kasir');
var b = document.getElementById('gudang');
var c = document.getElementById('text');
var d = document.getElementById('title');
var e = document.getElementById('logo');
document.getElementById('gudang').addEventListener('click', function () {
  if (a.style.display === 'none') {
      a.style.display = 'inline';
  } else {
      a.style.display = 'none';
  }
  if (c.innerHTML === "KASIR") {
    c.innerHTML = "GUDANG";
  }
  if (d.style.display === 'none') {
      d.style.display = 'inline';
  } else {
      d.style.display = 'none';
  }
  if (e.style.display === 'none') {
      e.style.display = 'initial';
  } else {
      e.style.display = 'none';
  }
  [].map.call(document.querySelectorAll('.profile'), function(el) {
    el.classList.toggle('profile--open');
  });
});

document.getElementById('kasir').addEventListener('click', function () {
  if (b.style.display === 'none') {
      b.style.display = 'inline';
  } else {
      b.style.display = 'none';
  }
  if (c.innerHTML === "GUDANG") {
    c.innerHTML = "KASIR";
  }
  if (d.style.display === 'none') {
      d.style.display = 'inline';
  } else {
      d.style.display = 'none';
  }
  if (e.style.display === 'none') {
      e.style.display = 'initial';
  } else {
      e.style.display = 'none';
  }
  [].map.call(document.querySelectorAll('.profile'), function(el) {
    el.classList.toggle('profile--open');
  });
});
