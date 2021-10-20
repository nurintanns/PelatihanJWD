function cekform(){
    namalengkap = document.getElementById('nama_lengkap');
    if(namalengkap.value==''){
        alert('nama tidak boleh kosong');
        namalengkap.focus();
        return false;
    } else if (namalengkap.value.length <= 3) {
        alert('nama minimal 3 karakter');
        namalengkap.focus();
        return false;
    } else {
        alert ('terima kasih telah mengisi form')
        return true;
    }
}