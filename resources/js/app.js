import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
const Product1 = document.getElementById("Product1");
const Product2 = document.getElementById("Product2");
const Product3 = document.getElementById("Product3");

const Nama = document.getElementById("Nama");
const Warna = document.getElementById("Warna");
const Size = document.getElementById("Size");
const Harga = document.getElementById("Harga");

Product1.addEventListener("click", function(){
    const Nama = "Joger Activewere Navy";
    const Warna = "Navy";
    const Size = "M";
    const Harga = "85,000";
    addToCart(Nama, Warna, Size, Harga);
});

Product2.addEventListener("click", function(){
    const Nama = "Jacket Sport Gym White";
    const Warna = "White";
    const Size = "L";
    const Harga = "150,000";
    addToCart(Nama, Warna, Size, Harga);
});

Product3.addEventListener("click", function(){
    const Nama = "T-shirt Gym White";
    const Warna = "Navy";
    const Size = "M";
    const Harga = "50,000";
    addToCart(Nama, Warna, Size, Harga);
});

function addToCart(Nama,Warna,Size,Harga){
    Nama.innerHTML = Nama;
    Warna.innerHTML = Warna;
    Size.innerHTML = Size;
    Harga.innerHTML = "Rp" + Harga;
}