var x = 1;

function cek(){
    $.ajax({
        url: base_url + "admin/ajax/cek_stok",
        cache: false,
        success: function(msg){
            if(msg>0){
                $("#count-notifikasi-stok").html(msg);
            }else{
                $("#count-notifikasi-stok").css('display', 'none');
            }
        }
    });

    $.ajax({
        url: base_url + "admin/ajax/cek_penjualan",
        cache: false,
        success: function(msg){
            if(msg>0){
                $("#count-notifikasi-penjualan").html(msg);
            }else{
                $("#count-notifikasi-penjualan").css('display', 'none');
            }
        }
    });	
    var waktu = setTimeout("cek()",3000);
}

$(document).ready(function(){
    cek();
    $("#stok").click(function(){
        $("#loading").show();
        // if(x==1){
        //     $("#pesan").css("background-color","#efefef");
        //     x = 0;
        // }else{
        //     $("#pesan").css("background-color","#4B59a9");
        //     x = 1;
        // }
        // $("#info").toggle();
        //ajax untuk menampilkan pesan yang belum terbaca
        $.ajax({
            url: base_url + "admin/ajax/view_stok",
            cache: false,
            success: function(msg){
                $("#loading").hide();
                $("#stok-notif").html(msg);
            }
        });

    });

    // $("#content").click(function(){
    //     $("#info").hide();
    //     $("#pesan").css("background-color","#4B59a9");
    //     x = 1;
    // });

    $("#penjualan").click(function(){
        $("#loading").show();
        // if(x==1){
        //     $("#pesan").css("background-color","#efefef");
        //     x = 0;
        // }else{
        //     $("#pesan").css("background-color","#4B59a9");
        //     x = 1;
        // }
        // $("#info").toggle();
        //ajax untuk menampilkan pesan yang belum terbaca
        $.ajax({
            url: base_url + "admin/ajax/view_penjualan",
            cache: false,
            success: function(msg){
                $("#loading").hide();
                $("#penjualan-notif").html(msg);
            }
        });

    });	

});


