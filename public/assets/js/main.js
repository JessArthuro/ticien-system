function verifyInput(archivo) {
    if (archivo.files.length > 0) {
        document.getElementById("btn-upload").disabled = this.value;
    }
}
