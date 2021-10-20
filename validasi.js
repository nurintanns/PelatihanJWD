function cekform(){
    foto = document.getElementById('inputfoto')
    namalengkap = document.getElementById('nama_lengkap');
    namapanggilan = document.getElementById('nama_Panggilan');
    tempatlahir = document.getElementById('tempat_lahir');
    tanggallahir = document.getElementById('tanggal_lahir');
    usia = document.getElementById('usia');
    jeskal = document.getElementById('jenis_kelamin');
    kotatinggal = document.getElementById('inputkotatinggal');
    email = document.getElementById('inputemail');
    nohp = document.getElementById ('nohp');
    if(namalengkap.value==''){
        alert('nama panggilan tidak boleh kosong');
        namalengkap.focus();
        return false;
    } else if (namalengkap.value.length <= 3) {
        alert('nama lengkap minimal 3 karakter');
        namalengkap.focus();
        return false;
    } else if (foto.value=='') {
        alert ('foto tidak boleh kosong');
    } else if (namapanggilan.value==''){
        alert('nama panggilan tidak boleh kosong');
        namapanggilan.focus();
        return false;
    } else if (namapanggilan.value.length <= 3) {
        alert('nama panggilan minimal 3 karakter');
        namapanggilan.focus();
        return false;
    } else if (tempatlahir.value==''){
        alert('tempat lahir tidak boleh kosong');
        tempatlahir.focus();
        return false;
    } else if (tanggallahir.value==''){
        alert('tanggal lahir tidak boleh kosong');
        tanggallahir.focus();
        return false;
    } else if (usia.value==''){
        alert('usia tidak boleh kosong');
        usia.focus();
        return false;
    } else if (jeskal.value==''){
        alert('jenis kelamin tidak boleh kosong');
        jeskal.focus();
        return false;
    } else if (kotatinggal.value==''){
        alert('kota tinggal tidak boleh kosong');
        kotatinggal.focus();
        return false;
    } else if (email.value==''){
        alert('email tidak boleh kosong');
        email.focus();
        return false;
    }  else if (nohp.value.length <= 3) {
        alert('nomor hp minimal 4 karakter');
        nohp.focus();
        return false;
    } else if (nohp.value==''){
        alert('no hp tidak boleh kosong');
        nohp.focus();
        return false;
    }
     else {
        alert ('terima kasih telah mengisi form')
        return true;
    }
}