// document.write

// deklarawsi array

/*
const mahasiswa = [
    "Muhamad",
    "Ikhsan",
    "Rizqi",
    "Yanuar"
]

for (let i = 0; i < mahasiswa.length; i++) {
    document.write(mahasiswa[i] + "<br>")
}

// function

function penjumlahan(a, b) {
    return a + b;
}

const result = penjumlahan(4, 5);

console.log(result);

let nama = 'Muhamad Ikhsan Rizqi Yanuar'

const umur = 17

console.log(nama);

console.log(umur);

console.error("Error: Umur tidak benar");

console.info("Ingpo min");

console.log(mahasiswa)

*/

// HTML Selection

// tag, class, id

const btn = document.querySelector(".button-saya")

console.log(btn)

// event (kejadian, aksi, manuver)

// listener (do something)

btn.addEventListener("click", function() {
    console.log("Tombol ditekan");
    document.body.style.backgroundColor = "gray";
})