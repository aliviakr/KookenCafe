function submitForm() {
    // Mendapatkan nilai dari input form
    var nama = document.getElementById("nama").value;
    var testimoni = document.getElementById("testimoni").value;

    // Validasi input
    if (nama.trim() === '' || testimoni.trim() === '') {
        alert('Nama dan testimoni harus diisi!');
        return;
    }

    // Membuat baris baru untuk ditambahkan ke tabel
    var newRow = '<tr><td>' + nama + '</td><td>' + testimoni + '</td></tr>';

    // Menambahkan baris ke dalam tabel testimonial
    document.getElementById("testimonialBody").innerHTML += newRow;

    // Reset form setelah submit
    document.getElementById("testimonialForm").reset();
}
