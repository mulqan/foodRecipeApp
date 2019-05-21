$("document").ready(function () {
    $(".button").click(
        function (e) {
            const nama = $("#nama").val();
            const email = $("#email").val();
            const password = $("#password").val();
            const konfirmasi = $("#konfirmasi").val();
            const emaillog = $("#emaillog").val();
            const passwordlog = $("#passwordlog").val();


            if(nama == "" && email == "" && password == ""){
                alert("Harap Diisi Dahulu");
                e.preventDefault();
            } else if (nama == ""){
                alert("Nama Tidak Boleh Kosong");
                e.preventDefault();
            } else if (email == ""){
                alert("Email tidak boleh kosong");
                e.preventDefault();
            } else if (password == ""){
                alert("Masukkan Password");
                e.preventDefault();
            } else if (konfirmasi != password){
                alert("Password tidak sama");
                e.preventDefault();
            } else if(emaillog == "" && passwordlog == ""){
                alert("Harap Diisi Dahulu");
                e.preventDefault();
            } else if(emaillog == ""){
                alert("Masukkan Email");
                e.preventDefault();
            } else if(passwordlog == ""){
                alert("Masukkan Password");
                e.preventDefault();
            } else{
                alert("Terimakasih");
            }
        }   
    )
})